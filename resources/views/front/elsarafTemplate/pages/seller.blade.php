@extends('front.elsarafTemplate.layouts.app')

@section('content')
        
<div class="main-content py-5 px-md-0 px-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="text-center mb-3 d-md-block d-none">{{__('elsarafTemplate.index-seller-increase-profits')}}</h4>
                <h4 class="text-center mb-0 d-md-none d-block">{{__('elsarafTemplate.selb-cometoallusers')}}</h4> 
                <h4 class="text-center mb-3 d-md-none d-block">{{__('elsarafTemplate.selb-buyingnowallbu')}}</h4>
                <form class="seller_register">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-fisrt-name')}}</label>
                                <input class="form-control form-control-sm" required="" type="text" name="first_name" placeholder="{{__('elsarafTemplate.form-fisrt-name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-last-name')}}</label>
                                <input class="form-control form-control-sm" required="" type="text" name="last_name" placeholder="{{__('elsarafTemplate.form-last-name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-email')}}</label>
                                <input class="form-control form-control-sm" required="" type="text" name="email" placeholder="{{__('elsarafTemplate.form-email')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.pop-countnam')}}</label>
                                <select class="custom-select custom-select-sm" name="country">
                                    <option>{{__('elsarafTemplate.form-choose-country')}}</option>
                                    <option value="egypt">{{__('elsarafTemplate.form-country-egy')}}</option>
                                    <option value="saudi">{{__('elsarafTemplate.form-country-saudi')}}</option>
                                    <option value="UAE">{{__('elsarafTemplate.form-country-emi')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-password')}}</label>
                                <input class="form-control form-control-sm" required="" type="text" name="password" placeholder="{{__('elsarafTemplate.buy-passpas')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-confirm-password')}}</label>
                                <input class="form-control form-control-sm" required="" type="text" name="password" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-phone-number')}}</label>
                                <input class="form-control form-control-sm" required="" type="text" name="phone" placeholder="{{__('elsarafTemplate.form-phone-number')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mx-0">
                    
                        <a href="/seller-registration" class="fs-20 col-md-3 text-center text-white bg-dark">{{__('elsarafTemplate.form-next')}}</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


          @endsection