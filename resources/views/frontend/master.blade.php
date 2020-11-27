<!DOCTYPE html>
<html lang="en">

    <head>
        <title>NESC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">

        <!-- News portal -->
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('frontend/css/newsHeading.css') }}">

        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style2.css') }}">
        <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
        @stack('css')

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
        @include('frontend.inc.topbar')
        <!-- END nav -->
        
          @yield('content')

        @include('frontend.inc.footer')



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
        </div>


        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/aos.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>
        <script src="{{ asset('frontend/js/google-map.js') }}"></script>

        <!-- News portal -->
        <script src="{{ asset('frontend/js/acmeticker.js') }}"></script>

       <script>
              jQuery(document).ready(function ($) {
                    $('.my-news-ticker-1').AcmeTicker({
                        type:'horizontal',/*horizontal/horizontal/Marquee/type*/
                        direction: 'right',/*up/down/left/right*/
                        controls: {
                            prev: $('.acme-news-ticker-prev'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                            toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                            next: $('.acme-news-ticker-next')/*Can be used for horizontal/horizontal/marquee/typewriter*/
                        }
                    });
                    $('.my-news-ticker-2').AcmeTicker({
                        type:'marquee',/*horizontal/horizontal/Marquee/type*/
                        direction: 'left',/*up/down/left/right*/
                        speed: 0.05,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
                        controls: {
                            toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                        }
                    });
                    $('.my-news-ticker-3').AcmeTicker({
                        type:'typewriter',/*horizontal/horizontal/Marquee/type*/
                        direction: 'right',/*up/down/left/right*/
                        speed:50,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
                        controls: {
                            prev: $('.acme-news-ticker-prev'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                            toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                            next: $('.acme-news-ticker-next')/*Can be used for horizontal/horizontal/marquee/typewriter*/
                        }
                    });
                    $('.my-news-ticker-4').AcmeTicker({
                        type:'vertical',/*vertical/horizontal/Marquee/type*/
                        direction: 'right',/*up/down/left/right*/
                        controls: {
                            prev: $('.acme-news-ticker-prev'),/*Can be used for vertical/horizontal/typewriter*//*not work for marquee*/
                            next: $('.acme-news-ticker-next'),/*Can be used for vertical/horizontal/typewriter*//*not work for marquee*/
                            toggle: $('.acme-news-ticker-pause')/*Can be used for vertical/horizontal/marquee/typewriter*/
                        }
                    });
                })
              </script>
              <script type="text/javascript">

              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-36251023-1']);
              _gaq.push(['_setDomainName', 'jqueryscript.net']);
              _gaq.push(['_trackPageview']);

              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();

            </script>
            <script>
            try {
              fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
                return true;
              }).catch(function(e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
              });
            } catch (error) {
              console.log(error);
            }
            </script>

        <script src="{{ asset('frontend/js/main.js') }}"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173915820-1"></script>
        @stack('js')
        
    </body>

</html>