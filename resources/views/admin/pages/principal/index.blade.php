@extends('admin.pages.main')
@push('css')
   <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
   {{-- <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">     --}}
@endpush
@section('content')

   @php
      $PrincipalSMSs = App\PrincipalSMS::all();
   @endphp

   @foreach($PrincipalSMSs as $PrincipalSMS)

      <div class="row justify-content-center">
         <div class="col-10 mt-4">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">{{ $PrincipalSMS->title }}</h3>
               </div>
               @error('cat_name')
                  <div class="alert alert-danger">{{ $message }}</div>
               @enderror
               <form role="form" method="POST" action="{{ url('UpdatePrincipalSMS') }}">
                  @csrf
                  <div class="card-body">
                     <input type="hidden" name="id" value="{{ $PrincipalSMS->id }}">
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $PrincipalSMS->title }}" placeholder="Title" name="title">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Left Side</label>
                        <textarea type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Left Side Message" name="leftSide" rows="4">{{ $PrincipalSMS->leftSide }}</textarea>
                     </div>

                     @if($PrincipalSMS->rightSide!=null)
                        <div class="form-group">
                           <label for="exampleInputEmail1">Right Side</label>
                           <textarea type="text" class="form-control" id="exampleInputEmail1" value="" placeholder="Right Side Message" name="rightSide" rows="4">{{ $PrincipalSMS->rightSide }}</textarea>
                        </div>
                     @endif

                     <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $PrincipalSMS->name }}" placeholder="Name" name="name">
                     </div>
                     <div class="form-group">
                        <div>
                           <img src="{{ asset('image/'.$PrincipalSMS->image) }}" width="120"> <br>
                           <span >Present Image</span>
                        </div>

                        <label for="my-input">Upload New Image</label>
                        <input id="my-input" class="form-control-file" type="file" name="image" value="{{ $PrincipalSMS->image }}">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                     </div>
                  </div>
                  
                  <div class="card-footer float-right" role="group" aria-label="Basic example">
                     <a href="{{route("category.home")}}" class="btn btn-danger tn-outline-light">Cancel</a>
                     <button type="submit" class="btn btn-success tn-outline-light">Update</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   @endforeach

@endsection


@push('js')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
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


    <script type="text/javascript">
   $('.collapse').collapse()

   $('#myCollapsible').collapse({
  toggle: false
})

   $('#myCollapsible').on('hidden.bs.collapse', function () {
  // do something...
})


</script>






@endpush