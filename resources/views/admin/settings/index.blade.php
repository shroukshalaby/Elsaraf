@extends('master')
    @section('content')
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h3 class="mb-0">{{__('Congifure website')}}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.settings.update')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Website name')}}</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="site_name" maxlength="200" value="{{$set->site_name}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Company email')}}</label>
                                    <div class="col-lg-10">
                                        <input type="email" name="email" value="{{$set->email}}" class="form-control" required>
                                    </div>
                                </div>                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Support email')}}</label>
                                    <div class="col-lg-10">
                                        <input type="email" name="support_email" value="{{$set->support_email}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Mobile')}}</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" name="mobile" max-length="14" value="{{$set->mobile}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Website title')}}</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="title" max-length="200" value="{{$set->title}}" class="form-control" required>
                                    </div>
                                </div>                                  
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Short description')}}</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" name="site_desc" rows="4" class="form-control" required>{{$set->site_desc}}</textarea>
                                    </div>
                                </div>                           
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Livechat code')}}</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" name="livechat" class="form-control">{{$set->livechat}}</textarea>
                                    </div>
                                </div>           
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success btn-sm">{{__('Save Changes')}}</button>
                                    </div>
                            </form>
                        </div>
                    </div>    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">{{__('Settlement')}}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.settlement.update')}}" method="post">
                                @csrf                    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Duration')}}</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="duration" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="{{$set->duration}}" id="duration" class="form-control" placeholder="1" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Period')}}</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select" name="period" id="period" data-fouc required>    
                                            <option value="Day" 
                                                @if($set->period=='Day')
                                                {{__('selected')}}
                                                @endif
                                                >{{__('Day')}}
                                            </option>                                         
                                            <option value="Week" 
                                                @if($set->period=='Week')
                                                {{__('selected')}}
                                                @endif
                                                >{{__('Week')}}
                                            </option>                                         
                                            <option value="Month" 
                                                @if($set->period=='Month')
                                                {{__('selected')}}
                                                @endif
                                                >{{__('Month')}}
                                            </option>                                         
                                            <option value="Year" 
                                                @if($set->period=='Year')
                                                {{__('selected')}}
                                                @endif
                                                >{{__('Year')}}
                                            </option>                                       
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Next Settlement')}}</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly value='{{date("Y/m/d", strtotime($set->next_settlement))}}' class="form-control">
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Withdraw charge')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="number" name="withdraw_charge" value="{{$set->withdraw_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>      
                                </div>                                 
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Withdraw Limit')}} (Unverified) <span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="withdraw_limit" value="{{$set->withdraw_limit}}" class="form-control" required>
                                        </div>
                                        <span class="text-gray text-xs">For unverified businesses</span>
                                    </div>      
                                </div>                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Withdraw Limit')}} (Starter) <span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="starter_limit" value="{{$set->starter_limit}}" class="form-control" required>
                                        </div>
                                        <span class="text-gray text-xs">For starter businesses</span>
                                    </div>      
                                </div>      
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>    
                    <!--                      
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">{{__('Cryptocurrency')}}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.crypto.update')}}" method="post">
                                @csrf                    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Btc wallet address')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">#</span>
                                            </span>
                                            <input type="text" name="btc_wallet" value="{{$set->btc_wallet}}" class="form-control">
                                        </div>
                                    </div> 
                                </div> 
                                <div class="form-group row">                                                                                  
                                    <label class="col-form-label col-lg-2">{{__('Eth wallet address')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">#</span>
                                            </span>
                                            <input type="text" name="eth_wallet" value="{{$set->eth_wallet}}" class="form-control">
                                        </div>
                                    </div>           
                                </div> 
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Btc sell rate')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="btc_sell" step="any" max-length="10" value="{{convertFloat($set->btc_sell)}}" class="form-control">
                                        </div>
                                    </div>                                                                                   
                                    <label class="col-form-label col-lg-2">{{__('Btc buy rate ')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="btc_buy" step="any" max-length="10" value="{{convertFloat($set->btc_buy)}}" class="form-control">
                                        </div>
                                    </div>                                                                                   
                                    <label class="col-form-label col-lg-2">{{__('Eth sell rate')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="eth_sell" step="any" max-length="10" value="{{convertFloat($set->eth_sell)}}" class="form-control">
                                        </div>
                                    </div>                                                                                   
                                    <label class="col-form-label col-lg-2">{{__('Eth buy rate')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="eth_buy" step="any" max-length="10" value="{{convertFloat($set->eth_buy)}}" class="form-control">
                                        </div>
                                    </div>                                                                                                                                                                     
                                    <label class="col-form-label col-lg-2">{{__('Minimum bitcoin sell rate')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </span>
                                            <input type="number" name="min_btcsell" step="any" max-length="10" value="{{convertFloat($set->min_btcsell)}}" class="form-control">
                                        </div>
                                    </div>                                                                                   
                                    <label class="col-form-label col-lg-2">{{__('Minimum bitcoin buy rate ')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </span>
                                            <input type="number" name="min_btcbuy" step="any" max-length="10" value="{{convertFloat($set->min_btcbuy)}}" class="form-control">
                                        </div>
                                    </div>                                                                                   
                                    <label class="col-form-label col-lg-2">{{__('Minimum ethereum sell rate')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </span>
                                            <input type="number" name="min_ethsell" step="any" max-length="10" value="{{convertFloat($set->min_ethsell)}}" class="form-control">
                                        </div>
                                    </div>                                                                                   
                                    <label class="col-form-label col-lg-2">{{__('Minimum ethereum buy rate')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </span>
                                            <input type="number" name="min_ethbuy" step="any" max-length="10" value="{{convertFloat($set->min_ethbuy)}}" class="form-control">
                                        </div>
                                    </div>   
                                </div>        
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                    -->                  
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">{{__('Features')}}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.features.update')}}" method="post">
                                @csrf   
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->email_verification==1)
                                                <input type="checkbox" name="email_activation" id="customCheckLogin2" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="email_activation"id="customCheckLogin2"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin2">
                                            <span class="text-muted">{{__('Email verification')}}</span>     
                                            </label>
                                        </div>                       
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->email_notify==1)
                                                <input type="checkbox" name="email_notify" id="customCheckLogin3" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="email_notify"id="customCheckLogin3"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin3">
                                            <span class="text-muted">{{__('Email notify')}}</span>     
                                            </label>
                                        </div>  
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->registration==1)
                                                <input type="checkbox" name="registration" id="customCheckLogin4" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="registration"id="customCheckLogin4"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin4">
                                            <span class="text-muted">{{__('Registration')}}</span>     
                                            </label>
                                        </div>                                    
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->subscription==1)
                                                <input type="checkbox" name="subscription" id="customCheckLogin13" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="subscription"id="customCheckLogin13"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin13">
                                            <span class="text-muted">{{__('Subscription')}}</span>     
                                            </label>
                                        </div>                                                                                                                                                                                           
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->recaptcha==1)
                                                <input type="checkbox" name="recaptcha" id="customCheckLogin6" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="recaptcha"id="customCheckLogin6"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin6">
                                            <span class="text-muted">{{__('Recaptcha')}}</span>     
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->merchant==1)
                                                <input type="checkbox" name="merchant" id="customCheckLogin7" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="merchant" id="customCheckLogin7"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin7">
                                            <span class="text-muted">{{__('Merchant')}}</span>     
                                            </label>
                                        </div>                                        
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->transfer==1)
                                                <input type="checkbox" name="transfer" id="customCheckLogin8" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="transfer" id="customCheckLogin8"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin8">
                                            <span class="text-muted">{{__('Transfer')}}</span>     
                                            </label>
                                        </div>                                        
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->request_money==1)
                                                <input type="checkbox" name="request_money" id="customCheckLogin9" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="request_money" id="customCheckLogin9"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin8">
                                            <span class="text-muted">{{__('Request Money')}}</span>     
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->bitcoin==1)
                                                <input type="checkbox" name="bitcoin" id="customCheckLogin22" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="bitcoin" id="customCheckLogin22"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin22">
                                            <span class="text-muted">{{__('Bitcoin')}}</span>     
                                            </label>
                                        </div>                                        
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->ethereum==1)
                                                <input type="checkbox" name="ethereum" id="customCheckLogin23" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="ethereum" id="customCheckLogin23"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin23">
                                            <span class="text-muted">{{__('Ethereum')}}</span>     
                                            </label>
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-4">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->invoice==1)
                                                <input type="checkbox" name="invoice" id="customCheckLogin10" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="invoice" id="customCheckLogin10"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin10">
                                            <span class="text-muted">{{__('Invoice')}}</span>     
                                            </label>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->store==1)
                                                <input type="checkbox" name="store" id="customCheckLogin10" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="store" id="customCheckLogin10"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin10">
                                            <span class="text-muted">{{__('Store')}}</span>     
                                            </label>
                                        </div>                                        
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->donation==1)
                                                <input type="checkbox" name="donation" id="customCheckLogin11" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="donation" id="customCheckLogin11"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin11">
                                            <span class="text-muted">{{__('Donation')}}</span>     
                                            </label>
                                        </div>                                        
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->single==1)
                                                <input type="checkbox" name="single" id="customCheckLogin12" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="single" id="customCheckLogin12"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin12">
                                            <span class="text-muted">{{__('Single Charge')}}</span>     
                                            </label>
                                        </div>                                        
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->bill==1)
                                                <input type="checkbox" name="bill" id="customCheckLogin20" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="bill" id="customCheckLogin20"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin20">
                                            <span class="text-muted">{{__('Bill Payment')}}</span>     
                                            </label>
                                        </div>                                        
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            @if($set->vcard==1)
                                                <input type="checkbox" name="vcard" id="customCheckLogin21" class="custom-control-input" value="1" checked>
                                            @else
                                                <input type="checkbox" name="vcard" id="customCheckLogin21"  class="custom-control-input" value="1">
                                            @endif
                                            <label class="custom-control-label" for="customCheckLogin21">
                                            <span class="text-muted">{{__('Virtual Card')}}</span>     
                                            </label>
                                        </div>                                        
                                    </div>
                                </div>         
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success btn-sm">{{__('Save Changes')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>                   
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">{{__('Charges')}}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.charges.update')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">{{__('Transfer/Request')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="transfer_charge" value="{{$set->transfer_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                                                                                                                                                                                                                       
                                    <label class="col-form-label col-lg-2">{{__('Merchant')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="merchant_charge" value="{{$set->merchant_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                              
                                    <label class="col-form-label col-lg-2">{{__('Invoice')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="invoice_charge" value="{{$set->invoice_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                            
                                    <label class="col-form-label col-lg-2">{{__('Product Order')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="product_charge" max-length="10" value="{{$set->product_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                                    
                                    <label class="col-form-label col-lg-2">{{__('Single Charge')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="single_charge" max-length="10" value="{{$set->single_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                                    
                                    <label class="col-form-label col-lg-2">{{__('Donation')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="donation_charge" max-length="10" value="{{$set->donation_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                                    
                                    <label class="col-form-label col-lg-2">{{__('Subscription')}} <span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="subscription_charge" max-length="10" value="{{$set->subscription_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>  
 
                                    <label class="col-form-label col-lg-2">{{__('Balance on Signup ')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="bal" value="{{$set->balance_reg}}" class="form-control" required>
                                        </div>
                                    </div>                                    
                                    <label class="col-form-label col-lg-2">{{__('Minimum Transfer')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="min_transfer" value="{{$set->min_transfer}}" class="form-control" required>
                                        </div>
                                    </div>                                      
                                    <label class="col-form-label col-lg-2">{{__('Bill')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="bill_charge" value="{{$set->bill_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                                      
                                    <label class="col-form-label col-lg-2">{{__('VC creation charge')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="virtual_createcharge" value="{{$set->virtual_createcharge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div>                                     
                                    <label class="col-form-label col-lg-2">{{__('VC charge')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="number" name="virtual_charge" value="{{$set->virtual_charge}}" class="form-control" required>
                                            <span class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </span>
                                        </div>
                                    </div> 
                                    <label class="col-form-label col-lg-2">{{__('VC Minimum')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="vc_min" value="{{$set->vc_min}}" class="form-control" required>
                                        </div>
                                    </div>                                     
                                    <label class="col-form-label col-lg-2">{{__('VC Maximum')}}<span class="text-danger">*</span></label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text">{{$currency->symbol}}</span>
                                            </span>
                                            <input type="number" name="vc_max" value="{{$set->vc_max}}" class="form-control" required>
                                        </div>
                                    </div>                                                                                                                                                                                                                                                     
                                    </div>                          
                                                   
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success btn-sm">{{__('Save Changes')}}</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">{{__('Security')}}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.account.update')}}" method="post">
                                @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">{{__('Username')}}</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="username" value="{{$val->username}}" class="form-control">
                                        </div>
                                    </div>                         
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">{{__('Password')}}</label>
                                        <div class="col-lg-10">
                                            <input type="password" name="password"  class="form-control" required>
                                        </div>
                                    </div>          
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>    
            </div>
    </div>
@stop