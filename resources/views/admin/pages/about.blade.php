@extends('admin.layouts.app')


@section('content')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }



        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="file"] {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }


        .preview-image {
            width: 100px;
            height: auto;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $name }} Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{ $name }} Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Components List</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-success btn-sm mb-3" data-toggle="modal"
                                        data-target="#mediumModal">
                                        Create New Component
                                    </button>
                                    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog"
                                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="mediumModalLabel">Create New Component</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('about.store') }}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="meta_key">Meta Key:</label>
                                                            <input type="text" name="meta_key" class="form-control"
                                                                required>
                                                        </div>
                                                        <input type="hidden" name="page" value="{{ $name }}">
                                                        <div class="form-group">
                                                            <label for="type">Type:</label>
                                                            <select onchange="changeInput()" name="type" id="type"
                                                                class="form-control">
                                                                <option value="text">Text</option>
                                                                <option value="number">Number</option>
                                                                <option value="file">file</option>
                                                            </select>
                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Meta Key</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($pages)
                                            @foreach ($pages as $key => $page)
                                                <tr>
                                                    <td>{{ $key }}</td>
                                                    <td>{{ $page->meta_key }}</td>

                                                    <td>
                                                        @php
                                                            $a = json_decode($page->meta_value);
                                                            // print_r($a->type);die;
                                                        @endphp
                                                        {{ $a->type }}</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            {{-- <a class="btn btn-primary"
                                                                href="{{ route('about.edit', $page->id) }}">Edit</a> --}}

                                                            <button type="button" class="btn btn-primary  mb-3"
                                                                data-toggle="modal"
                                                                data-target="#updateModal{{ $page->id }}">
                                                                <i class="fa fa-edit "></i>
                                                            </button>
                                                            {{-- // Modal --}}
                                                            <div class="modal fade" id="updateModal{{ $page->id }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="mediumModalLabel">
                                                                                Update Component</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="{{ route('about.update', $page->id) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="form-group">
                                                                                    <label for="meta_key">Meta Key:</label>
                                                                                    <input type="text" name="meta_key"
                                                                                        class="form-control"
                                                                                        value="{{ $page->meta_key }}"
                                                                                        required>
                                                                                </div>
                                                                                @php
                                                                                    $metaValue = json_decode($page->meta_value, true);
                                                                                @endphp
                                                                                <div class="form-group">
                                                                                    <label for="type">Type:</label>
                                                                                    <select name="type" id="type"
                                                                                        class="form-control">
                                                                                        <option value="text"
                                                                                            {{ $metaValue['type'] == 'text' ? 'selected' : '' }}>
                                                                                            Text</option>
                                                                                        <option value="number"
                                                                                            {{ $metaValue['type'] == 'number' ? 'selected' : '' }}>
                                                                                            Number</option>
                                                                                        <option value="file"
                                                                                            {{ $metaValue['type'] == 'file' ? 'selected' : '' }}>
                                                                                            File</option>
                                                                                        <!-- Add other types as needed -->
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="value">Value:</label>
                                                                                    @if ($metaValue['type'] == 'text')
                                                                                        <input type="text"
                                                                                            name="value"
                                                                                            class="form-control"
                                                                                            value="{{ $metaValue['value'] }}"
                                                                                            required>
                                                                                    @elseif($metaValue['type'] == 'number')
                                                                                        <input type="number"
                                                                                            name="value"
                                                                                            class="form-control"
                                                                                            value="{{ $metaValue['value'] }}"
                                                                                            required>
                                                                                    @elseif($metaValue['type'] == 'file')
                                                                                        <input type="file"
                                                                                            name="value"
                                                                                            accept=".jpg,.jpeg,.png,.webp"
                                                                                            class="form-control-file"
                                                                                            required>
                                                                                        @if ($metaValue['value'] != null)
                                                                                            <br><img
                                                                                                src="{{ asset('storage/files/' . $metaValue['value']) }}"
                                                                                                class="preview-image"
                                                                                                alt="File">
                                                                                        @endif
                                                                                    @endif
                                                                                    <!-- Add other input types as needed -->
                                                                                </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Cancel</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Update</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- End Modal --}}
                                                            <form method="post"
                                                                action="{{ route('about.destroy', $page->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    onclick="return confirm('Are You Sure Want To Delete This.??')"
                                                                    type="button" class="btn mx-2 btn-danger"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    {{-- <script>
        function changeInput() {
            var type = document.getElementById('type').value;
            if (type == 'text') {
                document.getElementById('value-input').type = 'text';
            } else if (type == 'number') {
                document.getElementById('value-input').type = 'number';
            } else if (type == 'file') {
                document.getElementById('value-input').type = 'file';
            }
        }
    </script> --}}
@endsection
