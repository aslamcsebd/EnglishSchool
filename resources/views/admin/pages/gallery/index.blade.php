@extends('admin.pages.main')
@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
@endpush
@section('content')
{{-- <cat></cat> --}}
<div class="row justify-content-center">

   <div class="col-8 mt-4">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Add Gallery Title</h3>
         </div>
         @error('cat_name')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror

          @if (session('gallery_title'))
            <div class="alert alert-success text-center">
               <strong>Success!</strong> {{ session('gallery_title') }}
            </div>
         @endif  

         <form method="POST" action="{{ url('gallery_title') }}">
            @csrf
            <div class="card-body">
               <div class="row">
                  <div class="col-2">
                     <div class="form-group">
                        <label for="exampleInputEmail1" >Gallery Title</label>
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Gallery Title" name="gallery_title">
                     </div>
                  </div>
                  <div class="col-3 btn-group form-group">
                     <button type="submit" class="btn btn-success tn-outline-light">Add</button>
                     <a href="{{route("category.home")}}" class="btn btn-danger tn-outline-light">Cancel</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
   
   <div class="col-8 mt-4">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Add Iamge</h3>
         </div>

         @if (session('addGalleryImage'))
            <div class="alert alert-success text-center">
               <strong>Success!</strong> {{ session('addGalleryImage') }}
            </div>
         @endif  

         @error('cat_name')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <form method="POST" action="{{ url('addGalleryImage') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                  <div class="col-4">
                     <label for="exampleFormControlSelect2">Gallery</label>
                  </div>
                  
                  @php
                     $galleries = App\Admin\Gallery::all();
                  @endphp        

                  <div class="col-4">
                     <div class="form-group">
                        <select name="gallery_title_id" class="form-control" id="exampleFormControlSelect2" required>
                           <option value="">Select Gallery Name</option>
                              @php $i=1; @endphp
                              @foreach($galleries as $gallerie)
                                 <option value="{{$gallerie->id}}">{{$i}}) {{$gallerie->gallery_title}}</option>
                                 @php $i = $i+1; @endphp                                 
                              @endforeach
                        </select>
                     </div>
                  </div>
               </div>

               <div class="form-group">
                  <label for="my-textarea">Add Image Below</label>
                     <button type="button" id="addExtraField" class="btn btn-primary float-right">
                        <i class="fa fa-plus"> &nbsp; Add More Field</i>
                     </button>
               </div>
               <div class="form-group" id="productExtraBody">           
                  <input type='file' name='imageFile[]' class='form-control mt-2' placeholder='Add Image'>
               </div>

            </div>
            <div class="card-footer float-right" role="group" aria-label="Basic example">
               <button type="submit" class="btn btn-success tn-outline-light">Add Now</button>
               <a href="{{route("category.home")}}" class="btn btn-danger tn-outline-light">Cancel</a>
            </div>
         </form>
      </div>
   </div>   

   <div class="col-10 mt-4">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">All Image Payment</h3>
         </div>
         <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
               <div class="row">
                  <div class="col-sm-12 col-md-12-">
                     <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center" role="grid" aria-describedby="example1_info">
                        <thead>
                           <tr role="row">
                              <th>No</th>
                              <th>Gallery Name</th>
                              <th>Photo</th>
                           </tr>
                        </thead>
                        <tbody>

                           @php
                              $photos = App\Admin\GalleryImageList::all()
                           @endphp                                          

                           @foreach ($photos as $photo)
                              <tr role="row" class="odd">
                                 <td>{{ $loop->index + 1 }}</td>
                                 <td>{{ $photo->galleryName->gallery_title}}</td>
                                 <td><img src="{{ asset('galleryImage/'.$photo->photo) }}" width="100" height="80"></td>     
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
   
   @push('js')
      <script type="text/javascript">
         $(document).on('click','#addExtraField',function (e) {
         e.preventDefault()
         console.log('here')
         var html = "<input type='file' name='imageFile[]' class='form-control mt-2' placeholder='Add Image'>"
         $('#productExtraBody').append(html)
         });
      </script>
   @endpush


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
      subtitle: 'um dolor sit amet, consetetur sadipscing elitr.'
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
      });
   </script>

   
@endpush

