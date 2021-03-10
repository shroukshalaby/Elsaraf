<!doctype html>
<html class="no-js" lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <base href="{{url('/')}}"/>
        {{-- <title>{{ $title }} | {{$set->site_name}}</title> --}}
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="{{$set->site_name}}"/>
        <meta name="application-name" content="{{$set->site_name}}"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="{{$set->site_desc}}" />
        <link rel="shortcut icon" href="{{url('/')}}/asset/{{$logo->image_link2}}" />
        <!--<link rel="stylesheet" href="{{url('/')}}/asset/css/sweetalert.css" type="text/css">-->
        <link rel="stylesheet" href="{{url('/')}}/asset/css/toast.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/css/argon.css?v=1.1.0" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/css/sweetalert.css" type="text/css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="{{url('/')}}/asset/dashboard/vendor/quill/dist/quill.core.css">
        <link href="{{url('/')}}/asset/fonts/fontawesome/css/all.css" rel="stylesheet" type="text/css">
         @yield('css')
    </head>
<!-- header begin-->
<body>
  <div class=""></div>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{url('/')}}/asset/{{ $logo->dark}}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-primary"></i>
              <i class="sidenav-toggler-line bg-primary"></i>
              <i class="sidenav-toggler-line bg-primary"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav mb-3">
            <li class="nav-item">
              <a class="nav-link @if(route('user.dashboard')==url()->current()) active @endif" href="{{route('user.dashboard')}}">
                <i class="fal fa-house-user"></i>
                <span class="nav-link-text">{{__('Home')}}</span>
              </a>
            </li>
          </ul>
          <h6 class="navbar-heading p-0 text-muted">{{__('Your Business')}}</h6>
          <ul class="navbar-nav mb-3">
            @if($set->transfer==1)
              <li class="nav-item">
                <a class="nav-link @if(route('user.transfer')==url()->current()) active @endif" href="{{route('user.transfer')}}">
                  <i class="fal fa-random"></i>
                  <span class="nav-link-text">{{__('Transfer Money')}}
                    @if(count($p_transfer)>0)
                      <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                      {{count($p_transfer)}}
                      </span>
                    @endif
                  </span>
                </a>
              </li>
            @endif
            <li class="nav-item">
              <a class="nav-link @if(route('user.fund')==url()->current()) active @endif" href="{{route('user.fund')}}">
                <i class="fal fa-arrow-up"></i>
                <span class="nav-link-text">{{__('Top up Balance')}}</span>
              </a>
            </li>
            @if($set->vcard==1)
              @if($currency->name=='NGN' || $currency->name=='USD'  || $currency->name=='GNF' || $currency->name=='KES' || $currency->name=='LRD' || $currency->name=='MWK' || $currency->name=='MZN' || $currency->name=='RWF' || $currency->name=='SLL' || $currency->name=='BIF' || $currency->name=='CAD' || $currency->name=='CDF' || $currency->name=='CVE' || $currency->name=='EUR' || $currency->name=='GBP' || $currency->name=='GHS' || $currency->name=='GMD' || $currency->name=='STD' || $currency->name=='TZS' || $currency->name=='TZS' || $currency->name=='UGX' || $currency->name=='XAF' || $currency->name=='XOF' || $currency->name=='ZMK' || $currency->name=='ZMW' || $currency->name=='ZWD')
                <li class="nav-item">
                  <a class="nav-link @if(route('user.virtualcard')==url()->current()) active @endif" href="{{route('user.virtualcard')}}">
                    <i class="fal fa-credit-card-front"></i>
                    <span class="nav-link-text">{{__('Virtual Cards')}}</span>
                  </a>
                </li>
              @endif
            @endif
            @if($set->bill==1)
              @if($currency->name=='NGN')
              <li class="nav-item">
                <a class="nav-link @if(route('user.airtime')==url()->current() || route('user.data.bundle')==url()->current() || route('user.tv.cable')==url()->current() || route('user.electricity')==url()->current()) active @endif" href="#bill" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="bill">
                  <!--For modern browsers-->
                  <i class="fal fa-money-bill-wave-alt"></i>
                  <span class="nav-link-text">{{__('Bill Payment')}}</span>
                </a>
                <div class="collapse @if(route('user.airtime')==url()->current() || route('user.data.bundle')==url()->current() || route('user.tv.cable')==url()->current() || route('user.electricity')==url()->current()) show @endif" id="bill">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item @if(route('user.airtime')==url()->current()) active @endif text-default">
                      <a href="{{route('user.airtime')}}" class="nav-link">{{__('Airtime')}}</a>
                    </li>
                    <li class="nav-item @if(route('user.data.bundle')==url()->current()) active @endif text-default">
                      <a href="{{route('user.data.bundle')}}" class="nav-link">{{__('Data Bundle')}}</a>
                    </li>
                    <li class="nav-item @if(route('user.tv.cable')==url()->current()) active @endif text-default">
                      <a href="{{route('user.tv.cable')}}" class="nav-link">{{__('Tv Cable')}}</a>
                    </li>
                    <li class="nav-item @if(route('user.electricity')==url()->current()) active @endif text-default">
                      <a href="{{route('user.electricity')}}" class="nav-link">{{__('Electricity')}}</a>
                    </li>
                  </ul>
                </div>
              </li>
              @endif
            @endif
            <!--
            <li class="nav-item">
              <a class="nav-link @if(route('user.btc')==url()->current() || route('user.eth')==url()->current()) active @endif" href="#crypto" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="crypto">
                <i class="fal fa-sync"></i>
                <span class="nav-link-text">{{__('Buy & Sell Crypto')}}</span>
              </a>
              <div class="collapse @if(route('user.btc')==url()->current() || route('user.eth')==url()->current()) show @endif" id="crypto">
                <ul class="nav nav-sm flex-column">
                  @if($set->bitcoin==1)
                  <li class="nav-item @if(route('user.btc')==url()->current()) active @endif text-default">
                    <a href="{{route('user.btc')}}" class="nav-link">{{__('Bitcoin')}}</a>
                  </li>
                  @endif
                  @if($set->ethereum==1)
                  <li class="nav-item @if(route('user.eth')==url()->current()) active @endif text-default">
                    <a href="{{route('user.eth')}}" class="nav-link">{{__('Ethereum')}}</a>
                  </li>
                  @endif
                </ul>
              </div>
            </li>
            -->
            <li class="nav-item">
              <a class="nav-link @if(route('user.ticket')==url()->current() || route('open.ticket')==url()->current()) active @endif" href="{{route('user.ticket')}}">
                <i class="fal fa-flag"></i>
                <span class="nav-link-text">{{__('Disputes')}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(route('user.sub')==url()->current() || route('user.sub')==url()->current()) active @endif" href="{{route('user.sub')}}">
                <i class="fal fa-user"></i>
                <span class="nav-link-text">{{__('Subscribers')}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(route('user.transactions')==url()->current()) active @endif" href="{{route('user.transactions')}}">
                <i class="fal fa-credit-card"></i>
                <span class="nav-link-text">{{__('Transactions')}}</span>
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(route('user.withdraw')==url()->current()) active @endif" href="#navbar-examples4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples4">
                  <!--For modern browsers-->
                  <i class="fal fa-arrow-circle-down"></i>
                  <span class="nav-link-text">{{__('Payout')}}</span>
                </a>
                <div class="collapse @if(route('user.withdraw')==url()->current()) show @endif" id="navbar-examples4">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item @if(route('user.withdraw')==url()->current()) active @endif text-default">
                      <a href="{{route('user.withdraw')}}" class="nav-link"><i class="fal fa-user"></i>{{__('Payout')}}</a>
                    </li>
                    <li class="nav-item @if(route('user.distributions')==url()->current()) active @endif text-default">
                        <a href="{{route('user.distributions')}}" class="nav-link"><i class="fal fa-link"></i>{{__('distributions')}}</a>
                      </li>
                  </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(route('user.affiliate')==url()->current()) active @endif" href="{{route('user.affiliate')}}">
                  <i class="fa fa-file-invoice-dollar"></i>
                  <span class="nav-link-text">{{__('Affiliate')}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://elsaraf.com/chatbot/dashboard">
                  <i class="fa fa-solar-system"></i>
                  <span class="nav-link-text">{{__('Chatbot Settings')}}</span>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link @if(route('user.charges')==url()->current()) active @endif" href="{{route('user.charges')}}">
                <i class="fal fa-comments-alt"></i>
                <span class="nav-link-text">{{__('Charges')}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(route('user.subaccounts')==url()->current()) active @endif" href="{{route('user.subaccounts')}}">
                <i class="fal fa-user-friends"></i>
                <span class="nav-link-text">{{__('Sub Accounts')}}</span>
              </a>
            </li>
          </ul>
          <h6 class="navbar-heading p-0 text-muted">{{__('Collect Payments')}}</h6>
          <ul class="navbar-nav mb-3">
            @if($set->store==1)
            <li class="nav-item">
              <a class="nav-link @if(route('user.product')==url()->current()) active @endif" href="{{route('user.product')}}">
                <i class="fal fa-shopping-bag"></i>
                <span class="nav-link-text">{{__('Products')}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(route('user.storefront')==url()->current()) active @endif" href="{{route('user.storefront')}}">
                <i class="fal fa-store-alt"></i>
                <span class="nav-link-text">{{__('Store front')}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(route('user.list')==url()->current()) active @endif" href="{{route('user.list')}}">
                <i class="fal fa-shopping-cart"></i>
                <span class="nav-link-text">{{__('Orders')}}</span>
              </a>
            </li>
            @endif
            @if($set->request_money==1)
            <li class="nav-item">
              <a class="nav-link @if(route('user.request')==url()->current()) active @endif" href="{{route('user.request')}}">
                <i class="fal fa-handshake"></i>
                <span class="nav-link-text">{{__('Request Money')}}
                  @if(count($p_request)>0)
                    <span class="badge badge-sm badge-circle badge-floating badge-danger border-white">
                    {{count($p_request)}}
                    </span>
                  @endif
                </span>
              </a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link @if(route('user.sclinks')==url()->current() || route('user.dplinks')==url()->current()) active @endif" href="#navbar-examples3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples3">
                <!--For modern browsers-->
                <i class="fal fa-link"></i>
                <span class="nav-link-text">{{__('Payment Pages')}}</span>
              </a>
              <div class="collapse @if(route('user.sclinks')==url()->current() || route('user.dplinks')==url()->current()) show @endif" id="navbar-examples3">
                <ul class="nav nav-sm flex-column">
                  @if($set->single==1)
                  <li class="nav-item @if(route('user.sclinks')==url()->current()) active @endif text-default">
                    <a href="{{route('user.sclinks')}}" class="nav-link"><i class="fal fa-credit-card"></i>{{__('One-time Payment')}}</a>
                  </li>
                  @endif
                  @if($set->donation==1)
                  <li class="nav-item @if(route('user.dplinks')==url()->current()) active @endif text-default">
                    <a href="{{route('user.dplinks')}}" class="nav-link"><i class="fal fa-user"></i>{{__('Donation')}}</a>
                  </li>
                  @endif
                </ul>
              </div>
            </li>
            @if($set->invoice==1)
            <li class="nav-item">
              <a class="nav-link @if(route('user.invoice')==url()->current()) active @endif" href="{{route('user.invoice')}}">
                <i class="fal fa-envelope"></i>
                <span class="nav-link-text">{{__('Invoice')}}</span>
              </a>
            </li>
            @endif
            @if($set->subscription==1)
            <li class="nav-item">
              <a class="nav-link @if(route('user.plan')==url()->current()) active @endif" href="{{route('user.plan')}}">
                <i class="fal fa-layer-group"></i>
                <span class="nav-link-text">{{__('Plan')}}</span>
              </a>
            </li>
            @endif
            @if($set->merchant==1)
              <li class="nav-item">
                <a class="nav-link @if(route('user.merchant')==url()->current()) active @endif" href="{{route('user.merchant')}}">
                  <i class="fal fa-laptop"></i>
                  <span class="nav-link-text">{{__('Website Integration')}}</span>
                </a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav>
   <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->

          <!-- Navbar links -->

          <form class="navbar-search navbar-search-light form-inline mr-sm-3" action="{{route('search')}}" method="post" id="navbar-search-main">
            @csrf
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fal fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Transactions, payment references" name="search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true" class="text-dark">×</span>
            </button>
          </form>

          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

            <li class="nav-item d-sm-none">
                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                  <i class="fal fa-search text-dark"></i>
                </a>
              </li>

          </ul>
            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
              <li class="nav-item mr-2">
                <h6 class="h4 mb-0 text-gray font-weight-bolder">LEDGER BALANCE: <span class="text-default">{{$currency->symbol.number_format($user->balance)}}</span></h6>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-md rounded-circle">
                      <img alt="Image placeholder" src="{{url('/')}}/asset/profile/{{$cast}}">
                    </span>
                  </div>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fal fa-chevron-circle-down fa-lg text-dark"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="{{route('user.profile')}}" class="dropdown-item">
                    <i class="fal fa-user"></i>
                    <span>Profile</span>
                  </a>
                  <a href="{{route('user.api')}}" class="dropdown-item">
                    <i class="fal fa-key"></i>
                    <span>API Keys</span>
                  </a>
                  <a href="{{route('user.security')}}" class="dropdown-item">
                    <i class="fal fa-cogs"></i>
                    <span>Security</span>
                  </a>
                  <a href="{{route('user.bank')}}" class="dropdown-item">
                    <i class="fal fa-university"></i>
                    <span>Bank Accounts</span>
                  </a>
                  <a href="{{route('user.social')}}" class="dropdown-item">
                    <i class="fal fa-share-square"></i>
                    <span>Social Accounts</span>
                  </a>
                  <a href="{{route('user.ticket')}}" class="dropdown-item">
                    <i class="fal fa-ticket"></i>
                    <span>Support</span>
                  </a>
                  <a href="{{route('user.audit')}}" class="dropdown-item">
                    <i class="fal fa-history"></i>
                    <span>Audit Log</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{route('user.logout')}}" class="dropdown-item">
                    <i class="fal fa-sign-out"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
<!-- header end -->

@yield('content')


<!-- footer begin -->
      <footer class="footer pt-0">

      </footer>
    </div>
  </div>
  {!!$set->livechat!!}
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{url('/')}}/asset/dashboard/vendor/jquery/dist/jquery.min.js"></script>

  <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{url('/')}}/asset/dashboard/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/select2/dist/js/select2.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/nouislider/distribute/nouislider.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/quill/dist/quill.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- Argon JS -->
  <script src="{{url('/')}}/asset/dashboard/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{url('/')}}/asset/dashboard/js/demo.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/js/jquery.payment.js"></script>
  <!--<script src="{{url('/')}}/asset/js/sweetalert.js"></script>-->
  <script src="{{url('/')}}/asset/js/toast.js"></script>
  <script src="{{url('/')}}/asset/js/countries.js"></script>
  <script src="{{url('/')}}/asset/tinymce/tinymce.min.js"></script>
  <script src="{{url('/')}}/asset/tinymce/init-tinymce.js"></script>
</body>

</html>
@yield('script')
@if (session('success'))
    <script>
      "use strict";
      toastr.success("{{ session('success') }}");
    </script>
@endif

@if (session('alert'))
    <script>
      "use strict";
      toastr.warning("{{ session('alert') }}");
    </script>
@endif
<script>
  populateCountries("country", "state");
  populateIndustry("industry", "category");
</script>
<script>
"use strict"
function check(){
    if ($("#seeAnotherField").val() == "Registered Business") {
      $('#otherFieldDiv').show();
      $('#otherField').attr('required', '');
      $('#otherField').attr('data-error', 'This field is required.');
      $('#otherFieldDiv1').show();
      $('#otherField1').attr('required', '');
      $('#otherField1').attr('data-error', 'This field is required.');
      $('#otherFieldDiv2').show();
      $('#customFileLang').attr('required', '');
      $('#customFileLang').attr('data-error', 'This field is required.');
      $('#otherFieldDiv3').hide();
      $('#customFileLang').removeAttr('required');
      $('#customFileLang').removeAttr('data-error');
      $('#1otherField').removeAttr('required');
      $('#1otherField').removeAttr('data-error');
      $('#2otherField').removeAttr('required');
      $('#2otherField').removeAttr('data-error');
      $('#3otherField').removeAttr('required');
      $('#3otherField').removeAttr('data-error');
      $('#4otherField').removeAttr('required');
      $('#4otherField').removeAttr('data-error');
      $('#5otherField').removeAttr('required');
      $('#5otherField').removeAttr('data-error');
      $('#6otherField').removeAttr('required');
      $('#6otherField').removeAttr('data-error');
      $('#7otherField').removeAttr('required');
      $('#7otherField').removeAttr('data-error');
      $('#8otherField').removeAttr('required');
      $('#8otherField').removeAttr('data-error');
    } else {
      $('#otherFieldDiv').hide();
      $('#otherField').removeAttr('required');
      $('#otherField').removeAttr('data-error');
      $('#otherFieldDiv1').hide();
      $('#otherField1').removeAttr('required');
      $('#otherField1').removeAttr('data-error');
      $('#otherFieldDiv2').hide();
      $('#otherFieldDiv3').show();
      $('#1otherField').attr('required', '');
      $('#1otherField').attr('data-error', 'This field is required.');
      $('#2otherField').attr('required', '');
      $('#3otherField').attr('required', '');
      $('#3otherField').attr('data-error', 'This field is required.');
      $('#4otherField').attr('required', '');
      $('#4otherField').attr('data-error', 'This field is required.');
      $('#5otherField').attr('required', '');
      $('#5otherField').attr('data-error', 'This field is required.');
      $('#6otherField').attr('required', '');
      $('#6otherField').attr('data-error', 'This field is required.');
      $('#7otherField').attr('required', '');
      $('#7otherField').attr('data-error', 'This field is required.');
      $('#8otherField').attr('required', '');
      $('#8otherField').attr('data-error', 'This field is required.');

    }
}
$("#seeAnotherField").change(check);
  check();
</script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [<?php foreach($history as $val){ echo "'".date("M j",strtotime($val->updated_at))."'".','; }?>],
          datasets: [{
              label: 'Received',
              data: [<?php foreach($history as $val){ echo $val->amount.','; }?>],
              backgroundColor: [
                  'transparent'
              ],
              borderColor: [
                  '#1937e4'
              ],
              borderWidth: 1,
              pointBorderColor: 'rgba(0, 0, 0, 0.1)',
              pointBorderWidth:1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true,
                      fontColor: '#32325d',
                      fontFamily: "'Graphik'",
                      fontSize: "12"
                  }
              }],
              xAxes: [{
                  ticks: {
                      fontColor: '#32325d',
                      fontFamily: "'Graphik'",
                      fontSize: "12"
                  }
              }]
          },
        tooltips: {
          enabled:true,
          backgroundColor:'rgba(0, 0, 0, 0.8)'
        }
      }
    });
