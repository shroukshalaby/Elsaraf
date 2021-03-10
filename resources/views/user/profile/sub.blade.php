
@extends('userlayout')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-8">
        <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> {{__('Create Sub Account')}}</a>
      </div>
    </div>
    <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="mb-0 font-weight-bolder">{{__('Add Sub Account')}}</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('submit.subacct')}}" method="post"> 
              @csrf
              <div class="form-group row">
                <div class="col-lg-12">
                  <input type="text" name="subname" class="form-control" placeholder="Subaccount's Name">
                </div>
              </div>              
              <div class="form-group row">
                <div class="col-lg-12">
                  <input type="email" name="subemail" class="form-control" placeholder="Subaccount's Email">
                </div>
              </div>      
              <div class="form-group row">
                <div class="col-lg-12">
                  <select class="form-control select" name="xcountry" id="xcountry" required>
                      <option value="">{{__('Subaccount Country')}}</option> 
                        @foreach($country as $val)
                          <option value="{{$val->country_id}}">{{$val->real['name']}}</option>
                        @endforeach
                  </select>
                </div>
              </div>          
              <div class="form-group row" id="splittype">
                <div class="col-lg-12">
                  <select class="form-control select" name="type" id="spt" required>
                    <option value=''>{{__('Split Type')}}</option>
                    <option value='1'>Flat</option>
                    <option value='2'>Percentage</option>
                  </select>
                </div>
              </div>                  
              <div class="text-right">
                <button type="submit" class="btn btn-neutral btn-block">{{__('Save')}}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header header-elements-inline">
        <h3 class="mb-0 font-weight-bolder">{{__('Sub Accounts')}}</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead>
            <tr>
              <th>{{__('S / N')}}</th>
              <th></th>
              <th>{{__('Name')}}</th>
              <th>{{__('Email')}}</th>
              <th>{{__('Bank')}}</th>
              <th>{{__('Type')}}</th>
              <th>{{__('ACCT No')}}</th>
              <th>{{__('ACCT Name')}}</th>
              <th>{{__('Active')}}</th>
              <th>{{__('Date')}}</th>
            </tr>
          </thead>
          <tbody>  
            @foreach($sub as $k=>$val)
              <tr>
                <td>{{++$k}}.</td>
                <td class="">
                    <div class="dropdown">
                        <a class="text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-chevron-circle-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          @if($val->active==1)
                            <a class='dropdown-item' href="{{route('subacct.unpublish', ['id' => $val->id])}}"><i class="fal fa-ban"></i>{{ __('Disable')}}</a>
                          @else
                            <a class='dropdown-item' href="{{route('subacct.publish', ['id' => $val->id])}}"><i class="fal fa-check"></i>{{ __('Activate')}}</a>
                          @endif
                            <a class="dropdown-item" href="{{route('user.subaccttrans', ['id' => $val->id])}}"><i class="fal fa-sync"></i>{{__('Transactions')}}</a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#delete{{$val->id}}" href=""><i class="fal fa-trash"></i>{{__('Delete')}}</a>
                        </div>
                    </div>
                </td>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->dbank['name']}}</td>
                <td>@if($val->type==1){{$currency->symbol.$val->amount}} From Every Payout @else {{$val->amount}}% of Every Payout  @endif</td>
                <td>{{$val->acct_no}}</td>
                <td>{{$val->acct_name}}</td>
                <td>@if($val->active==0) <span class="badge badge-pill badge-danger">Disabled</span> @elseif($val->active==1) <span class="badge badge-pill badge-success">Active</span>@endif</td>
                <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td> 
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @foreach($sub as $k=>$val)
    <div class="modal fade" id="delete{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card bg-white border-0 mb-0">
                                <div class="card-header">
                                    <h3 class="mb-0 font-weight-bolder">{{__('Delete Sub Account')}}</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="mb-0 text-xs">{{__('Are you sure you want to delete this sub account?')}}</span>
                                </div>
                                <div class="card-body">
                                    <a  href="{{route('subacct.delete', ['id' => $val->id])}}" class="btn btn-danger btn-block">{{__('Proceed')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-form{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h3 class="mb-0">{{__('Edit Sub Account')}}</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form role="form" action="{{route('subacct.edit')}}" method="post"> 
                            @csrf
                            <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" name="subname" placeholder="Sub account name" class="form-control" value="{{$val['name']}}">
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder="Bank name" class="form-control" value="{{$val['bank']}}">
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" name="acct_name" class="form-control" placeholder="Account Name" value="{{$val['acct_name']}}">
                            </div>
                            </div>                           
                            <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="text" pattern="\d*" name="acct_no" placeholder="Account number" class="form-control" value="{{$val['acct_no']}}" maxlength="12">
                                <input type="hidden" name="id" value="{{$val['id']}}">
                            </div>
                            </div>                    
                            <div class="form-group row">
                            <div class="col-lg-10">
                                <input type="text" name="swift" placeholder="Swift code" class="form-control" placeholder="Swift Code" value="{{$val['swift_code']}}">
                                <input type="hidden" name="id" value="{{$val['id']}}">
                            </div>
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-neutral btn-block">{{__('Update Acount')}}</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

@stop