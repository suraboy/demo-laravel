<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')
@section('breadcrumb')

    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">จัดการร้านค้า
            </h4>
            <i class="now-ui-icons arrows-1_minimal-right"></i>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: transparent!important">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">จัดการร้านค้า</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection('breadcrumb')
@section('content')
    @include('commons.alert')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{route('partners.update')}}" id=frm_partner_edit" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id">
                <div class="panel panel-default">
                    <div class="nav-tabs-custom" style="margin-bottom: 0px;">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab"
                                   data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">Get Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab"
                                   data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                   aria-selected="false">เลือกสินค้า</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active content" id="home" role="tabpanel" aria-labelledby="home-tab">
                                @include('pages.shops.components.getlink')
                            </div>
                            <div class="tab-pane fade content" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <img src="{{asset('img')}}/draf.jpeg" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="col-xs-12 form-group" align="right">--}}
{{--                        <button type="submit" id="btn-user-submit" class="btn btn-success"--}}
{{--                                style="margin-top: 10px">--}}
{{--                            <i class="fa fa-save" role="presentation" aria-hidden="true"></i> ถัดไป--}}
{{--                        </button>--}}
{{--                    </div>--}}
                </div>
            </form>
        </div>
    </div>
@endsection('content')
@push('styles')
    @include('pages.shops.css.shop')
@endpush

@include('pages.shops.js.info-script')