</script>
<script type="text/javascript">
  "use strict";
  function donex(){
    var xsp = $("#xxpay").find(":selected").val();
    if(xsp==1){
      $("#subaccount").show();
    }else if(xsp==0){
      $("#subaccount").hide();
      $("#flat_share").hide();
      $("#percent_share").hide();
    }
  }
  $("#xxpay").change(donex);
  donex();

  "use strict";
  function donep(){
    var spt = $("#spt").find(":selected").val();
    if(spt==1){
      $("#flat_share").show();
      $("#percent_share").hide();
    }else if(spt==2){
      $("#flat_share").hide();
      $("#percent_share").show();
    }
  }
  $("#spt").change(donep);
  donep();

  "use strict";
  function countryp(){
    var pcountry = $("#xcountry").find(":selected").val();
    if(pcountry){
      $(".xbank").hide();
      $("#cbank"+pcountry).show();
    }
  }
  $("#xcountry").change(countryp);
  countryp();

  "use strict";
  function cardcharge(){
    var amount = $("#cardamount").val();
    var charge = $("#charge").val();
    var survix =  (parseFloat(amount)*parseFloat(charge)/100)+parseFloat(amount);
    var cur = '{{$currency->name}}';
    if(isNaN(survix)){
      survix =0;
    }
    var ddd = cur+' '+survix;
    $("#cardresult").text(ddd);
  }
