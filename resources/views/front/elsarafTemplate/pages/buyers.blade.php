@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content pt-5 pb-md-5 pb-0 text-buyers d-lg-block d-none">
                <div class="container">
                    <div class="row pb-5">
                        <div class="col-12 text-center">
                            <h1> {{ __('elsarafTemplate.h-buyer')}}</h1>

                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="bill">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4"> {{ __('elsarafTemplate.index-who-is-bill-owner')}}</h2>
                            <p> {{ __('elsarafTemplate.index-who-is-bill-owner-text1')}}</p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li class="fs-13"> {{ __('elsarafTemplate.index-who-is-bill-owner-li1')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li2')}}.</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li3')}}.</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}}.</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li5')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy')}}.</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 mb-2">
                                    <h3> {{ __('elsarafTemplate.index-support-network')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-10 mr-4">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/مالك خط فاتورة.jpg" class="img-fluid w-100 ">
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0 column-reverse-sm" id="cart">
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/مالك خط فاتورة سابقا.jpg" class="img-fluid w-100 ">
                        </div>
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4"> {{ __('elsarafTemplate.index-who-is-card-owner')}}</h2>
                            <p class="" style="font-size: 14px;"> {{ __('elsarafTemplate.index-who-is-card-owner-text1')}}. </p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li class="fs-13"> {{ __('elsarafTemplate.index-who-is-bill-owner-li1')}}.</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li2')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li3')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li5')}}.</li>
                            </ul>
                            <p class="mb-0"> {{ __('elsarafTemplate.index-who-is-card-owner-payment-q')}}</p>
                            <ul>
                                <li class="list-style-none"> {{ __('elsarafTemplate.index-who-is-card-owner-payment-ans')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy')}}.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h3> {{ __('elsarafTemplate.index-support-network')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-10 mr-4">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="mobileWallet">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4"> {{ __('elsarafTemplate.index-who-is-wallet-owner')}}</h2>
                            <p> {{ __('elsarafTemplate.index-who-is-wallet-owner-ans')}}. </p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li5')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy')}}.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3> {{ __('elsarafTemplate.index-support-wallet')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-10 mr-4">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/المحافظ الرقمية.jpg" class="img-fluid w-100 ">
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0 column-reverse-sm" id="paymentCard">
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/الكروت الالكترونية.jpg" class="img-fluid w-100 ">
                        </div>
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4"> {{ __('elsarafTemplate.index-who-is-paymentCard-owner')}}</h2>
                            <p> {{ __('elsarafTemplate.index-who-is-paymentCard-owner-ans')}}.</p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li3')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy3')}} .</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 mb-2">
                                    <h3> {{ __('elsarafTemplate.index-support-paymentCard')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-10 mr-4">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="electronicPayments">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2 class="bg-babyblue width-fit-content px-4">من هو مستخدم الدفع إلكترونية؟</h2>
                            <p> {{ __('elsarafTemplate.index-seller-electronicBusiness-ans')}} .</p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy3')}} .</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 mb-2">
                                    <h3> {{ __('elsarafTemplate.index-support-paymentElectronic')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-10 mr-4">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/الدفع الالكتروني.jpg" class="img-fluid w-100 ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content py-5 text-buyers d-lg-none">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-12 text-center">
                            <h1> {{ __('elsarafTemplate.h-buyer')}}</h1>
                        </div>
                    </div>
                    <div class="accordion seller-types" id="buyerTypes">
                        <div class="card">
                            <div class="card-header" id="bill">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsebill" aria-expanded="true" aria-controls="collapsebill">
                                   <i class="fas" aria-hidden="true"></i>
                                     {{ __('elsarafTemplate.index-who-is-bill-owner')}}
                                </button>
                            </div>
                            <div id="collapsebill" class="collapse" aria-labelledby="bill" data-parent="#buyerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/مالك خط فاتورة.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-text1')}}/p>
                                    <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                                    <ul>
                                        <li class="fs-13">{{ __('elsarafTemplate.index-who-is-bill-owner-li1')}}</li>
                                        <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li2')}} .</li>
                                        <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li3')}} .</li>
                                        <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                                        <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li5')}}.</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12">
                                            <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy')}}.</p>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 mb-2">
                                            <h3> {{ __('elsarafTemplate.index-support-network')}} </h3>
                                        </div>
                                        <div class="col-2 px-1 mb-1">
                                            <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                        </div>
                                        <div class="col-2 px-1 mb-1">
                                            <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                        </div>
                                        <div class="col-2 px-1 mb-1">
                                            <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                        </div>
                                        <div class="col-2 px-1 mb-1">
                                            <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="https://elsaraf.com/marketplace/" class="places">
                                                 {{ __('elsarafTemplate.index-places-text')}}
                                                <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-15 mr-3">
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="cart">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsecart" aria-expanded="false" aria-controls="collapsecart">
                                    <i class="fas" aria-hidden="true"></i>
                                     {{ __('elsarafTemplate.index-who-is-card-owner')}}
                                </button>

                            </div>
                            <div id="collapsecart" class="collapse" aria-labelledby="cart" data-parent="#buyerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/مالك خط فاتورة سابقا.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p class="" style="font-size: 14px;"> {{ __('elsarafTemplate.index-who-is-card-owner-text1')}}. </p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li class="fs-13"> {{ __('elsarafTemplate.index-who-is-bill-owner-li1')}}.</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li2')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li3')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li5')}}.</li>
                            </ul>
                            <p class="mb-0"> {{ __('elsarafTemplate.index-who-is-card-owner-payment-q')}}</p>
                            <ul>
                                <li class="list-style-none"> {{ __('elsarafTemplate.index-who-is-card-owner-payment-ans')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy')}}.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h3> {{ __('elsarafTemplate.index-support-network')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Etisalat.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Vodafone.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/we.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/orange.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-15 mr-3">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="mobileWallet">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsemobileWallet" aria-expanded="false" aria-controls="collapsemobileWallet">
                                 <i class="fas" aria-hidden="true"></i>
                                     {{ __('elsarafTemplate.index-who-is-wallet-owner')}}
                                </button>

                            </div>
                            <div id="collapsemobileWallet" class="collapse" aria-labelledby="mobileWallet" data-parent="#buyerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/المحافظ الرقمية.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p> {{ __('elsarafTemplate.index-who-is-wallet-owner-ans')}}. </p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li5')}}.</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy')}}.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3> {{ __('elsarafTemplate.index-support-wallet')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Vodafone Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/orange cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/NBE Phone Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Etisalat Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/smart wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/QNB Alahli.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/bm wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/ma7fazty.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Qahera Cash.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Abk.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/audi 2 pay.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Ub Digital Wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Masarify 3altayer ar.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Masarify 3altayer.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/saib wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/banki wallet.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/e-pocket.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/B.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/BNK.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/aaib.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/جيبي.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/فلوسي.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/we pay.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/cashati.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-15 mr-3">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="paymentCard">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsepaymentCard" aria-expanded="true" aria-controls="collapsepaymentCard">
                                   <i class="fas" aria-hidden="true"></i>
                                     {{ __('elsarafTemplate.index-who-is-paymentCard-owner')}}
                                </button>

                            </div>

                            <div id="collapsepaymentCard" class="collapse" aria-labelledby="paymentCard" data-parent="#buyerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/الكروت الالكترونية.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p> {{ __('elsarafTemplate.index-who-is-paymentCard-owner-ans')}}.</p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li>  {{ __('elsarafTemplate.index-who-is-bill-owner-li3')}}.</li>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy3')}} .</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 mb-2">
                                    <h3> {{ __('elsarafTemplate.index-support-paymentCard')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/visa.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/paypal.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Meeza card.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-15 mr-3">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="electronicPayments">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseelectronicPayments" aria-expanded="false" aria-controls="collapseelectronicPayments">
                                  <i class="fas" aria-hidden="true"></i>
                                    {{ __('elsarafTemplate.index-seller-electronicBusiness')}}
                                </button>

                            </div>
                            <div id="collapseelectronicPayments" class="collapse" aria-labelledby="electronicPayments" data-parent="#buyerTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/التجارة الالكترونية.jpg" class="img-fluid w-100 ">
                                    </div>
                                    <p> {{ __('elsarafTemplate.index-seller-electronicBusiness-ans')}} .</p>
                            <h3> {{ __('elsarafTemplate.index-who-is-bill-owner-text2')}} </h3>
                            <ul>
                                <li> {{ __('elsarafTemplate.index-who-is-bill-owner-li4')}} .</li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <p> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy3')}} .</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 mb-2">
                                    <h3> {{ __('elsarafTemplate.index-support-paymentElectronic')}} </h3>
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Fawry.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/Mastercard.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/aman.jpg" class="img-fluid w-100">
                                </div>
                                <div class="col-2 px-1 mb-1">
                                    <img src="/elsarafTemplate/img/masray.jpg" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="https://elsaraf.com/marketplace/" class="places">
                                         {{ __('elsarafTemplate.index-places-text')}}
                                        <img src="/elsarafTemplate/img/Elsaraf Market.jpg" class="img-fluid w-15 mr-3">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <small> {{ __('elsarafTemplate.index-who-is-bill-owner-privacy2')}}.</small>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection
