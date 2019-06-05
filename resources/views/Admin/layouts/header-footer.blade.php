<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Alcyon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App css -->
    <link href="{{asset('css/admin/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/admin/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
</head>

<body>

<!-- Begin page -->
<div class="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!-- LOGO -->
            <a href="#" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('../../images/logo.png')}}" alt="" height="40">
                        </span>
                <span class="logo-sm">
                            <img src="{{asset('../../images/logo.png')}}" alt="" height="16">
                        </span>
            </a>

            <!--- Sidemenu -->
            <ul class="metismenu side-nav">
                <li class="side-nav-item">
                    <a href="{{route('index')}}" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span> Գլխավոր </span>
                    </a>
                </li>
                <li class="side-nav-item">
                <a href="{{route('about')}}" class="side-nav-link">
                <i class="dripicons-view-apps"></i>
                <span> Մեր Մասին </span>
                </a>
                </li>
                <li class="side-nav-item">
                <a href="{{route('services')}}" class="side-nav-link">
                <i class="dripicons-view-apps"></i>
                <span> Ծառայություններ </span>
                </a>
                </li>
                <li class="side-nav-item">
                <a href="{{route('portfolio')}}" class="side-nav-link">
                <i class="dripicons-view-apps"></i>
                <span>Մեր աշխատանքները</span>
                </a>
                </li>
                <li class="side-nav-item">
                <a href="{{route('gallery')}}" class="side-nav-link">
                <i class="dripicons-view-apps"></i>
                <span>Տեսադարան</span>
                </a>
                </li>
            </ul>

            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="dropdown notification-list">

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                </h5>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                           aria-expanded="false">
                            <span>
                                        <span class="account-user-name">Ադմին</span>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Դուրս Գալ') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                        </div>
                    </li>

                </ul>
                <button class="button-menu-mobile open-left disable-btn">
                    <i class="mdi mdi-menu"></i>
                </button>

            </div>
            <!-- end Topbar -->

            <!-- Start Content-->
            @yield('content')

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer  mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p>Alcyon</p>
                    </div>

                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>





<!-- App js -->
<script src="{{asset('js/admin/app.min.js')}}"></script>
<script src="{{asset('js/admin/admin.js')}}"></script>
<script src="{{asset('js/admin/dropzone.min.js')}}"></script>
<script src="{{asset('js/admin/component.fileupload.js')}}"></script>

</body>
</html>