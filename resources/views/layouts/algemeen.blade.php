<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Page title set in pageTitle directive -->
    <title>KPC | @yield('title') </title>

    <!-- Font Awesome -->
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
     <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @yield('header')
    
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link id="loadBefore" href="{{ asset('css/style.css') }}" rel="stylesheet">
    

    
</head>
<body>

  <!-- Wrapper-->
  <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')
   
            
        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

    <!-- MetsiMenu -->
    <!-- <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}" type="text/javascript"></script> -->

    <!-- SlimScroll -->
    <!-- <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script> -->
    <!-- Peace JS -->
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <!-- Custom and plugin javascript -->
    <!-- <script src="{{ asset('js/inspinia.js') }}" type="text/javascript"></script> -->

    <!-- Main Angular scripts-->
    <!-- <script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/plugins/oclazyload/dist/ocLazyLoad.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/ui-router/angular-ui-router.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/bootstrap/ui-bootstrap-tpls-1.1.2.min.js') }}" type="text/javascript"></script> --> 
    
    <!-- Anglar App Script -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('js/config.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/directives.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/controllers.js') }}" type="text/javascript"></script>   -->
    
@yield('scripts')

</body>
</html>
