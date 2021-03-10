@extends('paymentlayout')

@section('content')
<div class="main-content">
  <div class="header py-7 py-lg-8 pt-lg-1">
    <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <div class="card-profile-image mb-5">
                <img src="{{url('/')}}/asset/profile/{{$merchant->image}}" class="">
            </div>
            <h3 class="text-default font-weight-bolder text-uppercase">{{$link->name}}</h3> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt--8 pb-5 mb-0">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
          @foreach($errors->all() as $error)
          <span class="alert-text">{{$error}}</span>
          @endforeach
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="card card-profile bg-white border-0 mb-5">
          <div class="card-body pt-7 px-5">
            <div class="text-center text-dark mb-2">
              <p>{{$link->description}}</p>
            </div>
            <form role="form" action="{{ route('send.single')}}" method="post" id="modal-details">
              @csrf
              @if($link->amount==null)
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-future">{{$currency->symbol}}</span>
                  </div>
                  <input class="form-control" placeholder="0.00" id="xx" type="number" name="amount" required>
                </div>
              </div>
              @else
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-future">{{$currency->symbol}}</span>
                  </div>
                  <input class="form-control" readonly type="number" name="amount" value="{{$link->amount}}">
                </div>
              </div>
              @endif
              <input type="hidden" value="{{$link->ref_id}}" name="link">
              <div class="modal fade" id="fund" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-0">
                      <div class="accordion" id="accordionExample">
                        <div class="card bg-white border-0 mb-0">
                          <!--Pay with Card-->
                          <div class="card-header" id="headingOne">
                            <div class="text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <h4 class="mb-0 font-weight-bolder">Card</h4>
                            </div>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              <div class="row">                           
                                <div class="col-lg-6">
                                    <div class="card-wrapper mb-5"></div>
                                </div>
                                <div class="col-lg-6">
                                  <form action="{{ route('send.single')}}" role="form" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{$stripe->val1}}" id="payment-form">
                                    @csrf
                                    @if (!Auth::guard('user')->check())
                                    <div class="form-group row">                                  
                                      <div class="col-xs-12 col-md-12 form-group required">
                                        <input type="email" class="form-control input-lg custom-input" name="email" placeholder="Email Address" autocomplete="off" required/>
                                      </div>
                                      <div class="col form-group required">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required/>
                                      </div>                                  
                                      <div class="col form-group required">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required/>
                                      </div>
                                    </div> 
                                    @endif
                                    <div class="form-group row">
                                      <div class="col-lg-12">
                                          <input id="cc-number" type="tel" class="form-control" name="number" placeholder="{{__('Card Number')}}" autocomplete="cc-number" required />
                                      </div>
                                    </div> 			  			  
                                    <div class="form-group row">
                                      <div class="col-lg-6">
                                          <input id="cc-exp" type="tel" class="form-control" name="expiry" placeholder="{{__('MM / YY')}}" autocomplete="off" required/>
                                      </div>
                                      <div class="col-lg-6">
                                          <input id="cc-cvc" type="tel" class="form-control" name="cvc" placeholder="{{__('CVC')}}" autocomplete="off" required/>
                                      </div>
                                    </div>                		
                                    <input type="hidden" value="card" name="type">  	                
                                    <div class="text-center">
                                      <button type="submit" class="btn btn-neutral btn-block" form="modal-details">{{__('Pay')}} <span id="cardresult"></span></button><br>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!--Account Balance-->
                          <hr>
                          <div class="card-header" id="headingTwo">
                              <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="mb-0 font-weight-bolder">Pay with Account</h4>
                              </div>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body text-center">
                              @if (Auth::guard('user')->check())
                                <form method="post" role="form" action="{{route('send.single')}}">
                                  @csrf
                                  <h4 class="mb-0">Account Balance</h4>
                                  <h1 class="mb-1 text-muted font-weight-bolder">{{$currency->symbol.number_format($user->balance)}}</h1>
                                  <input type="hidden" value="account" name="type">
                                  <input type="hidden" value="{{$link->ref_id}}" name="link">
                                  <input type="hidden" name="amount" id="castro" value="{{$link->amount}}">
                                  <div class="text-center">
                                    <button type="submit" onclick="second_modal()" class="btn btn-neutral btn-block">Pay now</button>
                                  </div>
                                </form>
                              @else
                                @php Session::put('oldLink', url()->current()); @endphp
                                <h3 class="mb-3 text-muted font-weight-bolder">Login to make payment</h3>
                                <a href="{{route('login')}}" class="btn btn-neutral btn-block">Login</a>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="button" data-toggle="modal" data-target="#fund" class="btn btn-neutral btn-block my-4"><i class="fal fa-external-link"></i> {{__('Pay')}}</button>
              </div>
            </form>
            <div class="text-center">
              @if($merchant->facebook!=null)
                <a href="{{$merchant->facebook}}"><i class="sn fab fa-facebook"></i></a>   
              @endif 
              @if($merchant->twitter!=null)                      
                <a href="{{$merchant->twitter}}"><i class="sn fab fa-twitter"></i></a>
              @endif      
              @if($merchant->linkedin!=null)                     
                <a href="{{$merchant->linkedin}}"><i class="sn fab fa-linkedin"></i></a> 
              @endif     
              @if($merchant->instagram!=null)                        
                <a href="{{$merchant->instagram}}"><i class="sn fab fa-instagram"></i></a>   
              @endif 
              @if($merchant->youtube!=null)                          
                <a href="{{$merchant->youtube}}"><i class="sn fab fa-youtube"></i></a>  
              @endif                        
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
@stop