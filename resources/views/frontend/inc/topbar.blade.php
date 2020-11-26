<div class="py-2" style="background-color: rgb(111, 32, 111)">
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
    <div class="acme-news-ticker-label">News</div>

    <div class="acme-news-ticker-box">
        <ul class="my-news-ticker-2">
            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></li>
        </ul>

    </div>
    <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
        <span class="acme-news-ticker-pause"></span>
    </div>
</div>


<div class="bg-white">
    <div class="container">
        <h2 class="text-center h2 mt-2 shadow-sm"  style="color: #F7941E">National English School Chittagong</h2>
    <div class="p text-center" style="color: #31BEF2">Learners Today Leaders Tomorrow</div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="index.html"><img src="{{ url('admin/image/logo.png') }}" alt="" class='img-fluid' width="75" height="80"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
  </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ route('homes') }}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ route('aboutus') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ (request()->is('schoolteacher')) ? 'active' : '' }}"><a href="{{ route('schoolteacher.index') }}" class="nav-link">Teachers</a></li>
                <li class="nav-item {{ (request()->is('schoolnotice')) ? 'active' : '' }}"><a href="{{ route('schoolnotice.index') }}" class="nav-link">Notice Board</a></li>
                <li class="nav-item {{ (request()->is('curricular')) ? 'active' : '' }}"><a href="{{ route('curricular') }}" class="nav-link">Curricular Activities</a></li>
                <li class="nav-item {{ (request()->is('gallery')) ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
               
                <li class="nav-item"><a href="{{ route('admission.index') }}" class="nav-link bg-dark"><span class="text-white">Apply Now</span></a></li>
            </ul>
        </div>
    </div>
</nav>