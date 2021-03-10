@extends('front.elsarafTemplate.layouts.app')

@section('content')

            <div class="main-content pt-5 d-lg-block d-none">
                <div class="container">
                    <div class="row">
                      <div class="col-12">
                               <img src="/elsarafTemplate/img/banners/agentsBanner.jpg" class="img-fluid w-100 desktop">
                        </div>
                        <div class="col-12 text-center">
                            <h2 class="w-100 m-0 mt-3 lh-1-5">{{ __('elsarafTemplate.agent-header')}}</h2>
                              <p class="w-100 mb-0 mt-3 fs-20 lh-1-5">
                             {{ __('elsarafTemplate.agent-subheader1')}}
                           </p>

                           <p class="w-100 fs-20"> {{ __('elsarafTemplate.agent-subheader2')}}</p>

                         </div>
                        <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="col-6 col-md-3 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#agents-popup">{{ __('elsarafTemplate.btn-start-now')}}</a>
                           </div>
                          </div>
	                    <div class="col-12 pt-4 text-center">
	                        <h3 class="agents-sub-text">{{ __('elsarafTemplate.agent-main-q')}} </h3>
	                    </div>
	                    <div class="row m-0 py-3">

	                    <div class="col-12 text-center">
                            <h2 class="mb-4"></h2>
                        </div>
                        <div class="col-md-6 col-12 text-center border-4">
                            <p class="bg-dark2 py-2 fs-20 text-white mb-4">
                               {{ __('elsarafTemplate.agent-q1')}}
                            </p>
                            <div class="row">
                                <div class="col-12 text-right">
                               <p class="mb-0">{{ __('elsarafTemplate.agent-ans10')}}</p>
                               <p class="mb-0">{{ __('elsarafTemplate.agent-ans12')}}</p>
                               <p class="mb-0">{{ __('elsarafTemplate.agent-ans13')}}</p>
                               </div>
                            </div>

                        </div>

                        <div class="col-md-6 col-12 text-center">
                            <p class="bg-dark2 py-2 fs-20 text-white mb-4">
                          {{ __('elsarafTemplate.agent-q2')}}
                            </p>
                            <div class="row">
                              <div class="col-12 text-right">
                                <p>
                                 {{ __('elsarafTemplate.agent-ans2')}}
                                </p>
                                </div>
	                    	 </div>
	                    	 </div>
                        </div>
                        <div class="col-12 mb-4 pt-4 text-center">
	                        <h3 class="agents-sub-text">{{ __('elsarafTemplate.agent-q3')}}  </h3>
	                    </div>
                        <div class="col-12 my-2 pb-4 no-padding">

                                <div class="row ">
                                    <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.agent-grid1')}}    </h3>
                                        <img class="img-fluid w-50" src="elsarafTemplate/img/points-system-img/انضم.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.agent-grid1-text')}}</p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.agent-grid2')}}   </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/إبدأ بالعمل فوراً.png">

                                        <p class="mt-2">  {{ __('elsarafTemplate.agent-grid2-text')}} </p>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                            </div>
                                        <h3>  {{ __('elsarafTemplate.agent-grid3')}}    </h3>
                                        <img class="img-fluid w-50" src="elsarafTemplate/img/points-system-img/وفر.png">
                                        <p class="mt-2"> {{ __('elsarafTemplate.agent-grid3-text')}} </p>
                                    </div>
                                    </div>

                                    <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                            </div>
                                        <h3>  {{ __('elsarafTemplate.agent-grid4')}}</h3>
                                        <img class="img-fluid w-50" src="elsarafTemplate/img/points-system-img/اشتري.png">
                                        <p class="mt-2">{{ __('elsarafTemplate.agent-grid4-text')}} </p>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="col-lg-3 col-md-3 col-8 main-next text-center mx-md-3 mx-sm-2">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#institutions-popup">{{ __('elsarafTemplate.btn-institutions')}}</a>
                           </div>
                          </div>
                            <div class="benefits-grid">
                                <div class="col-12 pb-3 p-0">

                                    <div class="col-12 text-right mb-3">
                                        <h3>{{ __('elsarafTemplate.affiliate-benefits-header')}}</h3>
                                    </div>
                                </div>
                                <div class="container">
                                        <div class="row mb-2">
                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/develop.png">
                                            <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li1')}}</span>
                                          </div>
                                           <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/need-money.png">
                                            <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li2')}}</span>
                                          </div>

                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/professional.png">
                                            <span class="mt-2">    {{ __('elsarafTemplate.affiliate-benefits-li3')}}</span>
                                         </div>
                                           <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/gain.png">
                                            <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li4')}}</span>
                                          </div>

                                          <div class="col-12 mb-2 pl-0">
                                            <img class="img-fluid w-4" src="/elsarafTemplate/img/benefits/trusted.png">
                                           <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li5')}} </span>
                                          </div>
                                       </div>
                                  </div>

                            </div>

                        <div class="col-12 mb-4 pt-4 text-center">
	                        <h3 class="agents-sub-text">{{ __('elsarafTemplate.agent-opinion')}}</h3>
	                    </div>
                        <section class="reviews">
                        <div class="col-12 mt-3">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators carsoul-position">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2">3</li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-3 text-center">
                                             <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/ai posts.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                             <div class="crsl-bg">
                                              <p>
                                                  {{ __('elsarafTemplate.agent-opinion-text1')}}
                                              </p>
                                            </div>
                                            </div>
                                            <div class="col-md-3 text-center">
                                            <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/the data wallet.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                                <div class="crsl-bg">
                                               <p>
                                                 {{ __('elsarafTemplate.agent-opinion-text2')}}

                                               </p>
                                               </div>
                                            </div>
                                            <div class="col-md-3 text-center">
                                           <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/stickyposts.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                              <div class="crsl-bg">
                                                <p>
                                                    {{ __('elsarafTemplate.agent-opinion-text3')}}
                                                </p>
                                               </div>
                                             </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-3 text-center">
                                             <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/one wallet.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                             <div class="crsl-bg">
                                              <p>
                                                  {{ __('elsarafTemplate.agent-opinion-text4')}}
                                              </p>
                                            </div>
                                            </div>
                                            <div class="col-3 text-center">
                                            <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/landing page.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                                <div class="crsl-bg">
                                               <p>
                                                   {{ __('elsarafTemplate.agent-opinion-text5')}}
                                               </p>
                                               </div>
                                            </div>
                                            <div class="col-3 text-center">
                                           <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/i-content-gate.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                              <div class="crsl-bg">
                                                <p>
                                                   {{ __('elsarafTemplate.agent-opinion-text6')}}
                                                </p>
                                               </div>
                                             </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-3 text-center">
                                             <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/e4 cut.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                             <div class="crsl-bg">
                                              <p>
                                                  {{ __('elsarafTemplate.agent-opinion-text7')}}
                                              </p>
                                            </div>
                                            </div>
                                            <div class="col-3 text-center">
                                            <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/done tasks.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                                <div class="crsl-bg">
                                               <p>
                                                {{ __('elsarafTemplate.agent-opinion-text8')}}
                                               </p>
                                               </div>
                                            </div>
                                            <div class="col-3 text-center">
                                           <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/aiearning.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                              <div class="crsl-bg">
                                                <p>
                                                   {{ __('elsarafTemplate.agent-opinion-text9')}}
                                                </p>
                                               </div>
                                             </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        </section>
                  </div>
                 </div>
                </div>

             <div class="main-content pt-5 d-lg-none">
                <div class="container">
                    <div class="row">
                          <div class="col-12 text-center">
                            <h1>   {{ __('elsarafTemplate.agent-header-mobile')}}  </h1>
                              <p class="w-100 mb-0 mt-3 lh-1-5">
                               {{ __('elsarafTemplate.agent-subheader1')}}
                              {{ __('elsarafTemplate.agent-subheader2')}}
                              </p>

                         </div>

                        <div class="my-4 pb-4 col-12 d-flex align-items-center justify-content-center">
                            <div class="col-6 col-md-3 main-next text-center mx-md-3">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#agents-popup">{{ __('elsarafTemplate.btn-start-now')}}</a>
                           </div>
                          </div>
                    </div>
                    <div class="accordion seller-types" id="aboutTypes">
                        <div class="card">
                            <div class="card-header" id="aboutElsaraf">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseaboutElsaraf" aria-expanded="true" aria-controls="collapseaboutElsaraf">
                                   <i class="fas" aria-hidden="true"></i>
                                      {{ __('elsarafTemplate.agent-main-q')}}
                                </button>
                            </div>
                            <div id="collapseaboutElsaraf" class="collapse" aria-labelledby="aboutElsaraf" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <div class="row">

                                   <div class="col-md-6 col-12 text-center mb-5 no-padding">
                             <div class="col-12 mb-4 no-padding">
                            <p class="bg-dark2 py-2  text-white mb-4"> {{ __('elsarafTemplate.agent-q1')}} </p>
                            </div>

                            <div class="col-12 text-right">
                               <p class="mb-0">{{ __('elsarafTemplate.agent-ans1')}}</p>
                            </div>
                        </div>
                                   <div class="col-md-6 col-12 text-center no-padding">
                            <div class="col-12 mb-4 no-padding">
                              <p class="bg-dark2 py-2 text-white mb-4">{{ __('elsarafTemplate.agent-q2')}} </p>
                            </div>
                            <div class="col-12 text-right">
                                <p>
                                  {{ __('elsarafTemplate.agent-ans2')}}
                                </p>
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
                                  {{ __('elsarafTemplate.agent-q3')}} ؟
                                </button>

                            </div>
                            <div id="collapseseller" class="collapse" aria-labelledby="seller" data-parent="#aboutTypes">
                                <div class="card-body">
                                      <div class="col-12 my-2 pb-4 no-padding">

                                <div class="row ">
                                    <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 1</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.agent-grid1')}}   </h3>
                                        <img class="img-fluid w-50" src="elsarafTemplate/img/انضم.png">
                                        <p class="mt-2">   {{ __('elsarafTemplate.agent-grid1-text')}}</p>
                                    </div>
                                    </div>
                                     <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 2</span>
                                            </div>
                                        <h3> {{ __('elsarafTemplate.agent-grid2')}}   </h3>
                                        <img class="img-fluid w-50" src="/elsarafTemplate/images/إبدأ بالعمل فوراً.png">

                                        <p class="mt-2"> {{ __('elsarafTemplate.agent-grid2-text')}}  </p>
                                    </div>
                                    </div>
                                    <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 3</span>
                                            </div>
                                        <h3>  {{ __('elsarafTemplate.agent-grid3')}}     </h3>
                                        <img class="img-fluid w-50" src="elsarafTemplate/img/وفر.png">
                                        <p class="mt-2"> {{ __('elsarafTemplate.agent-grid3-text')}}  </p>
                                    </div>
                                    </div>

                                    <div class="col-md-3 col-6 affiliate-grid">
                                        <div class="bg-white text-center pt-3 px-2 h-100">
                                             <div class="mb-2">
                                            <span class="bg-dark2 py-1 px-3 text-white"> 4</span>
                                            </div>
                                        <h3>  {{ __('elsarafTemplate.agent-grid4')}} </h3>
                                        <img class="img-fluid w-50" src="elsarafTemplate/img/اشتري.png">
                                        <p class="mt-2">
                                           {{ __('elsarafTemplate.agent-grid4-text')}}
                                        </p>
                                    </div>
                                    </div>

                                </div>
                           <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="col-lg-3 col-md-3 col-8 main-next text-center mx-md-3 mx-sm-2">
                              <a href="" class="fs-20" data-toggle="modal" data-target="#institutions-popup">{{ __('elsarafTemplate.btn-institutions')}}</a>
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
                                  {{ __('elsarafTemplate.affiliate-benefits-header')}}
                                </button>

                            </div>
                            <div id="collapsebuyer" class="collapse" aria-labelledby="buyer" data-parent="#aboutTypes">
                                <div class="card-body">
                                         <div class="container">
                                        <div class="row mb-2">
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/develop.png">

                                          </div>
                                          <div class="col-10 mb-2 pr-0">
                                               <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li1')}}</span>
                                          </div>
                                           <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/need-money.png">
                                          </div>
                                            <div class="col-10 mb-2 pr-0">
                                           <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li2')}}</span>

                                           </div>
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/professional.png">
                                         </div>
                                          <div class="col-10 mb-2 pr-0">
                                                <span class="mt-2">    {{ __('elsarafTemplate.affiliate-benefits-li3')}}</span>
                                         </div>
                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/gain.png">
                                          </div>
                                          <div class="col-10 mb-2 pr-0">
                                            <span class="mt-2">  {{ __('elsarafTemplate.affiliate-benefits-li4')}}</span>
                                          </div>

                                          <div class="col-2 mb-2  pr-0">
                                            <img class="img-fluid" src="/elsarafTemplate/img/benefits/trusted.png">
                                          </div>
                                           <div class="col-10 mb-2 pr-0">
                                           <span class="mt-2"> {{ __('elsarafTemplate.affiliate-benefits-li5')}} </span>
                                          </div>
                                       </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4 pt-4 text-center">
	                        <h3 class="agents-sub-text">{{ __('elsarafTemplate.agent-opinion')}}</h3>
	                    </div>
                    <section class="reviews">
                        <div class="col-12 mt-3 no-padding">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators carsoul-position">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2">3</li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3">4</li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4">5</li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-6 text-center">
                                             <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/ai posts.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                             <div class="crsl-bg">
                                              <p>
                                                  {{ __('elsarafTemplate.agent-opinion-text1')}}
                                              </p>
                                            </div>
                                            </div>
                                            <div class="col-6 text-center">
                                            <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/the data wallet.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                                <div class="crsl-bg">
                                               <p>
                                                 {{ __('elsarafTemplate.agent-opinion-text2')}}
                                               </p>
                                               </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-between align-items-center">
                                           <div class="col-6 text-center">
                                           <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/stickyposts.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                              <div class="crsl-bg">
                                                <p>
                                                    {{ __('elsarafTemplate.agent-opinion-text3')}}
                                                </p>
                                               </div>
                                             </div>

                                            <div class="col-6 text-center">
                                             <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/one wallet.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                             <div class="crsl-bg">
                                              <p>
                                                  {{ __('elsarafTemplate.agent-opinion-text4')}}
                                              </p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-between align-items-center">
                                         <div class="col-6 text-center">
                                            <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/landing page.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                                <div class="crsl-bg">
                                               <p>
                                                   {{ __('elsarafTemplate.agent-opinion-text5')}}
                                               </p>
                                               </div>
                                            </div>
                                            <div class="col-6 text-center">
                                           <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/i-content-gate.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                              <div class="crsl-bg">
                                                <p>
                                                   {{ __('elsarafTemplate.agent-opinion-text6')}}
                                                </p>
                                               </div>
                                             </div>

                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-6 text-center">
                                             <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/e4 cut.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                             <div class="crsl-bg">
                                              <p>
                                                  {{ __('elsarafTemplate.agent-opinion-text7')}}
                                              </p>
                                            </div>
                                            </div>
                                            <div class="col-6 text-center">
                                            <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/done tasks.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                                <div class="crsl-bg">
                                               <p>
                                                {{ __('elsarafTemplate.agent-opinion-text8')}}
                                               </p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-between align-items-center">
                                        <div class="col-6 text-center">
                                           <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/aiearning.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                              <div class="crsl-bg">
                                                <p>
                                                   {{ __('elsarafTemplate.agent-opinion-text9')}}
                                                </p>
                                               </div>
                                             </div>

                                         <div class="col-6 text-center">
                                            <img class="img-responsive center-block img-fluid" src="/elsarafTemplate/images/landing page.png" alt="Bigcommerce" title="Bigcommerce" border="0">
                                                <div class="crsl-bg">
                                               <p>
                                                   {{ __('elsarafTemplate.agent-opinion-text5')}}
                                               </p>
                                               </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </section>

                 </div>
                </div>

        </div>

@endsection
