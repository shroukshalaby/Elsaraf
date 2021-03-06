
@extends('userlayout')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0 font-weight-bolder">{{__('Bank transfer logs')}}</h3>
        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-buttons">
            <thead class="">
                <tr>
                    <th>{{__('S/N')}}</th>
                    <th>{{__('Reference ID')}}</th>
                    <th>{{__('Amount')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Created')}}</th>
                    <th>{{__('Last updated')}}</th>
                </tr>
                </thead>
                <tbody>  
                @foreach($bank_transfer as $k=>$val)
                <tr>
                    <td>{{++$k}}.</td>
                    <td>#{{$val->trx}}</td>
                    <td>{{$currency->symbol.number_format($val->amount)}}</td>
                    <td>@if($val->status==0) <span class="badge badge-pill badge-danger">pending</span> @elseif($val->status==1) <span class="badge badge-pill badge-success">successful</span> @elseif($val->status==2) refunded @endif</td>
                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

@stop