<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">130, Chatteswari Road, Chawkbazar, Chittagong (Medical College Hostel Gate in Ops)</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">031-269065, 01700-616761</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">nesc.bd@gmail.com</span></a></li>
                            <li><a href="https://nescbd.com/"><span class="icon icon-web"></span><span class="text">www.nescbd.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ route('homes') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ route('aboutus') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ (request()->is('schoolteacher')) ? 'active' : '' }}"><a href="{{ route('schoolteacher.index') }}" class="nav-link">Teachers</a></li>
                <li class="nav-item {{ (request()->is('schoolnotice')) ? 'active' : '' }}"><a href="{{ route('schoolnotice.index') }}" class="nav-link">Notice Board</a></li>
                <li class="nav-item {{ (request()->is('curricular')) ? 'active' : '' }}"><a href="{{ route('curricular') }}" class="nav-link">Curricular Activities</a></li>
                <li class="nav-item {{ (request()->is('gallery')) ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Facebook Activities</h2>

                    <div class="fb-group" data-href="https://www.facebook.com/groups/3542174739138392" data-width="280" data-show-social-context="true" data-show-metadata="true"><blockquote cite="https://www.facebook.com/groups/3542174739138392" class="fb-xfbml-parse-ignore">National English School Chittagong</blockquote></div>


                    <h2 class="ftco-heading-2">Subscribe Us!</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>                
            </div>
        </div>
       {{--  <div class="row d-none">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div> --}}
        <div class="ftco-footer-widget text-center">
                    <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                    <ul class="ftco-footer-social list-unstyled mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/nesc.bd" target="__blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
    </div>
</footer>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="9t8wxNxH"></script>