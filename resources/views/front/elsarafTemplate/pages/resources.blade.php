@extends('front.elsarafTemplate.layouts.app')

@section('content')

            <div class="main-content pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5 d-lg-block d-none">
                               <img src="/elsarafTemplate/img/ResourcesBanner.jpg" class="img-fluid w-100 desktop">
                        </div>
                        <div class="col-12 text-center mb-3">
                            <h2>{{ __('elsarafTemplate.resources-header-text')}}</h2>
                        </div>
                        <div class="container">
                        <div class="col-12 bg-white p-0">
                            <div class=" text-center py-4 px-2">
                                 <h3> {{ __('elsarafTemplate.resources-report')}}</h3>
                            </div>
                             <div class="w-100" dir="ltr">
                                 <div class="grid-gallery report">

                                </div>
                            </div>
                         </div>
                       </div>
                    </div>
                </div>
            </div>


@endsection
@push('scripts')
        <script src="elsarafTemplate/js/scripts/resources.js"></script>
        <script>
        $(".res").click(function(){

            // $(".modal-bodyred").html("")
            $(".DownloadPDF").attr('href', $(this).data('src'));
            $(".DownloadPDF").attr('res-id', $(this).data('id'));
        })
         $(".report .owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            center: true,
            autoplay: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                750: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
        </script>

 @endpush
