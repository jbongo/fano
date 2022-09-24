<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header2')
</head>

<body class="loading" data-layout-color="light" data-layout="detached" data-rightbar-onstart="true">

    <!-- Topbar Start -->
    @include('layouts.navbar')
    <!-- end Topbar -->

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->


                @include('layouts.left_sidebar')


            <!-- Left Sidebar End -->
            <!-- Start content-page -->
            <div class="content-page">
               
                    @yield('content')

                <!-- End Content -->

                @include('layouts.footer2')

            </div>
            <!-- End content-page -->

        </div> <!-- end wrapper-->
    </div>
    <!-- END Container -->


    <!-- Right Sidebar -->
    @include('layouts.right_sidebar')

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->


    <!--Start script-->
    @include('layouts.footer_script')
    @stack('scripts')
    <!--End script-->

</body>

</html>
