
@extends('userlayout')

@section('content')

@php
  $upd=App\Models\Virtual::whereUser_id(Auth::guard('user')->user()->id)->orderBy('id', 'DESC')->get();
  foreach($upd as $trx){
    $data = array("id"=>$trx->card_hash);
    $check = new Laravel\Flutterwave\VirtualCard();
    $getCard = $check->getCard($data);
    $result = $getCard;
    if($result['data']['is_active']==false){
        $trx->status=0;
        $trx->save();
    }
    $amo=str_replace( ',', '', $result['data']['amount']);
    if($amo<$trx->amount){
      if($result['data']['is_active']==true){
        $trx->amount=$amo;
        $trx->save();
      }else{
        $trx->amount=0;
        $trx->save();
      }
    }
  }
@endphp
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-5">
        <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> {{__('Create Card')}}</a>
      </div>
    </div>
    <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-white border-0 mb-0">
              <div class="card-header">
                <h3 class="mb-0 font-weight-bolder">{{__('New Virtual Card')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
                <p class="form-text text-xs">Card creation charge is {{$set->virtual_createcharge}}% of amount entitled to card. Maximum cash a card can hold is {{$currency->name.number_format($set->vc_max)}}.</p>
              </div>
              <div class="card-body">
                <form method="post" action="{{route('create.virtual')}}">
                  @csrf
                  <div class="form-group row">
                    <label class="col-form-label col-lg-12">{{__('Amount')}}</label>
                    <div class="col-lg-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{$currency->symbol}}</span>
                            </div>
                            <input type="number" name="amount" class="form-control" min="{{$set->vc_min}}" max="{{$set->vc_max}}" required>
                        </div>
                    </div>
                  </div>                                 
                  <div class="form-group row">
                    <label class="col-form-label col-lg-12">{{__('State')}}</label>
                    <div class="col-lg-12">
                      <input type="text" name="state" class="form-control" required>
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <label class="col-form-label col-lg-12">{{__('City')}}</label>
                    <div class="col-lg-12">
                      <input type="text" name="city" class="form-control" required>
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <label class="col-form-label col-lg-12">{{__('Zip code')}}</label>
                    <div class="col-lg-12">
                      <input type="number" name="zip_code" class="form-control" required>
                    </div>
                  </div>                 
                  <div class="text-right">
                    <button type="submit" class="btn btn-neutral btn-block my-4">{{__('Create Card')}}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <div class="row">
      @foreach($card as $k=>$val) 
        <div class="col-lg-4">
          <div class="card">
            <!-- Card body -->
            <div class="card-body">
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <span class="text-primary">{{$currency->symbol.number_format($val->amount, 2, '.', '')}}</span> @if($val->status==0) <span class="badge badge-pill badge-danger">Terminated</span> @elseif($val->status==1) <span class="badge badge-pill badge-success">Active</span>@endif
                </div>
                <div class="col-auto">
                  <a class="mr-0 text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fal fa-chevron-circle-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-left">
                    <a href="{{route('transactions.virtual', ['id'=>$val->id])}}" class="dropdown-item"><i class="fal fa-sync"></i>{{__('Transactions')}}</a>
                    @if($val->status==1)
                        <a data-toggle="modal" data-target="#modal-formfund{{$val->id}}" href="" class="dropdown-item"><i class="fal fa-money-bill-wave-alt"></i>{{__('Fund Card')}}</a>
                        <a data-toggle="modal" data-target="#modal-more{{$val->id}}" href="" class="dropdown-item"><i class="fal fa-credit-card"></i>{{__('Card Details')}}</a>
                        <a href="{{route('terminate.virtual', ['id'=>$val->card_hash])}}" class="dropdown-item"><i class="fal fa-ban"></i>{{__('Terminate')}}</a>
                    @endif
                  </div>
                </div>
              </div>             
              <div class="my-4">
                <span class="h6 surtitle text-gray mb-2">
                {{$val->name_on_card}} - {{$val->card_type}}
                </span>
                <div class="card-serial-number h1 text-primary">
                  <div>{{$val->card_pan}}</div>
                </div>
              </div>
              <div class="row">               
                <div class="col">
                  <span class="h6 surtitle text-gray">Expiry date</span>
                  <span class="d-block h3 text-primary">{{$val->expiration}}</span>
                </div>
                <div class="col">
                  <span class="h6 surtitle text-gray">CVV</span>
                  <span class="d-block h3 text-primary">{{$val->cvv}}</span>
                </div>                 
              </div>              
            </div>
          </div>
        </div>
      @endforeach   
    </div>
    @foreach($card as $k=>$val)
      <div class="modal fade" id="modal-formfund{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-white border-0 mb-0">
                <div class="card-header">
                    <h3 class="mb-0 font-weight-bolder">{{__('Add Funds to Virtual Card')}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('fund.virtual')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$val->card_hash}}">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-12">{{__('Amount')}}</label>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{$currency->symbol}}</span>
                                </div>
                                <input type="number" name="amount" class="form-control" max="{{$set->vc_max-$val->amount}}" required>
                            </div>
                            <p class="form-text text-xs">Charge is {{$set->virtual_charge}}%.</p>
                        </div>
                    </div>                 
                    <div class="text-right">
                        <button type="submit" class="btn btn-neutral btn-block my-4">{{__('Fund Card')}}</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
      </div>      
      <div class="modal fade" id="modal-more{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-white border-0 mb-0">
                <div class="card-header">
                    <h3 class="mb-0 font-weight-bolder">{{__('Card Details')}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <p>State: {{$val->state}}</p>
                    <p>City: {{$val->city}}</p>
                    <p>Zip Code: {{$val->zip_code}}</p>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
      </div> 
    @endforeach

@stop