@extends('front.elsarafTemplate.layouts.app')

@section('content')

<div class="main-content investors-main-content pt-5">
    <div class="container">
        <div class="row mb-5 no-margin-bottom">
            <div class="col-12">
                <div class="row align-items-center">

                    <div class="col-md-6 col-sm-12 p-3 text-center form-style-height">
                        <h3 class="pb-2 pl-3 font-weight-bold lh-1-5"> {{ __('elsarafTemplate.investors-header1')}}
                          <br>
                         {{ __('elsarafTemplate.investors-header2')}}
                        </h3>
                        <p class="mb-0 pb-2 font-20 text-right"> {{ __('elsarafTemplate.investors-sub-text1')}} </p>
                        <p class="m-0 text-right">{{ __('elsarafTemplate.investors-sub-text2')}}</p>
                        <p class="m-0 text-right mb-md-5 mb-3"> {{ __('elsarafTemplate.investors-sub-text3')}} {{ __('elsarafTemplate.investors-sub-text4')}}</p>

                        <div class="col-12">
                            <div class="row ">
                                <div class="col-md-12 col-sm-12 col-12 p-0">
                                    <form method="post" class="col-12 Investor_request">
                                        <div class="row text-right">
                                            <div class="col-md-6 col-sm-12 col-12 px-0 form-group-mob">
                                                <label class="labelMob"><span class="red-star">*</span> {{ __('elsarafTemplate.form-fisrt-name')}}  </label>

                                                <input type="text" name="first_name" class="form-control form-control-sm form-height-small" placeholder=" {{ __('elsarafTemplate.form-fisrt-name')}} " required="">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-12 pl-0 form-group-mob no-padding">
                                                <label class="labelMob"><span class="red-star">*</span> {{ __('elsarafTemplate.form-last-name')}}  </label>

                                                <input type="text" name="last_name" class="form-control form-control-sm form-height-small" placeholder="{{ __('elsarafTemplate.form-last-name')}} " required="">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-12 px-0 form-group-mob">
                                                <label class="labelMob"><span class="red-star">*</span> {{ __('elsarafTemplate.form-email')}}  </label>

                                                <input type="email" name="email" class="form-control form-control-sm form-height-small" placeholder="{{ __('elsarafTemplate.form-email')}}" required="">
                                                <span class="success_resgister_buyer text-success"></span>
                                                <span class="error_resgister_buyer text-danger"></span>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-12 pl-0 form-group-mob no-padding">
                                                <div class="form-group form-group-mob">
                                                    <label class="labelMob"><span class="red-star">*</span> {{ __('elsarafTemplate.form-phone-number')}}    </label>
                                                    <input type="number" required="" name="phone" class="form-control form-control-sm form-height-small" placeholder="{{ __('elsarafTemplate.form-phone-number')}}">
                                                </div>
                                            </div>

                                            <div class="row w-100 mx-auto pt-2 px-sm-0 px-0 form-group-mob">
                                                <div class="col-6 p-0">
                                                    <div class="custom-control custom-radio">
                                                      <input type="radio" id="type1" onclick="show1();" name="individual" value="Individual" class="custom-control-input" required="">
                                                      <label class="custom-control-label font-weight-bold" for="type1">{{ __('elsarafTemplate.form-individual')}} </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-radio">
                                                      <input type="radio" id="type2" onclick="show2();" name="individual" value="Company" class="custom-control-input" required="">

                                                      <label class="custom-control-label font-weight-bold" for="type2">{{ __('elsarafTemplate.form-company')}} </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mx-auto w-100 pt-2" id="showform">
                                                <div class="col-md-6 col-sm-12 col-12 px-0 form-group-mob">
                                                    <label class="labelMob"><span class="red-star">*</span> {{ __('elsarafTemplate.form-work-mail')}}  </label>

                                                    <input type="email" required="" name="comapny_email" class="form-control form-control-sm form-height-small company_data" placeholder="Work Email">
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-12 pl-0 form-group-mob no-padding">
                                                    <label class="labelMob"><span class="red-star">*</span> {{ __('elsarafTemplate.form-number-of-emp')}}  </label>

                                                    <input type="number" required="" name="number_employee" class="form-control form-control-sm form-height-small company_data" placeholder="Number Of Employees">
                                                </div>
                                            </div>

                                            <div class="col-12 px-0 pt-3">
                                              <div class="custom-control custom-radio">
                                                      <input type="radio" id="send" name="notification" class="custom-control-input" required="">
                                                      <label class="custom-control-label font-14 vertical-align-middle" for="send">{{ __('elsarafTemplate.investors-sub-text5')}}</label>
                                              </div>
                                            </div>
                                            <div class="col-12 px-0">
                                                <small>
                                                    (
                                                    <span class="red-star">*</span>
                                                    )
                                                  {{ __('elsarafTemplate.form-required-text')}} .
                                                </small>
                                            </div>
                                             <div class="mt-4 p-0 col-12 d-flex align-items-right justify-content-right affiliate-btn">
                                                <div class="col-md-4 col-12 main-next text-center">
                                                  <button type="submit" class="fs-20 main-next investors-join-btn"> {{ __('elsarafTemplate.btn-join-us')}}</button>
                                             </div>
                                            </div>

                                         </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12  text-center align-items-center d-lg-block d-md-block d-none">
                        <img src="/elsarafTemplate/img/banners/NewinvestorsEn_AR.jpg" class="img-fluid w-100">
                    </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection
@push('scripts')
<script src="/elsarafTemplate/js/scripts/investors.js"></script>
<script>
    function show1(){
      $('.company_data').prop('required' , false)
      document.getElementById('showform').style.display ='none';
    }
    function show2(){
      document.getElementById('showform').style.display = 'flex';
      $('.company_data').prop('required' ,true)
    }
</script>
@endpush
