@extends('admin.pages.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('content')
   <div class="row">
    <div class="col-12 col-md-12 mt-4">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Student</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" > Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Contact</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($applications as $key => $item)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{ $key+1 }}</td>
                                        <td>{{ $item->name_eng }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->father_contact }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}
                                         @if ($item->created_at > \Carbon\Carbon::parse('-24 hours'))
                                             <div class="badge badge-success ml-2">NEW</div>
                                         @endif
                                        </td>
                                        
                                        <td>
                                          {{-- <a href="{{ route('teacher.edit',$item->id) }}" class="btn btn-primary">View</a> --}}
                                            <button class="btn btn-primary" data-target="#modal-secondary-{{ $item->id }}" data-toggle="modal">View</button>
                                            <a href="{{ route('admisson.pdf',$item->id) }}" class="btn btn-default" target="__blank">PDF</a>
                                            <form action="{{route('admisson.destroy',$item->id)}}" method="GET" class="d-inline">
                                                @csrf
                                                {{-- @method("DELETE") --}}
                                                <button class="btn btn-danger" onclick="return confirm('are you sure ?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-secondary-{{ $item->id }}">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content bg-secondary">
                                            <div class="modal-header">
                                              <h4 class="modal-title">View Application</h4>
                                            </div>
                                            <div class="modal-body">
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Name</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->name }}</h3>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Email</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->email }}</h3>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Contact</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->contact }}</h3>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Message</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->message }}</h3>
                                                 </div>
                                             </div>
                                            </div>
                                            
                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                      </div>
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
    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
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
     $('.disble').click(function(){
        //  alert('df');
         $('.modal-body input').attr("disabled", true);
         $('.modal-body textarea').attr("disabled", true);
         $('.modal-body select').attr("disabled", true);
         $('.modal-body button').attr("disabled", true);
       })
     $('.enble').click(function(){
        //  alert('df');
         $('.modal-body input').attr("disabled",false);
         $('.modal-body textarea').attr("disabled",false);
         $('.modal-body select').attr("disabled",false);
         $('.modal-body button').attr("disabled",false);
       })
  });
    </script>
@endpush