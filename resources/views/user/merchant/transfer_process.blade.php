@extends('paymentlayout')

@section('content')
<div class="main-content">
    <div class="header py-7 py-lg-5 pt-lg-1">
        <div class="container">
            <div class="header-body text-center mb-7">

            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-0">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="card bg-white border-0 mb-0">
                        <div class="card-header" id="headingOne">
                            <div class="text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="h3 mb-0 font-weight-bolder">Card</h4>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            <div class="card-wrapper mb-5"></div>
                                <form action="{{ route('pay.merchant')}}" role="form" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{$stripe->val1}}" id="payment-form">
                                @csrf
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
                                    <input type="hidden" name="amount" value="{{$link->amount*$link->quantity}}">
                                    <input type="hidden" value="{{$link->reference}}" name="link"> 	                
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-neutral btn-block"><i class="fal fa-external-link"></i> {{__('Pay')}}</button><br>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Account Balance-->
                        <hr>
                        <div class="card-header" id="headingTwo">
                            <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="h3 mb-0 font-weight-bolder">Pay with Account</h4>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body text-center">
                            @if (Auth::guard('user')->check())
                                <form method="post" role="form" action="{{route('pay.merchant')}}">
                                @csrf
                                <h4 class="mb-0">Account Balance</h4>
                                <h1 class="mb-1 text-muted">{{$currency->symbol.number_format($user->balance)}}</h1>
                                <input type="hidden" value="account" name="type">
                                <input type="hidden" value="{{$link->reference}}" name="link">
                                <input type="hidden" name="amount" value="{{$link->amount*$link->quantity}}">
                                <div class="text-center">
                                    <button type="submit" onclick="second_modal()" class="btn btn-neutral btn-block">Pay now</button>
                                </div>
                                </form>
                            @else
                                @php Session::put('oldLink', url()->current()); @endphp
                                <h3 class="mb-3 text-muted">Login to make payment</h3>
                                <a href="{{route('login')}}" class="btn btn-neutral btn-block">Login</a>
                            @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-4 order-first-sm">
                <div class="card">
                    <div class="card-body">          
                        <div class="row justify-content-between align-items-center mb-0">
                            <div class="col-6">
                                <h3 class="h3 font-weight-bolder">{{$link->title}}</h3>
                            </div>                            
                            <div class="col-6 text-right">
                                <span class="avatar avatar-castro rounded-circle">
                                    <img src="{{url('/')}}/asset/profile/{{$merchant->image}}" alt="merchant"/>
                                </span>
                            </div>
                        </div>
                        <div class="row justify-content-between align-items-center mb-3">
                            <div class="col-8">
                                <span class="form-text text-xl">{{$currency->symbol}} {{number_format($link->amount*$link->quantity)}}</span>
                            </div>
                        </div>
                        <small class="text-muted">by {{$merchant->business_name}} on {{date("h:i:A j, M Y", strtotime($link->created_at))}}</small>
                        <p class="mb-3 text-sm">{{$link->description}}</p>
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