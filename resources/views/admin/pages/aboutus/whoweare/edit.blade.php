@extends('admin.pages.main')
@section('content')
<form method="POST" action="{{ route('about.update',$item->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $item->title }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>

        </div>
        <div class="col-12 col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea id="" class="form-control" name="description" rows="3">
                {!! $item->description !!}
              </textarea>
                  @error('details')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
            </div>
         </div>
        <div class="col-12 col-md-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input id="my-input" class="form-control-file" type="file" name="image">
                @error('image')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-outline-light">Update</button>
    </div>
  </form>
@endsection
@push('js')
    <script>
      tinymce.init({
                  selector: '#mytextarea'
                  });
    </script>
@endpush