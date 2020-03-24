<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')
@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">User Management
                <small class="display-block">User Lists Information</small>
            </h4>
            <i class="now-ui-icons arrows-1_minimal-right"></i>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lists</li>
                    </ol>
                </nav>
                <a class="btn btn-success" href="{{route('users.create')}}" style="margin-left:10px;"><i class="fa fa-plus"></i> Create User</a>
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
                            <th class="text-header">Action</th>
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
                                <td>
                                    <a href='{{route("users.info",["id"=>$item['id']])}}' class="btn btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-danger" onclick="deletedata({{$item['id']}})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
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
        $("#users").addClass("selected");
    } );

    function deletedata(id) {
        console.log(id);
        if(confirm("Please Confirm to Delete data")){
            j("#del_user_id").val(id);
            j("#delete").submit();
        }
    }
</script>

<form id="delete" method="POST" action='{{route("users.delete")}}'>
    <input type="hidden" name="id" id="del_user_id">
</form>
