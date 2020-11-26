@extends('admin.pages.main')

@section('content')
<h1 class="text-center">
    Edit Notice
</h1>
<form role="form" method="POST" action="{{ route('notice.update',$notice->id) }}">
    @csrf
    @method('PUT')
  <div class="card-body">
      <div class="row mb-3">
          <div class="col-12">
             <div class="form-group">
                 <label for="my-input">Title</label>
                 <input id="my-input" class="form-control" type="text" name="title" value="{{ $notice->title }}">
                 @error('title')
                        <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
                 @enderror
             </div>
          </div>
          <div class="col-12">
             <div class="form-group">
                 <label for="my-textarea">Description</label>
                 <textarea id="my-textarea" class="form-control" name="description" rows="3">{{ $notice->description }}</textarea>
                 @error('description')
                        <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
                 @enderror
             </div>
          </div>
          <div class="col-12">
             <div class="form-group">
                 <label for="my-input">Date</label>
                 <input id="my-input" class="form-control" type="date" name="date" value="{{ $notice->date }}">
                 @error('date')
                        <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
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