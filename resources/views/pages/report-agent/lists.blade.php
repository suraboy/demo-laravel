<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')

@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">รายงานสถิติ
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
            <h6 class="m-0 font-weight-bold text-primary">รายงานสถิติ</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>วัน/เดือน/ปี</th>
                        <th>จำนวนการเข้าชม (ครั้ง)</th>
                        <th>จำนวนการคลิก (ครั้ง)</th>
                        <th>ยอดสั่งซื้อ</th>
                        <th>ยอดการขาย</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>วัน/เดือน/ปี</th>
                        <th>จำนวนการเข้าชม (ครั้ง)</th>
                        <th>จำนวนการคลิก (ครั้ง)</th>
                        <th>ยอดสั่งซื้อ</th>
                        <th>ยอดการขาย</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr> <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('content')
