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
            <div class="col-md-12">
                <div class="form-group has-feedback">
                    <label>ค้นหา :</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="ค้นหาช่วงเวลา" name="created_at"
                                   id="created_at">
                        </div>
                        <div class="col-md-9" align="left">
                            <button id="exportOrderTransaction"
                                    class="btn btn-primary" disabled>
                                <i class="fas fa-download fa-sm text-white-50"></i> Export Report</button>
                        </div>
                    </div>
                </div>
            </div>
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
                    </tr>
                    <tr>
                        <td>2020-04-11</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    <tr>
                        <td>2020-04-10</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    <tr>
                        <td>2020-04-12</td>
                        <td>42</td>
                        <td>120</td>
                        <td>2</td>
                        <td>2000.00</td>
                    </tr>
                    <tr>
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
@stop
@push('scripts')
    @include('pages.report-agent.js.lists-script')
@endpush
