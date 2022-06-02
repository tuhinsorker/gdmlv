<!doctype html>
<html lang="en">
    <!--<html lang="ar" dir="rtl">-->
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Bdtask">
        <title>Bhulua - Bootstrap 4 Admin Template Deshboard</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ (@appSetting()->favicon) ? asset('public/'.@appSetting()->favicon) : url('avatar.png')  }}">

        @include('includs.css')
        @stack('css')

    </head>


    <body class="fixed sidebar-mini">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->


        <div class="wrapper">
            <!-- Sidebar  -->
            @include('includs.left_menu');

            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">

                    <!--Navbar-->
                    @include('includs.topmenu');
                    <!--/.navbar-->

                    <!--/.Content Header (Page header)--> 
                    @yield('content')
                    <!--/.body content-->

                </div><!--/.main content-->

                <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy">© 2018 Bdtask Responsive Bootstrap 4 Dashboard Template</div>
                        <div class="credit">Designed by: <a href="#">Bdtask</a></div>
                    </div>
                </footer><!--/.footer content-->
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>

        @include('includs.js')
        
        @stack('js')


    </body>
</html>