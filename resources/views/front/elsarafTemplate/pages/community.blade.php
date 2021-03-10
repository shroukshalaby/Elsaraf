@extends('front.elsarafTemplate.layouts.app')

@section('content')
            <div class="main-content pt-5 d-md-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img src="/elsarafTemplate/img/banners/community Banner AR.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-4">
                            <h2 class="mb-0">
                                {{ __('elsarafTemplate.community-text1')}}
                                <br>
                                {{ __('elsarafTemplate.community-text2')}}.
                            </h2>
                        </div>
                    </div>
                    <div class="row" style="direction: ltr">
                        <div class="col-md-12 block-13 nav-direction-white">
                            <div class="nonloop-block-13 owl-carousel">
                                <div class="media-image">
                                    <a href="https://elsaraf.com/blog/post/"><img src="https://elsaraf.com/blog" alt="Image" class="img-fluid"></a>
                                    <div class="media-image-body">
                                        <h2 class="font-secondary text-uppercase" style="height: 46px;"><a href="https://elsaraf.com/blog/post/">title</a></h2>

                                        <p><a href="https://elsaraf.com/blog/post/">أقرأ المزيد</a></p>
                                        <ul class="list-unstyled d-flex justify-content-center">
                                            <li class="ml-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="ml-2"><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
                                            <li class="ml-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="ml-2"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li class="ml-2"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-grey py-5 d-md-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-4">
                            <h2 class="mb-0">
                                {{ __('elsarafTemplate.community-follow1')}}
                                <br>
                                {{ __('elsarafTemplate.community-follow2')}}
                            </h2>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!--<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fstickypoststool%2Fposts%2F3113088305396477%3A0&width=500" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>-->
                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-1b00bebb-6167-42ba-9972-bc68b8770ef0" style="height: 600px;"></div>
                        </div>
                        <div class="col-md-6 col-lg-4 bg-white px-0">
                            <blockquote class="twitter-tweet" style=" margin-top: 0!important; margin-bottom: 0!important;"><p lang="en" dir="ltr">Stop losing time, money and opportunities <br>Build your social media identity!<br>By the most economical social media management tool<br>$6 Monthly <br>Get your FREE TRIAL NOW without any credit cards<a href="https://t.co/HeHwh8PnaR">https://t.co/HeHwh8PnaR</a><a href="https://twitter.com/hashtag/Sticky_posts?src=hash&amp;ref_src=twsrc%5Etfw">#Sticky_posts</a> <a href="https://t.co/3kTfg1HIBA">pic.twitter.com/3kTfg1HIBA</a></p>&mdash; Sticky Posts MEA (@StickypostsMEA) <a href="https://twitter.com/StickypostsMEA/status/1255210212065071106?ref_src=twsrc%5Etfw">April 28, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6660915505718788096" height="600" width="100%" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                        </div>
                        <div class="col-12 auto-reply-community pt-5 text-center">
                            <h5> {{ __('elsarafTemplate.community-contactus-text')}}</h5>
                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                <li class="px-1 facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="px-1 instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="px-1 twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="px-1 facebook"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-grey py-5 d-md-none d-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-4">
                            <h3 class="mb-0">
                                {{ __('elsarafTemplate.community-follow1')}}
                                {{ __('elsarafTemplate.community-follow2')}}
                            </h3>
                        </div>
                    </div>
                    <div class="accordion seller-types" id="aboutTypes">
                        <div class="card">
                            <div class="card-header" id="aboutElsaraf">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseaboutElsaraf" aria-expanded="true" aria-controls="collapseaboutElsaraf">
                                   <i class="fas" aria-hidden="true"></i>
                                    فيس بوك
                                </button>
                            </div>
                            <div id="collapseaboutElsaraf" class="collapse" aria-labelledby="aboutElsaraf" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                    <div class="elfsight-app-1b00bebb-6167-42ba-9972-bc68b8770ef0" style=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="seller">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapseseller" aria-expanded="false" aria-controls="collapseseller">
                                 <i class="fas" aria-hidden="true"></i>
                                    تويتر
                                </button>

                            </div>
                            <div id="collapseseller" class="collapse" aria-labelledby="seller" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <blockquote class="twitter-tweet" style=" margin-top: 0!important; margin-bottom: 0!important;"><p lang="en" dir="ltr">Stop losing time, money and opportunities <br>Build your social media identity!<br>By the most economical social media management tool<br>$6 Monthly <br>Get your FREE TRIAL NOW without any credit cards<a href="https://t.co/HeHwh8PnaR">https://t.co/HeHwh8PnaR</a><a href="https://twitter.com/hashtag/Sticky_posts?src=hash&amp;ref_src=twsrc%5Etfw">#Sticky_posts</a> <a href="https://t.co/3kTfg1HIBA">pic.twitter.com/3kTfg1HIBA</a></p>&mdash; Sticky Posts MEA (@StickypostsMEA) <a href="https://twitter.com/StickypostsMEA/status/1255210212065071106?ref_src=twsrc%5Etfw">April 28, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="buyer">

                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapsebuyer" aria-expanded="false" aria-controls="collapsebuyer">
                                 <i class="fas" aria-hidden="true"></i>
                                    لينكد إن
                                </button>

                            </div>
                            <div id="collapsebuyer" class="collapse" aria-labelledby="buyer" data-parent="#aboutTypes">
                                <div class="card-body">
                                    <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6660915505718788096" height="500" width="100%" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 auto-reply-community pt-5 text-center">
                            <h5> {{ __('elsarafTemplate.community-contactus-text')}}</h5>
                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                <li class="px-1 facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="px-1 instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="px-1 twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="px-1 facebook"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-4">
                            <h2 class="mb-0"> {{ __('elsarafTemplate.community-oponion-text')}}</h2>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-md-8 mb-md-0 mb-3">
                            <div class="h-100 ml-md-3">
                                <div class="row p-3 h-100" style="border: 1px solid #343a40;">
                                    <div class="col-12 text-center">
                                        <h4 style="font-size: 1.1rem;">  {{ __('elsarafTemplate.community-grid-header')}}</h4>
                                    </div>

                                    <div class="col-12 people-opinion" style="overflow: auto;">
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name1')}}</h2>
                                                <p> {{ __('elsarafTemplate.community-grid-text1')}} </p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/1.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2> {{ __('elsarafTemplate.community-grid-name2')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text2')}} </p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/2.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name3')}} </h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text3')}}</p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/3.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name4')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text4')}}</p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/4.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name5')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text5')}}</p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/5.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name6')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text6')}} </p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/6.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name7')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text7')}} </p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/7.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name8')}}</h2>
                                                <p> {{ __('elsarafTemplate.community-grid-text8')}} </p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/8.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name9')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text9')}}</p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/9.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name10')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text10')}}</p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/10.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name11')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text11')}}</p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/11.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center bg-white mb-3">
                                            <div class="col-9 py-3">
                                                <h2>{{ __('elsarafTemplate.community-grid-name12')}}</h2>
                                                <p>{{ __('elsarafTemplate.community-grid-text12')}}</p>
                                                <ul class="list-unstyled d-flex justify-content-center reviews-reacts">
                                                    <li class="pl-4">250 <i class="fas fa-heart pl-1" style="color: #ff0018;"></i></li>
                                                    <li>50 <i class="fas fa-thumbs-down pl-1"></i></li>
                                                </ul>
                                            </div>
                                            <div class="col-3 text-center px-0">
                                                <img src="/elsarafTemplate/img/12.jpg" class="img-fluid w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <form class="h-100 mr-md-3">
                                <div class="row p-3 h-100" style="border: 1px solid #343a40;">
                                    <div class="col-12">
                                        <div class="form-group personal-comment">
                                            <h4 class="text-center" style=""> {{ __('elsarafTemplate.community-join-text')}} </h4>
                                            <textarea class="form-control" rows="3" style=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label> {{ __('elsarafTemplate.community-join-text1')}} <a class="" href="/login">  {{ __('elsarafTemplate.btn-login')}}</a></label>
                                        <label> {{ __('elsarafTemplate.community-join-text2')}} <a class="" href="/buyer-registration"> {{ __('elsarafTemplate.btn-create')}} </a></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group text-end">
                                            <input class="bg-dark border-none text-center text-white w-100" type="submit" value=" {{ __('elsarafTemplate.btn-share-your-opinion')}}">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
