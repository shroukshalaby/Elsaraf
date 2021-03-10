@extends('userlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">
        <h6 class="h2 d-inline-block mb-0">{{__('Request Money')}}</h6>
      </div>
      <div class="col-lg-6 col-5 text-right">
        <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> {{__('Create Request')}}</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="mb-0 font-weight-bolder">{{__('Request money')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('submit.request')}}" method="post" id="modal-details">
                  @csrf
                    <div class="form-group row">
                      <div class="col-lg-12">
                          <input type="email" name="email" class="form-control" placeholder="Email" required>
                          <span class="form-text text-xs">User must have an account on {{$set->site_name}}, Transfer charge is {{$set->transfer_charge}}% per transaction. Charge will be taken from money requested</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">{{$currency->symbol}}</span>
                          </span>
                          <input type="number" class="form-control" name="amount" placeholder="0.00" id="amount" required>
                          <span class="input-group-append">
                            <span class="input-group-text">.00</span>
                          </span>
                        </div>
                      </div>
                    </div>                   
                    <div class="text-right">
                    <button type="submit" class="btn btn-neutral btn-block" form="modal-details">{{__('Request money')}}</button>
                    </div>         
                </form>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">  
          @if(count($request)>0)
            @foreach($request as $k=>$val)
              <div class="col-md-6">
                <div class="card bg-white">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <!-- Title -->
                        <h5 class="h4 mb-1 font-weight-bolder">{{$val->ref_id}}</h5>
                      </div>
                      <div class="col-4 text-right">
                          @if($val->status==0 && $val->email==$user['email'])
                          <a href="{{url('/')}}/user/send_money/{{$val->confirm}}" class="btn btn-sm btn-neutral" title="Mark as received"><i class="fa fa-check"></i> {{__('Send')}}</a>
                          @endif
                      </div>
                    </div>
                    <div class="row">
                        <div class="col">
                          <p class="text-sm mb-0">{{__('Amount')}}: {{$currency->symbol.number_format($val->amount)}}</p>
                          @if($val->user_id==$user->id)
                          <p class="text-sm mb-0">{{__('To')}}: {{$val->email}}</p>
                          @else
                          <p class="text-sm mb-0">{{__('From')}}: {{$val->receiver['email']}}</p>
                          @endif
                          <p class="text-sm mb-2">{{__('Date')}}: {{date("Y/m/d h:i:A", strtotime($val->created_at))}}</p>
                          @if($val->status==1)
                            @if($val->user_id==$user->id)
                            <span class="badge badge-pill badge-primary">Charge: {{$currency->symbol.number_format($val->charge)}}</span>
                            @endif
                            <span class="badge badge-pill badge-success"><i class="fa fa-check"></i> {{__('Confirmed')}}</span>
                          @elseif($val->status==0)
                            <span class="badge badge-pill badge-danger"><i class="fa fa-spinner"></i> {{__('Pending')}}</span>                        
                          @endif
                        </div>
                      </div>
                  </div>
                </div>
              </div> 
            @endforeach
          @else
            <div class="col-md-12 mb-5">
              <div class="text-center mt-8">
                <div class="mb-3">
                  <img src="{{url('/')}}/asset/images/empty.svg">
                </div>
                <h3 class="text-dark">No Money Request</h3>
                <p class="text-dark text-sm card-text">We couldn't find any payouts money request to this account</p>
              </div>
            </div>
          @endif
        </div> 
        <div class="row">
          <div class="col-md-12">
          {{ $request->links() }}
          </div>
        </div>
      </div> 
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col text-center">
                <h4 class="mb-4 text-primary font-weight-bolder">
                {{__('Statistics')}}
                </h4>
                <span class="text-sm text-dark mb-0"><i class="fa fa-google-wallet"></i> {{__('Received')}}</span><br>
                <span class="text-xl text-dark mb-0">{{$currency->name}} {{number_format($sent)}}.00</span><br>
                <hr>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col">
                <div class="my-4">
                  <span class="surtitle">{{__('Pending')}}</span><br>
                  <span class="surtitle ">{{__('Total')}}</span>
                </div>
              </div>
              <div class="col-auto">
                <div class="my-4">
                  <span class="surtitle ">{{$currency->name}} {{number_format($pending)}}.00</span><br>
                  <span class="surtitle ">{{$currency->name}} {{number_format($total)}}.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop