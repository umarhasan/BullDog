@extends('admin.layouts.app')

@section('content')

<div class="card">
    <h5 class="card-header">Edit Partner</h5>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action="{{route('partner.update',$partner->id)}}">
        {{csrf_field()}}
        @method('put')        

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo</label>
          <div class="input-group">
              <input class="form-control" type="file" name="image" value="{{old('image')}}">
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;">
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush
