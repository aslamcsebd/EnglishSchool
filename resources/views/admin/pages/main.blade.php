<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 3 | Dashboard</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
      {{-- <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}"> --}}

      <!-- Ionicons -->
      <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.css')}}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      {{-- style --}}
      <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
      @stack('css')
   </head>
   <body class="hold-transition sidebar-mini layout-fixed " >
      <div class="wrapper" id="app">
         @include('admin.inc.topbar.topbar')
         @include('admin.inc.sidebar.sidebar')
         <div class="content-wrapper" >
            <section class="content" >
               <div class="container-fluid">
                  @yield('content')
               </div>
            </section>
         </div>
         @include('admin.inc.footer.footer')
      </div>
      <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
      $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- ChartJS -->
      <script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
      <!-- Sparkline -->
      {{-- <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script> --}}
      <!-- overlayScrollbars -->
      <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
      <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
      {!! Toastr::message() !!}
      <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
      <script src="../js/app.js"></script>
      <script src="https://cdn.tiny.cloud/1/bav9is6bqi0jnixstv92ob8s63zfc20aumxm0dj2u9gyxvq8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

       <script type="text/javascript">
      window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 5000);
   </script>

   <script type="text/javascript">
      $(".alert").each(function(){
        var txt =  $(this).text().replace(/\s+/g,' ').trim() ;
        $(this).text(txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase());
      });
   </script>

      @stack('js')
   </body>
</html>