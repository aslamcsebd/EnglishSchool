<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{route("category.home")}}" class="brand-link text-center">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Admin Panel</span>
   </a>
   <div class="sidebar">
      <div class="user-panel" style="display: none;">
         <div class="image">
            {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
         </div>
         <div class="info">
            <h4 class="text-white float-left">{{ Auth::user()->name }}</h4>
            <a href="{{ route('logout') }}" class="btn btn-outline-info ml-5 float-right">Logout</a>
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
               <a href="{{route("teacher.create")}}" class="nav-link  {{ (request()->is('admin/teacher/create')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chalkboard-teacher"></i>
                  <p>All Teacher</p>
               </a>
            </li>
            
            <li class="nav-item">
               <a href="{{route("facilities.index")}}" class="nav-link  {{ (request()->is('admin/facilities')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-school"></i>
                  <p>All Facilities</p>
               </a>
            </li>
            
            <li class="nav-item">
               <a href="{{route("admission.all")}}" class="nav-link  {{ (request()->is('admin/admission')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-sign-in-alt"></i>
                  <p>All Applications</p>
               </a>
            </li>
            
            <li class="nav-item">
               <a href="{{route("notice.index")}}" class="nav-link  {{ (request()->is('admin/notice')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-bell"></i>
                  <p>All Notice</p>
               </a>
            </li>

            <li class="nav-item">
               <a href="{{route("gallery.index")}}" class="nav-link  {{ (request()->is('admin/gallery')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-images"></i>
                  <p>All Gallery</p>
               </a>
            </li>        
            
            <li class="nav-item has-treeview">
               <a href="{{ url('payment') }}" class="nav-link">
                  <i class="nav-icon fas fa-comment-dollar"></i>
                  <p>All Payment</p>
               </a>    
            </li>

            <li class="nav-item has-treeview">
               <a href="{{ url('PrincipalSMS') }}" class="nav-link" >
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>Principal's Message</p>                    
               </a>      
            </li>

            <li class="nav-item has-treeview">
               <a href="{{ url('birthdayToday') }}" class="nav-link" >
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>Student's Birthday</p>               
               </a>      
            </li>
         </ul>
      </nav>
   </div>
</aside>