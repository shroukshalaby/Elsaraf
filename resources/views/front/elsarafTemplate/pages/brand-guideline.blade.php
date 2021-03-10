@extends('front.elsarafTemplate.layouts.app')

@section('content')
    <div class="main-content pt-5">
         <div class="content mx-auto p-0 col-lg-10 col-12 guideline">
           <div class="row justify-content-center m-0">
            <nav class="col-10 headertabs text-center" dir="ltr">
                <div class="nav nav-tabs pt-3 justify-content-center" dir="rtl" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link col-md-4 col-6 active" id="nav-guide1-tab" data-toggle="tab" href="#nav-guide1" role="tab" aria-controls="nav-guide1" aria-selected="true">{{ __('elsarafTemplate.brand-header-text1')}}</a>
                    <a class="nav-item nav-link col-md-4 col-6" id="nav-guide2-tab" data-toggle="tab" href="#nav-guide2" role="tab" aria-controls="nav-guide2" aria-selected="true">{{ __('elsarafTemplate.brand-header-text2')}}</a>
                </div>
            </nav>
            <div class="tab-content pt-5" id="nav-tabContent">
                <div class="tab-pane fade show active guide1" id="nav-guide1" role="tabpanel" aria-labelledby="nav-guide1-tab">
                    <h3 class="col-12 text-center font-weight-bold text-uppercase pb-3 brand-header-text">{{ __('elsarafTemplate.brand-logo-text')}}</h3>
                    <div class="row justify-content-center guide1first" >
                        <a class="card bg-black mr-3 col-md-3 col-5" href="/elsarafTemplate/img/color-logo/Monochrome-AR-WH.jpg" download>
                            <img width="75%" src="/elsarafTemplate/img/color-logo/Monochrome-AR-WH.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text pr-2 text-white">{{ __('elsarafTemplate.brand-dl-logo')}}</p>
                            </div>
                        </a>
                        <a class="card mx-3 col-md-3 col-5 bg-white" href="/elsarafTemplate/img/color-logo/Monochrome-AR-BK.jpg" download>
                            <img width="75%" src="/elsarafTemplate/img/color-logo/Monochrome-AR-BK.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text pr-2">{{ __('elsarafTemplate.brand-dl-logo')}}</p>
                            </div>
                        </a>
                    </div>
                     <div class="row py-4 justify-content-center guide1first">
                        <div class="row col-10 p-0">
                           <div class="col-md-6 col-12 text-right agents-bg">
                            <h3 class="text-center font-weight-bold text-uppercase pt-5 pb-3 brand-header-text">{{ __('elsarafTemplate.brand-get-banner')}}</h3>

                                <div class="card-body  card-body-brand text-center mt-2">
                                  <p class="card-text pr-2 join-text">{{ __('elsarafTemplate.brand-banner-text')}}</p>

                                  <div class="ex-checkbox mb-2 text-right">
			                        <input type="checkbox" id="checkbox_one" />
			                      	<label for="checkbox_one" class="fs-23">{{ __('elsarafTemplate.brand-yes')}}</label>
                                      <form class="form-inline" style="display:none;" id="showThis">
                                        <div class="form-group mobile-show-flex">
                                        <input type="number" class="form-control mobile-input-group" style="height:36px;" name="phone_input" id="phone_input" placeholder="{{ __('elsarafTemplate.brand-banner-phone')}} ">

                                        <button type="submit" class="btn brand-btn">{{ __('elsarafTemplate.btn-apply-order')}} </button>
                                         </div>
                                      </form>
	                            	</div>

	                        	<div class="ex-checkbox text-right">
			                    <input type="checkbox" id="checkbox_two"  onClick="Javascript:window.location.href = '/buyer-registration';"/>
		                   	<label for="checkbox_two" class="fs-23">{{ __('elsarafTemplate.brand-no')}}</label>
	                        	</div>
                            </div>


                            </div>

                            <div class="col-md-6 col-12 no-padding margin-20 d-none d-sm-block">
                            <div class="row  m-0 justify-content-center">
                               <div class="col-6 text-center p-0">
                                   <img width="90%" src="/elsarafTemplate/img/mockups/rectangular-store-sign-mockup-placed-on-a-building-1331-el(1).png" />
                               </div>

                                <div class="col-6 text-center p-0">
                                    <img width="90%" src="/elsarafTemplate/img/mockups/rectangular-store-sign-mockup-placed-on-a-building-1331-el.png" />

                                </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-12 no-padding margin-20 d-block d-sm-none">
                            <div class="row  m-0 justify-content-center">
                               <div class="col-6 text-right p-0">
                                   <img width="90%" src="/elsarafTemplate/img/mockups/rectangular-store-sign-mockup-placed-on-a-building-1331-el(1).png" />
                               </div>

                                <div class="col-6 text-left p-0">
                                    <img width="90%" src="/elsarafTemplate/img/mockups/rectangular-store-sign-mockup-placed-on-a-building-1331-el.png" />

                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-center guide1first">

                         <div class="row col-md-10 col-10 justify-center">

                            <div class="col-6 pr-0 text-right no-padding  justify-center">
                            <h3 class="text-right font-weight-bold text-uppercase pt-5 pb-3 brand-header-text">{{ __('elsarafTemplate.brand-poster-text')}} </h3>
                            </div>
                            <div class="row justify-center">
                                <div class="col-6 pr-0 text-right no-padding">
                                <a class="card card-download" href="/elsarafTemplate/img/final%20wh.jpg" download>
                            <div class="card-body  card-body-brand mt-2">
                                <img width="75%" src="/elsarafTemplate/img/final%20wh.jpg" class="card-img-top" alt="...">
                                <p class="card-text pr-2"> {{ __('elsarafTemplate.brand-poster-dl')}} </p>
                            </div>
                         </a>
                               </div>
                            <div class="col-md-6 col-12 justify-center pl-0 no-padding margin-20 d-flex justify-content-center align-items-center direction-column">
                            <h3 class="text-right font-weight-bold text-uppercase pb-3 justify-center brand-header-text">{{ __('elsarafTemplate.brand-poster-header')}} </h3>
                             <p class="fs-20">{{ __('elsarafTemplate.brand-poster-subheader')}}</p>
                            </div>
                              </div>

                            </div>


                    </div>
                    <div class="row justify-content-center guide1first">
                        <h3 class="col-12 text-center font-weight-bold text-uppercase pt-5 pb-3 brand-header-text">{{ __('elsarafTemplate.brand-how-to-use-logo')}} </h3>
                        <div class="row col-10 no-padding">
                            <div class="col-6 p-0 d-flex align-items-center">
                                <div class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-use-h1')}}</h5>
                                    <p class="mb-0">{{ __('elsarafTemplate.brand-use-t1')}}</p>
                                    <p>{{ __('elsarafTemplate.brand-use-t11')}}</p>
                                </div>
                            </div>
                            <div class="col-6 pr-0 text-left">
                                <img width="75%" src="/elsarafTemplate/img/logos/Safespacelogo.png" class="brand-img">
                            </div>
                        </div>
                        <div class="row col-10 no-padding">
                            <div class="col-6 p-0 d-flex align-items-center">
                                <div class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-use-h2')}}</h5>
                                    <p class="mb-0">{{ __('elsarafTemplate.brand-use-t2')}}</p>
                                    <p>{{ __('elsarafTemplate.brand-use-t22')}} </p>
                                </div>
                            </div>
                            <div class="col-6 p-0 text-left">
                                <img width="75%" src="/elsarafTemplate/img/logos/Maximum-size-logo.png" class="brand-img">
                                <img width="75%" src="/elsarafTemplate/img/logos/Minimum-print-size.png" class="brand-img">
                            </div>
                        </div>
                        <div class="row pb-5 col-10 no-padding">
                            <div class="col-6 p-0 d-flex align-items-center ">
                                <div  class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-use-h3')}}</h5>
                                     <ul class="guide-list guide-list-p-15 pt-2">
                                        <li> {{ __('elsarafTemplate.brand-use-t31')}}</li>
                                        <li>{{ __('elsarafTemplate.brand-use-t32')}}</li>
                                        <li>{{ __('elsarafTemplate.brand-use-t33')}}</li>
                                        <li>{{ __('elsarafTemplate.brand-use-t34')}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 p-0 text-left">
                                <div class="row">
                                    <img width="75%" class="col-6" src="/elsarafTemplate/img/don't-use-logo/anthoreshapelogo.png" class="brand-img">
                                    <img width="75%" class="col-6" src="/elsarafTemplate/img/don't-use-logo/STROCK LOGO.png" class="brand-img">
                                </div>
                                <div class="row">
                                    <img width="75%" class="col-6" src="/elsarafTemplate/img/don't-use-logo/bk-ye-logo.png" class="brand-img">
                                    <img width="75%" class="col-6" src="/elsarafTemplate/img/don't-use-logo/bk-ye2-logo.png" class="brand-img">
                                </div>
                                <div class="row">
                                    <img width="75%" class="col-6" src="/elsarafTemplate/img/don't-use-logo/YELLOW-logo.png" class="brand-img">
                                    <img width="75%" class="col-6" src="/elsarafTemplate/img/don't-use-logo/yellow LOGO.png" class="brand-img">
                                </div>
                            </div>
                        </div>

                        <div class="row col-10 no-padding">
                            <div class="col-6 p-0 d-flex align-items-center">
                                <div  class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-logo-bg-h')}}</h5>
                                    <p>{{ __('elsarafTemplate.brand-logo-bg-sh')}}</p>
                                </div>
                            </div>
                            <div class="col-6 text-left">
                                <img width="75%" src="/elsarafTemplate/img/solid-bg/Using the Logo on solid backgrounds.jpg" class="brand-img">
                            </div>
                        </div>
                    </div>

                    <h3 class="col-12 text-center font-weight-bold text-uppercase pt-5 pb-3 brand-header-text">{{ __('elsarafTemplate.brand-icon-text')}}</h3>
                    <div class="row justify-content-center guide2first">
                        <a class="card bg-black mr-3 col-4 col-md-3 no-padding icon-style" href="/elsarafTemplate/img/color-logo/icon Bk.png" download>
                            <img width="75%" src="/elsarafTemplate/img/color-logo/icon Bk.png" class="card-img-top" alt="...">
                            <div class="card-body  card-body-brand my-2">
                                <p class="card-text pr-2 text-white">{{ __('elsarafTemplate.brand-dl-icon')}}</p>
                            </div>
                        </a>
                        <a class="card bg-white mx-3 col-4 col-md-3 no-padding icon-style" href="/elsarafTemplate/img/color-logo/icon Wh.png" download>
                            <img width="75%" src="/elsarafTemplate/img/color-logo/icon Wh.png" class="card-img-top" alt="...">
                            <div class="card-body  card-body-brand my-2">
                                <p class="card-text pr-2">{{ __('elsarafTemplate.brand-dl-icon')}}</p>
                            </div>
                        </a>

                    </div>

                    <div class="row justify-content-center guide1first">
                        <h3 class="col-12 text-center font-weight-bold text-uppercase pt-5 pb-3 brand-header-text">{{ __('elsarafTemplate.brand-how-to-use-icon')}}</h3>
                        <div class="row col-10 no-padding">
                            <div class="col-6 p-0 d-flex align-items-center">
                                <div class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-use-h1')}}</h5>
                                    <p class="mb-0">{{ __('elsarafTemplate.brand-use-t1')}}</p>
                                    <p>{{ __('elsarafTemplate.brand-icon-t22')}}</p>
                                </div>
                            </div>
                            <div class="col-6 p-0 text-left">
                                <img width="75%" src="/elsarafTemplate/img/icons/SafespaceICON.png" class="brand-img">
                            </div>
                        </div>
                        <div class="row col-10 no-padding">
                            <div class="col-6 p-0 d-flex align-items-center">
                                <div  class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-use-h2')}}</h5>
                                    <p class="mb-0">{{ __('elsarafTemplate.brand-use-t2')}}</p>
                                    <p>{{ __('elsarafTemplate.brand-use-t22')}}</p>
                                </div>
                            </div>
                            <div class="col-6 p-0 text-left">
                                <img width="75%" src="/elsarafTemplate/img/icons/Maximum-size-icon.png" class="brand-img">
                                <img width="75%" src="/elsarafTemplate/img/icons/Minimum-print-size-icon.png" class="brand-img">
                            </div>
                        </div>
                        <div class="row pb-5 col-10 no-padding">
                            <div class="col-md-6 col-12 p-0 d-flex align-items-center">
                                <div class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-icon-h3')}} </h5>
                                    <ul class="guide-list pl-5 pt-2 brand-list-mobile">
                                        <li> {{ __('elsarafTemplate.brand-use-t31')}}</li>
                                        <li>{{ __('elsarafTemplate.brand-icon-t31')}}</li>
                                        <li>{{ __('elsarafTemplate.brand-icon-t32')}}</li>
                                        <li>{{ __('elsarafTemplate.brand-icon-t33')}}</li>
                                        <li>{{ __('elsarafTemplate.brand-icon-t34')}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 p-0 text-left d-none d-sm-block">
                                <img width="75%" src="/elsarafTemplate/img/color-logo/icondon'tused.png">
                            </div>
                             <div class="col-md-6 col-12 text-right d-block d-sm-none no-padding">
                                <img width="75%" src="/elsarafTemplate/img/color-logo/icondon'tused.png" class="brand-img">
                            </div>
                        </div>
                        <div class="row col-10 no-padding">
                            <div class="col-md-6 col-12 p-0 d-flex align-items-center">
                                <div class="text-right">
                                    <h5 class="font-weight-bold text-uppercase pb-3">{{ __('elsarafTemplate.brand-slogan')}}</h5>
                                    <p class="mb-0">{{ __('elsarafTemplate.brand-slogan-t1')}}</p>
                                    <p>{{ __('elsarafTemplate.brand-slogan-t2')}}</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 text-left d-none d-sm-block">
                                <img width="75%" src="/elsarafTemplate/img/partners/Social-media.jpg">
                            </div>
                            <div class="col-md-6 col-12 text-right d-block d-sm-none  no-padding">
                                <img width="75%" src="/elsarafTemplate/img/partners/Social-media.jpg" class="brand-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-guide2" role="tabpanel" aria-labelledby="nav-guide2-tab">
                    <h3 class="col-12 text-center font-weight-bold text-uppercase pb-3 brand-header-text">{{ __('elsarafTemplate.brand-header-text2')}}</h3>
                    <h5 class="col-12 text-center text-uppercase pb-3">
                        {{ __('elsarafTemplate.brand-tab2-t1')}}
                        <br>
                        {{ __('elsarafTemplate.brand-tab2-t2')}}
                        </h5>
                    <div class="row justify-content-center guide1first">
                        <h3 class="col-12 text-center font-weight-bold text-uppercase pt-5 pb-3 brand-header-text">{{ __('elsarafTemplate.brand-tab2-t3')}}</h3>
                        <div class="row col-10 pb-5 no-padding">
                            <div class="col-4 col-md-6 p-0 d-flex align-items-center">
                                <span><i class="available-icon fas fa-times-circle pl-2"></i>المسموح به</span>
                            </div>
                            <div class="col-8 col-md-6 pr-0">
                                <ul class="guide-list">
                                    <li>يمكنك استخدام شعار الصراف في مواد حملاتك لإضافة المزيد من المصداقية لعلامتك التجارية</li>
                                    <li>احترم جميع الإرشادات الخاصة بالعلامة التجارية للصراف </li>
                                    <li> استخدم المواد الدعائية المحدثة على أساس منتظم</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row col-10 no-padding">
                            <div class="col-4 col-md-6 p-0 d-flex align-items-center">
                                <span><i class="available-icon fas fa-times-circle pl-2"></i>الغير المسموح به</span>
                            </div>
                            <div class="col-8 col-md-6 pr-0 ">
                                <ul class="guide-list">
                                    <li>  لا تستخدم مواد علامتنا التجارية إذا لم تكن شريكًا أو وكيل مقبولاً</li>
                                    <li> تغيير في مواصفات مواد العلامة التجارية والمواد الإعلانية</li>
                                    <li> إخفاء أو تغطية الشعار أو الرمز</li>
                                    <li>وضع صورة أو أيقونات أخرى داخل الشعار أو الرمز</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 justify-content-center guide1first">

                        <div class="row col-10 pb-5 no-padding">
                            <div class="col-md-6 col-12 p-0 d-flex align-items-center no-padding">
                                <div>
                                    <h5 class="font-weight-bold text-uppercase pb-3">نحن هنا لمساعدتك على استخدام مواد العلامات التجارية لدينا في طرق مناسبة</h5>
                                    <p> يعد استخدام رمز الصراف مع رموز وسائل التواصل الإجتماعي الأخرى أكثر احترافية</p>

                                </div>
                            </div>
                            <div class="col-md-6 col-12 p-0 text-left no-padding d-none d-sm-block">
                                <img width="75%" src="/elsarafTemplate/img/partners/connect with us.jpg">
                                <img width="75%" src="/elsarafTemplate/img/partners/Don't use Social Media .jpg">
                            </div>
                             <div class="col-md-6 col-12 p-0 text-right no-padding d-block d-sm-none">
                                <img width="75%" src="/elsarafTemplate/img/partners/connect with us.jpg" class="brand-img">
                                <img width="75%" src="/elsarafTemplate/img/partners/Don't use Social Media .jpg" class="brand-img">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center guide1first">
                        <h3 class="col-12 text-center font-weight-bold text-uppercase pt-5 pb-3 brand-header-text">{{ __('elsarafTemplate.brand-tab2-t3')}}</h3>
                        <div class="row col-10 pb-5 no-padding">
                            <div class="col-md-6 col-4 p-0 d-flex align-items-center">
                                <h5 class="font-weight-bold text-uppercase">{{ __('elsarafTemplate.h-partners')}}</h5>
                            </div>
                            <div class="col-md-6 col-8 pr-0 ">
                                <ul class="guide-list">
                                    <li> {{ __('elsarafTemplate.brand-tab2-partner-li1')}}</li>
                                    <li> {{ __('elsarafTemplate.brand-tab2-partner-li2')}}</li>
                                    <li> {{ __('elsarafTemplate.brand-tab2-partner-li3')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center guide1first">
                        <div class="row col-10 pb-5">
                            <div class="col-12 p-0 pb-3">
                                <h5 class="brand-footer-text font-weight-bold text-uppercase text-center">
                                    {{ __('elsarafTemplate.brand-tab2-footer')}}
                                </h5>
                            </div>
                            <div class="col-12 p-0 text-center">
                                <a class="support p-2" href="/contact-us">{{ __('elsarafTemplate.btn-contact-us')}}</a>
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
        var checkbox = document.getElementById('checkbox_one');
        var form = document.getElementById('showThis');
        var showHiddenDiv = function(){
        if(checkbox.checked) {
        form.style['display'] = 'block';
        } else {
        form.style['display'] = 'none';
        }
        }
        checkbox.onclick = showHiddenDiv;
        showHiddenDiv();
        </script>
    @endpush

