
@extends('userlayout')

@section('content')
<style>

    #transferSection .avatar {
        width:100%;
        height:auto;
    }
    .header {
        padding-bottom:0px!important;
    }
    .transfer-to{
        text-align: center;
        color: #fff;
        margin: 0;
    }
    .transfer-to .transfer-to-type{
        background-color: #5e72e4;
        padding: 15px;
        border-radius: 4px;
        color: #fff;
    }
    .transfer-to .transfer-to-type h4{
        color: #fff;
    }
    .transfer-to .transfer-to-type .fas{
        font-size: 4rem;
    }
    .col-md-4 .card .card-body a, .col-md-4 .card .card-body a:hover{
        outline: none;
        background: none;
        background-color: white;
        border: none;
    }
</style>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(https://pay1way.com/asset/images/ecommerce-2607114_1280.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-1"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-12 col-7">
        <h1 class="display-2 text-white">Make a transfer</h1>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<section id="transferSection">
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="" class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/payroll.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="">Hr Payrol – cash out </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#" type="button"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/E-commerce Suppliers.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" type="button" >E-commerce Suppliers pay out</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#" type="button"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/Repeated.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" type="button" >Repeated Cash – out </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#" type="button"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/Retail Suppliers.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" type="button" >Retail Suppliers Pay out</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#" type="button"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/FMCG.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" type="button" >FMCG Suppliers Pay out </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#" type="button"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/Industries.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" type="button" >Industries Pay out </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#" type="button"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/Affiliate.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" type="button" >Affiliate programs cash out </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/gaming.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" >Gaming & Prizes cash out </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#"  class="avatar ">
                                        <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/Travel & Tourism.png">
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#" >Travel & Tourism </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Avatar -->
                                    <a href="#"  class="avatar ">
                                        <i class="fas fa-pump-medical fa-4x" style="color: #172b4d;"></i>
                                    </a>
                                </div>
                                <div class="col-8  p-0">
                                    <h4 class="mb-0">
                                        <a href="#">Medical </a>
                                    </h4>
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
