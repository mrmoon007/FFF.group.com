<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>mr moon</title>

  <!-- GOOGLE FONTS -->
    @include('admin.body.css')
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({ showSpinner: false });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>
        <div class="wrapper">

                <!--
            ====================================
            ——— LEFT SIDEBAR WITH FOOTER
            =====================================
          -->
         @include('admin.body.sidebar')



            <div class="page-wrapper">
                        <!-- Header -->
                <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                        <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                        autofocus autocomplete="off" />
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                    </div>

                    <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <!-- Github Link Button -->
                        {{-- <li class="github-link mr-3">
                        <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                            <span class="d-none d-md-inline-block mr-2">Source Code</span>
                            <i class="mdi mdi-github-circle"></i>
                        </a>

                        </li> --}}
                        <li class="dropdown notifications-menu">
                        <button class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">You have 5 notifications</li>
                            <li>
                            <a href="#">
                                <i class="mdi mdi-account-plus"></i> New user registered
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <i class="mdi mdi-account-remove"></i> User deleted
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <i class="mdi mdi-account-supervisor"></i> New client
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                            </li>
                            <li>
                            <a href="#">
                                <i class="mdi mdi-server-network-off"></i> Server overloaded
                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                            </a>
                            </li>
                            <li class="dropdown-footer">
                            <a class="text-center" href="#"> View All </a>
                            </li>
                        </ul>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                        <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="{{ Auth::user()->profile_photo_url }}" class="user-image" alt="User Image" />
                            <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <!-- User image -->
                            <li class="dropdown-header">
                            <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle" alt="User Image" />
                            <div class="d-inline-block">
                                {{ Auth::user()->name }}
                            <small class="pt-1">{{ Auth::user()->email }}</small>
                            </div>
                            </li>

                            <li>
                            <a href="">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                            </li>
                            <li>
                            <a href="{{ route('admin.CPassword') }}">
                                <i class="mdi mdi-email"></i> Change Password
                            </a>
                            </li>
                            <li>
                            <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                            </li>
                            <li>
                            <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                            </li>

                            <li class="dropdown-footer">
                            <a href=""> <i class="mdi mdi-logout"></i> Log Out </a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </nav>

                </header>
                <div class="content-wrapper">
                <div class="content">
                    @yield('admin')


                </div>
                </div>

                <footer class="footer mt-auto">
                    <div class="copyright bg-white">
                        <p>
                            &copy; <span id="copy-year">2021</span> Copyright Sleek Dashboard Bootstrap Template by MR
                            <a
                            class="text-primary"
                            href="http://www.iamabdus.com/"
                            target="_blank"
                            >MOOON</a
                            >.
                        </p>
                    </div>
                    <script>
                        var d = new Date();
                        var year = d.getFullYear();
                        document.getElementById("copy-year").innerHTML = year;
                    </script>
                </footer>
            </div>
        </div>
    </div>


    @include('admin.body.js')
</body>
</html>
