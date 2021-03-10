@extends('front.elsarafTemplate.layouts.app')

@section('content')
<div class="main-content pt-5 d-lg-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                 <ul class="nav nav-pills main-nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item main-nav-item">
                    <a class="nav-link {{request()->merging == 'high_quality'?'active':''}}" id="pills-high-quality-tab" data-toggle="pill" href="#pills-high-quality" role="tab" aria-controls="pills-high-quality" aria-selected="true">{{__('elsarafTemplate.merging-tab1')}}</a>
                    </li>
                    <li class="nav-item  main-nav-item">
                    <a class="nav-link {{request()->merging == 'electronic_business'?'active':''}}" id="pills-electronic-business-tab" data-toggle="pill" href="#pills-electronic-business" role="tab" aria-controls="pills-electronic-business" aria-selected="false">{{__('elsarafTemplate.merging-tab2')}}</a>
                    </li>
                    <li class="nav-item  main-nav-item">
                    <a class="nav-link {{request()->merging == 'third_party'?'active':''}}" id="pills-third-merge-tab" data-toggle="pill" href="#pills-third-merge" role="tab" aria-controls="pills-third-merge" aria-selected="false">{{__('elsarafTemplate.merging-tab3')}}</a>
                    </li>
                 </ul>
           
                 <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade {{request()->merging == 'high_quality'?'show active':''}}" id="pills-high-quality" role="tabpanel" aria-labelledby="pills-high-quality-tab">
                        <div class="row">
                            <div class="col-12 text-center">
                            <h2 class=" mb-2 merging-header-text">{{__('elsarafTemplate.merging-tab1-h1')}}</h2>
                            <p> {{__('elsarafTemplate.merging-tab1-t1')}}</p>
                            </div>
                        </div>
                        <div class="row mb-5 justify-content-center">
                            <div class="col-md-3 col-8" height="100%">
                                <div class="quality-img">
                                    <img src="/elsarafTemplate/img/merging-logos/MONETIZE-bk.png" class="img-fluid">
                                </div>
                                <div class="purple-block p-4  text-center block-height d-flex flex-column justify-content-between "> 
                                    <p class="mb-4"> {{__('elsarafTemplate.merging-tab1-mon-h')}}</p>
                                    <p class="small-p mb-3"> {{__('elsarafTemplate.merging-tab1-mon-t')}}</p>
                                    <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                        <div class="mt-3">
                                    <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(A comprehensive solution for digital goods sales)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-8" height="100%">
                                    <div class="quality-img">
                                    <img src="/elsarafTemplate/img/merging-logos/SUBSCRIBE-BK.png" class="img-fluid">
                                </div>
                                <div class="green-block p-4  text-center block-height d-flex flex-column justify-content-between ">
                                    <p class="mb-4"> {{__('elsarafTemplate.merging-tab1-sub-h')}}</p>
                                    <p class="small-p mb-3"> {{__('elsarafTemplate.merging-tab1-sub-t')}}  </p>
                                        <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                        <div class="mt-3">
                                    <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(Develop and increase participation in your business)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-8" height="100%">
                                    <div class="quality-img">
                                        <img src="/elsarafTemplate/img/merging-logos/sell-saraf bk.png" class="img-fluid">
                                    </div>
                                    <div class="blue-block p-4  text-center block-height d-flex flex-column justify-content-between ">
                                        <p class="mb-4"> {{__('elsarafTemplate.merging-tab1-sell-h')}}</p>
                                        <p class="small-p mb-3">{{__('elsarafTemplate.merging-tab1-sell-t')}}                               </p>
                                        <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                        <div class="mt-3">
                                            <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(The easiest way to sell internationally)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3 col-8" height="100%">
                                    <div class="quality-img text-center">
                                        <img src="/elsarafTemplate/images/logo-4.png" width="70%">
                                    </div>
                                <div class="baby-blue-block p-4  text-center block-height d-flex flex-column justify-content-between ">
                                        <p class="mb-4">{{__('elsarafTemplate.merging-tab1-pay-h')}}</p>
                                        <p class="small-p mb-3">{{__('elsarafTemplate.merging-tab1-pay-t')}}</p>
                                        <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                        <div class="mt-3">
                                            <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(send moneny from anywhere)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{request()->merging == 'electronic_business'?'show active':''}}" id="pills-electronic-business" role="tabpanel" aria-labelledby="pills-electronic-business-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                <div class="col-3">
                                    <ul class="row px-0">
                                        <li class="nav-item col-12 mb-0">
                                            <a class="nav-link main-head">{{__('elsarafTemplate.merging-tab2')}}</a>
                                        </li>
                                        <li class="nav-item col-12">
                                            <ul class="row px-0 mx-0 pt-3" style="">
                                                <li class="nav-item col-12 p-0">
                                                    <a class="nav-link electronic-link main-link main-link-active" id="mainTab0" onclick="callapseFunction(this.id)"> {{__('elsarafTemplate.merging-tab2-li1')}} </a>
                                                </li>
                                                <li class="nav-item col-12 p-0">
                                                    <a class="nav-link electronic-link main-link" id="mainTab1" onclick="callapseFunction(this.id)">{{__('elsarafTemplate.merging-tab2-li2')}}</a>
                                                </li>
                                                <li class="nav-item col-12 p-0">
                                                    <a class="nav-link electronic-link main-link" id="mainTab2" onclick="callapseFunction(this.id)">{{__('elsarafTemplate.leam-submitbuycomm')}}</a>
                                                </li>
                                                <li class="nav-item col-12 p-0">
                                                    <a class="nav-link electronic-link main-link" id="mainTab3" onclick="callapseFunction(this.id)">{{__('elsarafTemplate.merging-tab2-li4')}}</a>
                                                </li>
                                                <li class="nav-item col-12 p-0">
                                                    <a class="nav-link electronic-link main-link" id="mainTab4" onclick="callapseFunction(this.id)">{{__('elsarafTemplate.merging-tab2-li5')}} </a>
                                                </li>
                                                <li class="nav-item col-12 p-0">
                                                    <a class="nav-link electronic-link main-link" id="mainTab5" onclick="callapseFunction(this.id)"> {{__('elsarafTemplate.merging-tab2-li6')}}
                                                    <br>
                                                    {{__('elsarafTemplate.merging-tab2-li61')}} </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-9" style="border-right: 2px solid #343a40;">
                                    <div class="row">
                                            <div class="col-12 my-3">
                                                <h2 class="text-center" style="font-weight:500;">{{__('elsarafTemplate.merging-tab2-h1')}} </h2>
                                            </div>
                                            <div class="col-12 main-explain" id="main10">
                                                <div class="row">
                                                <div class="col-7 d-flex" style="flex-direction: column;justify-content: center;align-items: start;">
                                                <h2> {{__('elsarafTemplate.merging-tab2-li1')}} </h2>
                                                <p class="mt-4"> {{__('elsarafTemplate.merging-tab2-li1-text')}} </p>
                                                        <div class="row w-100 mt-3">
                                                            <div class=" col-6 main-next text-center mr-3">
                                                            <button class="fs-20 merging" data-id="merging electronic_business(Merging any sales channel)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-5 text-left">
                                                    <img src="/elsarafTemplate/img/electronic-business/دمج أي قناة بيع.jpg" width="100%"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 main-explain" id="main0">
                                            <div class="row">
                                                <div class="col-7  d-flex" style="flex-direction: column;justify-content: center;align-items: start;">
                                                <h2> {{__('elsarafTemplate.merging-tab2-li1')}} </h2>
                                                <p class="mt-4">{{__('elsarafTemplate.merging-tab2-li1-text')}}</p>
                                                    <div class="row w-100 mt-3">
                                                        <div class=" col-6 main-next text-center mr-3">
                                                        <button class="fs-20 merging" data-id="merging electronic_business(Merging any sales channel)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-5 text-left">
                                                    <img src="/elsarafTemplate/img/electronic-business/دمج أي قناة بيع.jpg" width="100%"/>
                                                </div>
            
                                            </div>
                                        </div>
            
                                        <div class="col-12 main-explain collapse-show" id="main1">
                                            <div class="row">
                                            <div class="col-7  d-flex" style="flex-direction: column;justify-content: center;align-items: start;">
                                                <h2>{{__('elsarafTemplate.merging-tab2-li2')}}</h2>
                                                <p class="mt-4">{{__('elsarafTemplate.merging-tab2-li2-text')}}</p>
                                                <div class="row w-100 mt-3">
                                                        <div class=" col-6 main-next text-center mr-3">
                                                        <button class="fs-20 merging" data-id="merging electronic_business(Integration with any business model)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                                                    </div>
                                                    </div>
                                            </div>
                                                <div class="col-5 text-left">
                                                    <img src="/elsarafTemplate/img/electronic-business/الدمج مع أي نموذج للأعمال.jpg" width="100%"/>
                                                </div>
            
                                            </div>
            
                                        </div>
                                        <div class="col-12 main-explain" id="main2">
                                            <div class="row">
                                            <div class="col-7 pl-0 d-flex" style="flex-direction: column;justify-content: center;align-items: start;">
                                                    <h2>{{__('elsarafTemplate.merging-tab2-li3')}}
                                                    <br>
                                                    {{__('elsarafTemplate.merging-tab2-li31')}}</h2>
                                            <p class="mt-4">{{__('elsarafTemplate.merging-tab2-li3-text')}}</p>
                                                <div class="row w-100 mt-3">
                                                        <div class=" col-6 main-next text-center mr-3">
                                                        <button class="fs-20 merging" data-id="merging electronic_business(Clients complete their purchases From your brand)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                                                    </div>
                                                    </div>
                                            </div>
                                                <div class="col-5 text-left">
                                                    <img src="/elsarafTemplate/img/electronic-business/اتمام العملاء عمليات الشراء.jpg" width="100%"/>
                                                </div>
            
                                            </div>
                                        </div>
                                        <div class="col-12 main-explain" id="main3">
                                        <div class="row">
                                            <div class="col-7 d-flex" style="flex-direction: column;justify-content: center;align-items: start;">
                                                <h2>{{__('elsarafTemplate.merging-tab2-li4')}}</h2>
                                                <p class="mt-4">{{__('elsarafTemplate.merging-tab2-li4-text')}}<br>{{__('elsarafTemplate.merging-tab2-li4-text1')}}  </p>
                                                <div class="row w-100 mt-3">
                                                    <div class=" col-6 main-next text-center mr-3">
                                                    <button class="fs-20 merging" data-id="merging electronic_business(More professional for programmers)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 text-left">
                                                    <img src="/elsarafTemplate/img/electronic-business/إحترافية أكثر للمبرمجين.jpg" width="100%"/>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-12 main-explain" id="main4">
                                        <div class="row">
                                            <div class="col-7 pl-0  d-flex" style="flex-direction: column;justify-content: center;align-items: start;">
                                                <h2>{{__('elsarafTemplate.merging-tab2-li5')}}</h2>
                                                <p class="mt-4">{{__('elsarafTemplate.merging-tab2-li5-text')}}<br>  {{__('elsarafTemplate.merging-tab2-li5-text1')}} </p>
                                                    <div class="row w-100 mt-3">
                                                        <div class=" col-6 main-next text-center mr-3">
                                                        <button class="fs-20 merging" data-id="merging electronic_business(A single payment portal for global and international business)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                                                    </div>
                                                    </div>
                                            </div>
                                                <div class="col-5 text-left">
                                                    <img src="/elsarafTemplate/img/electronic-business/بوابة دفع واحدة للأعمال العالمية و الدولية.jpg" width="100%"/>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-12 main-explain" id="main5">
                                        <div class="row">
                                            <div class="col-7  d-flex" style="flex-direction: column;justify-content: center;align-items: start;">
                                                    <p class="mt-4">{{__('elsarafTemplate.merging-tab2-li6-text')}}</p>
                                                <div class="row w-100 mt-3">
                                                        <div class=" col-6 main-next text-center mr-3">
                                                        <button class="fs-20 merging" data-id="merging electronic_business(Return your customers and serve them from the interface)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                                                    </div>
                                                    </div>
                                            </div>
                                                <div class="col-5 text-left">
                                                    <img src="/elsarafTemplate/img/electronic-business/إعادة عملاؤك و خدمتهم من الواجهة المفضلة لديك.jpg" width="100%"/>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{request()->merging == 'third_party'?'show active':''}}" id="pills-third-merge" role="tabpanel" aria-labelledby="pills-third-merge-tab">
                     <div class="container">
                      <div class="row">
   
              <div class="content col-lg-12 col-sm-12 p-0">
                  <div class="col-12 p-0">
                   <img src="/elsarafTemplate/images/third merge Banner.jpg" class="img-fluid w-100 desktop">
                   </div>
                   <div class="col-12 third-merge-tabs">
                    <ul class="nav nav-tabs third-merge-ul" id="myTab" role="tablist">
                        <li class="nav-item mb-0">
                        <a class="nav-link active" id="intro-tab" data-toggle="tab" href="#intro" role="tab" aria-controls="intro" aria-selected="true">{{__('elsarafTemplate.mrg-introin')}}</a>
                        </li>
                        <li class="nav-item mb-0">
                        <a class="nav-link" id="types-tab" data-toggle="tab" href="#types" role="tab" aria-controls="types" aria-selected="false">{{__('elsarafTemplate.mrg-typind')}}</a>
                        </li>
                        <li class="nav-item mb-0">
                        <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false"> {{__('elsarafTemplate.mrg-preindpre')}}</a>
                        </li>
                        <li class="nav-item mb-0">
                        <a class="nav-link" id="testing-tab" data-toggle="tab" href="#testing" role="tab" aria-controls="tesing" aria-selected="false">  {{__('elsarafTemplate.mrg-testetes')}}</a>
                        </li>
                    </ul>
                   </div>
                   <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="intro" role="tabpanel" aria-labelledby="intro-tab">
   
                      <div class="col-12 text-center pt-4">
                        <h2> {{__('elsarafTemplate.merging-tab3-h1')}}</h2>
                      </div>
                        <div class="row pt-5">
                            <div class="col-6 pt-4 text-right">
                                    <div>
                                        <h3 class="py-4">{{__('elsarafTemplate.mrg-whprogramwo')}}</h3>
                                        <p class="w-100 m-0 fs-20 mt-3 mb-1" style="line-height:1.5;">{{__('elsarafTemplate.mrg-ifcompser')}} </p>
                                    </div>
                                    <div>
                                        <h3 class="py-4">{{__('elsarafTemplate.mrg-paysolupay')}}</h3>
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>{{__('elsarafTemplate.mrg-fromobfr')}} </h5>
                                                <h5 class="mt-4">{{__('elsarafTemplate.mrg-buyelectrbu')}} </h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>{{__('elsarafTemplate.mrg-cardelectcard')}}</h5>
                                                <h5 class="mt-4">{{__('elsarafTemplate.mrg-electbaack')}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                    <div class="col-12 payment-methods">
                                        <a href="#" class="places">{{__('elsarafTemplate.mrg-paymetineg')}}</a>
                                        <div class="payment-methods-tooltip">
                                            <div class="row mx-0 px-2">
                                                <div class="col-3 py-2 px-1">
                                                    <img src="/elsarafTemplate/img/final bk.jpg" class="img-fluid w-100">
                                                </div>
                                                <div class="col-12 py-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>{{__('elsarafTemplate.mrg-digibackdig')}}</p>
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
                                                            <p>{{__('elsarafTemplate.mrg-networksubs')}}</p>
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
                                                            <p>{{__('elsarafTemplate.mrg-cardpaysub')}}</p>
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
                                                            <p>{{__('elsarafTemplate.mrg-netwopayele')}}</p>
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
            
                                <div class="col-6 pb-4 text-left">
                                <img src="/elsarafTemplate/images/integration vector.jpg" width="80%"/>
                                </div>
        
                        </div>
   
                        <div class="col-12 text-right mt-4 p-0">
                            <h3>{{__('elsarafTemplate.mrg-sermerdonwith')}}</h3>
                         </div>
                      <div class="col-12 p-0">
                        <div class="row spacing">
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                        <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                    </div>
                                    <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/API.png">
                                    <h4 class="mt-2"> {{__('elsarafTemplate.mrg-obtainsomet')}} <br>API    </h4>
                                </div>
                        </div>
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/العمل على الدمج.png">
                                  <h4 class="mt-2">  {{__('elsarafTemplate.mrg-mergecompliers')}}   </h4>
   
                           </div>
                           </div>
   
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/مرحلة الاختبار.png">
                                  <h4 class="mt-2"> {{__('elsarafTemplate.mrg-gotogoo')}}
                                  <br>
                                  {{__('elsarafTemplate.mrg-teststtes')}}  </h4>
   
                           </div>
                           </div>
   
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/العمل مباشرة مع عملاء الصراف.png">
                                  <h4 class="mt-2">  {{__('elsarafTemplate.mrg-gotowokws')}}  </h4>
   
                           </div>
                           </div>
                        </div>
                        </div>
                         <div class="row justify-content-center pb-5">
                       <div class="col-md-2 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Introduction)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-mergwornow')}}</button>
                         </div>
                        </div>
   
   
                     </div>
                     <div class="tab-pane fade" id="types" role="tabpanel" aria-labelledby="types-tab">
   
                   <div class="col-12 text-center pt-4">
                     <h2>
                       {{__('elsarafTemplate.mrg-mergtypesss')}}
   
                     </h2>
                   </div>
                   <div class="container p-0">
   
                   <div class="col-12 spacing">
                       <div class="row">
                       <div class="col-4" style="border-left: 2px solid #343a40;">
                           <h4 class="second-tab-header-text">{{__('elsarafTemplate.mrg-payfrmobil')}}</h4>
                       </div>
                       <div class="col-8">
                           <h5 class="second-tab-sub-text">{{__('elsarafTemplate.mrg-paymetmobica')}}</h5>
                       </div>
                       </div>
   
                        <div class="row">
                       <div class="col-4" style="border-left: 2px solid #343a40;">
                           <h4 class="second-tab-header-text">{{__('elsarafTemplate.mrg-backmoneyy')}}  </h4>
                       </div>
                       <div class="col-8">
                           <h5 class="second-tab-sub-text">{{__('elsarafTemplate.mrg-servrecievemo')}}</h5>
                       </div>
                       </div>
   
                         <div class="row">
                       <div class="col-4" style="border-left: 2px solid #343a40;">
                           <h4 class="second-tab-header-text">{{__('elsarafTemplate.mrg-cardelectcard')}}   </h4>
                       </div>
                       <div class="col-8">
                           <h5 class="second-tab-sub-text">{{__('elsarafTemplate.mrg-creditcardmin')}}</h5>
                       </div>
                       </div>
   
                         <div class="row">
                       <div class="col-4" style="border-left: 2px solid #343a40;">
                           <h4 class="second-tab-header-text"> {{__('elsarafTemplate.mrg-payelectroni')}}  </h4>
                       </div>
                       <div class="col-8">
                           <h5 class="second-tab-sub-text"> {{__('elsarafTemplate.mrg-promoclientco')}} </h5>
                       </div>
                       </div>
   
                        <div class="row justify-content-center spacing pb-0">
                       <div class="col-md-2 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Types of mergers)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-mergwornow')}}</button>
                         </div>
                        </div>
                   </div>
                   </div>
   
                 </div>
                     <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                     <div class="col-12 text-center pt-4">
                     <h2>{{__('elsarafTemplate.mrg-beorganwiths')}}       </h2>
                   </div>
                   <div class="container p-0">
   
                   <div class="col-12 spacing">
                       <table>
                     <tr style="background: #ccc;color: #000;">
                      <th>{{__('elsarafTemplate.mrg-worktimewo')}} </th>
                      <th>{{__('elsarafTemplate.mrg-responsibeitt')}}</th>
                      <th>{{__('elsarafTemplate.mrg-stepsstepp')}}</th>
                     </tr>
                      <tr>
                      <td>{{__('elsarafTemplate.mrg-contactgroufe')}}</td>
                      <td>{{__('elsarafTemplate.mrg-waythreeser')}}</td>
                      <td>{{__('elsarafTemplate.mrg-imlrequestsr')}}</td>
                      </tr>
                       <tr>
                      <td>{{__('elsarafTemplate.mrg-acceptgroup')}}</td>
                      <td>{{__('elsarafTemplate.mrg-ownergrous')}}</td>
                      <td>{{__('elsarafTemplate.mrg-sendallinf')}}</td>
                      </tr>
                      <tr>
                      <td>{{__('elsarafTemplate.mrg-needmergday')}}</td>
                      <td>{{__('elsarafTemplate.mrg-groupdevelopser')}}</td>
                      <td>{{__('elsarafTemplate.mrg-workonimplemen')}}</td>
                      </tr>
   
                       <tr>
                      <td>{{__('elsarafTemplate.mrg-daysworkwor')}}</td>
                      <td>{{__('elsarafTemplate.mrg-selectwaypaysa')}}</td>
                      <td>{{__('elsarafTemplate.mrg-testtess')}}</td>
                      </tr>
                      </table>
   
   
                        <div class="row justify-content-center spacing pb-0">
                       <div class="col-md-2 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Merge settings)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-maergeworkno')}}</button>
                         </div>
                        </div>
                  </div>
   
                  </div>
                  </div>
                     <div class="tab-pane fade" id="testing" role="tabpanel" aria-labelledby="testing-tab">
                         <div class="col-12 text-center pt-4">
                     <h2> {{__('elsarafTemplate.mrg-whyshouldmerg')}}</h2>
                   </div>
                      <div class="col-12 spacing pt-0 mt-4 text-center">
                       <p class="w-100 m-0 fs-20 mt-3 mb-1" style="line-height:1.5;">
                           {{__('elsarafTemplate.mrg-shoulsgiservich')}}
                           <br>
                           {{__('elsarafTemplate.mrg-whyshoudcomplete')}}.
   
                      </p>
                   </div>
   
                      <div class="col-12 text-right pt-4 p-0">
                       <h3>{{__('elsarafTemplate.mrg-workperiotest')}}</h3>
                         </div>
                         <div class="row spacing">
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/قدم طلب للإنضمام .png">
                                  <h4 class="mt-2">
                                   {{__('elsarafTemplate.mrg-thironegives')}}
                                  <br>
                                  {{__('elsarafTemplate.mrg-demandserviceout')}}
                                  <br>
                                  {{__('elsarafTemplate.mrg-starttestts')}}                               
                                </h4>
   
                           </div>
                           </div>
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/اختبار كبائع و مشتري.png">
                                  <h4 class="mt-2">   {{__('elsarafTemplate.mrg-groupdevelotest')}}
                                  <br>
                                  {{__('elsarafTemplate.mrg-buyerwithmany')}}    </h4>
   
                           </div>
                           </div>
   
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/وضع قائمة بالمشاكل المتوقعة .png">
                                  <h4 class="mt-2">  {{__('elsarafTemplate.mrg-listproblmay')}} </h4>
   
                           </div>
                           </div>
   
                         <div class="col-3">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/الموافقه او الرفض.png">
                                  <h4 class="mt-2">{{__('elsarafTemplate.mrg-acceptorref')}}
                                  <br>
                                  {{__('elsarafTemplate.mrg-groupwokparti')}}   </h4>
   
                           </div>
                           </div>
                        </div>
   
                        <div class="row justify-content-center spacing mb-4">
                       <div class="col-md-2 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Merge Test)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-mergwornow')}}</button>
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
           </div>
       </div>
   </div>
   
   <div class="main-content py-5 d-lg-none">
       <div class="container">
           <div class="row">
           <div class="col-12 text-center">
                 <h2 class="text-center">{{__('elsarafTemplate.mrg-productspodpdus')}}</h2>
           </div>
   
           </div>
            <div class="accordion seller-types pt-3" id="aboutTypes">
               <div class="card">
                   <div class="card-header" id="high-quality">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#high-quality-collapse" aria-expanded="true" aria-controls="high-quality-collapse">
                          <i class="fas" aria-hidden="true"></i>
                          {{__('elsarafTemplate.merging-tab1')}}
                       </button>
                   </div>
                   <div id="high-quality-collapse" class="collapse" aria-labelledby="high-quality" data-parent="#aboutTypes">
                       <div class="card-body">
                            <div class="row">
                       <div class="col-12 text-center">
                       <h2 class=" mb-2 merging-header-text"> {{__('elsarafTemplate.merging-tab1-h1')}} </h2>
                       <!--<h2 class=" mb-3"> Our packages include 2Sell, 2Subscribe, and 2Monetize</h2>-->
                       <p> {{__('elsarafTemplate.merging-tab1-t1')}}</p>
                       </div>
                   </div>
                      <div class="row mb-5 justify-content-center">
                       <div class="col-md-3 col-8">
                           <div class="quality-img">
                              <img src="/elsarafTemplate/images/MONETIZE.png" class="img-fluid">
                           </div>
                           <div class="purple-block p-4  text-center block-height d-flex flex-column justify-content-between ">
   
   
                               <p class="mb-4"> {{__('elsarafTemplate.merging-tab1-mon-h')}}</p>
                               <p class="small-p mb-3">
   
                                   {{__('elsarafTemplate.mrg-helpincprod')}}
                                               </p>
                               <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                 <div class="mt-3">
                               <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(A comprehensive solution for digital goods sales)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                 </div>
                           </div>
                       </div>
                       <div class="col-md-3 col-8">
                            <div class="quality-img2">
                              <img src="/elsarafTemplate/images/SUBSCRIBE.png" class="img-fluid">
                           </div>
                           <div class="green-block p-4  text-center block-height d-flex flex-column justify-content-between ">
                               <p class="mb-4"> {{__('elsarafTemplate.merging-tab1-sub-h')}}</p>
                               <p class="small-p mb-3">
                                   {{__('elsarafTemplate.merging-tab1-sub-t')}}
                                               </p>
                                <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                 <div class="mt-3">
                               <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(Develop and increase participation in your business)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                 </div>
                           </div>
                       </div>
                       <div class="col-md-3 col-8">
                              <div class="quality-img3">
                                  <img src="/elsarafTemplate/images/sell-saraf logo.png" class="img-fluid">
                               </div>
                           <div class="blue-block p-4  text-center block-height d-flex flex-column justify-content-between ">
                               <p class="mb-4"> {{__('elsarafTemplate.merging-tab1-sell-h')}}</p>
                               <p class="small-p mb-3">
                                   {{__('elsarafTemplate.merging-tab1-sell-t')}}                                        </p>
                                <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                 <div class="mt-3">
                               <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(The easiest way to sell internationally)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                 </div>
                           </div>
                       </div>
                        <div class="col-md-3 col-8" height="100%">
                              <div class="quality-img4 text-center">
                                  <img src="/elsarafTemplate/images/logo-4.png" width="70%">
                               </div>
                           <div class="baby-blue-block p-4  text-center block-height d-flex flex-column justify-content-between ">
                               <p class="mb-4">{{__('elsarafTemplate.merging-tab1-pay-h')}}</p>
                               <p class="small-p mb-3">{{__('elsarafTemplate.merging-tab1-pay-t')}}
                               </p>
                               <p><a href="/learn-more" class="lear-more">{{__('elsarafTemplate.btn-learn-more')}}</a></p>
                                 <div class="mt-3">
                               <button class="d-inline-block bg-dark text-white btn btn-dark w-50 btn-bottom merging" data-id="merging high_quality(send moneny from anywhere)" type="button" data-toggle="modal" data-target="#order-now-popup"> {{__('elsarafTemplate.btn-apply-now')}} </button>
                                 </div>
                           </div>
                       </div>
                   </div>
   
                       </div>
                   </div>
               </div>
               <div class="card">
                   <div class="card-header" id="business-merge">
   
                       <button class="btn" type="button" data-toggle="collapse" data-target="#business-merge-collapse" aria-expanded="false" aria-controls="business-merge-collapse">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.merging-tab2')}}
                       </button>
   
                   </div>
                   <div id="business-merge-collapse" class="collapse" aria-labelledby="business-merge" data-parent="#aboutTypes">
                       <div class="card-body">
   
                     <div class="row">
                        <div class="col-12 p-0">
                           <div class="row">
                                <div class="col-12 text-center">
                                    <h2 class="merging-sub-header">{{__('elsarafTemplate.merging-tab2-h1')}}</h2>
                               </div>
                           </div>
                   <div class="accordion seller-types" id="aboutTypes2">
                    <div class="card">
                   <div class="card-header" id="any-channel">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#any-channel-collapse" aria-expanded="true" aria-controls="any-channel-collapse">
                        <i class="fas" aria-hidden="true"></i>
                        {{__('elsarafTemplate.merging-tab2-li1')}}
                       </button>
                   </div>
                   <div id="any-channel-collapse" class="collapse" aria-labelledby="any-channel" data-parent="#aboutTypes2">
                       <div class="card-body">
                           <div class="row mb-20">
                               <img src="/elsarafTemplate/img/electronic-business/دمج أي قناة بيع.jpg" class="img-fluid w-100">
                           </div>
                           <p> {{__('elsarafTemplate.merging-tab2-li1-text')}}</p>
                            <div class="row w-100 mt-3">
                               <div class=" col-12 main-next text-center mr-3">
                                   <button class="fs-20 merging" data-id="merging electronic_business(Merging any sales channel)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                    <div class="card">
                   <div class="card-header" id="collapseMerge">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#collapseMergediv" aria-expanded="true" aria-controls="collapseMergediv">
                        <i class="fas" aria-hidden="true"></i>
                        {{__('elsarafTemplate.merging-tab2-li2')}}
                       </button>
                   </div>
                   <div id="collapseMergediv" class="collapse" aria-labelledby="collapseMerge" data-parent="#aboutTypes2">
                       <div class="card-body">
                           <div class="row mb-20">
                               <img src="/elsarafTemplate/img/electronic-business/الدمج مع أي نموذج للأعمال.jpg" class="img-fluid w-100">
                           </div>
                            <p>{{__('elsarafTemplate.merging-tab2-li2-text')}}.</p>
                            <div class="row w-100 mt-3">
                               <div class=" col-12 main-next text-center mr-3">
                                   <button class="fs-20 merging" data-id="merging electronic_business(Merging any sales channel)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                    <div class="card">
                   <div class="card-header" id="collapseBusiness">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#collapseBusinessDiv" aria-expanded="true" aria-controls="collapseBusinessDiv">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.leam-submitbuycomm')}}
                       </button>
                   </div>
                   <div id="collapseBusinessDiv" class="collapse" aria-labelledby="collapseBusiness" data-parent="#aboutTypes2">
                       <div class="card-body">
                           <div class="row mb-20">
                               <img src="/elsarafTemplate/img/electronic-business/اتمام العملاء عمليات الشراء.jpg" class="img-fluid w-100">
                           </div>
                            <p>{{__('elsarafTemplate.mrg-focusmarketsign')}}</p>
   
                            <div class="row w-100 mt-3">
                               <div class=" col-12 main-next text-center mr-3">
                                   <button class="fs-20 merging" data-id="merging electronic_business(Clients complete their purchases From your brand)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                    <div class="card">
                    <div class="card-header" id="collapseProf">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#collapseProfDiv" aria-expanded="true" aria-controls="collapseProfDiv">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.merging-tab2-li4')}}
                       </button>
                    </div>
                    <div id="collapseProfDiv" class="collapse" aria-labelledby="collapseProf" data-parent="#aboutTypes2">
                       <div class="card-body">
                           <div class="row mb-20">
                               <img src="/elsarafTemplate/img/electronic-business/إحترافية أكثر للمبرمجين.jpg" class="img-fluid w-100">
                           </div>
                             <p>{{__('elsarafTemplate.mrg-maketesteasysom')}}                   </p>
                            <div class="row w-100 mt-3">
                               <div class=" col-12 main-next text-center mr-3">
                                   <button class="fs-20 merging" data-id="merging electronic_business(More professional for programmers)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                    <div class="card">
                    <div class="card-header" id="collapseNational">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#collapseNationalDiv" aria-expanded="true" aria-controls="collapseNationalDiv">
                        <i class="fas" aria-hidden="true"></i>
                        {{__('elsarafTemplate.merging-tab2-li5')}}
                       </button>
                   </div>
                   <div id="collapseNationalDiv" class="collapse" aria-labelledby="collapseNational" data-parent="#aboutTypes2">
                       <div class="card-body">
                           <div class="row mb-20">
                               <img src="/elsarafTemplate/img/electronic-business/بوابة دفع واحدة للأعمال العالمية و الدولية.jpg" class="img-fluid w-100">
                           </div>
                           <p>{{__('elsarafTemplate.mrg-acceptspaymmeth')}}</p>
                            <div class="row w-100 mt-3">
                               <div class=" col-12 main-next text-center mr-3">
                                   <button class="fs-20 merging" data-id="merging electronic_business(A single payment portal for global and international business)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                    <div class="card">
                   <div class="card-header" id="collapseService">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#collapseServiceDiv" aria-expanded="true" aria-controls="collapseServiceDiv">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.mrg-returnclienfr')}}
                       </button>
                   </div>
                   <div id="collapseServiceDiv" class="collapse" aria-labelledby="collapseService" data-parent="#aboutTypes2">
                       <div class="card-body">
                           <div class="row mb-20">
                               <img src="/elsarafTemplate/img/electronic-business/إعادة عملاؤك و خدمتهم من الواجهة المفضلة لديك.jpg" class="img-fluid w-100">
                           </div>
                           <p>{{__('elsarafTemplate.mrg-ondifintsight')}}</p>
                            <div class="row w-100 mt-3">
                               <div class=" col-12 main-next text-center mr-3">
                                   <button class="fs-20 merging" data-id="merging electronic_business(Return your customers and serve them from the interface)" type="button" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.btn-apply-now')}}</button>
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
               </div>
               <div class="card">
                   <div class="card-header" id="third-merge">
   
                       <button class="btn" type="button" data-toggle="collapse" data-target="#third-merge-collapse" aria-expanded="false" aria-controls="third-merge-collapse">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.merging-tab3')}}
                       </button>
   
                   </div>
                   <div id="third-merge-collapse" class="collapse" aria-labelledby="third-merge" data-parent="#aboutTypes">
                       <div class="card-body">
                            <div class="row">
                        <div class="col-12 p-0">
                           <div class="row">
                                <div class="col-12 text-center">
                                    <h2 class="merging-sub-header"></h2>
                               </div>
                           </div>
               <div class="accordion seller-types" id="aboutTypes3">
                    <div class="card">
                   <div class="card-header" id="merge-intro">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#merge-intro-collapse" aria-expanded="true" aria-controls="merge-intro-collapse">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.mrg-introin')}}
                       </button>
                   </div>
                   <div id="merge-intro-collapse" class="collapse" aria-labelledby="merge-intro" data-parent="#aboutTypes3">
                       <div class="card-body">
                           <div class="row">
                                <div class="col-12 text-center">
                                    <h2 class="merging-sub-header">{{__('elsarafTemplate.merging-tab3-h1')}} </h2>
                               </div>
                           </div>
                           <div class="row mb-20">
                               <img src="/elsarafTemplate/images/integration vector.jpg" class="img-fluid w-100">
                           </div>
                           <p> {{__('elsarafTemplate.mrg-ifcompser')}}</p>
                               <div class="payment-solutions">
                              <h3 class="py-4 merging-header-text">{{__('elsarafTemplate.mrg-paysolupay')}}</h3>
                              <div class="row">
                                <div class="col-6">
                                <h5 class="merging-sub-header">{{__('elsarafTemplate.mrg-fromobfr')}} </h5>
                                <h5 class="mt-4 merging-sub-header">{{__('elsarafTemplate.mrg-buyelectrbu')}} </h5>
                               </div>
                               <div class="col-6">
                                <h5 class="merging-sub-header">{{__('elsarafTemplate.mrg-cardelectcard')}}</h5>
                               <h5 class="mt-4 merging-sub-header">{{__('elsarafTemplate.mrg-electbaack')}}</h5>
                             </div>
                             </div>
                            </div>
                               <div class="col-12 text-right mt-4 p-0">
                              <h3 class="merging-sub-header">{{__('elsarafTemplate.mrg-sermerdonwith')}}</h3>
                             </div>
                               <div class="col-12 p-0">
                                   <div class="row">
                                     <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/API.png">
                                  <h4 class="mt-2 merging-sub-header"> {{__('elsarafTemplate.mrg-obtainsomet')}}
                                  <br>
                                  API    </h4>
   
                           </div>
                           </div>
                                     <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/العمل على الدمج.png">
                                  <h4 class="mt-2 merging-sub-header">  {{__('elsarafTemplate.mrg-mergecompliers')}}   </h4>
   
                           </div>
                           </div>
                                     <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/مرحلة الاختبار.png">
                                  <h4 class="mt-2 merging-sub-header"> {{__('elsarafTemplate.mrg-gotogoo')}}
                                  <br>
                                  {{__('elsarafTemplate.mrg-teststtes')}}  </h4>
   
                           </div>
                           </div>
                                     <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/العمل مباشرة مع عملاء الصراف.png">
                                  <h4 class="mt-2 merging-sub-header">  {{__('elsarafTemplate.mrg-gotowokws')}}    </h4>
   
                           </div>
                           </div>
                                   </div>
   
                            <div class="row justify-content-center">
                             <div class="col-11 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Introduction)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-mergwornow')}}</button>
                            </div>
                           </div>
                       </div>
                       </div>
                   </div>
                   </div>
                    <div class="card">
                   <div class="card-header" id="mergeTypes">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#mergeTypesDiv" aria-expanded="true" aria-controls="mergeTypesDiv">
                      <i class="fas" aria-hidden="true"></i>
                      {{__('elsarafTemplate.mrg-typind')}}
                       </button>
                   </div>
                   <div id="mergeTypesDiv" class="collapse" aria-labelledby="mergeTypes" data-parent="#aboutTypes3">
                       <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2 class="merging-sub-header"> {{__('elsarafTemplate.mrg-mergtypesss')}} </h2>
                               </div>
                           </div>
                           <div class="container p-0">
                             <div class="col-12">
                       <div class="row pb-2">
                       <div class="col-4 pr-0">
                           <h4 class="second-tab-header-text merging-sub-header">{{__('elsarafTemplate.mrg-payfrmobil')}}</h4>
                       </div>
                       <div class="col-8 p-0 justify-content-center align-items-center d-flex">
                           <h5 class="merging-sub">{{__('elsarafTemplate.mrg-paymetmobica')}}</h5>
                       </div>
                       </div>
   
                         <div class="row pb-2">
                       <div class="col-4 pr-0">
                           <h4 class="second-tab-header-text merging-sub-header"> {{__('elsarafTemplate.mrg-cardelectcard')}}  </h4>
                       </div>
                       <div class="col-8 p-0 justify-content-center align-items-center d-flex">
                           <h5 class="merging-sub">{{__('elsarafTemplate.mrg-creditcardmin')}}</h5>
                       </div>
                       </div>
                        <div class="row pb-2">
                       <div class="col-4 pr-0">
                           <h4 class="second-tab-header-text merging-sub-header">{{__('elsarafTemplate.mrg-backmoneyy')}}  </h4>
                       </div>
                       <div class="col-8 p-0 justify-content-center align-items-center d-flex">
                           <h5 class="merging-sub">{{__('elsarafTemplate.mrg-servrecievemo')}}</h5>
                       </div>
                       </div>
   
   
                         <div class="row pb-4">
                       <div class="col-4 pr-0">
                           <h4 class="second-tab-header-text merging-sub-header"> {{__('elsarafTemplate.mrg-payelectroni')}} </h4>
                       </div>
                       <div class="col-8 p-0 justify-content-center align-items-center d-flex">
                           <h5 class="merging-sub"> {{__('elsarafTemplate.mrg-promoclientco')}} </h5>
                       </div>
                       </div>
                   </div>
                           </div>
                          <div class="col-12 p-0">
                            <div class="row justify-content-center">
                             <div class="col-11 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Types of mergers)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-mergwornow')}}</button>
                            </div>
                           </div>
                       </div>
                       </div>
                   </div>
               </div>
                    <div class="card">
                    <div class="card-header" id="collapse-setting">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#collapse-settingDiv" aria-expanded="true" aria-controls="collapse-settingDiv">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.mrg-preindpre')}}
                       </button>
                    </div>
                    <div id="collapse-settingDiv" class="collapse" aria-labelledby="collapse-setting" data-parent="#aboutTypes3">
                       <div class="card-body p-0">
                         <div class="row">
                                <div class="col-12 text-center">
                                    <h2 class="merging-sub-header">  {{__('elsarafTemplate.mrg-beorganwiths')}} </h2>
                               </div>
                           </div>
                           <div class="container p-0">
   
                   <div class="col-12 p-0">
                       <table>
                     <tr style="background: #ccc;color: #000;">
                      <th>{{__('elsarafTemplate.mrg-worktimewo')}} </th>
                      <th>{{__('elsarafTemplate.mrg-responsibeitt')}}</th>
                      <th>{{__('elsarafTemplate.mrg-stepsstepp')}}</th>
                     </tr>
                      <tr>
                      <td>{{__('elsarafTemplate.mrg-contactgroufe')}}</td>
                      <td>{{__('elsarafTemplate.mrg-waythreeser')}}</td>
                      <td>{{__('elsarafTemplate.mrg-imlrequestsr')}}</td>
                      </tr>
                       <tr>
                      <td>{{__('elsarafTemplate.mrg-acceptgroup')}}</td>
                      <td>{{__('elsarafTemplate.mrg-ownergrous')}}</td>
                      <td>{{__('elsarafTemplate.mrg-sendallinf')}}</td>
                      </tr>
                      <tr>
                      <td>{{__('elsarafTemplate.mrg-needmergday')}}</td>
                      <td>{{__('elsarafTemplate.mrg-groupdevelopser')}}</td>
                      <td>{{__('elsarafTemplate.mrg-workonimplemen')}}</td>
                      </tr>
   
                       <tr>
                      <td>{{__('elsarafTemplate.mrg-daysworkwor')}}</td>
                      <td>{{__('elsarafTemplate.mrg-selectwaypaysa')}}</td>
                      <td>{{__('elsarafTemplate.mrg-testtess')}}</td>
                      </tr>
                      </table>
                  </div>
   
                  </div>
                           <div class="col-12 px-0 pt-3">
                            <div class="row justify-content-center">
                             <div class="col-10 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Merge settings)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-mergwornow')}}</button>
                            </div>
                           </div>
                       </div>
                       </div>
                   </div>
               </div>
                    <div class="card">
                   <div class="card-header" id="collapse-test">
                       <button class="btn" type="button" data-toggle="collapse" data-target="#collapse-testDiv" aria-expanded="true" aria-controls="collapse-testDiv">
                         <i class="fas" aria-hidden="true"></i>
                         {{__('elsarafTemplate.mrg-testetes')}}
                       </button>
                   </div>
                   <div id="collapse-testDiv" class="collapse" aria-labelledby="collapse-test" data-parent="#aboutTypes3">
                       <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <h2 class="merging-sub-header">  {{__('elsarafTemplate.mrg-whyshouldmerg')}} </h2>
                               </div>
                           </div>
                            <p>{{__('elsarafTemplate.mrg-elspreserveong')}}
                          </p>
                          <div class="col-12 text-right p-0">
                            <h3 class="merging-sub-header">{{__('elsarafTemplate.mrg-workperiotest')}}</h3>
                          </div>
                           <div class="row">
                         <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/قدم طلب للإنضمام .png">
                                  <h4 class="mt-2 merging-sub">
                                   {{__('elsarafTemplate.mrg-thironegives')}}
                                  <br>
                                  {{__('elsarafTemplate.mrg-commandinstrtest')}}
                                   </h4>
   
                           </div>
                           </div>
                         <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/اختبار كبائع و مشتري.png">
                                  <h4 class="mt-2 merging-sub">   {{__('elsarafTemplate.mrg-groupdevmaks')}}    </h4>
   
                           </div>
                           </div>
   
                         <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/وضع قائمة بالمشاكل المتوقعة .png">
                                  <h4 class="mt-2 merging-sub">  {{__('elsarafTemplate.mrg-listproblmay')}} </h4>
   
                           </div>
                           </div>
   
                         <div class="col-6">
                                <div class="bg-white text-center py-3 px-2 h-100">
                                    <div class="mb-1">
                                   <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                   </div>
                               <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/الموافقه او الرفض.png">
                                  <h4 class="mt-2 merging-sub"> {{__('elsarafTemplate.mrg-appacceptorref')}}   </h4>
   
                           </div>
                           </div>
                        </div>
   
                        <div class="row justify-content-center">
                       <div class="col-11 main-next text-center">
                           <button class="fs-20 merging" data-id="merging third_party(Merge Test)" data-toggle="modal" data-target="#order-now-popup">{{__('elsarafTemplate.mrg-mergwornow')}}</button>
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
               </div>
           </div>
   
       </div>
   </div>

@endsection
@push('scripts')
<script>
    function callapseFunction(clicked_id) {

        var str = clicked_id;
        var res = str.charAt(str.length-1);
        var res2 = str.charAt(str.length-2);
        var res3 = res2+res;
        // console.log(str);
        // console.log(res3);
        if(res3!=11 && res3!=12){
            if(res3>9 && res3<15){
                var x= res3;
                // console.log("tghnvb");
                $("#main"+res3).removeClass("collapse-none");
                $("#main"+res3).addClass("collapse-show");
                $("#mainTab"+res3).addClass("main-link-active");
                for(var i=0; i<15; i++){
                    if(i!=res3){
                        $("#main"+i).removeClass("collapse-show");
                        $("#main"+i).addClass("collapse-none");
                        $("#mainTab"+i).removeClass("main-link-active");

                    }
               }
            }
            else{
                // console.log("tghnvb");
                $("#main"+res).removeClass("collapse-none");
                $("#main"+res).addClass("collapse-show");
                $("#mainTab"+res).addClass("main-link-active");
                for(var i=0; i<15; i++){
                    if(i!=res){
                        $("#main"+i).removeClass("collapse-show");
                        $("#main"+i).addClass("collapse-none");
                        $("#mainTab"+i).removeClass("main-link-active");

                    }
               }
            }
        }
        else{
            // console.log("sdfghjk");
            $("#main10").removeClass("collapse-none");
            $("#main10").addClass("collapse-show");
            $("#mainTab"+res3).addClass("main-link-active");
            for(var i=0; i<15; i++){
                if(i!=res3 && i!=10){
                    $("#main"+i).removeClass("collapse-show");
                    $("#main"+i).addClass("collapse-none");
                    $("#mainTab"+i).removeClass("main-link-active");
                }
           }
        }

    }

</script>
<script>
    $(document).ready(function() {
        // console.log("aykalam");
        for(var i=0; i<15; i++){
            if(i==10){
                $("#main10").addClass("collapse-show");
            }
            else{
                $("#main"+i).addClass("collapse-none");
            }

        }
    });
</script>
@endpush
