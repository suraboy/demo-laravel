<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')
@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4>Dashboard
                <small class="display-block">The first page you see after login</small>
            </h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection('breadcrumb')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                            <h6 class="text-white">Dashboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h6 class="text-white">Charts</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                            <h6 class="text-white">Widgets</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                            <h6 class="text-white">Tables</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#index").addClass("selected");

    });
</script>
