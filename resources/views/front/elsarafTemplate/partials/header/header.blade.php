<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<div class="site-navbar-wrap js-site-navbar bg-white">

    <div class="container">
        <div class="site-navbar bg-light py-md-0 py-1">
            <div class="row align-items-center margin-sm-0 mx-auto">
                <div class="col-md-2 col-4 p-0">
                    <a href="/">
                        <img src="/elsarafTemplate/img/final wh.jpg" class="img-fluid w-100">
                    </a>
                </div>
                <div class="col-md-10 col-8 p-0">
                    <nav class="site-navigation text-left" role="navigation">
                        <div class="container px-0">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-md-3">
                                <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                    <span class="icon-menu h3"></span></a>
                            </div>

                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li>
                                    <a href="/"> {{__('elsarafTemplate.h-home')}} </a>
                                </li>
                                <li class="has-children">
                                    <a href="#"> {{__('elsarafTemplate.h-company')}}</a>
                                    <ul class="dropdown arrow-top">
                                        <li>
                                            <a href="/about#aboutElsaraf"> {{__('elsarafTemplate.d-about-elsaraf')}}</a>
                                        </li>
                                        <li><a href="/about#seller"> {{__('elsarafTemplate.d-seller')}}</a></li>
                                        <li><a href="/about#buyer">{{__('elsarafTemplate.d-buyer')}} </a></li>
                                        <li><a href="/community">{{__('elsarafTemplate.d-community')}}  </a></li>
                                        <li><a href="/investors"> {{__('elsarafTemplate.d-investors')}}</a></li>
                                        <li><a href="/careers">{{__('elsarafTemplate.d-careers')}}</a></li>
                                        <li><a href="/media">{{__('elsarafTemplate.d-media')}} </a></li>

                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="/sellers">{{__('elsarafTemplate.h-trader')}}</a>
                                    <ul class="dropdown arrow-top">
                                        <li>
                                            <a href="/sellers#individuals">{{__('elsarafTemplate.d-individuals')}} </a>
                                        </li>
                                        <li><a href="/sellers#companies">{{__('elsarafTemplate.d-companies')}} </a>
                                        </li>
                                        <li><a href="/sellers#ngo"> {{__('elsarafTemplate.d-ngo')}} </a></li>
                                        <li><a href="/sellers#shops"> {{__('elsarafTemplate.d-shops')}} </a></li>
                                        <li><a href="/sellers#trade"> {{__('elsarafTemplate.d-trade')}}</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="buyers"> {{__('elsarafTemplate.h-buyer')}}</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="/buyers#bill">{{__('elsarafTemplate.d-bill')}}</a></li>
                                                <li><a href="/buyers#cart">{{__('elsarafTemplate.d-cart')}} </a></li>
                                                <li>
                                                    <a href="/buyers#mobileWallet">{{__('elsarafTemplate.d-wallet')}} </a>
                                                </li>
                                                <li>
                                                    <a href="/buyers#paymentCard"> {{__('elsarafTemplate.d-payment-card')}}  </a>
                                                </li>
                                                <li>
                                                    <a href="/buyers#electronicPayments">{{__('elsarafTemplate.d-electronicPayments')}}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="/#marketplace"> {{__('elsarafTemplate.h-customer-network')}}</a>
                                        </li>
                                        <li>
                                            <a href="/#autoReply"> {{__('elsarafTemplate.h-auto-reply')}} </a>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">{{__('elsarafTemplate.h-partners')}}</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="/affiliate">{{__('elsarafTemplate.d-affiliate')}}</a>
                                                </li>
                                                <li><a href="/agents">{{__('elsarafTemplate.d-agents')}}</a></li>
                                                <li>
                                                    <a href="/institutions">{{__('elsarafTemplate.d-institutions')}}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/login"><span
                                                    class="d-inline-block bg-dark text-white btn btn-dark"> {{__('elsarafTemplate.h-signin')}}</span></a>
                                        </li>
                                        <!-- <li>
                                            <a href="/register"><span
                                                    class="d-inline-block bg-dark text-white btn btn-dark">{{__('elsarafTemplate.h-register')}}</span></a>
                                        </li> -->
                                        <!-- <li class="pl-md-0 pr-md-1 pr-0">
                                            <!?php

                                            if (isset($_COOKIE["mrkt_lng"]) && $_COOKIE["mrkt_lng"] != 'english'){

                                            ?>
                                            <a class="pl-md-0"
                                               href="<@?php echo $_SERVER['REQUEST_URI'] . '?_lg=EN'; ?>"><span
                                                    class="d-inline-block bg-dark text-white btn btn-dark">EN</span></a>
                                            <!?php
                                            }
                                            if (!isset($_COOKIE["mrkt_lng"]) || (isset($_COOKIE["mrkt_lng"]) && $_COOKIE["mrkt_lng"] != 'arabic')){

                                            ?>
                                            <a class="pl-md-0"
                                               href="<@?php echo $_SERVER['REQUEST_URI'] . '?_lg=AR'; ?>"><span
                                                    class="d-inline-block bg-dark text-white btn btn-dark">AR</span></a>
                                            <!?php
                                            }

                                            ?>
                                            <!?php //} ?>
                                        </li> -->
                                    </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


