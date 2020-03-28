<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>BackOffice</title>

   <!-- Global stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
   <link href="{{ asset('assets') }}/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
   <link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet" type="text/css">
   <link href="{{ asset('assets') }}/css/core.css" rel="stylesheet" type="text/css">
   <link href="{{ asset('assets') }}/css/components.css" rel="stylesheet" type="text/css">
   <link href="{{ asset('assets') }}/css/colors.css" rel="stylesheet" type="text/css">
   <link href="{{ asset('assets') }}/css/custom.css" rel="stylesheet" type="text/css">
   <!-- /global stylesheets -->

   <!-- Core JS files -->
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/loaders/pace.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/core/libraries/jquery.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/core/libraries/bootstrap.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/loaders/blockui.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/ui/nicescroll.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/ui/drilldown.js"></script>
   <!-- /core JS files -->

   <!-- Theme JS files -->
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/visualization/d3/d3.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/visualization/d3/d3_tooltip.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/forms/styling/switchery.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/forms/styling/uniform.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/ui/moment/moment.min.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/plugins/pickers/daterangepicker.js"></script>

   <script type="text/javascript" src="{{ asset('assets') }}/js/core/app.js"></script>
   <script type="text/javascript" src="{{ asset('assets') }}/js/pages/dashboard.js"></script>
   <!-- /theme JS files -->

</head>

<body>

    <!-- Page header -->
    <div class="page-header">
        <div class="page-header-content ">
            <div class="page-title">
                @yield('breadcrumb')
                <!-- <h4>
                    <i class="icon-arrow-left52 position-left"></i>
                    <span class="text-semibold">Home</span> - Dashboard
                    <small class="display-block">Good morning, Victoria Baker!</small>
                </h4> -->
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                   <!--  <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Page container -->
    <div class="page-container npt">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
</body>
</html>
