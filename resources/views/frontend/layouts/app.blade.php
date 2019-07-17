<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--=== Bootstrap CSS ===-->
        <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!--=== Vegas Min CSS ===-->
        <link href="{{asset('css/plugins/vegas.min.css') }}" rel="stylesheet">
        <!--=== Slicknav CSS ===-->
        <link href="{{asset('css/plugins/slicknav.min.css') }}" rel="stylesheet">
        <!--=== Magnific Popup CSS ===-->
        <link href="{{asset('css/plugins/magnific-popup.css') }}" rel="stylesheet">
        <!--=== Owl Carousel CSS ===-->
        <link href="{{asset('css/plugins/owl.carousel.min.css') }}" rel="stylesheet">
        <!--=== Gijgo CSS ===-->
        <link href="{{asset('css/plugins/gijgo.css') }}" rel="stylesheet">
        <!--=== FontAwesome CSS ===-->
        <link href="{{asset('css/font-awesome.css') }}" rel="stylesheet">
        <!--=== Theme Reset CSS ===-->
        <link href="{{asset('css/reset.css') }}" rel="stylesheet">
        <!--=== Main Style CSS ===-->
        <link href="{{asset('css/style.css') }}" rel="stylesheet">
        <!--=== Responsive CSS ===-->
        <link href="{{asset('css/responsive.css') }}" rel="stylesheet">
        <!--=== App CSS ===-->
        <link rel="stylesheet" href="{{asset('css/app.css') }}">

        <title>{{config('app.name','Cardoor')}}</title>


        
    </head>
    <body {{-- class="loader-active" --}}>
        @include('frontend/includes.header')
            <div class="container">
                @yield('content')
            </div>

        @include('frontend/includes.footer')
        <!--== Scroll Top Area Start ==-->
        <div class="scroll-top">
            <img src="assets/img/scroll-top.png" alt="JSOFT">
        </div>
        <!--== Scroll Top Area End ==-->
    
        <!--=======================Javascript============================-->
        <!--=== Jquery Min Js ===-->
        <script src="{{asset('js/jquery-3.2.1.min.js') }}"></script>
        <!--=== Jquery Migrate Min Js ===-->
        <script src="{{asset('js/jquery-migrate.min.js') }}"></script>
        <!--=== Popper Min Js ===-->
        <script src="{{asset('js/popper.min.js') }}"></script>
        <!--=== Bootstrap Min Js ===-->
        <script src="{{asset('js/bootstrap.min.js') }}"></script>
        <!--=== Gijgo Min Js ===-->
        <script src="{{asset('js/plugins/gijgo.js') }}"></script>
        <!--=== Vegas Min Js ===-->
        <script src="{{asset('js/plugins/vegas.min.js') }}"></script>
        <!--=== Isotope Min Js ===-->
        <script src="{{asset('js/plugins/isotope.min.js') }}"></script>
        <!--=== Owl Caousel Min Js ===-->
        <script src="{{asset('js/plugins/owl.carousel.min.js') }}"></script>
        <!--=== Waypoint Min Js ===-->
        <script src="{{asset('js/plugins/waypoints.min.js') }}"></script>
        <!--=== CounTotop Min Js ===-->
        <script src="{{asset('js/plugins/counterup.min.js') }}"></script>
        <!--=== YtPlayer Min Js ===-->
        <script src="{{asset('js/plugins/mb.YTPlayer.js') }}"></script>
        <!--=== Magnific Popup Min Js ===-->
        <script src="{{asset('js/plugins/magnific-popup.min.js') }}"></script>
        <!--=== Slicknav Min Js ===-->
        <script src="{{asset('js/plugins/slicknav.min.js') }}"></script>
    
        <!--=== Mian Js ===-->
        <script src="{{asset('js/main.js') }}"></script>
    </body>
</html>
