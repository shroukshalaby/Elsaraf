@extends('front.elsarafTemplate.layouts.app')
@push('head')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="elsarafTemplate/js/slider/registration_wizard_func.js"></script>
<script src="elsarafTemplate/js/slider/common_scripts_min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css"/>
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<style>
    #map { position: relative; top: 0; bottom: 0; width: 100%; height: 85px;}
</style>

@endpush
@section('content')
            <div class="main-content pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="row">
                                <div id="wizard_container" class="w-100">
                                    <form name="" id="wrapped">
                                        <input id="website" name="website" type="hidden" value="">
                                        <div id="middle-wizard">
                                            <div class="step">
                                                <div class="row mx-0">
                                                    <div class="col-12">
                                                        <h4>{{__('elsarafTemplate.selr-whathavewhu')}}</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="custom-control custom-radio mb-12">
                                                            <input type="radio" id="seller-1" name="seller" class="custom-control-input" value="seller1">
                                                            <label class="custom-control-label" for="seller-1">
                                                                <h5 class="mb-0">{{__('elsarafTemplate.selr-ihavecommhous')}}</h5>
                                                                <p class="mb-0">{{__('elsarafTemplate.index-seller-shops-ans')}}.</p>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-12">
                                                            <input type="radio" id="seller-2" name="seller" class="custom-control-input" value="seller2">
                                                            <label class="custom-control-label" for="seller-2">
                                                                <h5 class="mb-0">{{__('elsarafTemplate.selr-ihavecompmee')}}</h5>
                                                                <p class="mb-0">{{__('elsarafTemplate.selr-itiscostitconpap')}}.</p>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-12">
                                                            <input type="radio" id="seller-3" name="seller" class="custom-control-input" value="seller3">
                                                            <label class="custom-control-label" for="seller-3">
                                                                <h5 class="mb-0">{{__('elsarafTemplate.selr-ihavecommerhouss')}}</h5>
                                                                <p class="mb-0">{{__('elsarafTemplate.index-seller-electronicBusiness-ans')}}</p>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-12">
                                                            <input type="radio" id="seller-4" name="seller" class="custom-control-input" value="seller4">
                                                            <label class="custom-control-label" for="seller-4">
                                                                <h5 class="mb-0">{{__('elsarafTemplate.selr-ihavegrouptru')}}</h5>
                                                                <p class="mb-0">{{__('elsarafTemplate.selr-institnoncommerc')}}</p>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="seller-5" name="seller" class="custom-control-input" value="seller5">
                                                            <label class="custom-control-label" for="seller-5">
                                                                <h5 class="mb-0">{{__('elsarafTemplate.selr-ihaveworalon')}} </h5>
                                                                <p class="mb-0">{{__('elsarafTemplate.sel-persincountrynoo')}}<p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="step">
                                                <div class="row mx-0">
                                                    <div class="col-12">
                                                        <div class="row mb-3">
                                                            <label class="col-12">{{__('elsarafTemplate.sel-persincountrynoo')}}</label>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioBranches1" name="branches" class="custom-control-input" value="branches1">
                                                                <label class="custom-control-label" for="customRadioBranches1">{{__('elsarafTemplate.brand-yes')}}</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioBranches2" name="branches" class="custom-control-input" value="branches0">
                                                                <label class="custom-control-label" for="customRadioBranches2">{{__('elsarafTemplate.brand-no')}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="boxbranches mx-3">
                                                            <div class="form-group">
                                                                <label>{{__('elsarafTemplate.selr-inputnolistt')}}</label>
                                                                <input type="number" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>{{__('elsarafTemplate.selr-inputplaclistm')}}</label>
                                                            <div id="map"></div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="step">
                                                <div class="row mx-0">
                                                    <div class="col-12">
                                                        <div class="row mb-3">
                                                            <label class="col-12">{{__('elsarafTemplate.selr-dopagescommun')}}</label>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline1" name="pages" class="custom-control-input" value="pages1">
                                                                <label class="custom-control-label" for="customRadioInline1">{{__('elsarafTemplate.brand-yes')}}</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadioInline2" name="pages" class="custom-control-input" value="pages0">
                                                                <label class="custom-control-label" for="customRadioInline2">{{__('elsarafTemplate.brand-no')}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="box mx-3">
                                                            <div class="form-group">
                                                                <label>{{__('elsarafTemplate.selr-plenterlikk')}}</label>
                                                                <input type="text" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mb-3">
                                                            <label class="col-12">{{__('elsarafTemplate.selr-doneedadrepl')}}</label>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="chatbot-1" name="autoReply" class="custom-control-input" value="autoReply1">
                                                                <label class="custom-control-label" for="chatbot-1">{{__('elsarafTemplate.brand-yes')}}</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="chatbot-2" name="autoReply" class="custom-control-input" value="autoReply0">
                                                                <label class="custom-control-label" for="chatbot-2">{{__('elsarafTemplate.brand-no')}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="boxchatbot mx-3">
                                                            <div class="row">
                                                                <label class="col-12">{{__('elsarafTemplate.selr-enterlikklin')}}</label>
                                                                <div class="form-group col-4">
                                                                    <label>{{__('elsarafTemplate.selr-likfaceboolik')}}</label>
                                                                    <input class="form-control form-control-sm" type="text">
                                                                </div>
                                                                <div class="form-group col-4">
                                                                    <label>{{__('elsarafTemplate.selr-linkinstagralik')}}</label>
                                                                    <input class="form-control form-control-sm" type="text">
                                                                </div>
                                                                <div class="form-group col-4">
                                                                    <label>{{__('elsarafTemplate.selr-linklinkedinnlin')}}</label>
                                                                    <input class="form-control form-control-sm" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-12">{{__('elsarafTemplate.selr-chooslangsch')}}</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="lang-ar" name="lang" class="custom-control-input">
                                                                    <label class="custom-control-label" for="lang-ar">{{__('elsarafTemplate.selr-langarabiclong')}}</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="lang-en" name="lang" class="custom-control-input">
                                                                    <label class="custom-control-label" for="lang-en">{{__('elsarafTemplate.selr-langenglishlong')}}</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="lang-fr" name="lang" class="custom-control-input">
                                                                    <label class="custom-control-label" for="lang-fr">{{__('elsarafTemplate.selr-langfrenchlong')}}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit step accordion-step">
                                                <div class="row mx-0">
                                                    <div class="col-12 sellerFardy">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="card mb-3">
                                                                <div class="card-header" id="headingOne">
                                                                    <div class="row align-items-center">
                                                                        <button class="col-10 btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                            {{__('elsarafTemplate.selr-personimagepson')}}
                                                                        </button>
                                                                        <div class="col-2 text-left">
                                                                            <i class="fas fa-arrow-circle-left fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <h3>{{__('elsarafTemplate.selr-takephotocvpho')}}</h3>
                                                                        <p>{{__('elsarafTemplate.selr-usecustomthisph')}} </p>
                                                                        <h4>{{__('elsarafTemplate.selr-reqforphotore')}}</h4>
                                                                        <ul>
                                                                            <li>{{__('elsarafTemplate.selr-appearfacealland')}}</li>
                                                                            <li>{{__('elsarafTemplate.selr-remofacewearkoba')}} </li>
                                                                            <li>{{__('elsarafTemplate.selr-takephotoinligplce')}}</li>
                                                                        </ul>
                                                                        <div class="row mx-0 mb-3">
                                                                            <div class="col-4">
                                                                                <img src="/elsarafTemplate/img/Personal Image.png" class="img-fluid w-100">
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="bg-grey" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-3">
                                                                <div class="card-header" id="headingTwo">
                                                                    <div class="row align-items-center">
                                                                        <button class="col-10 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                            {{__('elsarafTemplate.selr-idorpassporpapg')}}
                                                                        </button>
                                                                        <div class="col-2 text-left">
                                                                            <i class="fas fa-arrow-circle-left fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <h3>{{__('elsarafTemplate.selr-idorpassporpapg')}} </h3>
                                                                        <p>{{__('elsarafTemplate.selr-pletakephidpass')}}</p>
                                                                        <div class="row mx-0 mb-3">
                                                                            <div class="col-4">
                                                                                <img src="/elsarafTemplate/img/Personal Id.png" class="img-fluid w-100">
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <img src="/elsarafTemplate/img/PASSAPORT.png" class="img-fluid w-100">
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="bg-grey" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-3">
                                                                <div class="card-header" id="headingThree">
                                                                    <div class="row align-items-center">
                                                                        <button class="col-10 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            {{__('elsarafTemplate.selr-fishcriminalfish')}}
                                                                        </button>
                                                                        <div class="col-2 text-left">
                                                                            <i class="fas fa-arrow-circle-left fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <h3>{{__('elsarafTemplate.selr-fishcriminalfish')}} </h3>
                                                                        <p>{{__('elsarafTemplate.selr-confirmphotlightall')}}</p>
                                                                        <div class="row mx-0 mb-3">
                                                                            <div class="col-4">
                                                                                <img src="/elsarafTemplate/img/CRIMINAL RECORD.png" class="img-fluid w-100">
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="bg-grey" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 sellerTogary">
                                                        <div class="accordion" id="accordionExample2">
                                                            <div class="card mb-3">
                                                                <div class="card-header" id="headingOne2">
                                                                    <div class="row align-items-center">
                                                                        <button class="col-10 btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                                            {{__('elsarafTemplate.selr-logoandcommerlogo')}}
                                                                        </button>
                                                                        <div class="col-2 text-left">
                                                                            <i class="fas fa-arrow-circle-left fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne2" data-parent="#accordionExample2">
                                                                    <div class="card-body">
                                                                        <h3>{{__('elsarafTemplate.selr-takephotocvpho')}}</h3>
                                                                        <p>{{__('elsarafTemplate.selr-customtakethisphoto')}} </p>
                                                                        <h4>{{__('elsarafTemplate.selr-reqforphotore')}}</h4>
                                                                        <ul>
                                                                            <li>{{__('elsarafTemplate.selr-highqualityhhi')}}</li>
                                                                            <li>{{__('elsarafTemplate.selr-specforlogou')}} </li>
                                                                        </ul>
                                                                        <div class="row mx-0 mb-3">
                                                                            <div class="col-4">
                                                                                <img src="/elsarafTemplate/img/Logo.png" class="img-fluid w-100">
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="bg-grey" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-3">
                                                                <div class="card-header" id="headingTwo2">
                                                                    <div class="row align-items-center">
                                                                        <button class="col-10 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                                            {{__('elsarafTemplate.selr-idofcommerfees')}} 
                                                                        </button>
                                                                        <div class="col-2 text-left">
                                                                            <i class="fas fa-arrow-circle-left fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample2">
                                                                    <div class="card-body">
                                                                        <h3>{{__('elsarafTemplate.selr-idofcommerfees')}}</h3>
                                                                        <p>{{__('elsarafTemplate.selr-confutakephocomp')}}</p>
                                                                        <div class="row mx-0 mb-3">
                                                                            <div class="col-4">
                                                                                <img src="/elsarafTemplate/img/Tax id.png" class="img-fluid w-100">
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="bg-grey" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-3">
                                                                <div class="card-header" id="headingThree2">
                                                                    <div class="row align-items-center">
                                                                        <button class="col-10 btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                                            {{__('elsarafTemplate.selr-segelcommericals')}}
                                                                        </button>
                                                                        <div class="col-2 text-left">
                                                                            <i class="fas fa-arrow-circle-left fs-24"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordionExample2">
                                                                    <div class="card-body">
                                                                        <h3>{{__('elsarafTemplate.selr-segelcommericals')}}</h3>
                                                                        <p>{{__('elsarafTemplate.selr-confutakephocomp')}}.</p>
                                                                        <div class="row mx-0 mb-3">
                                                                            <div class="col-4">
                                                                                <img src="/elsarafTemplate/img/Comercial Register.jpg" class="img-fluid w-100">
                                                                            </div>
                                                                        </div>
                                                                        <input type="file" class="bg-grey" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="bottom-wizard" class="py-3 pr-3 mx-md-0 mx-3" style="text-align: end">
                							<button type="button" name="backward" class="backward btn-warning btn px-2 py-0 text-light">{{__('elsarafTemplate.form-prev')}}</button>
                							<button type="button" name="forward" class="forward btn-warning btn px-2 py-0 text-light">{{__('elsarafTemplate.form-next')}}</button>
                							<button type="submit" name="process" class="submit btn-warning btn px-2 py-0 text-light">{{__('elsarafTemplate.form-register')}}</button>
                						</div>
                                    </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        @endsection
      @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() 
                {
                    $(".box").slideUp();
                    
                    $("input[name=pages]:radio").change(function(){
                        var radioValue = $("input[name='pages']:checked").val();
                        if(radioValue == "pages1"){
                            $( ".box" ).slideDown();
                            console.log("yes");
                        }
                        else{
                            $(".box").slideUp();
                            console.log("no");
                        }
                    });
                }); 
        </script>
        <script type="text/javascript">
            $(document).ready(function() 
                {
                    $(".boxbranches").slideUp();
                    
                    $("input[name=branches]:radio").change(function(){
                        var branchesValue = $("input[name='branches']:checked").val();
                        if(branchesValue == "branches1"){
                            $( ".boxbranches" ).slideDown();
                            console.log("yes");
                        }
                        else{
                            $(".boxbranches").slideUp();
                            console.log("no");
                        }
                    });
                }); 
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".boxchatbot").slideUp();
                
            }); 
        </script>
        <script type="text/javascript">
            $("input[name=autoReply]:radio").change(function(){
                var xxx = $("input[name='autoReply']:checked").val();
                if(xxx == "autoReply1"){
                    $( ".boxchatbot" ).slideDown();
                    console.log(xxx);
                }
                else{
                    $(".boxchatbot").slideUp();
                    console.log(xxx);
                }
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".sellerTogary").css("display","none");
                
            }); 
            $("input[name=seller]:radio").change(function(){
                var sellervalue = $("input[name='seller']:checked").val();
                if(sellervalue == "seller5"){
                    $( ".sellerFardy" ).css("display","block");
                    $(".sellerTogary").css("display","none");
                    console.log(sellervalue);
                }
                else{
                    $(".sellerTogary").css("display","block");
                    $(".sellerFardy").css("display","none");
                    console.log(xxx);
                }
            });
        </script>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmV3MTk5NSIsImEiOiJjazlrZWtrM28wZHo3M2xtaHdlaWlrcG5tIn0.6pB43A2oUc70FgsdrOnK9Q';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v9',
                center: [-79.4512, 43.6568],
                zoom: 13
            });
             
            var geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                flyTo: {
                    bearing: 0,
                    // These options control the flight curve, making it move
                    // slowly and zoom out almost completely before starting
                    // to pan.
                    speed: 0.2, // make the flying slow
                    curve: 1, // change the speed at which it zooms out
                    // This can be any easing function: it takes a number between
                    // 0 and 1 and returns another number between 0 and 1.
                    easing: function(t) {
                        return t;
                    }
                },
                mapboxgl: mapboxgl
            });
            map.addControl(geocoder);
        </script>
   @endpush