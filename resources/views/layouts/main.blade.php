<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../plugins/images/favicon.png') }}">
    <title>Admin Vue</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}"
        rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('elite_css_js/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('elite_css_js/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('elite_css_js/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    {{-- Data Table --}}
    <link href="{{ asset('/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
        type="text/css" />
    {{-- js --}}

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
    .swal2-popup {
        font-size: 1.5rem !important;
    }

</style>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('layouts.nav')
        <!-- Left navbar-header -->
        @include('layouts.sidebar')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            @yield('content')
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {{ date('Y') }} &copy; Laravel Vue
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

    {{-- <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script> --}}
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bootstrap/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('elite_css_js/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('elite_css_js/js/waves.js') }}"></script>
    <!--Counter js -->
    <script src="{{ asset('../plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('../plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('../plugins/bower_components/raphael/raphael-min.js') }}"></script>
    {{-- <script src="../plugins/bower_components/morrisjs/morris.js"></script> --}}
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('elite_css_js/js/custom.min.js') }}"></script>
    <script src="{{ asset('elite_css_js/js/dashboard1.js') }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('../plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
    {{-- Data Table --}}
    <script src="{{ asset('../plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $.toast({
                heading: 'Welcome to Elite admin',
                text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'info',
                hideAfter: 3500,
                stack: 6
            })
        });
    </script> --}}
    <!--Style Switcher -->
    <script src="{{ asset('../plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>Sign In

</body>

</html>
