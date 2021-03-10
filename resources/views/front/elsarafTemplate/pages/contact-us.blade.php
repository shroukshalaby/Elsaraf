@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content py-5">
                <div class="container">
                    <div class="row d-lg-block d-none">
                        <div class="col-12">
                            <div class="row justify-content-center">
                             <div class="col-3 d-flex justify-content-between direction-column">
                                    <div>
                                    <ul class="row px-0">
                                        <li class="nav-item col-12 mb-0">
                                            <a class="nav-link main-head">{{ __('elsarafTemplate.contact-us')}}
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="row mx-0 mt-3">
                                        <a class="col-12 register-link" href="#">{{ __('elsarafTemplate.contact-faq')}}</a>
                                    </div>


                                    </div>
                                    <div>
                                     <div class="row mx-0 mt-3  register-link">
                                        <p class="col-12 m-0">{{ __('elsarafTemplate.contact-us-within')}}
                                        <br>
                                       {{ __('elsarafTemplate.form-email')}} </p>

                                       <p class="col-12 my-2 fs-14 m-0"> Support@elsaraf.com  </p>
                                    </div>
                                     <div class="row mx-0 mt-3  register-link">
                                    <p class="col-12 m-0"> {{ __('elsarafTemplate.contact-us-within')}}
                                    <br>
                                   {{ __('elsarafTemplate.contact-within-social-meida')}}</p>
                                    <ul class="col-12 my-2 list-socail">
                                     <li class="pl-2 social-icons"><a href="https://www.facebook.com/elsarafofficial"><i class="fab fa-lg fa-facebook-f" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://twitter.com/elsarafofficial"><i class="fab fa-lg fa-twitter" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://www.instagram.com/elsarafofficial/"><i class="fab fa-lg fa-instagram" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://www.youtube.com/channel/UC5Rew0KckzY43SOkZXw9M0Q"><i class="fab fa-lg fa-youtube" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://www.linkedin.com/company/elsaraf-com-%D8%A7%D9%84%D8%B5%D8%B1%D8%A7%D9%81-%D9%83%D9%88%D9%85/about/?viewAsMember=true"><i class="fab fa-lg fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>

                                    </div>
                                    </div>
                                </div>

                             <div class="col-7 contact-border-section">
                                    <div class="row">
                                        <div class="col-12 main-explain" id="main10">
                                             <div class="row">
                                                <div class="col-12">
                                                 <p class="text-center contact-ticket-text">{{ __('elsarafTemplate.contact-create-ticket')}}  </p>
                                                </div>
                                                <div class="col-12">
                                                   <form>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-fisrt-name')}}</label>
                                                            <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-fisrt-name')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span>{{ __('elsarafTemplate.form-last-name')}}</label>
                                                            <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-last-name')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span>{{ __('elsarafTemplate.form-email')}}</label>
                                                            <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-email')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span>{{ __('elsarafTemplate.form-phone-service')}}</label>
                                                            <div class="input-group mb-3 row mx-0">
                                                                <div class="input-group-prepend col-7 px-0">
                                                                    <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-phone-number')}}">
                                                                </div>
                                                                <select class="custom-select custom-select-sm col-5" id="inputGroupSelect01">
                                                                    <option selected>{{ __('elsarafTemplate.form-phone-service')}}</option>
                                                                    <option value="1">{{ __('elsarafTemplate.form-phone-service-et')}}</option>
                                                                    <option value="2">{{ __('elsarafTemplate.form-phone-service-vf')}}</option>
                                                                    <option value="3">{{ __('elsarafTemplate.form-phone-service-or')}}</option>
                                                                    <option value="4">{{ __('elsarafTemplate.form-phone-service-we')}}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-country')}}</label>
                                                            <select class="custom-select custom-select-sm">
                                                                <option>{{ __('elsarafTemplate.form-choose-country')}}</option>
                                                                <option>{{ __('elsarafTemplate.form-country-egy')}}</option>
                                                                <option>{{ __('elsarafTemplate.form-country-saudi')}}</option>
                                                                <option>{{ __('elsarafTemplate.form-country-emi')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                     <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-category')}}</label>
                                                            <select class="custom-select custom-select-sm">
                                                                <option> {{ __('elsarafTemplate.form-choose-category')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category1')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category2')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category3')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category4')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category5')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category6')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category7')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category8')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-b-category1')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-b-category2')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-b-category3')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                             <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-message')}} </label>
                                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                            <div class="row justify-content-end mx-0">
                                                <div class="col-md-9 p-0 text-right">
                                                <small>          (<span class="red-star">*</span>)
                                                        {{ __('elsarafTemplate.form-required-text')}}
                                                </small>
                                                </div>
                                                <div class="col-md-3 main-next text-center">
                                                 <a href="mailto:maged.tadrous@me.com" class="fs-20">{{ __('elsarafTemplate.btn-send')}}</a>
                                                </div>
                                            </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-12 main-explain" id="main0">

                                        </div>
                                        <div class="col-12 main-explain" id="main1">


                                        </div>
                                        <div class="col-12 main-explain" id="main2">


                                        </div>
                                        <div class="col-12 main-explain" id="main3">

                                        </div>
                                        <div class="col-12 main-explain" id="main4">

                                        </div>

                                        <div class="col-12 main-explain" id="main5">

                                        </div>
                                        <div class="col-12 main-explain" id="main6">

                                        </div>
                                        <div class="col-12 main-explain" id="main7">

                                        </div>
                                        <div class="col-12 main-explain" id="main8">

                                        </div>
                                        <div class="col-12 main-explain" id="main9">

                                        </div>

                                        <div class="col-12 main-explain" id="main13">

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                     <div class="row d-lg-none">
                        <div class="col-12">
                            <div class="row justify-content-center">
                              <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 main-explain" id="main10">
                                             <div class="row">
                                                <div class="col-12">
                                                 <p class="text-center contact-ticket-text">{{ __('elsarafTemplate.contact-create-ticket')}}</p>
                                                </div>
                                                <div class="col-12">
                                                   <form>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-fisrt-name')}}</label>
                                                            <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-fisrt-name')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 pr-0">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span>{{ __('elsarafTemplate.form-last-name')}}</label>
                                                            <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-last-name')}} ">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span>{{ __('elsarafTemplate.form-email')}}</label>
                                                            <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-email')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 pr-0">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span>{{ __('elsarafTemplate.form-phone-service')}}</label>
                                                            <div class="input-group mb-3 row mx-0">
                                                                <div class="input-group-prepend col-6 px-0">
                                                                    <input class="form-control form-control-sm" type="text" name="" placeholder="{{ __('elsarafTemplate.form-phone-number')}}">
                                                                </div>
                                                                <select class="custom-select custom-select-sm col-6" id="inputGroupSelect01">
                                                                    <option selected>{{ __('elsarafTemplate.form-phone-service')}}</option>
                                                                    <option value="1">{{ __('elsarafTemplate.form-phone-service-et')}}</option>
                                                                    <option value="2">{{ __('elsarafTemplate.form-phone-service-vf')}}</option>
                                                                    <option value="3">{{ __('elsarafTemplate.form-phone-service-or')}}</option>
                                                                    <option value="4">{{ __('elsarafTemplate.form-phone-service-we')}}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="col-6">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-country')}}</label>
                                                            <select class="custom-select custom-select-sm">
                                                                <option>{{ __('elsarafTemplate.form-choose-country')}}</option>
                                                                <option>{{ __('elsarafTemplate.form-country-egy')}}</option>
                                                                <option>{{ __('elsarafTemplate.form-country-saudi')}}</option>
                                                                <option>{{ __('elsarafTemplate.form-country-emi')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                     <div class="col-6 pr-0">
                                                        <div class="form-group">
                                                            <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-category')}}</label>
                                                            <select class="custom-select custom-select-sm">
                                                                <option> {{ __('elsarafTemplate.form-choose-category')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category1')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category2')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category3')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category4')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category5')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category6')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category7')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-s-category8')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-b-category1')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-b-category2')}}</option>
                                                                <option>{{ __('elsarafTemplate.contact-b-category3')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                             <label> <span class="red-star">*</span> {{ __('elsarafTemplate.form-message')}} </label>
                                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                            <div class="row justify-content-end mx-0">
                                                <div class="col-md-9 p-0 text-right mb-2">
                                                <small>          (<span class="red-star">*</span>)
                                                      {{ __('elsarafTemplate.form-required-text')}}
                                                </small>
                                                </div>
                                                <div class="col-md-3 main-next text-center">
                                                 <a href="mailto:maged.tadrous@me.com" class="fs-20">{{ __('elsarafTemplate.btn-send')}}</a>
                                                </div>
                                            </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-12 main-explain" id="main0">

                                        </div>
                                        <div class="col-12 main-explain" id="main1">


                                        </div>
                                        <div class="col-12 main-explain" id="main2">


                                        </div>
                                        <div class="col-12 main-explain" id="main3">

                                        </div>
                                        <div class="col-12 main-explain" id="main4">

                                        </div>

                                        <div class="col-12 main-explain" id="main5">

                                        </div>
                                        <div class="col-12 main-explain" id="main6">

                                        </div>
                                        <div class="col-12 main-explain" id="main7">

                                        </div>
                                        <div class="col-12 main-explain" id="main8">

                                        </div>
                                        <div class="col-12 main-explain" id="main9">

                                        </div>

                                        <div class="col-12 main-explain" id="main13">

                                        </div>

                                    </div>
                                </div>

                             <div class="col-12 d-flex justify-content-between mt-5 direction-column">

                                    <div class="row mx-0 mt-3">
                                        <a class="col-12 register-link" href="#">{{ __('elsarafTemplate.contact-faq')}}</a>
                                    </div>

                                    <div>
                                     <div class="row mx-0 mt-3  register-link">
                                        <p class="col-12 m-0">{{ __('elsarafTemplate.contact-us-within')}}
                                        <br>
                                       {{ __('elsarafTemplate.form-email')}} </p>

                                       <p class="col-12 my-2 fs-14 m-0"> Support@elsaraf.com  </p>
                                    </div>
                                     <div class="row mx-0 mt-3  register-link">
                                    <p class="col-12 m-0">  {{ __('elsarafTemplate.contact-us-within')}}
                                    <br>
                                   {{ __('elsarafTemplate.contact-within-social-meida')}}</p>
                                    <ul class="col-12 my-2 list-socail">
                                     <li class="pl-2 social-icons"><a href="https://www.facebook.com/elsarafofficial"><i class="fab fa-lg fa-facebook-f" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://twitter.com/elsarafofficial"><i class="fab fa-lg fa-twitter" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://www.instagram.com/elsarafofficial/"><i class="fab fa-lg fa-instagram" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://www.youtube.com/channel/UC5Rew0KckzY43SOkZXw9M0Q"><i class="fab fa-lg fa-youtube" aria-hidden="true"></i></a></li>
                                     <li class="pl-2 social-icons"><a href="https://www.linkedin.com/company/elsaraf-com-%D8%A7%D9%84%D8%B5%D8%B1%D8%A7%D9%81-%D9%83%D9%88%D9%85/about/?viewAsMember=true"><i class="fab fa-lg fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>

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
                console.log(str);
                console.log(res3);
                if(res3!=11 && res3!=12){
                    if(res3>9 && res3<15){
                        var x= res3;
                        console.log("tghnvb");
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
                        console.log("tghnvb");
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
                    console.log("sdfghjk");
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
                console.log("aykalam");
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
	<script>
	    /**
 * A Javascript module to loadeding/refreshing options of a select2 list box using ajax based on selection of another select2 list box.
 *
 * @url : https://gist.github.com/ajaxray/187e7c9a00666a7ffff52a8a69b8bf31
 * @auther : Anis Uddin Ahmad <anis.programmer@gmail.com>
 *
 * Live demo - https://codepen.io/ajaxray/full/oBPbQe/
 * w: https://ajaxray.com | t: @ajaxray
 */
var Select2Cascade = ( function(window, $) {

    function Select2Cascade(parent, child, url, select2Options) {
        var afterActions = [];
        var options = select2Options || {};

        // Register functions to be called after cascading data loading done
        this.then = function(callback) {
            afterActions.push(callback);
            return this;
        };

        parent.select2(select2Options).on("change", function (e) {

            child.prop("disabled", true);

            var _this = this;
            $.getJSON(url.replace(':parentId:', $(this).val()), function(items) {
                var newOptions = '<option value="">-- Select --</option>';
                for(var id in items) {
                    newOptions += '<option value="'+ id +'">'+ items[id] +'</option>';
                }

                child.select2('destroy').html(newOptions).prop("disabled", false)
                    .select2(options);

                afterActions.forEach(function (callback) {
                    callback(parent, child, items);
                });
            });
        });
    }

    return Select2Cascade;

})( window, $);

$(document).ready(function() {
    var select2Options = { width: 'resolve' };
    // Loading raw JSON files of a secret gist - https://gist.github.com/ajaxray/32c5a57fafc3f6bc4c430153d66a55f5
    var apiUrl =  'https://gist.githubusercontent.com/ajaxray/32c5a57fafc3f6bc4c430153d66a55f5/raw/260a653e6347fb6d2360e8ec376a2dc4888c1afa/:parentId:.json';

    $('select').select2(select2Options);
    var cascadLoading = new Select2Cascade($('#type'), $('#subtype'), apiUrl, select2Options);
    cascadLoading.then( function(parent, child, items) {
        // Dump response data
        console.log(items);
    });
});


	</script>

  @endpush

