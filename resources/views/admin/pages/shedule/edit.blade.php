@extends('admin.pages.main')
@section('content')
<form role="form" method="POST" action="{{ route('shedule.update',$item->id)}}">
    @csrf
    @method('PUT')
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Day</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="day" value="{{ $item->day }}">
    </div>
    <div class="form-group">
      <label for="my-textarea">Time</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="time" value="{{ $item->time }}">
    
   </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-outline-light">Update</button>
  </div>
</form>
@endsection