</script>
<script type="text/javascript">
  "use strict";
  function cryptocharge(){
    var amount = $("#amountcrypto").val();
    var charge = $("#chargecrypto").val();
    var survix =  (parseFloat(amount)*parseFloat(charge)/100)+parseFloat(amount);
    var cur = '{{$currency->name}}';
    if(isNaN(survix)){
      survix =0;
    }
    var ddd = cur+' '+survix;
    $("#resultcrypto").text(ddd);
  }
</script>
<script type="text/javascript">
  "use strict";
  function sellcrypto(){
    var amount = $("#amounttransfer").val();
    var charge = $("#chargetransfer").val();
    var rate = $("#ratetransfer").val();
    var survix =  (parseFloat(amount)*parseFloat(charge)/100)+parseFloat(amount);
    var gain =  parseFloat(amount)*parseFloat(rate);
    var cur = 'USD';
    if(isNaN(survix)){
      survix =0;
    }
    var curr = '{{$currency->name}}';
    if(isNaN(gain)){
      gain =0;
    }
    var ddd = cur+' '+survix;
    var fff = curr+' '+gain.toFixed(2);
    $("#gain").text(fff);
    $("#resulttransfer").text(ddd);
  }

  "use strict";
  function buycrypto(){
    var amount = $("#amounttransfer1").val();
    var charge = $("#chargetransfer1").val();
    var rate = $("#ratetransfer1").val();
    var survix =  (parseFloat(amount)*parseFloat(charge)/100)+parseFloat(amount);
    var gain =  parseFloat(amount)/parseFloat(rate);
    var cur = '{{$currency->name}}';
    if(isNaN(survix)){
      survix =0;
    }
    var curr = 'USD';
    if(isNaN(gain)){
      gain =0;
    }
    var ddd = cur+' '+survix;
    var fff = curr+' '+gain.toFixed(2);
    $("#gain1").text(fff);
    $("#resulttransfer1").text(ddd);
  }


  "use strict";
  function transfercharge(){
    var amount = $("#amounttransfer").val();
    var charge = $("#chargetransfer").val();
    var survix =  (parseFloat(amount)*parseFloat(charge)/100)+parseFloat(amount);
    var cur = '{{$currency->name}}';
    if(isNaN(survix)){
      survix =0;
    }
    var ddd = cur+' '+survix;
    $("#resulttransfer").text(ddd);
  }
  "use strict";
  function databundle(){
    var biller = $("#biller").find(":selected").text();
    var myarr = biller.split("-");
    var amount = myarr[1].split("<");
    var charge = $("#chargetransfer").val();
    var survix =  (parseFloat(amount)*parseFloat(charge)/100)+parseFloat(amount);
    var cur = '{{$currency->name}}';
    if(isNaN(survix)){
      survix =0;
    }
    var ddd = cur+' '+survix;
    $("#resulttransfer").text(ddd);
    $("#real").val(amount);
  }
  $("#biller").change(databundle);
  databundle();
</script>
