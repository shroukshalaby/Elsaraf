@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content pt-5 d-lg-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="content col-lg-12 col-sm-12 p-0">

                            <div class="col-12">
                            <img src="/elsarafTemplate/img/banners/pointBanner_ِar.jpg" class="img-fluid w-100 desktop">
                            </div>
                            <div class="col-12 pt-4 text-center">
                                  <h3 class="pt-4"> {{ __('elsarafTemplate.points-header-text')}} </h3>
                            <p class="w-100 m-0 fs-20 mt-3 mb-0 lh-1-5">  {{ __('elsarafTemplate.points-subheader-text1')}}  </p>
                             <p class="mb-0 fs-20">{{ __('elsarafTemplate.points-subheader-text2')}} </p>
                            <p class="mt-0 fs-20">{{ __('elsarafTemplate.points-subheader-text3')}} </p>

	                    	</div>

	                    	<div class="row m-0">
	                    	    <div class="col-12 p-0">
	                    	        <div class="row my-lg-5 my-md-5 my-sm-3">
	                    	             <div class="col-6 text-center">
	                    	     <img src="/elsarafTemplate/images/Rewards Purchasing.jpg" class="img-fluid w-50">
	                    	     <h4 class="mt-3 mb-0 points-prize-text">{{ __('elsarafTemplate.points-prize-maintext')}} </h4>
	                    	    <h4 class="m-0">{{ __('elsarafTemplate.points-prize-text1')}} </h4>
                    	     </div>
                    	     <div class="col-6 text-center">
                    	         <img src="/elsarafTemplate/images/Rewards sales.jpg" class="img-fluid w-50">
                    	          <h4 class="mt-3 mb-0 points-prize-text">{{ __('elsarafTemplate.points-prize-maintext')}} </h4>
                    	          <h4 class="m-0">{{ __('elsarafTemplate.points-prize-text2')}} </h4>
                    	     </div>
	                    	        </div>
	                    	    </div>

	                    		 </div>
	                    	<div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3">
                            <p class="bg-dark2 bg-dark2-p py-2 fs-20 text-white mb-4">{{ __('elsarafTemplate.points-work-system1')}}

                            <span class="bg-dark2-span">{{ __('elsarafTemplate.points-work-sub-system1')}}</span>
                            </p>
                            <div class="row bg-transition">
                               <div class="col-md-2 col-2 d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/انضم.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text">  {{ __('elsarafTemplate.points-work-system1-li1')}}  </p>
                                    <p>{{ __('elsarafTemplate.points-work-system1-li1-text')}} </p>
                                </div>
                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-md-2 col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/_حقق-مبيعات.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text">   {{ __('elsarafTemplate.points-work-system1-li2')}}  </p>
                                    <p class="mb-0"> {{ __('elsarafTemplate.points-work-system1-li2-text')}}  </p>
                                    <p class="mt-0"> {{ __('elsarafTemplate.points-work-system1-li2-subtext')}}   </p>
                                </div>

                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-md-2 col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/ضاعف-ربحك.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="m-1 header-text">   {{ __('elsarafTemplate.points-work-system1-li3')}}</p>
                                    <p class="mb-0"> {{ __('elsarafTemplate.points-work-system1-li3-text')}}</p>
                                    <p class="mt-0">{{ __('elsarafTemplate.points-work-system1-li3-subtext')}}</p>
                                </div>
                            </div>

                            <div class="row justify-content-center my-3">
                                <p class="mb-0">{{ __('elsarafTemplate.points-policy1')}} </p>
                                <p class="mt-0"> {{ __('elsarafTemplate.points-policy2')}} </p>
                            </div>

                             <div class="col-12 d-flex justify-content-center mb-3">
                               <div class="col-md-5 col-7 py-1 main-next text-center">
                                    <a class="fs-20" href="/seller">{{ __('elsarafTemplate.btn-create')}} </a>
                                 </div>
                            </div>
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3 points-border-section">
                             <p class="bg-dark2 bg-dark2-p py-2 fs-20 text-white mb-4">
                                {{ __('elsarafTemplate.points-work-system2')}}
                            <span class="bg-dark2-span">{{ __('elsarafTemplate.points-work-sub-system2')}}</span>
                            </p>
                            <div class="row bg-transition">
                               <div class="col-md-2 col-2 d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/سجل.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text"> {{ __('elsarafTemplate.points-work-system2-li1')}}  </p>
                                    <p class="mb-0">
                                       {{ __('elsarafTemplate.points-work-system2-li1-text')}} {{ __('elsarafTemplate.points-work-system2-li1-subtext')}}
                                     </p>

                                </div>
                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-md-2 col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/اشتري.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text">   {{ __('elsarafTemplate.points-work-system2-li2')}}  </p>
                                    <p class="pl-2">  {{ __('elsarafTemplate.points-work-system2-li2-text')}}</p>
                                </div>
                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/وفر.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right ">
                                    <p class="m-1 header-text"> {{ __('elsarafTemplate.points-work-system2-li3')}}  </p>
                                    <p class="mb-0">{{ __('elsarafTemplate.points-work-system2-li3-text')}} {{ __('elsarafTemplate.points-work-system2-li3-subtext')}}</p>


                                </div>

                            </div>

                            <div class="row justify-content-center my-3 d-none d-sm-block">
                                <p class="mb-0">{{ __('elsarafTemplate.points-policy1')}}
                                </p>
                                <p class="mt-0">
                               {{ __('elsarafTemplate.points-policy2')}} </p>
                            </div>
                            <div>
                              <p class="mb-2 d-block d-sm-none my-4">
                                  {{ __('elsarafTemplate.points-policy1')}}
                            {{ __('elsarafTemplate.points-policy2')}}
                             </p>
                            </div>
                             <div class="col-12 d-flex justify-content-center mb-3">
                               <div class="col-md-5 col-7 py-1 main-next text-center">
                                    <a class="fs-20" href="/buyer-registration">{{ __('elsarafTemplate.btn-create')}}</a>
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
                        <div class="content col-lg-12 col-sm-12 p-0">
                            <div class="col-12">
                                <h1 class="text-center">{{ __('elsarafTemplate.points-header-text-mob')}} </h1>
                            </div>
	                    	<div class="text-center  col-12">
	                    	   <p class="points-header-text">
	                    	       {{ __('elsarafTemplate.points-subheader-text1')}}
	                    	       {{ __('elsarafTemplate.points-subheader-text2')}}
	                    	       {{ __('elsarafTemplate.points-subheader-text3')}}
                             </p>
	                    	</div>

	                    	 <div class="row m-0">

	                    	     <div class="col-6">
	                    	             <img src="/elsarafTemplate/images/Rewards Purchasing.jpg" class="img-fluid w-50">
	                    	     </div>
	                       	     <div class="col-6">
	                       	     <h4 class="mt-3 points-prize-text">{{ __('elsarafTemplate.points-prize-maintext')}}
	                    	    {{ __('elsarafTemplate.points-prize-text1')}} </h4>
	                    	     </div>
	                    	    <div class="col-6 mt-4">
	                    	      <img src="/elsarafTemplate/images/Rewards sales.jpg" class="img-fluid w-50">
	                    	     </div>
	                       	     <div class="col-6 mt-4">
	                         	    <h4 class="mt-3 points-prize-text">{{ __('elsarafTemplate.points-prize-maintext')}}
	                         	     {{ __('elsarafTemplate.points-prize-text2')}} </h4>
	                    	     </div>

	                    	     </div>


	                        <div class="pt-4">
	                    <div class="accordion seller-types" id="aboutTypes">
                        <div class="card">
                            <div class="card-header" id="aboutElsaraf">
                                <button class="btn text-center" type="button" data-toggle="collapse" data-target="#collapseaboutElsaraf" aria-expanded="true" aria-controls="collapseaboutElsaraf">
                                   <i class="fas" aria-hidden="true"></i>
                                   {{ __('elsarafTemplate.points-work-system1')}}
                               <br>
                                {{ __('elsarafTemplate.points-work-sub-system1')}}
                                </button>
                            </div>
                            <div id="collapseaboutElsaraf" class="collapse" aria-labelledby="aboutElsaraf" data-parent="#aboutTypes">
                                <div class="card-body p-2">
                             <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3">
                              <div class="row bg-transition">
                               <div class="col-md-2 col-2 d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/انضم.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text">  {{ __('elsarafTemplate.points-work-system1-li1')}}  </p>
                                    <p>{{ __('elsarafTemplate.points-work-system1-li1-text')}} </p>
                                </div>
                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-md-2 col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/_حقق-مبيعات.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text">   {{ __('elsarafTemplate.points-work-system1-li2')}}  </p
                                    <p class="pl-2">
                                        {{ __('elsarafTemplate.points-work-system1-li2-text')}}
                                        {{ __('elsarafTemplate.points-work-system1-li2-subtext')}}
                                    </p>
                                </div>
                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-md-2 col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/ضاعف-ربحك.png" class="points-header-icon" />
        			            </div>
                                 <div class="col-10 text-right">
                                    <p class="m-1 header-text">   {{ __('elsarafTemplate.points-work-system1-li3')}}</p>
                                    <p class="mb-0 pl-2">
                                     {{ __('elsarafTemplate.points-work-system2-li3-text')}}
                                    {{ __('elsarafTemplate.points-work-system2-li3-subtext')}}</p>
                                </div>
                            </div>
                            <div>
                              <p class="mb-2 my-4">
                                  {{ __('elsarafTemplate.points-policy1')}}
                                  {{ __('elsarafTemplate.points-policy2')}}
                             </p>
                            </div>
                             <div class="col-12 d-flex justify-content-center mb-3">
                               <div class="col-md-5 col-12 py-1 main-next text-center">
                                    <a class="fs-20" href="/seller">{{ __('elsarafTemplate.btn-create')}}</a>
                                 </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="seller">

                                <button class="btn text-center" type="button" data-toggle="collapse" data-target="#collapseseller" aria-expanded="false" aria-controls="collapseseller">
                                  <i class="fas" aria-hidden="true"></i>
                                   {{ __('elsarafTemplate.points-work-system2')}}
                               <br>
                                {{ __('elsarafTemplate.points-work-sub-system2')}}
                                </button>

                            </div>
                            <div id="collapseseller" class="collapse" aria-labelledby="seller" data-parent="#aboutTypes">
                                <div class="card-body p-2">
                                 <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3">
                            <div class="row bg-transition">
                               <div class="col-md-2 col-2 d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/سجل.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text"> {{ __('elsarafTemplate.points-work-system2-li1')}}   </p>
                                    <p class="mb-0 pl-2">
                                       {{ __('elsarafTemplate.points-work-system2-li1-text')}}
                                      {{ __('elsarafTemplate.points-work-system2-li1-subtext')}}
                                   </p>
                                </div>
                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-md-2 col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/اشتري.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="mb-1 header-text"> {{ __('elsarafTemplate.points-work-system2-li2')}}</p>
                                    <p class="pl-2">  {{ __('elsarafTemplate.points-work-system2-li2-text')}}</p>
                                </div>
                                </div>
                                 <div class="row bg-transition">
                                 <div class="col-2  d-flex align-items-center  justify-content-center points-img">
                                   <img src="/elsarafTemplate/img/points-system-img/وفر.png" class="points-header-icon" />
        			            </div>
                                <div class="col-10 text-right">
                                    <p class="m-1 header-text">   {{ __('elsarafTemplate.points-work-system2-li3')}} </p>
                                    <p class="mb-0 pl-2">
                                    {{ __('elsarafTemplate.points-work-system2-li3-text')}}
                                    {{ __('elsarafTemplate.points-work-system2-li3-subtext')}} </p>
                                </div>

                            </div>
                            <div>
                              <p class="mb-2 my-4">
                                  {{ __('elsarafTemplate.points-policy1')}}
                            {{ __('elsarafTemplate.points-policy2')}}
                             </p>
                            </div>
                             <div class="col-12 d-flex justify-content-center mb-3">
                               <div class="col-md-5 col-12 py-1 main-next text-center">
                                    <a class="fs-20" href="/buyer-registration">{{ __('elsarafTemplate.btn-create')}}</a>
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
