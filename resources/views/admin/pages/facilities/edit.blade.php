

@extends('admin.pages.main')
@section('content')
<form role="form" method="POST" action="{{ route('facilities.update',$item->id) }}">
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
            <label for="my-textarea">Description</label>
            <textarea id="my-textarea" class="form-control" name="description" rows="3">
                {{ $item->description }}
            </textarea>
        </div>
       </div>

       <div class="col-12 col-md-12">
        <div class="form-group">
          <label for="exampleInputEmail1">Icon</label>
          <input type="text" name="icon" class="form-control" value="{{ $item->icon }}" placeholder="write an icon name class from font awesome">
           
          </textarea>
              @error('icon')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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
                        selector: '#mytextarea',
                     });
    </script>
@endpush