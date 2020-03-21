<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="/money_system/assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="/money_system/assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    MONEY_SYSTEM
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/money_system/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/money_system/assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/money_system/assets/demo/demo.css" rel="stylesheet" />
  <!-- in BBB -->
  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
   <link href="/money_system/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
   <link href="/money_system/assets/css/core.css" rel="stylesheet" type="text/css">
   <link href="/money_system/assets/css/components.css" rel="stylesheet" type="text/css">
   <link href="/money_system/assets/css/colors.css" rel="stylesheet" type="text/css">
   <link href="/money_system/assets/css/custom.css" rel="stylesheet" type="text/css">
   <!-- /global stylesheets -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <!-- iconawesome -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="{{Route('index')}}" class="simple-text logo-mini">
          MS
        </a>
        <a href="{{Route('index')}}" class="simple-text logo-normal">
          Money_system
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li id="home">
            <a href="{{ Route('index') }}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li id="payment">
            <a href="{{ Route('payment/list') }}">
              <i class="now-ui-icons fa fa-history" aria-hidden="true"></i>
              <p>Payment</p>
            </a>
          </li>
          <li id="upload">
            <a href="{{ Route('upload/list') }}">
              <i class="now-ui-icons fa fa-upload" aria-hidden="true"></i>
              <p>Upload file</p>
            </a>
          </li>
          <li id="type">
            <a href="{{ Route('type/list') }}">
              <i class="now-ui-icons fa fa-cog" aria-hidden="true"></i>
              <p>Type Expenses</p>
            </a>
          </li>
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            @yield('breadcrumb')
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#profile" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons users_single-02"></i>
                  <p>
                    {{Auth::user()->mname}}  {{Auth::user()->mlastname}}
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  @if(Auth::user()->mstatus == 1)
                  <a class="dropdown-item" href="{{route('users/list')}}">All Users</a>
                  @endif
                  <a class="dropdown-item" href="{{Route("users/info",["id"=>Auth::user()->mid])}}">Setting</a>
                  <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        
          </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://5650110054.blogspot.com/">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Coded by
            <a href="https://web.facebook.com/sirichai.janpan" target="_blank">Mr.Sirichai Janpan</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/money_system/assets/js/core/jquery.min.js"></script>
  <script src="/money_system/assets/js/core/popper.min.js"></script>
  <script src="/money_system/assets/js/core/bootstrap.min.js"></script>
  <script src="/money_system/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="/money_system/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/money_system/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/money_system/assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="/money_system/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
     

    });
  </script>
</body>

</html>
