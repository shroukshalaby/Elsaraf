@extends('paymentlayout')

@section('content')

<div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-6 pt-lg-1">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <div class="card-profile-image mb-5">
                  <img src="{{url('/')}}/asset/profile/{{$merchant->image}}" class="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-0">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-7">
          <div class="card card-profile bg-white border-0 mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
              </div>
            </div>
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col-8">
                      <a href="javascript:void;" onclick="window.print();" class="btn btn-sm btn-neutral"><i class="fa fa-print"></i> {{__('Print')}}</a>
                    </div>
                    <div class="col-4 text-right">
                      @if($invoice->status==1)
                        <span class="badge badge-success"><i class="fa fa-check"></i> {{__('Paid')}}</span>
                      @elseif($invoice->status==0)
                        <span class="badge badge-danger"><i class="fa fa-spinner"></i> {{__('Pending')}}</span>                    
                      @endif
                    </div>
                </div>
            </div>
            <div class="card-body">
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <div class="my-4">
                    <span class="surtitle">{{__('FROM')}} {{$invoice->user->email}}</span><br>
                    <span class="surtitle ">{{__('TO')}} {{$invoice->email}}</span>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="my-4">
                    <span class="surtitle ">{{__('SENT ON')}} {{$invoice->sent_date}}</span><br>
                    <span class="surtitle ">{{__('DUE DATE')}} {{$invoice->due_date}}</span>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <div class="my-4">
                    <span class="surtitle ">{{__('INVOICE ITEM')}}</span><br>
                    <span class="surtitle ">{{__('QUANTITY')}}</span><br>
                    <span class="surtitle ">{{__('AMOUNT')}}</span><br>
                    @if($invoice->notes!=null)
                    <span class="surtitle ">{{__('NOTES')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-auto">
                  <div class="my-4">
                    <span class="surtitle ">{{$invoice->item}}</span><br>
                    <span class="surtitle ">{{$invoice->quantity}}</span><br>
                    <span class="surtitle ">{{$currency->symbol.$invoice->amount}}</span><br>
                    @if($invoice->notes!=null)
                    <span class="surtitle ">{{$invoice->notes}}</span>
                    @endif
                  </div>
                </div>
              </div>
              <hr>
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <div class="my-4">
                    <span class="surtitle ">{{__('SUBTOTAL')}}</span><br>
                    <span class="surtitle ">{{__('DISCOUNT')}}</span></br>
                    <span class="surtitle ">{{__('TAX')}}</span>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="my-4">
                    <span class="surtitle ">{{$currency->symbol.number_format($invoice->amount*$invoice->quantity)}}</span><br>
                    <span class="surtitle ">- {{$currency->symbol.number_format($invoice->amount*$invoice->quantity*$invoice->discount/100)}} ({{$invoice->discount}}%)</span><br>
                    <span class="surtitle ">+ {{$currency->symbol}}{{($invoice->amount*$invoice->quantity*$invoice->tax/100)}} ({{$invoice->tax}}%)</span>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <div class="my-4">
                    <span class="surtitle">{{__('TOTAL')}}</span>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="my-4">
                    <span class="surtitle ">{{$currency->symbol.number_format($total)}}</span>
                  </div>
                </div>
              </div>    
              @if($invoice->status==0) 
                @if (Auth::guard('user')->check())
                  @if(Auth::guard('user')->user()->email==$invoice->email)  
                  <form role="form" action="{{ route('process.invoice')}}" method="post" id="modal-details"> 
                    @csrf          
                    <input type="hidden" value="{{$invoice->ref_id}}" name="link">
                    <div class="modal fade" id="fund" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                      <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
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
                                        <form action="{{ route('process.invoice')}}" role="form" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{$stripe->val1}}" id="payment-form">
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
                                      <form method="post" role="form" action="{{route('process.invoice')}}">
                                        @csrf
                                        <h4 class="mb-0">Account Balance</h4>
                                        <h1 class="mb-1 text-muted">{{$currency->symbol.number_format($user->balance)}}</h1>
                                        <input type="hidden" value="account" name="type">
                                        <input type="hidden" value="{{$invoice->ref_id}}" name="link">
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
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="button" data-toggle="modal" data-target="#fund" class="btn btn-neutral btn-block my-4"><i class="fal fa-external-link"></i> {{__('Pay')}}</button>
                    </div>
                  </form>
                  @else
                  <h3 class="mb-3 text-muted font-weight-bolder">Invalid Recipient</h3>
                  @endif
                @else
                <h3 class="mb-3 text-muted font-weight-bolder">Login to make payment</h3>
                <a href="{{route('login')}}" class="btn btn-neutral btn-block">Login</a>
                @endif
              @endif  
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