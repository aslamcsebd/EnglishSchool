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
      <div class="col-6 mt-4">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">Add Student's Birthday</h3>
            </div>

            @if (session('addBirthday'))
               <div class="alert alert-success text-center">
                  <strong>Success!</strong> {{ session('addBirthday') }}
               </div>
            @endif  

            @error('cat_name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <form method="POST" action="{{ url('addBirthday') }}" enctype="multipart/form-data">
               @csrf
               <div class="card-body">

                  <div class="row">
                     <div class="col-4">
                        <label for="my-input" for="photo2">Student's Birthday</label>
                     </div>                     
                     <div class="col">
                        <div class="form-group" id="exampleFormControlSelect">    
                           <input id="photo2" class="form-control-file" type="date" name="dob" value="{{ old('dob') }}" required>   
                        </div>
                     </div>                     
                  </div>

                  <div class="row">
                     <div class="col-4">
                        <label for="exampleFormControlSelect">Student's Name</label>
                     </div>

                     <div class="col">
                        <div class="form-group" id="exampleFormControlSelect">               
                           <input type="text" name='name' class="form-control" placeholder="Student's Name" required>
                        </div>                         
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-4">
                        <label for="exampleFormControlSelect2">Student's Class</label>
                     </div>

                     <div class="col">
                        <div class="form-group" id="exampleFormControlSelect2">               
                           <input type="text" name='class' class="form-control" placeholder="Class IV or IX etc" required>
                        </div>                         
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-4">
                        <label for="exampleFormControlSelect2">Student's Class Id/Roll</label>
                     </div>

                     <div class="col">
                        <div class="form-group" id="exampleFormControlSelect2">               
                           <input type="text" name='classId' class="form-control" placeholder="Roll No or Id No" required>
                        </div>                         
                     </div>
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
      <div class="col-8 mt-4">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">All Student</h3>
            </div>
            <div class="card-body">
               <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center" role="grid" aria-describedby="example1_info">
                  <thead>
                     <tr role="row">
                        <th>Birthday</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Class Id/Roll</th>
                        {{-- <th>Action</th> --}}
                     </tr>
                  </thead>
                  <tbody>
                     @php 
                        $teachers = App\birthday::all();
                     @endphp        
                     @foreach($teachers as $teacher)
                        <tr role="row" class="odd">                                    
                           {{-- <td rowspan="{{$rowSpan}}">{{ $key+1 }}</td> --}}
                           <td>{{ $teacher->dob }}</td>
                           <td>{{ $teacher->name }}</td>
                           <td>{{ $teacher->class }}</td>
                           <td>{{ $teacher->classId }}</td>
                           {{-- <td>
                              <button class="btn btn-danger" onclick="return confirm('are you sure ?')">Delete</button>
                           </td> --}}
                        </tr>
                     @endforeach
                  </tbody>
               </table>
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