
@extends('admin.pages.main')
@section('content')
<form role="form" method="POST" action="{{ route('category.update',$item->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-md-12">  
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $item->name }}">
          @error('name')
             <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label for="image">Body Image</label>
            <input id="image" class="form-control-file" type="file" name="image">
            @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <img src="{{ asset('storage/dentalcategory/'.$item->image) }}" alt="" class="img-fluid">
      </div> 
    </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-outline-light">Submit</button>
  </div>
</form>
@endsection