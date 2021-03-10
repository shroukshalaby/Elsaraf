@extends('front.elsarafTemplate.layouts.app')

@section('content')
    <div class="main-content pt-5 d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @include('front.elsarafTemplate.pages.home_buyer_tabs')
                        @include('front.elsarafTemplate.pages.home_buyer_seller_content')
                        @include('front.elsarafTemplate.pages.home_seller_tabs')

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('front.elsarafTemplate.pages.home_mobile_content')

    <div class="auto-reply mt-100 pt-5 bg-grey" id="autoReply">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center media-image-body">
                    <h2 class="fs-mob-24px">{{ __('elsarafTemplate.index-get-autoReply-service') }} </h2>
                    <h2 class="fs-mob-24px">{{ __('elsarafTemplate.index-get-autoReply-service-text1') }} </h2>
                    <p class="mb-0">{{ __('elsarafTemplate.index-get-autoReply-service-text2') }} </p>
                    <ul class="list-unstyled d-flex justify-content-center mb-0">
                        <li class="px-1 facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="px-1 twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="px-1 instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 mt-3">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">3</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3">4</li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <h2>{{ __('elsarafTemplate.index-autoReply-slider-header1') }} </h2>
                                        <p>{{ __('elsarafTemplate.index-autoReply-slider-text1') }}</p>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="/elsarafTemplate/img/تواصل اكثر.jpg" class="img-fluid w-100 outline-babyblue-4px">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <h2>{{ __('elsarafTemplate.index-autoReply-slider-header2') }}</h2>
                                        <p>{{ __('elsarafTemplate.index-autoReply-slider-text2') }}</p>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="/elsarafTemplate/img/فعالة و سهلة.jpg" class="img-fluid w-100 outline-babyblue-4px">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <h2>{{ __('elsarafTemplate.index-autoReply-slider-header3') }}</h2>
                                        <p>{{ __('elsarafTemplate.index-autoReply-slider-text3') }}</p>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="/elsarafTemplate/img/توفير الوقت.jpg" class="img-fluid w-100 outline-babyblue-4px">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <h2>{{ __('elsarafTemplate.index-autoReply-slider-header4') }}</h2>
                                        <p>{{ __('elsarafTemplate.index-autoReply-slider-text4') }}</p>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="/elsarafTemplate/img/دقة أعلى و أرباح أكثر.jpg"
                                             class="img-fluid w-100 outline-babyblue-4px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-5 mt-5">
                    <div class="row justify-content-center mx-md-neg15 mx-0">
                        <a class="col-md-3 bg-dark text-white text-center py-2" href="" type="button"
                           data-toggle="modal"
                           data-target="#auto-reply-popup">{{ __('elsarafTemplate.btn-getit-now-free') }} </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="coupons pt-50 pb-5" id="marketplace">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h2 class="fs-mob-24px">{{ __('elsarafTemplate.index-copouns-header') }}</h2>
                    <p class="mb-0">{{ __('elsarafTemplate.index-copouns-text1') }}</p>
                    <p>{{ __('elsarafTemplate.index-copouns-text2') }}</p>
                </div>
                <div class="col-md-6 text-center border-left-4px-md pb-md-0 pb-3 border-bottom-4px-mob" style="">
                    <h2 class="bg-dark2 py-1 px-3 text-white mb-4 fs-mob-24px">{{ __('elsarafTemplate.index-copouns-header2') }}</h2>
                    <p class="fs-14">{{ __('elsarafTemplate.index-copouns-text11') }}</p>
                    <p class="fs-20 font-weight-bold">{{ __('elsarafTemplate.index-copouns-text22') }}</p>
                    <div class="row justify-content-center mx-md-neg15 mx-0">
                        <div class="col-md-8 coupons-img coupons-img-buyer">
                            <ul class="deal-actions">
                                <li class="share-btn cursor-pointer">
                                            <span>
                                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                            </span>
                                </li>
                                <li class="like-deal cursor-pointer">
                                            <span href="#" class="" deals_id="2" type="photo">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </span>
                                </li>
                            </ul>
                            <div class="label-discount top-10 right-10">-30%</div>
                            <div class="deal-store-logo">
                                <a title="" data-toggle="tooltip"
                                   href="https://elsaraf.com/marketplace/boutique/store-1/2"
                                   data-original-title="Store 1"><img
                                        src="https://elsaraf.com/marketplace/assets/images/brands/boutique.png" alt=""
                                        class="w-100 d-block"></a>
                            </div>
                            <div class="deal-about">
                                        <span>
                                            <a href="" class="color-light color-h-lighter">Printable coupon
                                                <!--<small class="color-white">- <i class='fa fa-tags mr-5'></i></span><span class='deal-title'>Coupon to print</small>--></a>
                                            <span class="text-white ml-2"><span
                                                    class="price-sale">$120</span>$100</span>
                                        </span>
                            </div>
                            <div class="time-left">
                                        <span>
                                            <i class="ico fa fa-clock-o mr-10" aria-hidden="true"></i>
                                            <span class="deal-title t-uppercase"
                                                  data-countdown="07/30/2020 00:00:00"><small>12 Weeks</small> 04 <small>Days</small> 02 : 53 : 46</span>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mt-3 mx-md-neg15 mx-0">
                        <a class="col-md-3 offset-md-2 bg-dark text-white py-2"
                           href="/buyer-registration">{{ __('elsarafTemplate.btn-register-free') }}</a>
                    </div>
                </div>
                <div class="col-md-6 text-center pt-md-0 pt-3">
                    <h2 class="bg-dark2 py-1 px-3 text-white mb-4 fs-mob-24px">{{ __('elsarafTemplate.index-copouns-header3') }}</h2>
                    <p class="fs-14">{{ __('elsarafTemplate.index-copouns-text13') }}</p>
                    <p class="fs-20 font-weight-bold">{{ __('elsarafTemplate.index-copouns-text23') }}</p>
                    <div class="row justify-content-center mx-md-neg15 mx-0">
                        <div class="col-md-8 coupons-img coupons-img-seller">
                            <ul class="deal-actions">
                                <li class="share-btn cursor-pointer">
                                            <span>
                                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                            </span>
                                </li>
                                <li class="like-deal cursor-pointer">
                                            <span href="#" class="" deals_id="2" type="photo">
                                                <i class="fa fa-heart " aria-hidden="true"></i>
                                            </span>
                                </li>
                            </ul>
                            <div class="label-discount top-10 right-10">-20%</div>
                            <div class="deal-store-logo">
                                <a title="" data-toggle="tooltip"
                                   href="https://elsaraf.com/marketplace/boutique/store-1/2"
                                   data-original-title="Store 1"><img
                                        src="https://elsaraf.com/marketplace/assets/images/brands/boutique.png" alt=""
                                        class="w-100 d-block"></a>
                            </div>
                            <div class="deal-about">
                                        <span>
                                            <a href="" class="color-light color-h-lighter">Printable coupon
                                                <!--<small class="color-white">- <i class='fa fa-tags mr-5'></i></span><span class='deal-title'>Coupon to print</small>--></a>
                                            <span class="text-white ml-2"><span
                                                    class="price-sale">$120</span>$100</span>
                                        </span>
                            </div>
                            <div class="time-left">
                                        <span>
                                            <i class="ico fa fa-clock-o mr-10" aria-hidden="true"></i>
                                            <span class="deal-title t-uppercase"
                                                  data-countdown="07/30/2020 00:00:00"><small>12 Weeks</small> 04 <small>Days</small> 02 : 53 : 46</span>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mt-3 mx-md-neg15 mx-0">
                        <a class="col-md-3 offset-md-2 bg-dark text-white py-2"
                           href="/seller">{{ __('elsarafTemplate.btn-register-free') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-50 pb-5 bg-grey">
        <div class="container">
            <div class="row mx-0">
                <div class="col-12 text-center">
                    <h2 class="mb-4">{{ __('elsarafTemplate.index-seller-paymentMethods') }}</h2>
                </div>
                <div class="col-md-6 py-3 border-left-4px-md" style="">
                    <div class="row mb-2">
                        <div class="col-12">
                            <h3>{{ __('elsarafTemplate.index-support-network') }} </h3>
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 mb-2">
                            <h3>{{ __('elsarafTemplate.index-support-paymentCard') }} </h3>
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 mb-2">
                            <h3>{{ __('elsarafTemplate.index-support-paymentElectronic') }} </h3>
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 px-md-col px-1">
                            <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="row">
                        <div class="col-12">
                            <h3>{{ __('elsarafTemplate.index-support-wallet') }} </h3>
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-2 mb-3 px-md-col px-1">
                            <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="auto-reply-popup" tabindex="-1" role="dialog" aria-labelledby="auto-reply-popupTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header p-0" style="flex-direction: row-reverse;">
                    <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-20 pt-2 pr-3 pb-0">
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3>{{ __('elsarafTemplate.h-auto-reply') }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div id="wizard_container" class="w-100">
                                <form name="" id="wrapped">
                                    <input id="website" name="website" type="hidden" value="">
                                    <div id="middle-wizard">
                                        <div class="step">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-radio mb-4">
                                                        <input type="radio" id="autoReply-1" name="autoReply"
                                                               class="custom-control-input" value="autoReply1">
                                                        <label class="custom-control-label" for="autoReply-1">
                                                            <h5 class="mb-0">{{ __('elsarafTemplate.index-autoReply-q') }}</h5>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-12">
                                                        <input type="radio" id="autoReply-2" name="autoReply"
                                                               class="custom-control-input" value="autoReply2">
                                                        <label class="custom-control-label" for="autoReply-2">
                                                            <h5 class="mb-0">{{ __('elsarafTemplate.index-autoReply-q2') }}</h5>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="row">
                                                <div class="col-12 autoReplyAndElsaraf">
                                                    <div class="col-12">
                                                        <h5>{{ __('elsarafTemplate.index-elsaraf-info') }}</h5>
                                                    </div>
                                                    <div class="col-4 bg-dark text-center mx-3 mt-3 py-1">
                                                        <a class="text-white w-100"
                                                           href="/seller">{{ __('elsarafTemplate.btn-register-now-free') }}</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 autoReplyOnly">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label> <span
                                                                        class="text-red">* </span>{{ __('elsarafTemplate.form-fisrt-name') }}
                                                                </label>
                                                                <input class="form-control" type="text" name=""
                                                                       placeholder="الإسم الأول">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label> <span
                                                                        class="text-red">* </span>{{ __('elsarafTemplate.form-last-name') }}
                                                                </label>
                                                                <input class="form-control" type="text" name=""
                                                                       placeholder="الإسم الأخير">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label> <span
                                                                        class="text-red">* </span>{{ __('elsarafTemplate.form-email') }}
                                                                </label>
                                                                <input class="form-control" type="text" name=""
                                                                       placeholder="البريد الإلكتروني">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label> <span
                                                                        class="text-red">* </span> {{ __('elsarafTemplate.form-country') }}
                                                                </label>
                                                                <div class="input-group mb-3 row mx-0">
                                                                    <div class="input-group-prepend col-7 px-0">
                                                                        <input class="form-control" type="number"
                                                                               name="" placeholder="رقم الهاتف">
                                                                    </div>
                                                                    <select class="custom-select col-5"
                                                                            id="inputGroupSelect01">
                                                                        <option
                                                                            selected> {{ __('elsarafTemplate.form-country') }}</option>
                                                                        <option
                                                                            value="1">{{ __('elsarafTemplate.form-country-egy') }}</option>
                                                                        <option
                                                                            value="2">{{ __('elsarafTemplate.form-country-saudi') }}</option>
                                                                        <option
                                                                            value="3">{{ __('elsarafTemplate.form-country-emi') }}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label> <span
                                                                        class="text-red">* </span>{{ __('elsarafTemplate.form-password') }}
                                                                </label>
                                                                <input class="form-control" type="text" name=""
                                                                       placeholder="الرقم السري">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label> <span
                                                                        class="text-red">* </span>{{ __('elsarafTemplate.form-confirm-password') }}
                                                                </label>
                                                                <input class="form-control" type="text" name=""
                                                                       placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <small>
                                                                (
                                                                <span class="text-red">*</span>
                                                                )
                                                                {{ __('elsarafTemplate.form-required-text') }}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label> <span
                                                                class="text-red">* </span>{{ __('elsarafTemplate.form-company-name') }}
                                                        </label>
                                                        <input class="form-control" type="text" name=""
                                                               placeholder="إسم الشركة">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label> <span
                                                                class="text-red">* </span>{{ __('elsarafTemplate.form-email-if-exist') }}
                                                        </label>
                                                        <input class="form-control" type="text" name=""
                                                               placeholder="الموقع">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="mb-0"><span
                                                            class="text-red">* </span> {{ __('elsarafTemplate.form-social-urls') }}
                                                    </label>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <small>{{ __('elsarafTemplate.form-one-url') }}</small>
                                                </div>
                                                <div class="col-8">
                                                    <div class="table table-responsive overflow-y-auto h-150">
                                                        <table
                                                            class="table table-responsive table-striped table-bordered mb-0">
                                                            <thead>
                                                            <tr>
                                                                <td><input name="" type="text" class="form-control"
                                                                           placeholder="رابط الصفحة"/></td>
                                                                <td>
                                                                    <button type="button" class="btn remove p-0"><i
                                                                            class="far fa-trash-alt"></i></button>
                                                                </td>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="TextBoxContainer"></tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th colspan="4"></th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-4 p-0 pt-4">
                                                    <button id="btnAdd" type="button"
                                                            class="btn btn-primary btn-warning px-3 py-1 text-light"
                                                            data-toggle="tooltip"
                                                            data-original-title="أضف المزيد من صفح وسائل التواصل الإجتماعي">
                                                        <i class="fas fa-plus-circle text-light pl-2"></i>أضف المزيد
                                                    </button>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row align-items-center">
                                                        <label
                                                            class="col-3 mb-0">{{ __('elsarafTemplate.monthly-amount') }}</label>
                                                        <div class="col-6 px-0">
                                                            <input
                                                                class="form-control bg-dark border-none text-white text-center"
                                                                type="text" name="" disabled value="1000">
                                                        </div>
                                                        <div class="col-3">
                                                            <h5 class="mb-0">{{ __('elsarafTemplate.pound') }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit step accordion-step">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label><span
                                                            class="text-red">* </span>{{ __('elsarafTemplate.choose-payment-method') }}
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-control custom-radio mb-12">
                                                        <input type="radio" id="payment-1" name="payment"
                                                               class="custom-control-input" value="payment1">
                                                        <label class="custom-control-label" for="payment-1">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                                </div>
                                                                <div class="col-9">
                                                                    {{ __('elsarafTemplate.payment-credit-card') }}
                                                                </div>
                                                            </div>

                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-12">
                                                        <input type="radio" id="payment-2" name="payment"
                                                               class="custom-control-input" value="payment2">
                                                        <label class="custom-control-label" for="payment-2">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                                </div>
                                                                <div class="col-9">
                                                                    {{ __('elsarafTemplate.payment-fawry') }}
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-12">
                                                        <input type="radio" id="payment-3" name="payment"
                                                               class="custom-control-input" value="payment3">
                                                        <label class="custom-control-label" for="payment-3">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img src="/elsarafTemplate/img/mob.png" class="img-fluid w-100">
                                                                </div>
                                                                <div class="col-9">
                                                                    {{ __('elsarafTemplate.payment-mobile') }}
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="box mx-3">
                                                    <div class="row mx-0">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label><span
                                                                        class="text-red">* </span> {{ __('elsarafTemplate.form-phone-number') }}
                                                                </label>
                                                                <input type="number" name="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label><span
                                                                    class="text-red">* </span> {{ __('elsarafTemplate.form-phone-service') }}
                                                            </label>
                                                            <select class="custom-select" required id="">
                                                                <option
                                                                    selected>{{ __('elsarafTemplate.form-phone-service') }}</option>
                                                                <option
                                                                    value="1">{{ __('elsarafTemplate.form-phone-service-et') }}</option>
                                                                <option
                                                                    value="2">{{ __('elsarafTemplate.form-phone-service-vf') }}</option>
                                                                <option
                                                                    value="3">{{ __('elsarafTemplate.form-phone-service-or') }}</option>
                                                                <option
                                                                    value="4">{{ __('elsarafTemplate.form-phone-service-we') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="bottom-wizard" class="pt-3 pb-0 pr-3 position-absolute bottom-0 left-0">
                                        <button type="button" name="backward"
                                                class="backward btn-warning btn px-2 py-0 text-light">{{ __('elsarafTemplate.form-prev') }}</button>
                                        <button type="button" name="forward"
                                                class="forward btn-warning btn px-2 py-0 text-light">{{ __('elsarafTemplate.form-next') }}</button>
                                        <button type="submit" name="process"
                                                class="submit btn-warning btn px-2 py-0 text-light">{{ __('elsarafTemplate.form-register') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="/elsarafTemplate/img/popups-img/Popup02.jpg" class="img-fluid w-100">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
