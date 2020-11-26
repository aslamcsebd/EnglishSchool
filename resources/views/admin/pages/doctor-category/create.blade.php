@extends('admin.pages.main')
@section('content')
<form role="form" method="POST" action="{{ route('teacher-category.store',$item->id)}}" id="form{{ $item->id }}">
    @csrf
    @method('PUT')
    
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="cat_name" value="{{ $item->name }}">
    </div>
  <div class="form-group">
      <label for="my-textarea">About Category</label>
      <textarea id="my-textarea" class="form-control" name="cat_desc" rows="3">
          {{ $item->description }}
      </textarea>
  </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-outline-light">Update</button>
  </div>
</form>
    
@endsection