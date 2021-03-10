@extends('front.elsarafTemplate.layouts.app')

@section('content')

            <div class="main-content pt-5 pb-md-5 pb-0 text-buyers d-lg-block d-none">
                <div class="container">
                    <div class="row pb-5">
                        <div class="col-12 text-center">
                            <h1>{{ __('elsarafTemplate.h-trader')}}</h1>
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="individuals">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4">{{ __('elsarafTemplate.index-seller-individuals')}}</h2>
                            <p>{{ __('elsarafTemplate.index-seller-individuals-ans')}}.</p>
                            <p class="fs-15">{{ __('elsarafTemplate.index-seller-minimun')}}</p>
                            <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                            <ul>
                                <li>{{ __('elsarafTemplate.index-seller-receive-ways-t1')}}  <a class="places" href="#">{{ __('elsarafTemplate.buyers-money-pull')}}</a></li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                </div>
                                <div class="col-12">
                                    <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 payment-methods">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-paymentMethods')}}</a>
                                    <div class="payment-methods-tooltip">
                                        <div class="row mx-0 px-2">
                                            <div class="col-3 py-2 px-1">
                                                <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 main-next text-center mx-3">
                                    <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-md-0">
                            <img src="/elsarafTemplate/img/افراد.jpg" class="img-fluid w-100 ">
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0 column-reverse-sm" id="companies">
                        <div class="col-md-6 px-md-0">
                            <img src="/elsarafTemplate/img/الشركات.jpg" class="img-fluid w-100 ">
                        </div>
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4">{{ __('elsarafTemplate.index-seller-companies')}}</h2>
                            <p>{{ __('elsarafTemplate.index-seller-companies-ans')}}.</p>
                            <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                            <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                            <ul>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                </div>
                                <div class="col-12">
                                    <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 payment-methods">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-paymentMethods')}}</a>
                                    <div class="payment-methods-tooltip-left">
                                        <div class="row mx-0 px-2">
                                            <div class="col-3 py-2 px-1">
                                                <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 main-next text-center mx-3">
                                    <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="ngo">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4">{{ __('elsarafTemplate.index-seller-ngo')}}</h2>
                            <p>{{ __('elsarafTemplate.index-seller-ngo-ans')}}. </p>
                            <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                            <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                            <ul>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                </div>
                                <div class="col-12">
                                    <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 payment-methods">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-paymentMethods')}}</a>
                                    <div class="payment-methods-tooltip">
                                        <div class="row mx-0 px-2">
                                            <div class="col-3 py-2 px-1">
                                                <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 main-next text-center mx-3">
                                    <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-md-0">
                            <img src="/elsarafTemplate/img/الخيرية.jpg" class="img-fluid w-100 ">
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0 column-reverse-sm" id="shops">
                        <div class="col-md-6 px-md-0">
                            <img src="/elsarafTemplate/img/المحلات التجارية.jpg" class="img-fluid w-100 ">
                        </div>
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4">{{ __('elsarafTemplate.index-seller-shops')}}</h2>
                            <p class="fs-14">{{ __('elsarafTemplate.index-seller-shops-ans')}}.</p>
                            <ul>
                                <li>{{ __('elsarafTemplate.index-seller-shops-li1')}} .</li>
                                <li>{{ __('elsarafTemplate.index-seller-shops-li2')}}.</li>
                                <li>{{ __('elsarafTemplate.index-seller-shops-li3')}}.</li>
                            </ul>
                            <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                            <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                            <ul>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                </div>
                                <div class="col-12">
                                    <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 payment-methods">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-paymentMethods')}}</a>
                                    <div class="payment-methods-tooltip-left">
                                        <div class="row mx-0 px-2">
                                            <div class="col-3 py-2 px-1">
                                                <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 main-next text-center mx-3">
                                    <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="trade">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4">{{ __('elsarafTemplate.index-seller-electronicBusiness')}}</h2>
                            <p>{{ __('elsarafTemplate.index-seller-electronicBusiness-ans')}}.</p>
                            <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                            <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                            <ul>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                </div>
                                <div class="col-12">
                                    <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 payment-methods">
                                    <a href="#" class="places">{{ __('elsarafTemplate.index-seller-paymentMethods')}}</a>
                                    <div class="payment-methods-tooltip">
                                        <div class="row mx-0 px-2">
                                            <div class="col-3 py-2 px-1">
                                                <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 mb-2 px-2px">
                                                        <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="row mb-2">
                                                    <div class="col-12">
                                                        <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 mb-2">
                                                        <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-2 px-2px">
                                                        <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5 main-next text-center mx-3">
                                    <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-md-0">
                            <img src="/elsarafTemplate/img/التجارة الالكترونية.jpg" class="img-fluid w-100 ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content py-5 text-buyers d-lg-none">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-12 text-center">
                            <h1>{{ __('elsarafTemplate.h-trader')}}</h1>
                        </div>
                    </div>
                    <div class="accordion seller-types" id="sellerTypes">
                        <div class="card">
                            <div class="card-header" id="individuals">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseindividuals" aria-expanded="true" aria-controls="collapseindividuals">
                                 <i class="fas" aria-hidden="true"></i>
                                 {{ __('elsarafTemplate.index-seller-individuals')}}
                                </button>
                            </div>
                            <div id="collapseindividuals" class="collapse" aria-labelledby="individuals" data-parent="#sellerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/افراد.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p>{{ __('elsarafTemplate.index-seller-individuals-ans')}}.</p>
                                    <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                                    <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                                    <ul>
                                        <li>{{ __('elsarafTemplate.index-seller-receive-ways-t1')}}  <a class="places" href="#">{{ __('elsarafTemplate.buyers-money-pull')}}</a></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                        </div>
                                        <div class="col-12">
                                            <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="accordion payment-methods-md" id="paymentMethods1">
                                                <div class="card">
                                                    <div class="card-header" id="headingPaymentMethods1">

                                                        <button class="border-none" type="button" data-toggle="collapse" data-target="#collapsePaymentMethods1" aria-expanded="true" aria-controls="collapsePaymentMethods1">
                                                            {{ __('elsarafTemplate.index-seller-paymentMethods')}}
                                                        </button>

                                                    </div>

                                                    <div id="collapsePaymentMethods1" class="collapse" aria-labelledby="headingPaymentMethods1" data-parent="#paymentMethods1">
                                                        <div class="card-body bg-dark text-white">
                                                            <div class="row mx-0 px-2">
                                                                <div class="col-12 py-2">
                                                                    <div class="row">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 py-2">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-5 main-next text-center mx-3">
                                            <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="companies">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsecompanies" aria-expanded="false" aria-controls="collapsecompanies">
                                 <i class="fas" aria-hidden="true"></i>
                                    {{ __('elsarafTemplate.index-seller-companies')}}
                                </button>

                            </div>
                            <div id="collapsecompanies" class="collapse" aria-labelledby="companies" data-parent="#sellerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/الشركات.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p>{{ __('elsarafTemplate.index-seller-companies-ans')}}.</p>
                                    <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                                    <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                                    <ul>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                        </div>
                                        <div class="col-12">
                                            <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-block-md">
                                            <div class="accordion payment-methods-md" id="paymentMethods2">
                                                <div class="card">
                                                    <div class="card-header" id="headingPaymentMethods2">

                                                        <button class="border-none" type="button" data-toggle="collapse" data-target="#collapsePaymentMethods2" aria-expanded="true" aria-controls="collapsePaymentMethods2">
                                                            {{ __('elsarafTemplate.index-seller-paymentMethods')}}
                                                        </button>

                                                    </div>

                                                    <div id="collapsePaymentMethods2" class="collapse" aria-labelledby="headingPaymentMethods2" data-parent="#paymentMethods2">
                                                        <div class="card-body bg-dark text-white">
                                                            <div class="row mx-0 px-2">
                                                                <div class="col-12 py-2">
                                                                    <div class="row">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 py-2">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-5 main-next text-center mx-3">
                                            <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ngo">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsengo" aria-expanded="false" aria-controls="collapsengo">
                                 <i class="fas" aria-hidden="true"></i>
                                    {{ __('elsarafTemplate.index-seller-ngo')}}
                                </button>

                            </div>
                            <div id="collapsengo" class="collapse" aria-labelledby="ngo" data-parent="#sellerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/الخيرية.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p>{{ __('elsarafTemplate.index-seller-ngo-ans')}}. </p>
                                    <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                                    <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                                    <ul>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                        </div>
                                        <div class="col-12">
                                            <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-block-md">
                                            <div class="accordion payment-methods-md" id="paymentMethods3">
                                                <div class="card">
                                                    <div class="card-header" id="headingPaymentMethods3">

                                                        <button class="border-none" type="button" data-toggle="collapse" data-target="#collapsePaymentMethods3" aria-expanded="true" aria-controls="collapsePaymentMethods3">
                                                            {{ __('elsarafTemplate.index-seller-paymentMethods')}}
                                                        </button>

                                                    </div>

                                                    <div id="collapsePaymentMethods3" class="collapse" aria-labelledby="headingPaymentMethods3" data-parent="#paymentMethods3">
                                                        <div class="card-body bg-dark text-white">
                                                            <div class="row mx-0 px-2">
                                                                <div class="col-12 py-2">
                                                                    <div class="row">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 py-2">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-5 main-next text-center mx-3">
                                            <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="shops">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseshops" aria-expanded="true" aria-controls="collapseshops">
                                 <i class="fas" aria-hidden="true"></i>
                                    {{ __('elsarafTemplate.index-seller-shops')}}
                                </button>

                            </div>

                            <div id="collapseshops" class="collapse" aria-labelledby="shops" data-parent="#sellerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/المحلات التجارية.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p class="fs-14">{{ __('elsarafTemplate.index-seller-shops-ans')}}.</p>
                                    <ul>
                                        <li>{{ __('elsarafTemplate.index-seller-shops-li1')}} .</li>
                                        <li>{{ __('elsarafTemplate.index-seller-shops-li2')}}.</li>
                                        <li>{{ __('elsarafTemplate.index-seller-shops-li3')}}.</li>
                                    </ul>
                                    <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                                    <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                                    <ul>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                        </div>
                                        <div class="col-12">
                                            <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 payment-methods d-none-md">
                                            <a href="#" class="places">{{ __('elsarafTemplate.index-seller-paymentMethods')}}</a>
                                            <div class="payment-methods-tooltip-left">
                                                <div class="row mx-0 px-2">
                                                    <div class="col-3 py-2 px-1">
                                                        <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-12 py-2">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 py-2">
                                                        <div class="row mb-2">
                                                            <div class="col-12">
                                                                <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-12 mb-2">
                                                                <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-12 mb-2">
                                                                <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-block-md">
                                            <div class="accordion payment-methods-md" id="paymentMethods4">
                                                <div class="card">
                                                    <div class="card-header" id="headingPaymentMethods4">

                                                        <button class="border-none" type="button" data-toggle="collapse" data-target="#collapsePaymentMethods4" aria-expanded="true" aria-controls="collapsePaymentMethods4">
                                                            {{ __('elsarafTemplate.index-seller-paymentMethods')}}
                                                        </button>

                                                    </div>

                                                    <div id="collapsePaymentMethods4" class="collapse" aria-labelledby="headingPaymentMethods4" data-parent="#paymentMethods4">
                                                        <div class="card-body bg-dark text-white">
                                                            <div class="row mx-0 px-2">
                                                                <div class="col-12 py-2">
                                                                    <div class="row">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 py-2">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-5 main-next text-center mx-3">
                                            <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="trade">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsetrade" aria-expanded="false" aria-controls="collapsetrade">
                                 <i class="fas" aria-hidden="true"></i>
                                    {{ __('elsarafTemplate.index-seller-electronicBusiness')}}
                                </button>

                            </div>
                            <div id="collapsetrade" class="collapse" aria-labelledby="trade" data-parent="#sellerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/التجارة الالكترونية.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p>{{ __('elsarafTemplate.index-seller-electronicBusiness-ans')}}.</p>
                                    <p class="fs-15"> {{ __('elsarafTemplate.index-seller-minimun')}}</p>
                                    <h3>{{ __('elsarafTemplate.index-seller-receive-ways')}} </h3>
                                    <ul>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li1')}}.</li>
                                        <li>{{ __('elsarafTemplate.index-seller-companies-li2')}}.</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>{{ __('elsarafTemplate.buyers-money-privacy')}}.</p>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="places">{{ __('elsarafTemplate.index-seller-policy')}}</a>
                                        </div>
                                        <div class="col-12">
                                            <small>{{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 payment-methods d-none-md">
                                            <a href="#" class="places">{{ __('elsarafTemplate.index-seller-paymentMethods')}}</a>
                                            <div class="payment-methods-tooltip">
                                                <div class="row mx-0 px-2">
                                                    <div class="col-3 py-2 px-1">
                                                        <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                                    </div>
                                                    <div class="col-12 py-2">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 mb-2 px-2px">
                                                                <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 py-2">
                                                        <div class="row mb-2">
                                                            <div class="col-12">
                                                                <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-12 mb-2">
                                                                <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-12 mb-2">
                                                                <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                            </div>
                                                            <div class="col-2 px-2px">
                                                                <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-block-md">
                                            <div class="accordion payment-methods-md" id="paymentMethods5">
                                                <div class="card">
                                                    <div class="card-header" id="headingPaymentMethods5">

                                                        <button class="border-none" type="button" data-toggle="collapse" data-target="#collapsePaymentMethods5" aria-expanded="true" aria-controls="collapsePaymentMethods5">
                                                            {{ __('elsarafTemplate.index-seller-paymentMethods')}}
                                                        </button>

                                                    </div>

                                                    <div id="collapsePaymentMethods5" class="collapse" aria-labelledby="headingPaymentMethods5" data-parent="#paymentMethods5">
                                                        <div class="card-body bg-dark text-white">
                                                            <div class="row mx-0 px-2">
                                                                <div class="col-12 py-2">
                                                                    <div class="row">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-wallet')}} </p>
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 mb-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 py-2">
                                                                    <div class="row mb-2">
                                                                        <div class="col-12 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-network')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentCard')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-12 mb-2 px-0">
                                                                            <p>{{ __('elsarafTemplate.index-support-paymentElectronic')}} </p>
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                        <div class="col-2 px-2px">
                                                                            <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-5 main-next text-center mx-3">
                                            <a href="/seller" class="fs-20">{{ __('elsarafTemplate.btn-register-now-free')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

          @endsection
