@extends('admin.pages.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('content')
<form role="form" method="POST" action="{{ route('teacher.store') }}" enctype="multipart/form-data">
    @csrf
= <div class="row">
    <div class="col-12 col-md-6 mt-4">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add Teacher</h3>
            </div>
                
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ old('name') }}">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <hr class="bg-white">
                <div class="form-group">
                    <label for="my-input">Photo</label>
                    <input id="my-input" class="form-control-file" type="file" name="image" value="{{ old('image') }}">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr class="bg-white">

                <div class="form-group" data-select2-id="63">
                    <label>Speciality</label>
                    <div class="select2-purple" data-select2-id="38">
                      <select class="select2 select2-hidden-accessible cats" name="categories[]" multiple="" data-placeholder="Select a State"  style="width: 100%;"  tabindex="-1" aria-hidden="true">
                        @foreach ($categories as $item)
                            <option class="options" data-value="{{ $item->name }}" value="{{ $item->id }}" {{ (collect(old('categories'))->contains($item->id)) ? 'selected':'' }}>{{ $item->name }}</option>
                        @endforeach  
                      </select>
                    </div>
                    @error('categories')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <hr class="bg-white">

                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="desc">{{ old('desc') }}</textarea>
                    @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <hr class="bg-white">
                  <div class="form-group">
                      <label for="my-input">Degree</label>
                      <input id="my-input" class="form-control" type="text" name="degree" value="{{ old('degree') }}">
                    @error('degree')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <hr class="bg-white">
                  <div class="form-group">
                    <label>Education</label>
                    <textarea class="form-control" rows="1" placeholder="Enter ..." name="education">{{ old('education') }}</textarea>
                    @error('education')
                     <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <hr class="bg-white">

                  <div class="form-group">
                    <label>Experiences</label>
                    <textarea class="form-control" rows="1" placeholder="Enter ..." name="experiences">{{ old('experiences') }}</textarea>
                    @error('experiences')
                     <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                  </div>
                  
              </div>
              <!-- /.card-body -->
        </div>
    </div>
    <div class="col-12 col-md-6 mt-4">
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="my-input">Address</label>
                    <input id="my-input" class="form-control" type="text" name="address" value="{{ old('address') }}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr class="bg-white">
                <div class="form-group">
                    <label for="my-input">Phone</label>
                    <input id="my-input" class="form-control" type="text" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr class="bg-white">
                <div class="form-group">
                    <label for="my-input">Email</label>
                    <input id="my-input" class="form-control" type="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr class="bg-white">
                <div class="form-group">
                    <label for="my-input">Website</label>
                    <input id="my-input" class="form-control" type="text" name="website" value="{{ old('website') }}">
                    @error('website')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr class="bg-white">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" >
                    <label class="custom-control-label" for="customSwitch1">Status</label>
                </div>
                
            </div>
            <div class="card-body">
                <h4>Optional</h4>
                <div class="form-group">
                    <label for="my-input">Facebook link</label>
                    <input id="my-input" class="form-control" type="text" name="fb" value="{{ old('fb') }}" placeholder="https://facebook.com/example">
                    @error('fb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="my-input">Twitter link</label>
                    <input id="my-input" class="form-control" type="text" name="twitter" value="{{ old('twitter') }}" placeholder="https://twitter.com/example">
                    @error('twitter')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="my-input">Instagram link</label>
                    <input id="my-input" class="form-control" type="text" name="instagram" value="{{ old('instagram') }}" placeholder="https://instagram.com/example">
                    @error('instagram')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>
    </div>
  </div>
  <div class="row">
      <div class="col-12">
        <div class="form-group spiech">
            <label>Speech</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name="speech">{{ old('speech') }}</textarea>
            @error('speech')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
      </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-outline-light">Save</button>
</div>
</form>
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

                    
                    $('.spiech').hide();
                    $('.cats').change(function(){
                        var valu = $(this).find(':selected');
                        // alert(typeof(valu));
                        for(var i=0;i<valu.length;i++)
                        {
                            if(valu[i].getAttribute("data-value") == "Principal" || valu[i].getAttribute("data-value") == "Chairman")
                            {
                                // alert();
                                $('.spiech').show();
                            }else{
                                $('.spiech').hide();
                            }
                        }
                       
                        
                    });
         });
    </script>
@endpush