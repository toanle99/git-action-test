<!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> 
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}"> 
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}"> 
        <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper"> 
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
            </div> 
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                @include('admin.layout.partials.header')
            </nav> 
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    @include('admin.layout.partials.sidebar_left')
                </aside> 
                <div class="content-wrapper">
                    @yield('content')
                </div> 
            <footer class="main-footer">
                @include('admin.layout.partials.footer')
            </footer> 
            <aside class="control-sidebar control-sidebar-dark">
            </aside> 
        </div> 
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script> 
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script> 

        


        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
        <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script> 
        <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script> 
        <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> 
        <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> 
        <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script> 
        <!-- js validate -->
        <script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js') }}"></script> 
        <!--  -->
        <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
        <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
    </body>
</html>