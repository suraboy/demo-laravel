<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/images/favicon.png">
    <title>BackOffice</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets') }}/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">
                        <img src="{{ asset('assets') }}/images/logo-icon.png" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <div class="col-lg-12">
                            BackOffice
                        </div>
                    </span>
                </a>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                   data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <canvas class="letter-avatar-circle img-circle" title="Boy Dev" alt="User Image" width="90"
                                height="90"></canvas>


                        <p>
                            Boy Dev - admin
                            <small>Member since 2019-02-08 10:24:37</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="https://staging-cms.eggsmartpos.com/users/12/edit"
                               class="btn btn-default btn-flat">
                                <i class="fa fa-child text-blue"></i>
                                Profile
                            </a>
                        </div>
                        <div class="pull-right">
                            <a href="#logout" class="btn btn-default btn-flat" onclick="$('#logout').submit();">
                                <i class="fa fa-sign-out text-red"></i>
                                Sign out
                            </a>
                        </div>
                        <form method="POST" action="https://staging-cms.eggsmartpos.com/logout" accept-charset="UTF-8"
                              style="display:none;" id="logout"><input name="_token" type="hidden"
                                                                       value="tFfPecGCgbkNySedEuThqXUGFBKnFJDGdiSqXkvR">
                            <button type="submit">global.logout</button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                                                              href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                                class="mdi mdi-menu font-24"></i></a></li>
                    <li class="nav-item search-box"><a class="nav-link waves-effect waves-dark"
                                                       href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; Enter"> <a
                                class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets') }}/images/users/1.jpg" alt="user" class="rounded-circle"
                                 width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated"
                             style="min-width:auto!important;">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-settings m-r-5 m-l-5"></i>
                                Account Setting</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out text-red m-r-5 m-l-5"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item" id="index">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="{{route('home')}}" aria-expanded="false">
                            <i class="fa fa-dashboard"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="users">
                        <a class="sidebar-link has-arrow waves-effect waves-dark"
                           href="javascript:void(0)" aria-expanded="false">
                            <i class="fa fa-users"></i><span class="hide-menu">User Management </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{route('users.index')}}" class="sidebar-link">
                                    <i class="fa fa-circle-o"></i>
                                    <span class="hide-menu"> Users </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="form-wizard.html" class="sidebar-link">
                                    <i class="fa fa-circle-o"></i>
                                    <span class="hide-menu"> Form Wizard </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="widgets.html" aria-expanded="false"><i
                                class="mdi mdi-chart-bubble"></i><span class="hide-menu">Widgets</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="tables.html" aria-expanded="false"><i
                                class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a></li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="grid.html" aria-expanded="false"><i
                                class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark"
                           href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a>
                            </li>
                            <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                        class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="pages-buttons.html" aria-expanded="false"><i
                                class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                                href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-face"></i><span class="hide-menu">Icons </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                        class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a>
                            </li>
                            <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                        class="mdi mdi-emoticon-cool"></i><span
                                        class="hide-menu"> Font Awesome Icons </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                href="pages-elements.html" aria-expanded="false"><i
                                class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                                href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                                        class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span></a>
                            </li>
                            <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                        class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a>
                            </li>
                            <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                                        class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a>
                            </li>
                            <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                        class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a>
                            </li>
                            <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                                        class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                                href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                        class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a>
                            </li>
                            <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                        class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" aria-expanded="false">
                            <i class="fa fa-sign-out"></i>
                            <span class="hide-menu">{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            @yield('breadcrumb')
        </div>
        <div class="container-fluid">
            @yield('content')

        </div>
        <footer class="footer text-right">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                , Coded by
                <a href="https://web.facebook.com/sirichai.janpan" target="_blank">Mr.Sirichai Janpan</a>.
            </div>
        </footer>
    </div>
</div>

<script src="{{asset('assets')}}/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('dist')}}/js/jquery.ui.touch-punch-improved.js"></script>
<script src="{{asset('dist')}}/js/jquery-ui.min.js"></script>
<link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets')}}/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets')}}/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('assets')}}/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('dist')}}/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('dist')}}/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('dist')}}/js/custom.min.js"></script>

<!--Custom CSS Datatable -->
<link href="{{asset('css')}}/icons/icomoon/styles.css" rel="stylesheet">
<link href="{{asset('css')}}/components.css" rel="stylesheet">
<link href="{{asset('css')}}/colors.css" rel="stylesheet">
<link href="{{asset('css')}}/custom.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<!-- /global stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
{{--validate--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<!-- bootstrap time picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"
        integrity="sha256-bu/BP02YMudBc96kI7yklc639Mu4iKGUNNcam8D2nLc=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

@stack('scripts')

@stack('styles')
</body>

</html>
