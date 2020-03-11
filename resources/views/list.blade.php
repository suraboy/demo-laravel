@extends('layout.backend')
@section('content')
    @if($status === true)
        <h4>Example Auto Search DataTable</h4>
    @else
        <h4 class="text-danger">ERROR</h4>
    @endif

    <table class="table datatable-selection-single" id="healthcheck-datatable" width="100%">
        <thead>
        <tr>
            <th class="text-header">No.</th>
            <th class="text-header" style="width: 150px;">Type</th>
            <th class="text-header">Service</th>
            <th class="text-header">URL</th>
            <th class="text-header" style="width: 90px;">Time(s)</th>
            <th class="text-header">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($config as $key => $item)
            <tr class="{{ !$item['status'] ? 'table-danger' : '' }}">
                <td class="text-center"></i> {{++$key}}</td>
                <td class="text-content"><i class="fa fa-server"></i> {!! camel_case($item['type'])!!}</td>
                <td class="text-content">{!! ucfirst($item['name']) !!}</td>
                <td class="text-content">{{ !empty($item['config']['url']) ? $item['config']['url']:"" }}
                    @if(isset($item['needResult']) && $item['needResult'] === true)
                        @if(count($item['data']) > 1)
                            @foreach ($item['data'] as $key => $value)
                                @if($key < 2)
                                    <div>
                                        <i class="fa fa-tag"></i>
                                        <span>{{ $value }}</span>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div>
                                <i class="fa fa-tag"></i>
                                <span>{{ $item['data'] }}</span>
                            </div>
                        @endif
                    @endif
                </td>
                <td class="text-center">{{ $item['time'] }} sec</td>
                @if ($item['status'])
                    <td class="text-center">
                        <span class="badge bg-success">Success</span>
                    </td>
                @else
                    <td class="text-center">
                        <span class="badge bg-danger">Error</span>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    var j = jQuery.noConflict();
    j(document).ready(function () {
        j("#healthcheck-datatable").DataTable();
    });
</script>
