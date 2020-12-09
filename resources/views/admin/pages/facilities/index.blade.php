@extends('admin.pages.main')
@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('content')

   <div class="row justify-content-center">
      <div class="col-8 mt-4">
         <div class="card">
            <div class="card-header">
               <h2 class="card-title">Our Facilities </h2>
            </div>
            <form role="form" method="POST" action="{{ route('facilities.store') }}">
               @csrf
               <div class="card-body">
                  <div class="row justify-content-center">
                     <div class="col-10 col-md-12">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Title</label>
                           <input type="text" class="form-control" name="title">
                           @error('title')
                           <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-12 col-md-12">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Icon</label>
                           <input type="text" name="icon" class="form-control" placeholder="write an icon name class from font awesome">
                           <a href="https://fontawesome.com/icons?d=gallery" class="btn btn-info mt-2" target="_blank">Font Awesome link</a>
                           
                           @error('icon')
                           <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     <button type="submit" class="btn btn-outline-light float-right">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

   <div class="row justify-content-center">
      <div class="col-8 mt-4">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">Our Facilities's Description</h3>
            </div>

            @if (session('description'))
               <div class="alert alert-success text-center">
                  <strong>Success!</strong> {{ session('description') }}
               </div>
            @endif  

            @error('cat_name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <form method="POST" action="{{ url('add_facilities_description') }}">
               @csrf
               <div class="card-body">
                  <div class="row">
                     <div class="col-4">
                        <label for="exampleFormControlSelect2">Select Facilities</label>
                     </div>
                     
                     @php
                        $FacilitiesTitles = App\Admin\facility::all();
                     @endphp        

                     <div class="col">
                        <div class="form-group">
                           <select name="facilities_ID" class="form-control" id="exampleFormControlSelect2" required="">
                              <option value="">Select Facilities Below</option>
                                 @php $i=1; @endphp
                                 @foreach($FacilitiesTitles as $FacilitiesTitle)
                                    <option value="{{$FacilitiesTitle->id}}">{{$i}}) {{$FacilitiesTitle->title}}</option>
                                    @php $i = $i+1; @endphp                                       
                                 @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="my-textarea">Add Description</label>
                        <button type="button" id="addExtraField" class="btn btn-primary float-right">
                           <i class="fa fa-plus"> &nbsp; Add More Field</i>
                        </button>
                  </div>
                  <div class="form-group" id="productExtraBody">               
                     <input type="text" name='descriptions[]' class="form-control" placeholder="Insert More Description">
                  </div>        
                  <div class="float-right btn-group form-group" role="group" aria-label="Basic example">
                     <a href="{{route("category.home")}}" class="btn btn-danger tn-outline-light">Cancel</a>
                     <button type="submit" class="btn btn-success tn-outline-light">Add Now</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="row justify-content-center">
      <div class="col-10  mt-4">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">All Administrator</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                     <div class="col-sm-12 col-md-12-">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center" role="grid" aria-describedby="example1_info">
                           <thead>
                              <tr role="row">
                                 {{-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th> --}}
                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Icon</th>
                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Description</th>
                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                                 @php 
                                    $all = App\facilities_description::all();
                                 @endphp        
                                 @foreach($all as $seen)

                                    <tr role="row" class="odd">                                    
                                       {{-- <td rowspan="{{$rowSpan}}">{{ $key+1 }}</td> --}}
                                       <td>{{ $seen->facilityDescription->title }}</td>
                                       <td><i class="{{ $seen->facilityDescription->icon }} fa-2x"></i></td>
                                       <td>{{ $seen->descriptions }}</td>
                                       <td>
                                          <button class="btn btn-danger" onclick="return confirm('are you sure ?')">Delete</button>
                                       </td>
                                    </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>                     
               </div>
            </div>
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
   tinymce.init({
   selector: '#mytextarea'
   });
   tinymce.init({
   selector: '#mytextarea2',
   readonly : 1
   });
   });
</script>

@push('js')
      <script type="text/javascript">
         $(document).on('click','#addExtraField',function (e) {
         e.preventDefault()
         console.log('here')
         var html = "<input type='text' name='payment_rules[]' class='form-control mt-2' placeholder='Insert More Rules'>"
         $('#productExtraBody').append(html)
         });
      </script>
   @endpush
@endpush