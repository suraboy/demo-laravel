<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')

@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">รายการคำสั่งซื้อ
            </h4>
            <i class="now-ui-icons arrows-1_minimal-right"></i>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: transparent!important">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายการทั้งหมด</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection('breadcrumb')
@section('content')
    @include('commons.alert')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">รายการคำสั่งซื้อ</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>เลขการสั่งซื้อ</th>
                        <th>วันที่สั่งซื้อ</th>
                        <th>ชื่อผู้สั่งซื้อ</th>
                        <th>จำนวน</th>
                        <th>ยอดรวม (บาท)</th>
                        <th>สถานะ</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>เลขการสั่งซื้อ</th>
                        <th>วันที่สั่งซื้อ</th>
                        <th>ชื่อผู้สั่งซื้อ</th>
                        <th>จำนวน</th>
                        <th>ยอดรวม (บาท)</th>
                        <th>สถานะ</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order['order_id']}}</td>
                            <td>{{$order['request_timestamp']}}</td>
                            <td>{{$order['member_name']}}</td>
                            <td>{{$order['order_item']}}</td>
                            <td>{{$order['order_totalall']}}</td>
                            <td>{{$order->statusName->name_th}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('content')
