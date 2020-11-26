<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
         </div>
         <div class="info">
            <h4 class="d-block text-white">{{ Auth::user()->name }}</h4>
            <a href="{{ route('logout') }}" class="btn btn-outline-info">Logout</a>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="{{route("category.home")}}" class="nav-link  {{ (request()->is('dashboard')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Dashboard</p>
               </a>
            </li>
            <li class="nav-item">
               
            </li>
            {{-- <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/appointment')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-check"></i>
                  <p>
                     Appointment
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/appointment')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("appointment.index")}}" class="nav-link  {{ (request()->is('admin/appointment')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Appointment</p>
                     </a>
                  </li>
               </ul>
            </li> --}}
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/teacher*')) ? 'active' : '' }}">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <p>
                     Teacher
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/teacher*')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("teacher-category.index")}}" class="nav-link  {{ (request()->is('admin/teacher-category')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Teachers Category</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route("teacher.index")}}" class="nav-link  {{ (request()->is('admin/teacher')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Teacher</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route("teacher.create")}}" class="nav-link  {{ (request()->is('admin/teacher/create')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Add Teacher</p>
                     </a>
                  </li>
               </ul>
            </li>
            
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/about*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>
                     About Us
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/about*')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("about.index")}}" class="nav-link  {{ (request()->is('admin/about')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Who We are</p>
                     </a>
                  </li>
                  {{-- <li class="nav-item">
                     <a href="{{route("mission.index")}}" class="nav-link  {{ (request()->is('admin/about/mission')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Mission</p>
                     </a>
                  </li> --}}
                  <li class="nav-item">
                     <a href="{{route("administration.index")}}" class="nav-link  {{ (request()->is('admin/about/administration')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Administration</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/facilities')) ? 'active' : '' }}">
                  <i class="fas fa-school"></i>
                  <p>
                     Facilities
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/facilities')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("facilities.index")}}" class="nav-link  {{ (request()->is('admin/facilities')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Facilities</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/curricular*')) ? 'active' : '' }}">
                  <i class="fas fa-paint-brush"></i>
                  <p>
                     Curricular Activities
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/curricular')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("curricular.index")}}" class="nav-link  {{ (request()->is('admin/curricular')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Curricular Activities</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/admission*')) ? 'active' : '' }}">
                  <i class="fas fa-sign-in-alt"></i>
                  <p>
                     Admission Applications
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/admission')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("admission.all")}}" class="nav-link  {{ (request()->is('admin/admission')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Applications</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/notice*')) ? 'active' : '' }}">
                  <i class="fas fa-bell"></i>
                  <p>
                     Notice Board
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/notice')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("notice.index")}}" class="nav-link  {{ (request()->is('admin/notice')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Notice</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/gallery*')) ? 'active' : '' }}">
                  <i class="fas fa-images"></i>
                  <p>
                     Gallery
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/gallery')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("gallery.index")}}" class="nav-link  {{ (request()->is('admin/gallery')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Images</p>
                     </a>
                  </li>
               </ul
            </li>
            {{-- <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/shedule*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-clock"></i>
                  <p>
                     Shedule
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/shedule*')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("shedule.index")}}" class="nav-link  {{ (request()->is('admin/shedule')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p>All Shedule</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
            <li class="nav-item has-treeview">
               <a href="#" class="nav-link  {{ (request()->is('admin/dental-college*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>
                     Dental Collage
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display:{{ (request()->is('admin/dental-college*')) ? 'block' : 'none' }}">
                  <li class="nav-item">
                     <a href="{{route("category.index")}}" class="nav-link  {{ (request()->is('admin/dental-college/category')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p> Categories</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route("post.index")}}" class="nav-link  {{ (request()->is('admin/dental-college/post')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-circle"></i>
                        <p> Posts</p>
                     </a>
                  </li>
               </ul>
            </li> --}}

            <li class="nav-item has-treeview">
               <a class="nav-link" href="{{ url('news') }}">
                  <i class="fas fa-newspaper"></i>
                     <p>News </p>                          
               </a>      
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>