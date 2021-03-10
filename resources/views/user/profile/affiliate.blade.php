@extends('userlayout')

@section('content')
<style>
     .header {
        padding-bottom:0px!important;
    }
    .fa-instagram{
        background:transparent;
    }
    .btn-linkedin {
    color: #ffffff !important;
    background-color: #007bb6;
}
</style>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url('https://pay1way.com/asset/images/entrepreneur-593371_1280.jpg'); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-3"></span>
    <!-- Header container -->
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h1 class="display-2 text-white">Affiliate System</h1>
          </div>
        </div>
        <div class="row text-center">
            <div class="col-12 pt-4">
                <h1 id="text_element" class="text-white" >http://e4cut.com/</h1>
                <button class="btn btn-primary" onclick="copyToClipboard('text_element')"> Copy URL</button>
            </div>
            <div class="col-sm-12 pt-3">
                <div class="button-list">
                            <button type="button" class="btn btn-facebook m-b-10 m-l-10 waves-effect waves-light">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-twitter m-b-10 m-l-10 waves-effect waves-light">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-linkedin m-b-10 m-l-10 waves-effect waves-light">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                            <button type="button" class="btn btn-instagram m-b-10 m-l-10 waves-effect waves-light">
                                <i class="fab fa-instagram"></i>
                            </button>
                            <button type="button" class="btn btn-pinterest btn-round m-b-10 m-l-10 waves-effect waves-light">
                                <i class="fab fa-pinterest-p"></i>
                            </button>
                            <button type="button" class="btn btn-instagram btn-round m-b-10 m-l-10 waves-effect waves-light">
                                <i class="far fa-envelope"></i>
                            </button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<section id="affiliateSection">
    <div class="container-fluid mt--6">

               <div class="row">
             <div class="col-md-3 col-12">
                 <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <a href="" class="avatar ">
                                    <img alt="Image placeholder" src="https://www.pay1way.com/asset/images/payroll.png">
                                </a>
                            </div>
                            <div class="col-8  p-0">
                                <h4>
                                  Total Vendors
                                </h4>
                                <h4 class="mb-0">34578</h4>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
             <div class="col-md-3 col-12">
                <div class="card">
                   <div class="card-body">
                       <div class="row align-items-center">
                           <div class="col-4">
                               <a href="" class="avatar ">
                                   <i class="fa fa-coins fa-2x" style="color: #172b4d;"></i>
                               </a>
                           </div>
                           <div class="col-8  p-0">
                               <h4>
                                  Total Earnings
                               </h4>
                               <h4 class="mb-0">895</h4>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="card">
                   <div class="card-body">
                       <div class="row align-items-center">
                           <div class="col-4">
                               <a href="" class="avatar ">
                                <i class="fa fa-money-check-alt fa-2x" style="color: #172b4d;"></i>
                            </a>
                           </div>
                           <div class="col-8  p-0">
                               <h4>
                                  Total Withdraw
                               </h4>
                               <h4 class="mb-0">52410</h4>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="card">
                   <div class="card-body">
                       <div class="row align-items-center">
                           <div class="col-4">
                               <a href="" class="avatar ">
                                <i class="fa fa-exclamation-circle fa-2x" style="color: #172b4d;"></i>
                            </a>
                           </div>
                           <div class="col-8  p-0">
                               <h4>
                                   Transactions of today
                               </h4>
                               <h4 class="mb-0">452</h4>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
         </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <button type="button" class="btn mb-4 py-2 px-5 btn-secondary buttons-copy buttons-html5 btn-sm btn-default">Withdraw Request</button>
            </div>
        </div>
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-body">

                         <h4>Vendor transaction history </h4>
                         <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="form-group mt-3 col-md-6">
                                        <h4>Start date</h4>
                                        <input type="text" placeholder="dd/mm/yyyy" data-mask="99/99/9999" class="form-control">
                                    </div>
                                    <div class="form-group mt-3 col-md-6">
                                        <h4>End date</h4>
                                        <input type="text" placeholder="dd/mm/yyyy" data-mask="99/99/9999" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                         <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                             <thead>
                             <tr>
                                 <th><h6 class="mb-0">Transaction id </h6></th>
                                 <th><h6 class="mb-0">Verndor's name</h6></th>
                                 <th><h6 class="mb-0">Amount</h6></th>
                                 <th><h6 class="mb-0">Payment method</h6></th>
                                 <th><h6 class="mb-0">Total profit </h6></th>
                                 <th><h6 class="mb-0">Transaction's date</h6></th>

                             </tr>
                             </thead>
                             <tbody>
                             <tr>
                                 <td>Tiger Nixon</td>
                                 <td>System Architect</td>
                                 <td>Edinburgh</td>
                                 <td>61</td>
                                 <td>61</td>
                                 <td>2011/04/25</td>
                             </tr>
                             </tbody>
                         </table>

                     </div>
                 </div>
             </div> <!-- end col -->
         </div> <!-- end row -->

     </div>

</section>

@stop
@push('scripts')
<script src="https://old.elsaraf.com/dashboard2/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>

 function copyToClipboard(elementId) {

// Create an auxiliary hidden input
var aux = document.createElement("input");

// Get the text from the element passed into the input
aux.setAttribute("value", document.getElementById(elementId).innerHTML);

// Append the aux input to the body
document.body.appendChild(aux);

// Highlight the content
aux.select();

// Execute the copy command
document.execCommand("copy");

// Remove the input from the body
document.body.removeChild(aux);

}
</script>
@endpush
