@extends('paymentlayout')

@section('content')
<div class="main-content">
  <div class="header py-7 py-lg-8 pt-lg-1">
    <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <div class="card-profile-image mb-5">
                <img src="{{url('/')}}/asset/{{$logo->image_link}}" class="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">    
    </div>
  </div>
  <div class="container mt--8 pb-5 mb-0">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-7">
        <div class="card card-profile bg-white border-0 mb-5">
          <div class="card-body pt-7 px-5">
            <div class="row">
                <div class="col-6">
                    <div class="text-center text-dark mb-5">
                        <div class="btn-wrapper text-center">
                            <a href="{{route('user.scardpay', ['id' => $cart])}}" class="btn btn-neutral btn-icon mb-3">
                                <span class="btn-inner--icon"><i class="fal fa-credit-card"></i></span>
                            </a>
                            <p class="text-xs text-uppercase">{{__('Pay with Card')}}</p> 
                        </div>
                    </div>   
                </div>                
                <div class="col-6 text-right">
                    <div class="text-center text-dark mb-5">
                        <div class="btn-wrapper text-center">
                            <a href="{{route('user.saccountpay', ['id' => $cart])}}" class="btn btn-neutral btn-icon mb-3">
                                <span class="btn-inner--icon"><i class="fal fa-user"></i></span>
                            </a>
                            <p class="text-xs text-uppercase">{{__('Pay with Account')}}</p> 
                        </div>
                    </div>                  
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop