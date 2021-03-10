@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content pt-5 d-lg-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                               <img src="/elsarafTemplate/img/banners/InstitutionsBanner.jpg" class="img-fluid w-100 desktop">
                        </div>
                         <div class="col-12 text-center pt-4">
                                <h2> {{ __('elsarafTemplate.institution-header')}} </h2>
                                <p class="mb-0 font-20"> {{ __('elsarafTemplate.agent-subheader1')}}</p>
                                <p class="font-20">{{ __('elsarafTemplate.agent-subheader2')}}</p>
                        </div>

                        <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="col-md-3 col-6 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#institutions-popup">{{ __('elsarafTemplate.btn-start-now')}}</a>
                           </div>
                        </div>
                        <div class="col-12 my-4 p-0 no-margin">
                              <div class="col-12 text-center mb-5">
                                <h3 class="inst-sub-header">{{ __('elsarafTemplate.institution-main-q')}}</h3>
                              </div>
                        </div>
                         <div class="container">
                        <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
                                        <div class="row  text-center boder-left">
                                            <div class="col-12 mb-4 no-padding">
                                                <p class="bg-dark2 py-2 fs-20 text-white">{{ __('elsarafTemplate.institution-q1')}} </p>
                                            </div>
                                            <div class="col-12 text-right">
                                                <p> {{ __('elsarafTemplate.institution-ans1')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
                                        <div class="row text-center boder-right">
                                            <div class="col-12 mb-4 no-padding">
                                                <p class="bg-dark2 py-2 fs-20 text-white">{{ __('elsarafTemplate.institution-q2')}} </p>
                                            </div>
                                            <div class="col-12 text-right">
                                                <p> {{ __('elsarafTemplate.institution-ans2')}}</p>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        </div>
                         <div class="col-12 my-5 p-0">
                            <div class="col-12 text-center pb-3">
                              <h3 class="inst-sub-header"> {{ __('elsarafTemplate.institution-q3')}}</h3>
                            </div>
                        </div>
                             <div class="container">
                                <div class="row">

                                    <div class="col">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                              <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                            </div>
                                             <h3 class=""> {{ __('elsarafTemplate.agent-grid1')}}   </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/انضم.png">

                                        <p class="mt-2"> {{ __('elsarafTemplate.institution-grid11-text')}}
                                       <br>
                                       {{ __('elsarafTemplate.institution-header-mobile')}}
                                        </p>
                                    </div>
                                    </div>
                                    <div class="col">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                            </div>
                                      <h3 class=""> {{ __('elsarafTemplate.agent-grid2')}}     </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/إبدأ.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.agent-grid2-text')}}</p>
                                    </div>
                                    </div>
                                    <div class="col">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                            </div>
                                       <h3 class=""> {{ __('elsarafTemplate.institution-grid5')}}    </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/خطط.png">
                                        <p class="mt-2">    {{ __('elsarafTemplate.institution-grid5-text')}}</p>
                                    </div>
                                    </div>
                                    <div class="col">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                            </div>
                                       <h3 class="">  {{ __('elsarafTemplate.agent-grid3')}}   </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/التزم.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.institution-grid3-text')}}</p>
                                    </div>
                                    </div>
                                    <div class="col">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 5</span>
                                            </div>
                                       <h3 class=""> {{ __('elsarafTemplate.agent-grid4')}}    </h3>

                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/اجني.png">
                                        <p class="mt-2">  {{ __('elsarafTemplate.institution-grid4-text')}} </p>
                                    </div>
                                    </div>

                                 </div>
                                  </div>

                              <div class="container no-padding">
                          <div class="col-12 my-5 p-0">
                               <div class="row  justify-content-center align-items-center">
                                      <div class="col-md-6 text-right">
                                        <h3 class="py-1 mb-4 inst-header-text">{{ __('elsarafTemplate.institution-get-leader')}} </h3>
                                       <p class="m-0 fs-1rem">{{ __('elsarafTemplate.institution-leader-text1')}}</p>
                                         <div class="my-4 col-12 p-0 align-items-center justify-content-right">
                                          <div class="col-6 px-0  main-next text-center">
                                          <a href="" class="fs-20" data-toggle="modal" data-target="#institutions-popup">{{ __('elsarafTemplate.btn-start-now')}}</a>
                                         </div>
                                         </div>

                                    </div>
                                      <div class="col-md-6 text-left">
                                        <img src="/elsarafTemplate/images/احصل على مدير محترف من الصراف.jpg" class="img-fluid w-75">
                                    </div>

                                 </div>
                               </div>
                        </div>
                               <div class="col-12 pb-3">

                                    <div class="col-12 text-right mb-3 p-0">
                                        <h3 class="inst-sub-header">{{ __('elsarafTemplate.affiliate-benefits-header')}}</h3>
                                    </div>
                                </div>
                                   <div class="container">
                                        <div class="row mb-2">
                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/develop.png">
                                            <span class="mt-2">{{ __('elsarafTemplate.affiliate-benefits-li1')}}</span>
                                          </div>
                                           <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/need-money.png">
                                            <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li2')}}</span>
                                          </div>

                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/professional.png">
                                            <span class="mt-2">   {{ __('elsarafTemplate.affiliate-benefits-li3')}}</span>
                                         </div>
                                           <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/gain.png">
                                            <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li4')}}</span>
                                          </div>

                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/trusted.png">
                                           <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li5')}}</span>
                                          </div>
                                       </div>
                                  </div>

                           <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="col-md-3 col-6 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#institutions-popup">{{ __('elsarafTemplate.btn-start-now')}}</a>
                           </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="main-content py-5 d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                          <h1>  {{ __('elsarafTemplate.institution-header-mobile')}} </h1>
                            <p class="mb-0"> {{ __('elsarafTemplate.agent-subheader1')}}
                             {{ __('elsarafTemplate.agent-subheader2')}}</p>

                        </div>
                        <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="col-md-3 col-6 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#institutions-popup">{{ __('elsarafTemplate.btn-start-now')}}</a>
                           </div>
                        </div>
                    </div>
                    <div class="accordion seller-types" id="aboutTypes">
                        <div class="card">
                            <div class="card-header" id="aboutElsaraf">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseaboutElsaraf" aria-expanded="true" aria-controls="collapseaboutElsaraf">
                                   <i class="fas" aria-hidden="true"></i>
                                  {{ __('elsarafTemplate.institution-main-q')}}
                                </button>
                            </div>
                            <div id="collapseaboutElsaraf" class="collapse" aria-labelledby="aboutElsaraf" data-parent="#aboutTypes">
                                <div class="card-body">
                                   <div class="container p-0">
                                   <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
                                        <div class="row  text-center">
                                            <div class="col-12 mb-4 no-padding">
                                                <p class="bg-dark2 py-2 text-white">{{ __('elsarafTemplate.institution-q1')}} </p>
                                            </div>
                                            <div class="col-12 text-right">
                                                <p> {{ __('elsarafTemplate.institution-ans1')}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 no-padding">
                                        <div class="row text-center">
                                            <div class="col-12 mb-4 no-padding">
                                                <p class="bg-dark2 py-2 text-white">{{ __('elsarafTemplate.institution-q2')}} </p>
                                            </div>
                                            <div class="col-12 text-right">
                                                <p>{{ __('elsarafTemplate.institution-ans2')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="seller">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseseller" aria-expanded="false" aria-controls="collapseseller">
                                  <i class="fas" aria-hidden="true"></i>
                                   {{ __('elsarafTemplate.institution-q3')}}
                                </button>

                            </div>
                            <div id="collapseseller" class="collapse" aria-labelledby="seller" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <div class="container">
                                   <div class="row">
                                      <div class="col-6 affiliate-grid pr-0">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                              <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                            </div>

                                             <h3 class=""> {{ __('elsarafTemplate.agent-grid1')}}    </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/انضم.png">

                                        <p class="mt-2">{{ __('elsarafTemplate.institution-grid11-text')}}
                                        <br>
                                        {{ __('elsarafTemplate.institution-header-mobile')}}
                                       </p>
                                    </div>
                                    </div>
                                      <div class="col-6 affiliate-grid pl-0">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                            </div>
                                      <h3 class="">   {{ __('elsarafTemplate.agent-grid2')}}     </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/إبدأ.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.agent-grid2-text')}}</p>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-6 affiliate-grid pr-0">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                            </div>
                                       <h3 class=""> {{ __('elsarafTemplate.institution-grid5')}}    </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/خطط.png">
                                        <p class="mt-2">    {{ __('elsarafTemplate.institution-grid5-text')}}</p>
                                    </div>
                                    </div>
                                    <div class="col-6 affiliate-grid pl-0">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                            </div>
                                       <h3 class=""> {{ __('elsarafTemplate.agent-grid3')}}   </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/التزم.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.institution-grid3-text')}}</p>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row justify-content-center">
                                    <div class="col-6 affiliate-grid p-0">
                                         <div class="bg-white text-center py-3 px-2 h-100">
                                             <div class="mb-1">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 5</span>
                                            </div>
                                       <h3 class=""> {{ __('elsarafTemplate.agent-grid4')}}   </h3>

                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/icons/اجني.png">
                                        <p class="mt-2">  {{ __('elsarafTemplate.institution-grid4-text')}} </p>
                                    </div>
                                    </div>


                                 </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="buyer">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsebuyer" aria-expanded="false" aria-controls="collapsebuyer">
                                  <i class="fas" aria-hidden="true"></i>
                                 {{ __('elsarafTemplate.institution-get-leader')}}
                                </button>

                            </div>
                            <div id="collapsebuyer" class="collapse" aria-labelledby="buyer" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <img src="/elsarafTemplate/images/احصل على مدير محترف من الصراف.jpg" class="img-fluid w-100">
                                    </div>
                                      <p class="m-0">{{ __('elsarafTemplate.institution-leader-text1')}}.</p>
                                         <div class="mt-4 col-12 p-0 align-items-center justify-content-right">
                                          <div class="col-12 main-next text-center">
                                          <a href="" class="fs-20" data-toggle="modal" data-target="#institutions-popup">{{ __('elsarafTemplate.btn-start-now')}}</a>
                                         </div>
                                         </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="buyer2">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsebuyer2" aria-expanded="false" aria-controls="collapsebuyer2">
                                  <i class="fas" aria-hidden="true"></i>
                                  {{ __('elsarafTemplate.affiliate-benefits-header')}}
                                </button>

                            </div>
                            <div id="collapsebuyer2" class="collapse" aria-labelledby="buyer2" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row mb-2">
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/develop.png">

                                          </div>
                                          <div class="col-10 mb-2 pr-0">
                                               <span class="mt-2">{{ __('elsarafTemplate.affiliate-benefits-li1')}}</span>
                                          </div>
                                           <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/need-money.png">
                                          </div>
                                            <div class="col-10 mb-2 pr-0">
                                           <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li2')}}</span>

                                           </div>
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/professional.png">
                                         </div>
                                          <div class="col-10 mb-2 pr-0">
                                                <span class="mt-2">   {{ __('elsarafTemplate.affiliate-benefits-li3')}}</span>
                                         </div>
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/gain.png">
                                          </div>
                                          <div class="col-10 mb-2 pr-0">
                                            <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li4')}}</span>
                                          </div>

                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/trusted.png">
                                          </div>
                                           <div class="col-10 mb-2 pr-0">
                                           <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li5')}} </span>
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

