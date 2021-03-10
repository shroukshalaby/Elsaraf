@extends('paymentlayout')

@section('content')

<div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-6 pt-lg-1">
      <div class="container">
        <div class="header-body text-center mb-7">

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-0">
      <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{url('/')}}/asset/profile/{{$link->image}}" alt="Image placeholder">
                <div class="card-body">
                    <h5 class="h3 font-weight-bolder mb-0">Fundraiser for {{$link->name}}</h5>
                    <small class="text-muted">by {{$merchant->business_name}} on {{date("h:i:A j, M Y", strtotime($link->created_at))}}</small>
                    <p class="mb-3 text-sm">{{$link->description}}</p>
                    <div class="text-center mb-3">
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
                    @if($donated<$link->amount)               
                        <a href="#" class="btn btn-block btn-neutral mb-3" data-toggle="modal" data-target="#donation-page"><i class="fal fa-external-link"></i> Donate Now</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-8">
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
            <div class="card-body">
                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-8">
                        <span class="form-text text-xl font-weight-bolder">{{$currency->symbol}} {{number_format($link->amount)}} GOAL </span>
                    </div>
                    <div class="modal fade" id="donation-page" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card bg-white border-0 mb-0">
                                        <div class="card-header">
                                            <h3 class="mb-0 font-weight-bolder">{{__('Contribute to this Project')}}</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('send.donation')}}" method="post" id="modal-details">
                                            @csrf
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                                            </span>
                                                            <input type="number" class="form-control" name="amount" id="xx" placeholder="0.00" required>
                                                            <span class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <select class="form-control select" name="status" id="xstatus" onchange="mystatus()" required>
                                                            <option value="">{{__('Donate as')}}</option>
                                                            <option value="1">{{__('Anonymous')}}</option>
                                                            <option value="0">{{__('Display name')}}</option>
                                                        </select>
                                                    </div>
                                                </div>
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
                                                                                        <form action="{{ route('send.donation')}}" role="form" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{$stripe->val1}}" id="payment-form">
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
                                                                                <form method="post" role="form" action="{{route('send.donation')}}">
                                                                                @csrf
                                                                                <h4 class="mb-0">Account Balance</h4>
                                                                                <h1 class="mb-1 text-muted">{{$currency->symbol.number_format($user->balance)}}</h1>
                                                                                <input type="hidden" value="account" name="type">
                                                                                <input type="hidden" value="{{$link->ref_id}}" name="link">
                                                                                <input type="hidden" name="amount" id="castro">
                                                                                <input type="hidden" name="status" id="boom" value="1">
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
                                                <div class="text-right">
                                                <button type="button" data-toggle="modal" data-target="#fund" class="btn btn-neutral btn-block">{{__('Pay')}}</button>
                                                </div>         
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col">
                        <div class="progress progress-xs mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{($donated*100)/$link->amount}}%;"></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-3">
                    <div class="col-8">
                        <h3 class="h3 font-weight-bolder mb-0">{{$currency->symbol}} {{number_format($donated)}} Raised, Donations ({{count($dd)}})</h3>
                    </div>
                </div>  
                <ul class="list-group list-group-flush list my--3">
                    @foreach($paid as $k=>$val)
                        <li class="list-group-item px-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="icon icon-shape text-success rounded-circle bg-white">
                                    <i class="fal fa-gift"></i>
                                </div>
                            </div>
                            <div class="col ml--2">
                            <h4 class="mb-0">
                                @if($val->anonymous==0) 
                                    @if($val->user_id==null)
                                        @php
                                            $fff=App\Models\Transactions::whereref_id($val->ref_id)->first();
                                        @endphp
                                        {{$fff['first_name'].' '.$fff['last_name']}}
                                    @endif
                                    {{$val->user['first_name'].' '.$val->user['last_name']}} 
                                @else 
                                    Anonymous 
                                @endif
                            </h4>
                            <small>{{$currency->symbol.number_format($val->amount)}} @ {{date("h:i:A j, M Y", strtotime($val->created_at))}}</small>
                            </div>
                        </div>
                        </li>
                    @endforeach
                </ul>
                <div class="row mt-5">
                    <div class="col-md-12">
                    {{ $paid->links() }}
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop