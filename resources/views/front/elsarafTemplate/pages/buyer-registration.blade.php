@extends('front.elsarafTemplate.layouts.app')

@section('content')
<div class="main-content py-5 px-md-0 px-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <h4 class="text-center mb-3 d-md-block d-none">{{__('elsarafTemplate.buy-openaccn')}}</h4>
                <h4 class="text-center mb-2 d-md-none d-block">{{__('elsarafTemplate.buy-openacentert')}}</h4>
                <h4 class="text-center mb-3 d-md-none d-block">{{__('elsarafTemplate.buy-buyonstepo')}}</h4>
                <form class="buyer_register">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-fisrt-name')}}</label>
                                <input class="form-control form-control-sm" type="text" name="first_name" placeholder="{{__('elsarafTemplate.form-fisrt-name')}}" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-last-name')}}</label>
                                <input class="form-control form-control-sm" type="text" name="last_name" placeholder="{{__('elsarafTemplate.form-last-name')}}" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.pop-emailadd')}}</label>
                                <input class="form-control form-control-sm" type="email" id="buyer_register_from" name="email" placeholder="{{__('elsarafTemplate.pop-emailadd')}}" required="">
                                <span class="msg error_resgister_buyer text-denger"></span>
                                <span class="msg success_resgister_buyer text-success"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span> {{__('elsarafTemplate.form-country')}} </label>
                                <select class="form-control custom-select-sm custom-select" name="country" required="">
                                    <option selected> {{__('elsarafTemplate.form-country')}} </option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-phone-service')}}</label>
                                <div class="input-group mb-3 row mx-0">
                                    <div class="input-group-prepend col-7 px-0">
                                        <input class="form-control form-control-sm" type="number" name="phone" placeholder="{{__('elsarafTemplate.pop-phoneno')}}" required="">
                                    </div>
                                    <select class="custom-select custom-select-sm col-5" name="phone_network" id="inputGroupSelect01" required="">
                                        <option selected>{{__('elsarafTemplate.form-phone-service')}}</option>
                                        <option value="etisalat">{{__('elsarafTemplate.form-phone-service-et')}}</option>
                                        <option value="vodafone">{{__('elsarafTemplate.form-phone-service-vf')}}</option>
                                        <option value="orange">{{__('elsarafTemplate.form-phone-service-or')}}</option>
                                        <option value="we">{{__('elsarafTemplate.form-phone-service-we')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-password')}}</label>
                                <input class="form-control form-control-sm" type="password" name="password" placeholder="{{__('elsarafTemplate.buy-passpas')}}" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><span class="text-red">*</span>{{__('elsarafTemplate.form-confirm-password')}}</label>
                                <input class="form-control form-control-sm" type="password" name="password_confirm" placeholder="" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end mx-0">
                        <input type="submit" class="fs-20 col-md-3 text-center text-white bg-dark border-none" value="{{__('elsarafTemplate.buy-regnoin')}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
