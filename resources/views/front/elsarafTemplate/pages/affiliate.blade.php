@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content pt-5 d-lg-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-lg-block d-none">
                               <img src="/elsarafTemplate/img/banners/AffiliateBanner_ِar.jpg" class="img-fluid w-100 desktop">
                        </div>
                        <div class="col-12 pt-4 d-flex justify-content-center align-items-center">
                             <div class="row w-100 justify-content-center align-items-center">
                                 <div class="col-md-5 text-center ">
                                     <div class="affiliate-main-header">
                                     <h2> {{ __('elsarafTemplate.affiliate-header') }}
                                     <br>
                                      {{ __('elsarafTemplate.affiliate-subheader') }}
                                     </h2>
                                     </div>

                                 </div>
                             </div>
                        </div>
                        <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center affiliate-btn">
                            <div class="col-md-3 col-6 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#start_affilate_popup">{{ __('elsarafTemplate.btn-start-now') }}</a>
                           </div>
                          </div>
                           <div class="col-12 my-5 affiliate-no-m-bottom no-padding">
                                <div class="row">
                                     <div class="col-md-3 col-6  affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.affiliate-li1') }}</h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/قدم طلب للإنضمام .png">
                                        <p class="mt-2"> {{ __('elsarafTemplate.affiliate-li1-text') }}   </p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100 ">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                            </div>
                                        <h3>{{ __('elsarafTemplate.affiliate-li2') }}</h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/إبدأ بالعمل فوراً.png">
                                        <p class="mt-2">{{ __('elsarafTemplate.affiliate-li2-text') }}</p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.affiliate-li3') }}    </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/طور من مهارات عملاؤك .png">
                                        <p class="mt-2">{{ __('elsarafTemplate.affiliate-li3-text') }}</p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                            </div>
                                        <h3>{{ __('elsarafTemplate.affiliate-li4') }}   </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/ابدأ-بالربح.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.affiliate-li4-text') }}</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                         <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="col-md-3 col-6 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#start_affilate_popup">{{ __('elsarafTemplate.btn-start-now') }}</a>
                           </div>
                          </div>
                        <div class="col-12 my-5 affiliate-no-m-bottom affiliate-no-m-top calc-div no-padding">
                            <div class="container">
                                <div class="row justify-content-center bg-white py-3">
                                    <div class=" col-12 text-center mb-3">
                                        <h2 class="bg-white calc-text"> {{ __('elsarafTemplate.affiliate-calc-header') }}</h2>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-4 col-7">
                                                <h4> {{ __('elsarafTemplate.affiliate-calc-subheader1') }}  </h4>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <input type="number" class="form-control" placeholder="{{ __('elsarafTemplate.affiliate-calc-enter-number') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-4 col-7">
                                                <h4>{{ __('elsarafTemplate.affiliate-calc-subheader2') }}  </h4>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <input type="number" class="form-control" placeholder="{{ __('elsarafTemplate.affiliate-calc-enter-number') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-4 col-7">
                                                <h4>{{ __('elsarafTemplate.affiliate-calc-subheader3') }} </h4>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <div class="row mx-0">
                                                    <input type="number" class="col-7 col-md-9 form-control bg-dark text-white border-none" value="100" disabled>
                                                    <h4 class="col-3 col-md-3 justify-content-center align-items-center d-flex m-0"> {{ __('elsarafTemplate.pound') }}</h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="benefits-grid">
                        <div class="col-12 pb-3 p-0">

                                    <div class="col-12 text-right mb-3">
                                        <h3>{{ __('elsarafTemplate.affiliate-benefits-header') }}</h3>
                                    </div>
                        </div>
                         <div class="container">
                                        <div class="row mb-2">
                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/develop.png">
                                            <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li1') }}</span>
                                          </div>
                                           <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/need-money.png">
                                            <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li2') }}</span>
                                          </div>

                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/professional.png">
                                            <span class="mt-2">    {{ __('elsarafTemplate.affiliate-benefits-li3') }}</span>
                                         </div>
                                           <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/gain.png">
                                            <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li4') }}</span>
                                          </div>

                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/trusted.png">
                                           <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li5') }}. </span>
                                          </div>
                                       </div>
                                  </div>

                        </div>

                         <div class="col-12 mb-5 mt-3 faq-questions no-padding">
                            <div class="container">
                                <div class="row justify-content-center bg-white">
                                    <div class=" col-12 my-3">
                                        <h2> {{ __('elsarafTemplate.affiliate-faq-header') }}</h2>
                                    </div>
                                    <div class="col-12 ">
                                        <h3>{{ __('elsarafTemplate.affiliate-faq-q1') }}</h3>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans1') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h3>{{ __('elsarafTemplate.affiliate-faq-q2') }}</h3>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans2') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h3>{{ __('elsarafTemplate.affiliate-faq-q3') }}</h3>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans31') }}</p>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans32') }}</p>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans33') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h3>{{ __('elsarafTemplate.affiliate-faq-q4') }}</h3>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans41') }}
                                        <br>{{ __('elsarafTemplate.affiliate-faq-ans42') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h3>{{ __('elsarafTemplate.affiliate-faq-q5') }}</h3>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans5') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h3>{{ __('elsarafTemplate.affiliate-faq-q6') }}</h3>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans6') }}.</p>
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
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ __('elsarafTemplate.affiliate-header-mobile') }}</h2>
                        </div>
                       </div>
                         <div class="accordion seller-types mt-4" id="aboutTypes">
                         <div class="card">
                            <div class="card-header" id="buyer">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsebuyer" aria-expanded="false" aria-controls="collapsebuyer">
                                  <i class="fas" aria-hidden="true"></i>
                                  {{ __('elsarafTemplate.affiliate-header-mobile1') }}
                                </button>

                            </div>
                            <div id="collapsebuyer" class="collapse" aria-labelledby="buyer" data-parent="#aboutTypes">
                                <div class="card-body">
                               <div class="col-12 affiliate-no-m-bottom no-padding">
                                 <div class="row">
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.affiliate-li1') }}</h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/قدم طلب للإنضمام .png">
                                        <p class="mt-2">{{ __('elsarafTemplate.affiliate-li1-text') }}</p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100 ">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                            </div>
                                        <h3>{{ __('elsarafTemplate.affiliate-li2') }}</h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/إبدأ بالعمل فوراً.png">
                                        <p class="mt-2">{{ __('elsarafTemplate.affiliate-li2-text') }}</p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.affiliate-li3') }}    </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/طور من مهارات عملاؤك .png">
                                        <p class="mt-2">
{{ __('elsarafTemplate.affiliate-li3-text') }}
                                        </p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center py-3 px-2 h-100">
                                            <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                            </div>
                                        <h3>{{ __('elsarafTemplate.affiliate-li4') }}   </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/ابدأ-بالربح.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.affiliate-li4-text') }}.</p>
                                    </div>
                                    </div>
                                </div>
                                 <div class="my-3 col-12 d-flex align-items-center justify-content-center affiliate-btn">
                            <div class="col-md-3 col-12 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#start_affilate_popup">{{ __('elsarafTemplate.btn-start-now') }}</a>
                           </div>
                          </div>
                            </div>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                            <div class="card-header" id="aboutElsaraf">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseaboutElsaraf" aria-expanded="true" aria-controls="collapseaboutElsaraf">
                                   <i class="fas" aria-hidden="true"></i>
                                 {{ __('elsarafTemplate.affiliate-benefits-header') }}
                                </button>
                            </div>
                            <div id="collapseaboutElsaraf" class="collapse" aria-labelledby="aboutElsaraf" data-parent="#aboutTypes">
                                <div class="card-body">
                                      <div class="container">
                                        <div class="row mb-2">
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/develop.png">

                                          </div>
                                          <div class="col-10 mb-2 pr-0">
                                               <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li1') }}</span>
                                          </div>
                                           <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/need-money.png">
                                          </div>
                                            <div class="col-10 mb-2 pr-0">
                                           <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li2') }}</span>

                                           </div>
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/professional.png">
                                         </div>
                                          <div class="col-10 mb-2 pr-0">
                                                <span class="mt-2">    {{ __('elsarafTemplate.affiliate-benefits-li3') }}</span>
                                         </div>
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/gain.png">
                                          </div>
                                          <div class="col-10 mb-2 pr-0">
                                            <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li4') }}</span>
                                          </div>

                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/trusted.png">
                                          </div>
                                           <div class="col-10 mb-2 pr-0">
                                           <span class="mt-2">  المصداقية التي يمنجك اسم الصراف بمجرد انضمامك اليه يجعل لك الأولوية
                                           في تنفيذ أعمالك أسرع و كسب المال الوفير. </span>
                                          </div>
                                       </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                            <div class="card-header" id="buyer2">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsebuyer2" aria-expanded="false" aria-controls="collapsebuyer2">
                                  <i class="fas" aria-hidden="true"></i>
                                  {{ __('elsarafTemplate.affiliate-header-mobile2') }}
                                </button>

                            </div>
                          <div id="collapsebuyer2" class="collapse" aria-labelledby="buyer2" data-parent="#aboutTypes">
                         <div class="card-body">
                                <div class="col-12 my-5 affiliate-no-m-bottom affiliate-no-m-top calc-div no-padding">
                            <div class="container">
                                <div class="row justify-content-center bg-white py-3">
                                    <div class=" col-12 text-center mb-3">
                                        <h2 class="bg-white calc-text">{{ __('elsarafTemplate.affiliate-calc-header') }}</h2>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-4 col-7">
                                                <h4> {{ __('elsarafTemplate.affiliate-calc-subheader1') }}  </h4>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <input type="number" class="form-control" placeholder="{{ __('elsarafTemplate.affiliate-calc-enter-number') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-4 col-7">
                                                <h4>{{ __('elsarafTemplate.affiliate-calc-subheader2') }}  </h4>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <input type="number" class="form-control" placeholder="{{ __('elsarafTemplate.affiliate-calc-enter-number') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-4 col-7">
                                                <h4>{{ __('elsarafTemplate.affiliate-calc-subheader3') }} </h4>
                                            </div>
                                            <div class="col-md-3 col-5">
                                                <div class="row mx-0">
                                                    <input type="number" class="col-7 col-md-9 form-control bg-dark text-white border-none" value="100" disabled>
                                                    <h4 class="col-3 col-md-3 justify-content-center align-items-center d-flex m-0"> {{ __('elsarafTemplate.pound') }}</h4>
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
                            <div class="card-header" id="seller">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseseller" aria-expanded="false" aria-controls="collapseseller">
                                  <i class="fas" aria-hidden="true"></i>
                                  {{ __('elsarafTemplate.affiliate-faq-header') }}
                                </button>

                            </div>
                            <div id="collapseseller" class="collapse" aria-labelledby="seller" data-parent="#aboutTypes">
                                <div class="card-body">
                                   <div class="container">
                                <div class="row justify-content-center bg-white">
                                    <div class="col-12 ">
                                        <h4>{{ __('elsarafTemplate.affiliate-faq-q1') }}</h4>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans1') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h4>{{ __('elsarafTemplate.affiliate-faq-q2') }}</h4>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans2') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h4>{{ __('elsarafTemplate.affiliate-faq-q3') }}</h4>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans31') }}</p>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans32') }}</p>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans33') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h4>{{ __('elsarafTemplate.affiliate-faq-q4') }}</h4>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans41') }}
                                        <br>
                                       {{ __('elsarafTemplate.affiliate-faq-ans42') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h4>{{ __('elsarafTemplate.affiliate-faq-q5') }}</h4>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans5') }}</p>
                                    </div>
                                    <div class="col-12">
                                        <h4>{{ __('elsarafTemplate.affiliate-faq-q6') }}</h4>
                                        <p>{{ __('elsarafTemplate.affiliate-faq-ans6') }}</p>
                                    </div>

                                </div>
                             </div>
                                </div>
                            </div>
                        </div>
                        </div>
                          <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center affiliate-btn">
                            <div class="col-md-3 col-6 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#start_affilate_popup">{{ __('elsarafTemplate.btn-start-now') }}</a>
                           </div>
                          </div>
                </div>
            </div>

            @endsection
