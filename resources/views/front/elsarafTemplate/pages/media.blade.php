@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content pt-5">
                <div class="container">
                    <div class="row">
                            <div class="col-12 d-lg-block d-none">
                            <img src="/elsarafTemplate/img/banners/MediaBanner.jpg" class="img-fluid w-100 desktop">
                            </div>
                        <div class="col-12 pt-4 text-center d-lg-block d-none">
                            <h3>{{ __('elsarafTemplate.media-header-text')}}</h3>
                            <p class="mb-0">{{ __('elsarafTemplate.media-sub-header')}}</p>
                            <p class="mt-0">{{ __('elsarafTemplate.media-sub-header2')}}

                            <a href="/contact-us" class="agents-contact-us-text">
                            {{ __('elsarafTemplate.media-sub-header-contact')}}
                            </a>
                            {{ __('elsarafTemplate.media-sub-header-website')}}.
                            </p>
                        </div>
                         <div class="col-12 text-center d-lg-none">
                            <h3 class="pb-3">{{ __('elsarafTemplate.media-header-text')}}</h3>
                            <p>
                           {{ __('elsarafTemplate.media-sub-header')}}
                           {{ __('elsarafTemplate.media-sub-header2')}}
                            <a href="/contact-us" class="agents-contact-us-text">
                            {{ __('elsarafTemplate.media-sub-header-contact')}}
                            </a>
                           {{ __('elsarafTemplate.media-sub-header-website')}}.</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                        <div class="col-lg-8 col-md-8 col-sm-12 mb-4">
                                                   <form class="media_request">
                                                       <input name="language" value="ar" type="hidden">
                                                        <input name="type" value="media" type="hidden">
                                                <div class="row">
                                                    <div class="col-12">
                                                    <label> <span style="color:red;">*</span>  {{ __('elsarafTemplate.form-gender')}}</label>
                                                    <div class="form-group col-12 d-flex p-0">


                                            <div class="custom-control custom-radio">
                                              <input type="radio" id="type1"  name="gender" value="male" class="custom-control-input" required="" checked>
                                              <label class="custom-control-label font-weight-bold" for="type1">{{ __('elsarafTemplate.form-male')}}</label>
                                            </div>

                                            <div class="custom-control custom-radio mr-4">
                                              <input type="radio" id="type2" name="gender" value="femlae" class="custom-control-input" required="" >

                                              <label class="custom-control-label font-weight-bold" for="type2">{{ __('elsarafTemplate.form-female')}}</label>
                                            </div>

                                                    </div>
                                                   </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-fisrt-name')}} </label>
                                                            <input class="form-control form-control-sm" type="text" name="first_name" placeholder="{{ __('elsarafTemplate.form-fisrt-name')}} ">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span>  {{ __('elsarafTemplate.form-last-name')}}  </label>
                                                            <input class="form-control form-control-sm" type="text" name="last_name" placeholder=" {{ __('elsarafTemplate.form-last-name')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-6 px-md-3 px-sm-0 px-2 text-right">
                                                                <label class=""><span style="color:red">*</span>  {{ __('elsarafTemplate.form-phone-number')}}
                                                                </label>
                                                                <input type="text" name="phone"
                                                                    class="form-control form-control-sm"
                                                                    placeholder=" {{ __('elsarafTemplate.form-phone-number')}}  " required="" />
                                                            </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-email')}} </label>
                                                            <input class="form-control form-control-sm" type="text" name="email" placeholder="{{ __('elsarafTemplate.form-email')}}">
                                                            <span class="success_resgister_buyer text-success"></span>
                                                            <span class="error_resgister_buyer text-danger"></span>
                                                        </div>
                                                    </div>

                                                      <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-country')}}</label>
                                                            <select class="custom-select custom-select-sm" name="country">
                                                                <option>{{ __('elsarafTemplate.form-choose-country')}}</option>
                                                                <option value="egypt">{{ __('elsarafTemplate.form-country-egy')}}</option>
                                                                <option value="saduia">{{ __('elsarafTemplate.form-country-saudi')}}</option>
                                                                <option value="UEA">{{ __('elsarafTemplate.form-country-emi')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                             <label> <span class="red-star">*</span>  {{ __('elsarafTemplate.form-message')}} </label>
                                                             <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row justify-content-end mx-0">
                                                <div class="col-md-9 p-0 mb-2 text-right">
                                                <small>          (<span class="red-star">*</span>)
                                                         {{ __('elsarafTemplate.form-required-text')}}
                                                </small>
                                                </div>
                                                <div class="col-md-3 main-next text-center">
                                                    <button type="submit" class="fs-20 main-next investors-join-btn"> {{ __('elsarafTemplate.btn-send')}} </button>

                                                </div>
                                            </div>
                                            </form>

                                            </div>
                         </div>
                    </div>

                </div>
            </div>
@endsection
