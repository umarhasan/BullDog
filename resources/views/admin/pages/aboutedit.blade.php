@extends('admin.layouts.app')
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f5f5f5;
    }

    .content-wrapper {
        padding: 30px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        max-width: 600px;
        margin-top: 100px;
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


    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .preview-image {
        width: 100px;
        height: auto;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>

@section('content')
    <div class="content-wrapper">
        <form action="{{ route('about.update', $metaData->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="meta_key">Meta Key:</label>
                <input type="text" name="meta_key" class="form-control" value="{{ $metaData->meta_key }}" required>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select name="type" id="type" class="form-control">
                    <option value="text" {{ $metaValue['type'] == 'text' ? 'selected' : '' }}>Text</option>
                    <option value="number" {{ $metaValue['type'] == 'number' ? 'selected' : '' }}>Number</option>
                    <option value="file" {{ $metaValue['type'] == 'file' ? 'selected' : '' }}>File</option>
                    <!-- Add other types as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="value">Value:</label>
                @if ($metaValue['type'] == 'text')
                    <input type="text" name="value" class="form-control" value="{{ $metaValue['value'] }}" required>
                @elseif ($metaValue['type'] == 'number')
                    <input type="number" name="value" class="form-control" value="{{ $metaValue['value'] }}" required>
                @elseif ($metaValue['type'] == 'file')
                    <input type="file" name="value" accept=".jpg,.jpeg,.png,.webp" class="form-control-file" required>
                    @if ($metaValue['value'] != null)
                        <br><img src="{{ asset('storage/files/' . $metaValue['value']) }}" class="preview-image"
                            alt="File">
                    @endif
                @endif
                <!-- Add other input types as needed -->
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

@endsection
