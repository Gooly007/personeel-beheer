<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Page title set in pageTitle directive -->
    <title>KPC | @yield('title') </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
         
    @yield('header')
    
    <!-- Main Inspinia CSS files -->
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


<!-- Angular App Script -->
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

<!-- MetsiMenu -->
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

<!-- Main Angular scripts-->
<script src="{{ asset('js/angular/angular.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/angular/angular-sanitize.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/oclazyload/dist/ocLazyLoad.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/angular-translate/angular-translate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/ui-router/angular-ui-router.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/angular-idle/angular-idle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap/ui-bootstrap-tpls-1.1.2.min.js') }}" type="text/javascript"></script>

@yield('scripts')

</body>
</html>
