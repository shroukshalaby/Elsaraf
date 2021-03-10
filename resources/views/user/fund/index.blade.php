
@extends('paymentlayout')

@section('content')
<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="header py-7 py-lg-6 pt-lg-1">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt--8 pb-5 mb-0">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-7">
          <div class="accordion" id="accordionExample">
            <div class="card bg-white border-0 mb-0">
              <div class="card-header" id="headingOne">
                <div class="text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="mb-0 font-weight-bolder">Card</h4>
                </div>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row">                           
                    <div class="col-lg-6 col-md-12">
                      <div class="demo-container">
                          <div class="card-wrapper mb-5"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <form action="{{ route('card')}}" role="form" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{$stripe->val1}}" id="payment-form">
                          @csrf
                          <div class="form-group row">
                              <div class="col-md-12">
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">{{$currency->symbol}}</span>
                                      </div>
                                      <input type="number" step="any" class="form-control" name="amount" id="cardamount" onkeyup="cardcharge()" placeholder="0.00" autocomplete="off" required> 
                                      <input type="hidden" value="{{$stripe->charge}}" id="charge"> 
                                      <div class="input-group-append">
                                          <span class="input-group-text">.00</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-12">
                                  <input type="text" class="form-control" name="name" placeholder="{{__('Name on Card')}}" required/>
                              </div>
                          </div> 
                          <div class="form-group row">
                              <div class="col-lg-12">
                                  <input id="cc-number" type="tel" class="form-control" name="number" placeholder="{{__('Card Number')}}" autocomplete="cc-number" required />
                              </div>
                          </div> 			  			  
                          <div class="form-group row">
                              <div class="col-lg-6 mb-4">
                                  <input id="cc-exp" type="tel" class="form-control" name="expiry" placeholder="{{__('MM / YY')}}" autocomplete="off" required/>
                              </div>
                              <div class="col-lg-6">
                                  <input id="cc-cvc" type="tel" class="form-control" name="cvc" placeholder="{{__('CVC')}}" autocomplete="off" required/>
                              </div>
                          </div>                	  	                
                          <div class="text-center">
                          <button type="submit" class="btn btn-neutral btn-block">{{__('Pay')}} <span id="cardresult"></span></button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>             
              @if($adminbank->status==1)
                <hr>
                <div class="card-header" id="headingTwo">
                  <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h4 class="mb-0 font-weight-bolder">Transfer</h4>
                  </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body text-center">
                    <h4 class="mb-0 text-primary">{{$adminbank->bank_name}}</h4>
                    <h1 class="mb-1 text-muted font-weight-bolder">{{$adminbank->acct_no}}</h1>
                    <h4 class="mb-2 text-muted">{{$adminbank->name}}</h4>
                    <form method="post" action="{{route('bank_transfersubmit')}}">
                      @csrf
                      <div class="form-group row">
                        <div class="col-lg-8 offset-lg-2">
                          <div class="input-group">
                            <span class="input-group-prepend">
                              <span class="input-group-text">{{$currency->symbol}}</span>
                            </span>
                            <input type="number" step="any" name="amount" max-length="10" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-neutral btn-block">I'hv Sent Money</button>
                      </div>
                    </form>
                  </div>
                </div>
              @endif
              <hr>
              <div class="card-header" id="headingThree">
                  <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h4 class="mb-0 font-weight-bolder">Crypto Currency</h4>
                  </div>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <form method="post" action="{{ route('crypto')}}">
                    @csrf
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">{{$currency->symbol}}</span>
                          </span>
                          <input type="number" step="any" name="amount" max-length="10" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <select class="form-control select" name="crypto" data-dropdown-css-class="bg-primary" data-fouc required>
                          @if($btc->status==1)
                            <option value='505'>Bitcoin</option>
                          @endif
                          @if($eth->status==1)
                            <option value='506'>Ethereum</option>
                          @endif
                        </select>
                      </div>
                    </div>          
                    <div class="text-center">
                      <button type="submit" class="btn btn-neutral btn-block">{{__('Pay')}}</button>
                    </div>
                  </form>
                </div>
              </div>              
              <hr>
              <div class="card-header" id="headingFour">
                  <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h4 class="mb-0 font-weight-bolder">Other</h4>
                  </div>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <form method="post" action="{{ route('others')}}">
                    @csrf
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">{{$currency->symbol}}</span>
                          </span>
                          <input type="number" step="any" name="amount" max-length="10" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <select class="form-control select" name="others" required>
                          @if($paypal->status==1)<option value='101'>Paypal</option>@endif
                          @if($paystack->status==1)<option value='107'>Paystack</option>@endif
                          @if($flutter->status==1)<option value='108'>Flutter</option>@endif
                        </select>
                      </div>
                    </div>          
                    <div class="text-center">
                      <button type="submit" class="btn btn-neutral btn-block">{{__('Pay')}}</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>




@stop