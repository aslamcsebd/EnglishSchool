<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i>&nbsp; [Minimize <-> Maximize]</a>
      </li>
   </ul>

   <ul class="navbar-nav m-auto text-light">
      <h3>National English School, Chittagong</h31>
   </ul>

   <ul class="navbar-nav ml-auto text-light">
      <h4 class="text-white float-left">{{ Auth::user()->name }}</h4>
      <a href="{{ route('logout') }}" class="btn btn-outline-info ml-5 float-right bg-danger">Logout</a>   
   </ul>
</nav>