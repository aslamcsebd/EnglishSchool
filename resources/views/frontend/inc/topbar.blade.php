<nav class="navbar navbar-expand-md navbar-light shadow-sm">

   {{-- <a class="navbar-brand" href="{{ url('/home') }}">
      {{ config('app.name', 'None') }}
   </a> --}}

   <style type="text/css">
      .slogan{ color: #31BEF2; font-weight: 400; font-size: 14px; } 
      .right{ padding-top: -50px;} 
   </style>
      <a class="navbar-brand" href="index.html">
         <img src="{{ url('admin/image/logo.png') }}" alt="" class='img-fluid' width="75" height="80">
         <span class="slogan text-center pl-4">Learners Today</span> <br>
         <span class="slogan text-center right pl-3">Leaders Tomorrow</span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon">Menu</span>
      </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Center Side Of Navbar -->

      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <h3 class="text-center h2 mt-2 hadow-sm"  style="color: #F7941E;">National English School</h3>
            <h3 class="text-center h2 hadow-sm float-left"  style="color: #F7941E; margin-top: -16px">Chittagong</h3>
         </li>

         <li>
            <style>
               .vl {
                 border-left: 1px solid #7f8c8d;
                 height: 80px; margin: 15px 5px 0 8px;
               }
            </style>
            <div class="vl"></div>
         </li>
         <li>
            <h1 style="color: #F7941E; font-weight: 500; font-size: 45px; padding-top: 20px;">NESC</h1>
         </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <style type="text/css">
         .last{ width: 400px; }
         .last{ display: inline; }
      </style>

      <ul class="navbar-nav ml-auto last p-2 m-0" style="background-color: rgb(111, 32, 111);">
         <li lass="nav-item">
            <div class="d-flex topper align-items-center">
               <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-map"></span>
               </div>
               <span class="text">130, Chatteswari Road, Chawkbazar, Chittagong <br>
                  (Medical College Hostel Gate in Ops)</span>
            </div>
         </li>   

         <li lass="nav-item">  
            <div class="d-flex topper align-items-center">
               <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-paper-plane"></span>
               </div>
                  <span class="text">nesc.bd@gmail.com</span>
            </div>
         </li>

         <li class="nav-item">
               <div class=" mt-2 d-flex topper align-items-center">
                  <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                  <span class="text">031-269065, 01700-616761</span>
               </div>
         </li>
      </ul>
   </div>
</nav>

<div class="py-2" style="background-color: rgb(111, 32, 111); display: none;">
   <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
         <div class="col-lg-12 d-block">
            <div class="row d-flex">
               <div class="col-md-5 pr-4 d-flex topper align-items-center">
                  <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                  <span class="text">130, Chatteswari Road, Chawkbazar, Chittagong (Medical College Hostel Gate in Ops)</span>
               </div>
               <div class="col-md pr-4 d-flex topper align-items-center">
                  <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                  <span class="text">nesc.bd@gmail.com</span>
               </div>
               <div class="col-md pr-4 d-flex topper align-items-center">
                  <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                  <span class="text">031-269065, 01700-616761</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="acme-news-ticker">
   @php
      $OneNotices = App\Admin\Notice::latest()->get();
   @endphp

   @foreach ($OneNotices->take(1) as $notice)
   <div class="acme-news-ticker-label">{{$notice->title}}</div>
   <div class="acme-news-ticker-box">
      <ul class="my-news-ticker-2">
         <li>{{$notice->description }}</li>
      </ul>
   </div>
   <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
      <span class="acme-news-ticker-pause"></span>
   </div>
   @endforeach
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
   <div class="container d-flex align-items-center">     
      <div class="collapse navbar-collapse" id="ftco-nav">
         <ul class="navbar-nav ml-auto">

            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ route('homes') }}" class="nav-link pl-0">Home</a></li>
           
            <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ route('aboutus') }}" class="nav-link">About Us</a></li>

            {{-- <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"><a ref="{{ route('aboutus') }}" class="nav-link">Academics</a></li> --}}

            <li class="nav-item {{ (request()->is('gallery')) ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
            
            <li class="nav-item {{ (request()->is('schoolteacher')) ? 'active' : '' }}"><a href="{{ route('schoolteacher.index') }}" class="nav-link">Teachers</a></li>
            
            <li class="nav-item {{ (request()->is('schoolnotice')) ? 'active' : '' }}"><a href="{{ route('schoolnotice.index') }}" class="nav-link">Notice Board</a></li>

            <li class="nav-item"><a href="{{ route('admission.index') }}" class="nav-link"><span class="ext-white">Admission</span></a></li>
         
            <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            
            <li class="nav-item {{ (request()->is('curricular')) ? 'active' : '' }}"><a href="{{ route('birthday') }}" class="nav-link">Birthdays Today</a></li>

            {{-- <li class="nav-item {{ (request()->is('curricular')) ? 'active' : '' }}"><a href="{{ route('curricular') }}" class="nav-link">Curricular Activities</a></li>             --}}
            
         </ul>
      </div>
   </div>
</nav>
