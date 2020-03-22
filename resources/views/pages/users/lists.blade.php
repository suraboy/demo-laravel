<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')
@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">User Management</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection('breadcrumb')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <!-- TEXT -->
                </div>
                <div class="card-body ">
                    <table class="table datatable-selection-single" id="users-datatable" width="100%">
                        <thead>
                        <tr>
                            <th class="text-header">Created Date</th>
                            <th class="text-header">Username</th>
                            <th class="text-header">Name</th>
                            <th class="text-header">Lastname</th>
                            <th class="text-header">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $item)
                            <tr>
                                <td>{{$item['created_at']}}</td>
                                <td>{{$item['username']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['last_name']}}</td>
                                <td>{{$item['email']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    var j = jQuery.noConflict();
    j(document).ready(function() {
        j("#users-datatable").DataTable();
        $("#user").addClass("selected");
    } );
</script>
