@extends('userlayout')

@section('content')
<style>
#cardsSection .card {
    height: 200px;
}
#cardsSection .card h5{
    color: #fff;
}
   </style>
  <section id="cardsSection">

<div class="container-fluid mt--6">
  <div class="content-wrapper">
    <div class="row mx-auto">
        <div class="col-md-4">
            <div class="card bg-gradient-default">
                <div class="card-body">
                    <h5 class="text-white mb-3 h4">{{__('Revenue')}}</h5>
                    <h5 class="mb-1 h2">{{$currency->name}} {{number_format($revenue)}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-gradient-default">
                <div class="card-body">
                    <h5 class="text-white mb-3 h4">{{__('Total Payout')}}</h5>
                    <h5 class="mb-1 h2">{{$currency->name}} {{number_format($t_payout)}}</h5>
                    @if($user->business_level==1)
                    <p class="text-white mb-3">{{number_format($t_payout/$set->withdraw_limit*100, 2, '.', '')}}% of limit</p>
                    @if($user->kyc_status==0)
                    <a href="{{route('user.compliance')}}" class="btn btn-sm btn-neutral text-white">{{__('Upgrade')}}</a>
                    @endif
                    @elseif($user->business_level==2)
                    <p class="text-white mb-3">{{number_format($t_payout/$set->starter_limit*100, 2, '.', '')}}% of limit</p>
                    @if($user->kyc_status==0)
                    <a href="{{route('user.compliance')}}" class="btn btn-sm btn-neutral text-white">{{__('Upgrade')}}</a>
                    @endif
                    @elseif($user->business_level==3)
                    <p class="text-white mb-3">No limit</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-gradient-default">
                <div class="card-body">
                    <h5 class="text-white mb-3 h4">{{__('Next Payout')}}</h5>
                    <h5 class="mb-2 h2">{{$currency->name}} {{number_format($n_payout)}}</h5>
                    <p class="text-white mb-3">Due {{date("Y/m/d", strtotime($set->next_settlement))}}</p>
                    <a href="{{route('user.withdraw')}}" class="btn btn-sm btn-neutral text-white">{{__('View Past Payouts')}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-gradient-default">
            <div class="card-body">
                <h5 class="text-white mb-3 h4">Transfer stats</h5>
                <h5 class="mb-2">Total number of annual transfers: 2000 </h5>
                <h5 class="mb-2">The total number of monthly transfers: 1000  </h5>
                <h5 class="mb-2">The total number of daily transfers: 500 </h5>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-gradient-default">
            <div class="card-body">
                <h5 class="text-white mb-3 h4">Statistics of Transfer methods</h5>
                <h5 class="mb-2">1: Total transfer of smart cards </h5>
                <h5 class="mb-2">2: Total transfer to the wallets </h5>
                <h5 class="mb-2">3: Total transfer to the national number </h5>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-gradient-default">
            <div class="card-body">
                <h5 class="text-white mb-3 h4">Individuals statistics </h5>
                <h5 class="mb-2">Total individuals within the network: 2000 </h5>
                <h5 class="mb-2">Total approved individuals: 1000 </h5>
                <h5 class="mb-2">Total pending individuals: 100  </h5>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-gradient-default">
            <div class="card-body">
                <h5 class="text-white mb-3 h4">Statistics of transfer results </h5>
                <h5 class="mb-2">1: Accepted transfers </h5>
                <h5 class="mb-2">2: Refused transfers </h5>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12 mb-2">
            <div class="">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-6">
                    <h5 class="surtitle mb-1 font-weight-bolder">{{__('Earning log')}}</h5>
                    <h5 class="h4 text-primary">{{__('Progress')}}</h5>
                  </div>
                </div>
              </div>

              <div class="card-body">
                @if(count($history)>0)
                <canvas id="myChart" width="400" height="200"></canvas>
                @else
                  <div class="text-center mb-5 mt-8">
                    <div class="mb-3">
                      <img src="{{url('/')}}/asset/images/empty.svg">
                    </div>
                    <h3 class="text-dark">No Earning History</h3>
                    <p class="text-dark text-sm card-text">We couldn't find any earning log to this account</p>
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <h4 class="font-weight-bolder">{{__('API Documentation')}}</h4>
                <p class="text-gray mb-1">Our documentation contains what you need to integrate {{$set->site_name}} in your website.</p>
                <a href="{{route('user.merchant-documentation')}}" class="btn btn-sm btn-neutral mb-3">{{__('Go to Docs')}}</a>
              </div>
              <div class="col-lg-6">
                <h4 class="mb-2 font-weight-bolder">{{__('Your Keys')}}</h4>
                <div class="mb-3">
                  <span class="text-gray mb-3">Also available in</span> <a href="{{route('user.api')}}">Settings > API Keys</a>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-xs text-uppercase">{{__('Public key')}}</span>
                      </div>
                      <input type="text" name="public_key" class="form-control" placeholder="Public key" value="{{$user->public_key}}">
                      <div class="input-group-prepend bg-gray">
                        <span class="input-group-text btn-icon-clipboard" data-clipboard-text="{{$user->public_key}}" title="Copy"><i class="fal fa-clipboard"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-xs text-uppercase">{{__('Secret key')}}</span>
                      </div>
                      <input type="text" name="secret_key" class="form-control" placeholder="Secret key" value="{{$user->secret_key}}">
                      <div class="input-group-prepend bg-gray">
                        <span class="input-group-text btn-icon-clipboard" data-clipboard-text="{{$user->secret_key}}" title="Copy"><i class="fal fa-clipboard"></i></span>
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

</section>

    @stop
