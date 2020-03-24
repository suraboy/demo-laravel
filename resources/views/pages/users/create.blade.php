<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')
@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4>User Management
                <small class="display-block">Create user</small>
            </h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Lists</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection('breadcrumb')
@section('content')
    @if(\Session::has('alert-success'))
        <div class="alert alert-success" role="alert">
            <h4>Success!</h4>
            <p>{{ Session::get('alert-success') }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="panel registration-form">
                <form action="{{route('users.insert')}}" id=frm_user_create" method="POST">
                    {!! csrf_field() !!}
                    <div class="panel panel-default">
                        <div class="nav-tabs-custom" style="margin-bottom: 0px;">
                            <ul class="nav nav-tabs" id="group-user">
                                <li class="active" name="user_info">
                                    <a data-toggle="tab" href="#user_info">Profile</a>
                                </li>
                                <li name="user_login"><a data-toggle="tab" href="#user_login">Account</a></li>
                            </ul>

                            <div class="tab-content" id="group-content-user">
                                <div id="user_info" class="tab-pane active">
                                    @include('pages.users.components.user_info')
                                </div>
                                <div id="user_login" class="tab-pane">
                                    @include('pages.users.components.user_login')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-xs-12 form-group">
                            <button type="submit" id="btn-user-submit" class="btn btn-success pull-right"
                                    style="margin-top: 10px">
                                <i class="fa fa-save" role="presentation" aria-hidden="true"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection('content')
@push('styles')
@include('pages.users.css.user')
@endpush
@include('pages.users.js.create-script')
