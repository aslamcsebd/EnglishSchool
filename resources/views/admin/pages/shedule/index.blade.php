@extends('admin.pages.main')
@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('content')
{{-- <cat></cat> --}}
<div class="row">
   <div class="col-12 offset-md-2 col-md-8 mt-4">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Add Doctors Shedule</h3>
         </div>
         <!-- form start -->
         <form role="form" method="POST" action="{{ route('shedule.store') }}">
            @csrf
            <div class="card-body">
               <h4>Day</h4>
               <div class="row">
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">To</label>
                        
                        <select class="form-control" name="day_to" style="width: 100%;">
                           <option selected="selected" value="">Select Day</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Sunday">Sunday</option>
                           <option value="Monday">Monday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                        </select>
                        
                        @error('day_to')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        <select class=" form-control" name="day_from" style="width: 100%;">
                           <option selected="selected" value="">Select Day</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Sunday">Sunday</option>
                           <option value="Monday">Monday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                        </select>
                        @error('day_from')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                     </div>
                  </div>
               </div>
               <h4>Time</h4>
               <div class="row">
                  <div class="col-12 col-md-3">
                     <div class="form-group">
                        <label for="exampleInputEmail1">To</label>
                        
                        <select class="form-control" name="time_to" style="width: 100%;">
                           <option selected="selected" value="">Select Time</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                        </select>
                        
                        @error('time_to')
                        <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-12 col-md-3">
                     <div class="form-group">
                        <label for="exampleInputEmail1">To</label>
                        
                        <select class="form-control" name="period_to" style="width: 100%;">
                           <option selected="selected" value="">Select Period</option>
                           <option value="am">am</option>
                           <option value="pm">pm</option>
                        </select>
                        
                        @error('period_to')
                        <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <div class="col-12 col-md-3">
                     <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        <select class="form-control" name="time_from" style="width: 100%;">
                           <option selected="selected" value="">Select Time</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                        </select>
                        @error('time_from')
                        <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
                        @enderror
                        
                     </div>
                  </div>
                  <div class="col-12 col-md-3">
                     <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        
                        <select class="form-control" name="period_from" style="width: 100%;">
                           <option selected="selected" value="">Select Period</option>
                           <option value="am">am</option>
                           <option value="pm">pm</option>
                        </select>
                        
                        @error('period_from')
                        <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
               </div>
               <!-- /.card-body -->
               <div class="card-footer">
                  <button type="submit" class="btn btn-outline-light">Submit</button>
               </div>
            </form>
         </div>
      </div>
      <div class="col-12 col-md-12 mt-4">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">All Doctor Categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                     <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                           <thead>
                              <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Day</th>
                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Time</th>
                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($shedules as $key => $item)
                              <tr role="row" class="odd">
                                 <td tabindex="0" class="sorting_1">{{ $key+1 }}</td>
                                 <td>{{ $item->day }}</td>
                                 <td>{{ $item->time }}</td>
                                 <td>
                                    <a href="{{ route('shedule.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                                    {{-- <button class="btn btn-primary" data-target="#modal-secondary-{{ $item->id }}" data-toggle="modal">Edit</button> --}}
                                    <form action="{{route('shedule.destroy',$item->id)}}" method="POST" class="d-inline">
                                       @csrf
                                       @method("DELETE")
                                       <button class="btn btn-danger" onclick="return confirm('are you sure ?')">Delete</button>
                                    </form>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table></div></div>
                     </div>
                  </div>
                  <!-- /.card-body -->
               </div>
            </div>
         </div>
         @endsection
         @push('js')
         <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
         <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
         <script>
         $(function () {
         $("#example1").DataTable({
         "responsive": true,
         "autoWidth": false,
         });
         $('#example2').DataTable({
         "paging": true,
         "lengthChange": false,
         "searching": false,
         "ordering": true,
         "info": true,
         "autoWidth": false,
         "responsive": true,
         });
         const Toast = Swal.mixin({
         toast: true,
         position: 'top-end',
         showConfirmButton: false,
         timer: 3000
         });
         $('.swalDefaultSuccess').click(function() {
         Toast.fire({
         icon: 'success',
         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.swalDefaultInfo').click(function() {
         Toast.fire({
         icon: 'info',
         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.swalDefaultError').click(function() {
         Toast.fire({
         icon: 'error',
         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.swalDefaultWarning').click(function() {
         Toast.fire({
         icon: 'warning',
         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.swalDefaultQuestion').click(function() {
         Toast.fire({
         icon: 'question',
         title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastrDefaultSuccess').click(function() {
         toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
         });
         $('.toastrDefaultInfo').click(function() {
         toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
         });
         $('.toastrDefaultError').click(function() {
         toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
         });
         $('.toastrDefaultWarning').click(function() {
         toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
         });
         $('.toastsDefaultDefault').click(function() {
         $(document).Toasts('create', {
         title: 'Toast Title',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultTopLeft').click(function() {
         $(document).Toasts('create', {
         title: 'Toast Title',
         position: 'topLeft',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultBottomRight').click(function() {
         $(document).Toasts('create', {
         title: 'Toast Title',
         position: 'bottomRight',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultBottomLeft').click(function() {
         $(document).Toasts('create', {
         title: 'Toast Title',
         position: 'bottomLeft',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultAutohide').click(function() {
         $(document).Toasts('create', {
         title: 'Toast Title',
         autohide: true,
         delay: 750,
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultNotFixed').click(function() {
         $(document).Toasts('create', {
         title: 'Toast Title',
         fixed: false,
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultFull').click(function() {
         $(document).Toasts('create', {
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
         title: 'Toast Title',
         subtitle: 'Subtitle',
         icon: 'fas fa-envelope fa-lg',
         })
         });
         $('.toastsDefaultFullImage').click(function() {
         $(document).Toasts('create', {
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
         title: 'Toast Title',
         subtitle: 'Subtitle',
         image: '../../dist/img/user3-128x128.jpg',
         imageAlt: 'User Picture',
         })
         });
         $('.toastsDefaultSuccess').click(function() {
         $(document).Toasts('create', {
         class: 'bg-success',
         title: 'Toast Title',
         subtitle: 'Subtitle',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultInfo').click(function() {
         $(document).Toasts('create', {
         class: 'bg-info',
         title: 'Toast Title',
         subtitle: 'Subtitle',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultWarning').click(function() {
         $(document).Toasts('create', {
         class: 'bg-warning',
         title: 'Toast Title',
         subtitle: 'Subtitle',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultDanger').click(function() {
         $(document).Toasts('create', {
         class: 'bg-danger',
         title: 'Toast Title',
         subtitle: 'Subtitle',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         $('.toastsDefaultMaroon').click(function() {
         $(document).Toasts('create', {
         class: 'bg-maroon',
         title: 'Toast Title',
         subtitle: 'Subtitle',
         body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
         })
         });
         //Initialize Select2 Elements
         $('.select2').select2()
         //Initialize Select2 Elements
         $('.select2bs4').select2({
         theme: 'bootstrap4'
         })
         });
         </script>
         @endpush