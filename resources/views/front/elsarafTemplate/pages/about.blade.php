@extends('front.elsarafTemplate.layouts.app')

@section('content')

            <div class="main-content pt-5 pb-md-5 pb-0 about-page d-lg-block d-none">
                <div class="container">
                    <div class="row pb-5">
                        <div class="col-12 text-center">

                            <h1> {{ __('elsarafTemplate.about-elsaraf') }}</h1>

                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="aboutElsaraf">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2>{{ __('elsarafTemplate.d-about-elsaraf') }}</h2>
                            <p>{{ __('elsarafTemplate.index-who-is-elsaraf-text-1') }} </p>
                            <p>{{ __('elsarafTemplate.index-who-is-elsaraf-text-2') }}</p>

                        </div>
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/IMAGE WHAT'S ELSARAF.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0 column-reverse-sm" id="seller">
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/seller.jpg" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 py-md-0 py-3">
                            <h2> {{ __('elsarafTemplate.about-seller-text') }}  </h2>
                            <ul class="list-decimal">
                                <li>
                                    <a href="/buyer-registration">
                                      {{ __('elsarafTemplate.btn-create-free') }}.
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                       {{ __('elsarafTemplate.about-register-text') }}
                                       <span class="red-a">{{ __('elsarafTemplate.about-register-text2') }}</span>.

                                    </a>
                                </li>
                                <li class="fs-15">
                                    <a href="">
                                       {{ __('elsarafTemplate.about-register-text3') }}
                                        <span class="red-a">{{ __('elsarafTemplate.about-register-text4') }}</span>.

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                       {{ __('elsarafTemplate.about-start-earn') }}
                                        <span class="red-a">{{ __('elsarafTemplate.about-register-text5') }}</span>.

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                      {{ __('elsarafTemplate.about-register-text6') }}  .
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row align-items-center mx-md-0" id="buyer">
                        <div class="col-md-6 py-md-0 py-3">
                            <h2> {{ __('elsarafTemplate.about-buyer-text') }} </h2>
                            <ul class="list-decimal">
                                <li>
                                    <a href="/seller">
                                      {{ __('elsarafTemplate.btn-create-free') }}.
                                    </a>
                                </li>
                                <li>
                                    <a href="https://elsaraf.com/marketplace/">
                                       {{ __('elsarafTemplate.about-buyer-text2') }}.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                     {{ __('elsarafTemplate.about-buyer-text3') }}.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                      {{ __('elsarafTemplate.about-buyer-text4') }}
                                        <span class="red-a">{{ __('elsarafTemplate.about-buyer-text5') }}</span>.

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 px-0">
                            <img src="/elsarafTemplate/img/buyer.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content py-5 text-buyers d-lg-none">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-12 text-center">
                            <h1>{{ __('elsarafTemplate.about-elsaraf') }}</h1>
                        </div>
                    </div>
                    <div class="accordion seller-types" id="aboutTypes">
                        <div class="card">
                            <div class="card-header" id="aboutElsaraf">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseaboutElsaraf" aria-expanded="true" aria-controls="collapseaboutElsaraf">
                                   <i class="fas" aria-hidden="true"></i>
                                    {{ __('elsarafTemplate.d-about-elsaraf') }}
                                </button>
                            </div>
                            <div id="collapseaboutElsaraf" class="collapse" aria-labelledby="aboutElsaraf" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/IMAGE WHAT'S ELSARAF.jpg" class="img-fluid w-100">
                                    </div>
                                    <p>{{ __('elsarafTemplate.index-who-is-elsaraf-text-1') }}</p>
                                    <p>{{ __('elsarafTemplate.index-who-is-elsaraf-text-2') }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="seller">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseseller" aria-expanded="false" aria-controls="collapseseller">
                                  <i class="fas" aria-hidden="true"></i>
                                   {{ __('elsarafTemplate.about-seller-text') }}
                                </button>

                            </div>
                            <div id="collapseseller" class="collapse" aria-labelledby="seller" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/seller.jpg" class="img-fluid w-100">
                                    </div>
                                    <ul class="list-decimal">
                                        <li>
                                            <a href="/buyer-registration">
                                              {{ __('elsarafTemplate.btn-create-free') }}.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                              {{ __('elsarafTemplate.about-register-text') }}
                                               <span class="red-a">{{ __('elsarafTemplate.about-register-text2') }}</span>.

                                            </a>
                                        </li>
                                        <li class="fs-15">
                                            <a href="">
                                               {{ __('elsarafTemplate.about-register-text3') }}
                                                <span class="red-a">{{ __('elsarafTemplate.about-register-text4') }}</span>.

                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                               {{ __('elsarafTemplate.about-start-earn') }}
                                                <span class="red-a"> {{ __('elsarafTemplate.about-register-text5') }}</span>.

                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                              {{ __('elsarafTemplate.about-register-text6') }}  .
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="buyer">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsebuyer" aria-expanded="false" aria-controls="collapsebuyer">
                                  <i class="fas" aria-hidden="true"></i>
                                    كيف استخدم الصراف كمشتري
                                </button>

                            </div>
                            <div id="collapsebuyer" class="collapse" aria-labelledby="buyer" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/img/buyer.jpg" class="img-fluid w-100">
                                    </div>
                                    <ul class="list-decimal">
                                        <li>
                                            <a href="/seller">
                                              {{ __('elsarafTemplate.btn-create-free') }}.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://elsaraf.com/marketplace/">
                                               {{ __('elsarafTemplate.about-buyer-text2') }}.
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                             {{ __('elsarafTemplate.about-buyer-text3') }}.
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                              {{ __('elsarafTemplate.about-buyer-text4') }}
                                                <span class="red-a">{{ __('elsarafTemplate.about-buyer-text5') }}</span>.

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


@endsection
