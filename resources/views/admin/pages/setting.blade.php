@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Setting-Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Setting-Page</li>
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
                            <form method="post" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label for="logo_1">Logo 1</label>
                                        <input type="file" name='logo_1' class='form-control' placeholder='please input field'>
                                        
                                        @if ($setting != null)
                                            <img src="/uploads/{{$setting->logo_1}}" alt="" width='100'>
                                        @endif
                                        <br>
                                        <label for="logo_2">Logo 2</label>
                                        <input type="file" name='logo_2' class='form-control' placeholder='please input field'>
                                     
                                        
                                        @if ($setting != null)
                                            <img src="/uploads/{{$setting->logo_2}}" alt="" width='100'>
                                        @endif
                                        <br>
                                        <label for="phone">Phone</label>
                                        <input type="text" value="{{($setting) ? $setting->phone: null}}" name='phone' class='form-control' required placeholder='please input field'>
                                        <br>
                                        <label for="email">Email</label>
                                        <input type="text" value="{{($setting) ? $setting->email: null}}" name='email' class='form-control' required placeholder='please input field'>
                                        <br>
                                        <label for="copyright">Copyright</label>
                                        <input type="text" value="{{($setting) ? $setting->copyright: null}}" name='copyright' class='form-control' required placeholder='please input field'>
                                        <br>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                             </div>
                        </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <script>
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": []
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    <style>
        .form-check-input {
            border-radius: 0 !important;
            height: 20px;
            width: 20px;
            margin: 0;
        }

        .form-group strong {
            margin: 0 0 10px;
            width: fit-content;
            display: block;
        }

        .my-txt-box {
            padding: 0 0 10px;
        }

        .my-label {
            padding-left: 30px;
            text-transform: capitalize;
        }
    </style>
@endsection
