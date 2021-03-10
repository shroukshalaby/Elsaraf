<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//auth('admin')->loginUsingId(1);
// auth('user')->loginUsingId(41);
//dd(auth('user')->user());
//Route::get('admin', 'Auth\AdminController@adminlogin')->name('admin.loginForm');
//Route::post('admin', 'Auth\AdminController@submitadminlogin')->name('admin.login');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');


Route::view('/bankAgentRequests','bankAgent.requests');
Route::view('/bankAgentDashboard','bankAgent.dashboard');

Route::get('/site/down',function (){
    \Illuminate\Support\Facades\Artisan::call('down');
});
Route::get('/site/up',function (){
    \Illuminate\Support\Facades\Artisan::call('up');
});


Route::group(["namespace" => "\\App\\Http\\Controllers\\"]    , function() {


//Fund account IPN
    Route::get('lang/{locale}', 'LocalizationController@index');
    Route::get('ipncoinpaybtc', 'PaymentController@ipnCoinPayBtc')->name('ipn.coinPay.btc');
    Route::get('ipncoinpayeth', 'PaymentController@ipnCoinPayEth')->name('ipn.coinPay.eth');
    Route::get('ipnflutter', 'PaymentController@flutterIPN')->name('ipn.flutter');
    Route::get('ipnpaystack', 'PaymentController@paystackIPN')->name('ipn.paystack');
    Route::get('ipnpaypal', 'PaymentController@ipnpaypal')->name('ipn.paypal');
    Route::get('ipnvirtual', 'PaymentController@ipnVirtual')->name('ipn.virtual');
    Route::get('cart', 'UserController@cart')->name('cart');
    Route::get('delete-cart/{id}', 'UserController@deletecart')->name('delete.cart');
    Route::post('ext_transfer', 'UserController@submitpay')->name('submit.pay');
    Route::post('update-cart', 'UserController@updatecart')->name('update.cart');
    Route::get('single-charge/{id}', 'UserController@scviewlink')->name('scview.link');
    Route::get('store/{id}', 'UserController@storelink')->name('store.link');
    Route::get('product/{store}/{product}', 'UserController@productlink')->name('sproduct.link');
    Route::get('donation/{id}', 'UserController@dpviewlink')->name('dpview.link');
    Route::post('pay-single', 'UserController@Sendsingle')->name('send.single');
    Route::post('pay-donation', 'UserController@Senddonation')->name('send.donation');
    Route::get('subscription/{id}', 'UserController@subviewlink')->name('subview.link');
    Route::post('plan_charge', 'UserController@submitplancharge')->name('submit.plancharge');
    Route::get('invoice/{id}', 'UserController@Viewinvoice')->name('view.invoice');
    Route::post('pay-invoice', 'UserController@Processinvoice')->name('process.invoice');
    Route::get('xpay/{id}/{xx}', 'UserController@transferprocess')->name('transfer.process');
    Route::post('submit_merchant', 'UserController@Paymerchant')->name('pay.merchant');
    Route::get('buy-product/{id}', 'UserController@buyproduct')->name('product.link');
    Route::get('checkout/{id}', 'UserController@checkout')->name('checkout');
    Route::get('ask/{id}', 'UserController@ask')->name('user.ask');
    Route::get('card/{id}', 'UserController@cardpay')->name('user.cardpay');
    Route::get('account/{id}', 'UserController@accountpay')->name('user.accountpay');
    Route::get('sask/{id}', 'UserController@sask')->name('user.sask');
    Route::get('scard/{id}', 'UserController@scardpay')->name('user.scardpay');
    Route::get('saccount/{id}', 'UserController@saccountpay')->name('user.saccountpay');
    Route::post('buyproduct', 'UserController@acquireproduct')->name('pay.product');
    Route::post('checkoutproduct', 'UserController@checkproduct')->name('check.product');
    Route::get('error', 'UserController@transfererror')->name('transfererror');
    Route::post('use-virtual', 'UserController@useVirtual')->name('use.virtual');
    Route::get('verify-payment', 'UserController@Verifypayment');
    Route::get('contact', 'UserController@contact')->name('contact');
    Route::get('faq', 'UserController@faq')->name('faq');

// Front end routes
    Route::get('/', 'FrontendController@index')->name('home');
    Route::get('/faq', 'FrontendController@faq')->name('faq');
    Route::get('/about', 'FrontendController@about')->name('about');
    Route::get('/blog', 'FrontendController@blog')->name('blog');
    Route::get('/terms', 'FrontendController@terms')->name('terms');
    Route::get('/privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('/page/{id}', 'FrontendController@page');
    Route::get('/single/{id}/{slug}', 'FrontendController@article');
    Route::get('/cat/{id}/{slug}', 'FrontendController@category');
    Route::get('/contact', 'FrontendController@contact')->name('contact');
    Route::post('/contact', ['uses' => 'FrontendController@contactSubmit', 'as' => 'contact-submit']);
    Route::post('/about', 'FrontendController@subscribe')->name('subscribe');

//    Route::post('login', 'Auth\LoginController@submitlogin')->name('submitlogin');
//    Route::get('login', 'Auth\LoginController@login')->name('login');
//    Route::post('2fa', 'Auth\faController@submitfa')->name('submitfa');
//    Route::get('2fa', 'Auth\faController@faverify')->name('2fa');
    Route::post('register', 'Auth\RegisterController@submitregister')->name('submitregister');
    Route::get('register', 'Auth\RegisterController@register')->name('register');
    Route::get('/forget', 'UserController@forget')->name('forget');
    Route::get('/r_pass', 'UserController@r_pass')->name('r_pass');
    Route::group(['prefix' => 'user', ], function () {
        Route::get('blocked', 'UserController@blocked')->name('user.blocked');
        Route::get('authorization', 'UserController@authCheck')->name('user.authorization');
        Route::post('verification', 'UserController@sendVcode')->name('user.send-vcode');
        Route::post('smsVerify', 'UserController@smsVerify')->name('user.sms-verify');
        Route::get('verify-email', 'UserController@sendEmailVcode')->name('user.send-emailVcode');
        Route::post('postEmailVerify', 'UserController@postEmailVerify')->name('user.email-verify');
        Route::group(['middleware'=>'auth:user'], function() {
            Route::middleware(['Blocked', 'CheckStatus', 'Tfa'])->group(function () {
                Route::middleware(['Banks'])->group(function () {
                    Route::post('card', 'UserController@card')->name('card');
                    Route::post('flutter', 'UserController@newflutter')->name('flutter');
                    Route::post('search', 'UserController@search')->name('search');
                    Route::post('crypto', 'UserController@crypto')->name('crypto');
                    Route::post('others', 'UserController@others')->name('others');
                    Route::get('others', 'UserController@dashboard')->name('others');
                    Route::get('dashboard', 'UserController@dashboard')->name('user.dashboard');
                    Route::get('single-charge', 'UserController@transactions')->name('user.transactionssc');
                    Route::get('donation', 'UserController@transactions')->name('user.transactionsd');
                    Route::get('invoice-log', 'UserController@transactions')->name('user.invoicelog');
                    Route::get('deposit-log', 'UserController@transactions')->name('user.depositlog');
                    Route::get('bank-transfer', 'UserController@transactions')->name('user.banktransfer');
                    Route::get('transactions', 'UserController@transactions')->name('user.transactions');
                    Route::get('subaccounts', 'UserController@subaccounts')->name('user.subaccounts');
                    Route::get('new-subaccounts', 'UserController@newsubaccount')->name('user.new.subaccount');
                    Route::get('charges', 'UserController@charges')->name('user.charges');
                    Route::post('withdraw-update', 'UserController@withdrawupdate');
                    Route::get('profile', 'UserController@profile')->name('user.profile');
                    Route::get('security', 'UserController@profile')->name('user.security');
                    Route::get('social', 'UserController@profile')->name('user.social');
                    Route::get('api', 'UserController@profile')->name('user.api');
                    Route::get('compliance', 'UserController@profile')->name('user.compliance');
                    Route::post('compliance', 'UserController@submitcompliance')->name('submit.compliance');
                    Route::post('generate-api', 'UserController@generateapi')->name('generateapi');
                    Route::post('kyc', 'UserController@kyc');
                    Route::post('account', 'UserController@account');
                    Route::post('social', 'UserController@social')->name('user.social');
                    Route::post('avatar', 'UserController@avatar');
                    Route::post('delaccount', 'UserController@delaccount')->name('delaccount');
                    Route::get('deposit-verify/{id}', 'UserController@userDataUpdate')->name('deposit.verify');
                    Route::get('flutter-deposit-verify/{id}', 'UserController@userDataUpdateFlutter')->name('flutter.deposit.verify');

                    //Bitcoin
                    Route::get('btc', 'UserController@btc')->name('user.btc');
                    Route::post('sell-btc', 'UserController@Sellbtc')->name('user.sell.btc');
                    Route::post('buy-btc', 'UserController@Buybtc')->name('user.buy.btc');
                    //End

                    //Ethereum
                    Route::get('eth', 'UserController@eth')->name('user.eth');
                    Route::post('sell_eth', 'UserController@Selleth')->name('user.sell.eth');
                    Route::post('buy_eth', 'UserController@Buyeth')->name('user.buy.eth');
                    //End

                    //Virtual Cards
                    Route::get('virtual-card', 'UserController@virtualcard')->name('user.virtualcard');
                    Route::post('create-virtual', 'UserController@createVirtual')->name('create.virtual');
                    Route::post('fund-virtual', 'UserController@fundVirtual')->name('fund.virtual');
                    Route::get('terminate-virtual/{id}', 'UserController@terminateVirtual')->name('terminate.virtual');
                    Route::get('transactions-virtual/{id}', 'UserController@transactionsVirtual')->name('transactions.virtual');
                    //End
                    //Bill
                    Route::get('bill', 'UserController@bill')->name('user.bill');
                    Route::post('submit-bill', 'UserController@submitbill')->name('user.submit-bill');
                    Route::get('airtime', 'UserController@airtime')->name('user.airtime');
                    Route::get('data-bundle', 'UserController@data_bundle')->name('user.data.bundle');
                    Route::get('tv-cable', 'UserController@tv_cable')->name('user.tv.cable');
                    Route::get('electricity', 'UserController@electricity')->name('user.electricity');
                    //End
                    //Products
                    Route::get('product', 'UserController@storefront')->name('user.product');
                    Route::get('list', 'UserController@storefront')->name('user.list');
                    Route::get('your-list', 'UserController@storefront')->name('user.your-list');
                    Route::get('store-list/{id}', 'UserController@storeorders')->name('store.your-list');
                    Route::get('shipping', 'UserController@storefront')->name('user.shipping');
                    Route::get('storefront', 'UserController@storefront')->name('user.storefront');
                    Route::post('add-product', 'UserController@submitproduct')->name('submit.product');
                    Route::post('add-store', 'UserController@submitstore')->name('submit.store');
                    Route::post('add-shipping', 'UserController@submitshipping')->name('submit.shipping');
                    Route::post('add-storeproduct', 'UserController@submitstoreproduct')->name('submit.storeproduct');
                    Route::post('edit-store', 'UserController@editstore')->name('edit.store');
                    Route::post('edit-shipping', 'UserController@editshipping')->name('edit.shipping');
                    Route::post('update-shipping', 'UserController@updateshipping')->name('update.shipping');
                    Route::get('unstore/{id}', 'UserController@unstore')->name('store.unpublish');
                    Route::get('pstore/{id}', 'UserController@pstore')->name('store.publish');
                    Route::post('add-category', 'UserController@submitcategory')->name('submit.category');
                    Route::get('edit-product/{id}', 'UserController@Editproduct')->name('edit.product');
                    Route::get('store-product/{id}', 'UserController@Storefrontproducts')->name('storefront.products');
                    Route::get('orders/{id}', 'UserController@orders')->name('orders');
                    Route::post('description_update', 'UserController@Descriptionupdate')->name('product.description.submit');
                    Route::post('feature_update', 'UserController@Featureupdate')->name('product.feature.submit');
                    Route::post('add-product-image', 'UserController@submitproductimage')->name('submit.product.image');
                    Route::get('delete-product-image/{id}', 'UserController@deleteproductimage')->name('delete.product.image');
                    Route::get('delete-category/{id}', 'UserController@Destroyproductcategory')->name('delete.category');
                    Route::get('delete-product/{id}', 'UserController@Destroyproduct')->name('delete.product');
                    Route::get('delete-storefront/{id}', 'UserController@Destroystorefront')->name('delete.storefront');
                    Route::get('delete-shipping/{id}', 'UserController@Destroyshipping')->name('delete.shipping');
                    Route::get('delete-storefrontproduct/{id}', 'UserController@Destroystorefrontproduct')->name('delete.storefrontproduct');
                    //End

                    //Merchant
                    Route::get('merchant', 'UserController@merchant')->name('user.merchant');
                    Route::get('sender_log', 'UserController@senderlog')->name('user.senderlog');
                    Route::get('add-merchant-form', 'UserController@addmerchant')->name('user.add-merchant-form');
                    Route::get('merchant-documentation', 'UserController@merchant_documentation')->name('user.merchant-documentation');
                    Route::post('add-merchant', 'UserController@submitmerchant')->name('submit.merchant');
                    Route::get('log-merchant/{id}', 'UserController@Logmerchant')->name('log.merchant');
                    Route::get('delete-merchant/{id}', 'UserController@Destroymerchant')->name('delete.merchant');
                    Route::get('cancel_merchant/{id}', 'UserController@Cancelmerchant')->name('cancel.merchant');                Route::get('edit-merchant/{id}', 'UserController@Editmerchant')->name('edit.merchant');
                    Route::get('edit-merchant/{id}', 'UserController@Editmerchant')->name('edit.merchant');
                    Route::post('editmerchant', 'UserController@updatemerchant')->name('update.merchant');
                    //End

                    //Invoice
                    Route::get('invoice', 'UserController@invoice')->name('user.invoice');
                    Route::get('preview-invoice/{id}', 'UserController@previewinvoice')->name('preview.invoice');
                    Route::get('add-invoice', 'UserController@addinvoice')->name('user.add-invoice');
                    Route::post('add-invoice', 'UserController@submitinvoice')->name('submit.invoice');
                    Route::post('add-preview', 'UserController@submitpreview')->name('submit.preview');
                    Route::get('edit-invoice/{id}', 'UserController@Editinvoice')->name('edit.invoice');
                    Route::get('delete-invoice/{id}', 'UserController@Destroyinvoice')->name('delete.invoice');
                    Route::get('submit_invoice/{id}', 'UserController@Payinvoice')->name('pay.invoice');
                    Route::get('reminder/{id}', 'UserController@Reminderinvoice')->name('reminder.invoice');
                    Route::get('paid/{id}', 'UserController@Paidinvoice')->name('paid.invoice');
                    Route::post('editinvoice', 'UserController@updateinvoice')->name('update.invoice');
                    //End

                    //Bank
                    Route::get('bank', 'UserController@profile')->name('user.bank');
                    Route::post('add-bank', 'UserController@Createbank')->name('submit.bank');
                    Route::post('edit-bank', 'UserController@Updatebank')->name('bank.edit');
                    Route::get('bank/delete/{id}', 'UserController@Destroybank')->name('bank.delete');
                    Route::post('add-subacct', 'UserController@Createsubacct')->name('submit.subacct');
                    Route::post('add-subacct2', 'UserController@Createsubacct2')->name('submit.subacct2');
                    Route::post('edit-subacct', 'UserController@Updatesubacct')->name('subacct.edit');
                    Route::get('subacct/delete/{id}', 'UserController@Destroysubacct')->name('subacct.delete');
                    Route::get('bank/default/{id}', 'UserController@Defaultbank')->name('bank.default');
                    //End

                    //Send money
                    Route::get('transfer', 'UserController@ownbank')->name('user.transfer');
                    Route::post('transfer', 'UserController@submitownbank')->name('submit.transfer');
                    Route::post('local_preview', 'UserController@submitlocalpreview')->name('submit.localpreview');
                    Route::get('local_preview', 'UserController@localpreview')->name('user.localpreview');
                    Route::get('send_money/{id}', 'UserController@Sendpay')->name('send.pay');
                    Route::get('received/{id}', 'UserController@Receivedpay')->name('received.pay');
                    //End

                    //Request money
                    Route::get('request', 'UserController@request')->name('user.request');
                    Route::post('request', 'UserController@submitrequest')->name('submit.request');
                    //End

                    //Payment link
                    Route::get('sc-links', 'UserController@sclinks')->name('user.sclinks');
                    Route::get('sc-links/{id}', 'UserController@sclinkstrans')->name('user.sclinkstrans');
                    Route::get('unsclinks/{id}', 'UserController@unsclinks')->name('sclinks.unpublish');
                    Route::get('psclinks/{id}', 'UserController@psclinks')->name('sclinks.publish');
                    Route::post('editsclinks', 'UserController@updatesclinks')->name('update.sclinks');
                    Route::get('dp-links', 'UserController@dplinks')->name('user.dplinks');
                    Route::get('dp-links/{id}', 'UserController@dplinkstrans')->name('user.dplinkstrans');
                    Route::get('subacct/{id}', 'UserController@subaccttrans')->name('user.subaccttrans');
                    Route::get('undplinks/{id}', 'UserController@undplinks')->name('dplinks.unpublish');
                    Route::get('pdplinks/{id}', 'UserController@pdplinks')->name('dplinks.publish');
                    Route::get('unsubacct/{id}', 'UserController@unsubacct')->name('subacct.unpublish');
                    Route::get('psubacct/{id}', 'UserController@psubacct')->name('subacct.publish');
                    Route::post('editdplinks', 'UserController@updatedplinks')->name('update.dplinks');
                    Route::post('single_charge', 'UserController@submitsinglecharge')->name('submit.singlecharge');
                    Route::post('donation_page', 'UserController@submitdonationpage')->name('submit.donationpage');
                    Route::get('delete-link/{id}', 'UserController@Destroylink')->name('delete.user.link');
                    Route::post('donation', 'UserController@submitdonation')->name('submit.donation');
                    //End

                    //Plans
                    Route::get('plan', 'UserController@plans')->name('user.plan');
                    Route::get('unplan/{id}', 'UserController@unplan')->name('sub.plan.unpublish');
                    Route::get('pplan/{id}', 'UserController@pplan')->name('sub.plan.publish');
                    Route::post('plan', 'UserController@submitplan')->name('submit.plan');
                    Route::post('updateplan', 'UserController@updateplan')->name('update.plan');
                    Route::get('plan-sub/{id}', 'UserController@plansub')->name('user.plansub');
                    Route::get('subs', 'UserController@subscriptions')->name('user.sub');
                    //End


                    Route::get('ticket', 'UserController@ticket')->name('user.ticket');
                    Route::get('open-ticket', 'UserController@openticket')->name('open.ticket');
                    Route::post('submit-ticket', 'UserController@submitticket')->name('submit-ticket');
                    Route::get('ticket/delete/{id}', 'UserController@Destroyticket')->name('ticket.delete');
                    Route::get('reply-ticket/{id}', 'UserController@Replyticket')->name('ticket.reply');
                    Route::post('reply-ticket', 'UserController@submitreply');
                    Route::get('fund', 'UserController@fund')->name('user.fund');
                    Route::get('preview', 'UserController@depositpreview')->name('user.preview');
                    Route::post('fund', 'UserController@fundsubmit')->name('fund.submit');
                    Route::get('bank_transfer', 'UserController@bank_transfer')->name('user.bank_transfer');
                    Route::post('bank_transfer', 'UserController@bank_transfersubmit')->name('bank_transfersubmit');
                    Route::get('distributions', 'UserController@distributions')->name('user.distributions');
                    Route::get('affiliate', 'UserController@affiliate')->name('user.affiliate');

                    Route::get('withdraw', 'UserController@withdraw')->name('user.withdraw');
                    Route::post('withdraw', 'UserController@withdrawsubmit')->name('withdraw.submit');
                    Route::post('password', 'UserController@submitPassword')->name('change.password');
                    Route::get('deposit-confirm', 'PaymentController@depositConfirm')->name('deposit.confirm');
                    Route::post('2fa', 'UserController@submit2fa')->name('change.2fa');
                    Route::get('audit', 'UserController@audit')->name('user.audit');
                });
                Route::post('add_bank', 'UserController@Createbank')->name('add.bank');
                Route::get('no-bank', 'UserController@nobank')->name('user.nobank');
            });
        });
        Route::get('logout', 'UserController@logout')->name('user.logout');
    });

    Route::get('user-password/reset', 'User\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
    Route::post('user-password/email', 'User\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    Route::get('user-password/reset/{token}', 'User\ResetPasswordController@showResetForm')->name('user.password.reset');
    Route::post('user-password/reset', 'User\ResetPasswordController@reset');
    Route::get('admin', 'Auth\AdminController@adminlogin')->name('admin.loginForm');
    Route::post('admin', 'Auth\AdminController@submitadminlogin')->name('admin.login');

    Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
        Route::get('/logout', 'AdminController@logout')->name('admin.logout');
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        //Blog controller
        Route::post('/createcategory', 'PostController@CreateCategory');
        Route::post('/updatecategory', 'PostController@UpdateCategory');
        Route::get('/post-category', 'PostController@category')->name('admin.cat');
        Route::get('/unblog/{id}', 'PostController@unblog')->name('blog.unpublish');
        Route::get('/pblog/{id}', 'PostController@pblog')->name('blog.publish');
        Route::get('blog', 'PostController@index')->name('admin.blog');
        Route::get('blog/create', 'PostController@create')->name('blog.create');
        Route::post('blog/create', 'PostController@store')->name('blog.store');
        Route::get('blog/delete/{id}', 'PostController@destroy')->name('blog.delete');
        Route::get('category/delete/{id}', 'PostController@delcategory')->name('blog.delcategory');
        Route::get('blog/edit/{id}', 'PostController@edit')->name('blog.edit');
        Route::post('blog-update', 'PostController@updatePost')->name('blog.update');

        //Web controller
        Route::post('social-links/update', 'WebController@UpdateSocial')->name('social-links.update');
        Route::get('social-links', 'WebController@sociallinks')->name('social-links');

        Route::post('about-us/update', 'WebController@UpdateAbout')->name('about-us.update');
        Route::get('about-us', 'WebController@aboutus')->name('about-us');

        Route::post('privacy-policy/update', 'WebController@UpdatePrivacy')->name('privacy-policy.update');
        Route::get('privacy-policy', 'WebController@privacypolicy')->name('privacy-policy');

        Route::post('terms/update', 'WebController@UpdateTerms')->name('terms.update');
        Route::get('terms', 'WebController@terms')->name('admin.terms');

        Route::post('/createfaq', 'WebController@CreateFaq');
        Route::post('faq/update', 'WebController@UpdateFaq')->name('faq.update');
        Route::get('faq/delete/{id}', 'WebController@DestroyFaq')->name('faq.delete');
        Route::get('faq', 'WebController@faq')->name('admin.faq');

        Route::post('/createcountry', 'WebController@CreateCountry');
        Route::post('country/update', 'WebController@UpdateCountry')->name('country.update');
        Route::get('country/delete/{id}', 'WebController@DestroyCountry')->name('country.delete');
        Route::get('country', 'WebController@country')->name('admin.country');

        Route::post('/createlbank', 'WebController@Createlbank');
        Route::post('lbank/update', 'WebController@Updatelbank')->name('lbank.update');
        Route::get('lbank/delete/{id}', 'WebController@Destroylbank')->name('lbank.delete');
        Route::get('lbank', 'WebController@lbank')->name('admin.lbank');

        Route::post('/createservice', 'WebController@CreateService');
        Route::post('service/update', 'WebController@UpdateService')->name('service.update');
        Route::get('service/edit/{id}', 'WebController@EditService')->name('brand.edit');
        Route::get('service/delete/{id}', 'WebController@DestroyService')->name('service.delete');
        Route::get('service', 'WebController@services')->name('admin.service');

        Route::post('/createpage', 'WebController@CreatePage');
        Route::post('page/update', 'WebController@UpdatePage')->name('page.update');
        Route::get('page/delete/{id}', 'WebController@DestroyPage')->name('page.delete');
        Route::get('page', 'WebController@page')->name('admin.page');
        Route::get('/unpage/{id}', 'WebController@unpage')->name('page.unpublish');
        Route::get('/ppage/{id}', 'WebController@ppage')->name('page.publish');

        Route::post('/createreview', 'WebController@CreateReview');
        Route::post('review/update', 'WebController@UpdateReview')->name('review.update');
        Route::get('review/edit/{id}', 'WebController@EditReview')->name('review.edit');
        Route::get('review/delete/{id}', 'WebController@DestroyReview')->name('review.delete');
        Route::get('review', 'WebController@review')->name('admin.review');
        Route::get('/unreview/{id}', 'WebController@unreview')->name('review.unpublish');
        Route::get('/preview/{id}', 'WebController@preview')->name('review.publish');

        Route::post('/createbrand', 'WebController@CreateBrand');
        Route::post('brand/update', 'WebController@UpdateBrand')->name('brand.update');
        Route::get('brand/edit/{id}', 'WebController@EditBrand')->name('brand.edit');
        Route::get('brand/delete/{id}', 'WebController@DestroyBrand')->name('brand.delete');
        Route::get('brand', 'WebController@brand')->name('admin.brand');
        Route::get('/unbrand/{id}', 'WebController@unbrand')->name('brand.unpublish');
        Route::get('/pbrand/{id}', 'WebController@pbrand')->name('brand.publish');

        Route::post('createbranch', 'WebController@CreateBranch');
        Route::post('branch/update', 'WebController@UpdateBranch')->name('branch.update');
        Route::get('branch/delete/{id}', 'WebController@DestroyBranch')->name('branch.delete');
        Route::get('branch', 'WebController@branch')->name('admin.branch');

        Route::get('currency', 'WebController@currency')->name('admin.currency');
        Route::get('pcurrency/{id}', 'WebController@pcurrency')->name('change.currency');

        Route::get('logo', 'WebController@logo')->name('admin.logo');
        Route::post('light-logo', 'WebController@light')->name('light.logo');
        Route::post('dark-logo', 'WebController@dark')->name('dark.logo');
        Route::post('updatefavicon', 'WebController@UpdateFavicon');

        Route::get('home-page', 'WebController@homepage')->name('homepage');
        Route::post('home-page/update', 'WebController@Updatehomepage')->name('homepage.update');
        Route::post('section1/update', 'WebController@section1');
        Route::post('section2/update', 'WebController@section2');
        Route::post('section3/update', 'WebController@section3');
        Route::post('section7/update', 'WebController@section7');
        Route::post('settlement', 'SettingController@SettlementUpdate')->name('admin.settlement.update');

        //Withdrawal controller
        Route::get('withdraw-log', 'WithdrawController@log')->name('admin.withdraw.log');
        Route::get('withdraw/delete/{id}', 'WithdrawController@delete')->name('withdraw.delete');
        Route::get('approvewithdraw/{id}', 'WithdrawController@approve')->name('withdraw.approve');
        Route::get('declinewithdraw/{id}', 'WithdrawController@decline')->name('withdraw.decline');

        //Deposit controller
        Route::get('bank-transfer', 'DepositController@banktransfer')->name('admin.banktransfer');
        Route::get('bank_transfer/delete/{id}', 'DepositController@DestroyTransfer')->name('banktransfer.delete');
        Route::post('bankdetails', 'DepositController@bankdetails');
        Route::get('deposit-log', 'DepositController@depositlog')->name('admin.deposit.log');
        Route::get('deposit-method', 'DepositController@depositmethod')->name('admin.deposit.method');
        Route::post('storegateway', 'DepositController@store');
        Route::get('approvebk/{id}', 'DepositController@approvebk')->name('deposit.approvebk');
        Route::get('declinebk/{id}', 'DepositController@declinebk')->name('deposit.declinebk');
        Route::get('deposit/delete/{id}', 'DepositController@DestroyDeposit')->name('deposit.delete');
        Route::get('approvedeposit/{id}', 'DepositController@approve')->name('deposit.approve');
        Route::get('declinedeposit/{id}', 'DepositController@decline')->name('deposit.decline');

        //Setting controller
        Route::get('settings', 'SettingController@Settings')->name('admin.setting');
        Route::post('settings', 'SettingController@SettingsUpdate')->name('admin.settings.update');
        Route::post('charges', 'SettingController@charges')->name('admin.charges.update');
        Route::post('features', 'SettingController@features')->name('admin.features.update');
        Route::post('crypto', 'SettingController@crypto')->name('admin.crypto.update');
        Route::post('account', 'SettingController@AccountUpdate')->name('admin.account.update');
        Route::get('charges', 'TransferController@charges')->name('admin.charges');
        Route::get('sc-links', 'TransferController@sclinks')->name('admin.sclinks');
        Route::get('dp-links', 'TransferController@dplinks')->name('admin.dplinks');
        Route::get('delete-link/{id}', 'TransferController@Destroylink')->name('delete.link');
        Route::get('unlinks/{id}', 'TransferController@unlinks')->name('links.unpublish');
        Route::get('plinks/{id}', 'TransferController@plinks')->name('links.publish');
        Route::get('links/{id}', 'TransferController@linkstrans')->name('admin.linkstrans');

        //Transfer controller
        Route::get('transfer', 'TransferController@Ownbank')->name('admin.ownbank');
        Route::get('transfer/delete/{id}', 'TransferController@Destroyownbank')->name('transfer.delete');

        //Request Money controller
        Route::get('request', 'TransferController@Requestmoney')->name('admin.request');
        Route::get('request/delete/{id}', 'TransferController@Destroyrequest')->name('request.delete');

        //Invoice controller
        Route::get('invoice', 'TransferController@invoice')->name('admin.invoice');
        Route::get('invoice/delete/{id}', 'TransferController@Destroyinvoice')->name('invoice.delete');

        Route::get('product', 'TransferController@product')->name('admin.product');
        Route::get('product/delete/{id}', 'TransferController@Destroyproduct')->name('product.delete');
        Route::get('unproduct/{id}', 'TransferController@unproduct')->name('product.unpublish');
        Route::get('pproduct/{id}', 'TransferController@pproduct')->name('product.publish');
        Route::get('orders/{id}', 'TransferController@orders')->name('admin.orders');

        Route::get('plan', 'TransferController@plans')->name('admin.plan');
        Route::get('plan-sub/{id}', 'TransferController@plansub')->name('admin.plansub');
        Route::get('unplan/{id}', 'TransferController@unplan')->name('plan.unpublish');
        Route::get('pplan/{id}', 'TransferController@pplan')->name('plan.publish');

        //User controller
        Route::get('staff', 'AdminController@Staffs')->name('admin.staffs');
        Route::get('new-staff', 'AdminController@Newstaff')->name('new.staff');
        Route::post('new-staff', 'AdminController@Createstaff')->name('create.staff');
        Route::get('users', 'AdminController@Users')->name('admin.users');
        Route::get('messages', 'AdminController@Messages')->name('admin.message');
        Route::get('unblock-staff/{id}', 'AdminController@Unblockstaff')->name('staff.unblock');
        Route::get('block-staff/{id}', 'AdminController@Blockstaff')->name('staff.block');
        Route::get('unblock-user/{id}', 'AdminController@Unblockuser')->name('user.unblock');
        Route::get('block-user/{id}', 'AdminController@Blockuser')->name('user.block');
        Route::get('manage-user/{id}', 'AdminController@Manageuser')->name('user.manage');
        Route::get('manage-staff/{id}', 'AdminController@Managestaff')->name('staff.manage');
        Route::get('user/delete/{id}', 'AdminController@Destroyuser')->name('user.delete');
        Route::get('staff/delete/{id}', 'AdminController@Destroystaff')->name('staff.delete');
        Route::get('email/{id}/{name}', 'AdminController@Email')->name('admin.email');
        Route::post('email_send', 'AdminController@Sendemail')->name('user.email.send');
        Route::get('promo', 'AdminController@Promo')->name('admin.promo');
        Route::post('promo', 'AdminController@Sendpromo')->name('user.promo.send');
        Route::get('message/delete/{id}', 'AdminController@Destroymessage')->name('message.delete');
        Route::get('ticket', 'AdminController@Ticket')->name('admin.ticket');
        Route::get('ticket/delete/{id}', 'AdminController@Destroyticket')->name('ticket.delete');
        Route::get('close-ticket/{id}', 'AdminController@Closeticket')->name('ticket.close');
        Route::get('manage-ticket/{id}', 'AdminController@Manageticket')->name('ticket.manage');
        Route::post('reply-ticket', 'AdminController@Replyticket')->name('ticket.reply');
        Route::post('profile-update', 'AdminController@Profileupdate');
        Route::post('staff-update', 'AdminController@Staffupdate')->name('staff.update');
        Route::get('approve-kyc/{id}', 'AdminController@Approvekyc')->name('admin.approve.kyc');
        Route::get('reject-kyc/{id}', 'AdminController@Rejectkyc')->name('admin.reject.kyc');
        Route::post('password', 'AdminController@staffPassword')->name('staff.password');

        //Merchant controller
        Route::get('merchant-log', 'MerchantController@merchantlog')->name('merchant.log');
        Route::get('transfer-log/{id}', 'MerchantController@transferlog')->name('transfer.log');
        Route::get('merchant/delete/{id}', 'MerchantController@Destroymerchant')->name('merchant.delete');

        //Trade controller
        Route::get('trades', 'TradeController@trades')->name('admin.trades');
        Route::get('delete/{id}', 'TradeController@DestroyTrade')->name('trade.delete');
        Route::get('approvetrade/{id}', 'TradeController@approveTrade')->name('trade.approve');
        Route::get('declinetrade/{id}', 'TradeController@declineTrade')->name('trade.decline');

        //Vcard
        Route::get('vcard', 'AdminController@vcard')->name('admin.vcard');
        Route::get('transactions-virtual/{id}', 'AdminController@transactionsvcard')->name('transactions.vcard');

        //Bill payment
        Route::get('bpay', 'AdminController@bpay')->name('admin.bpay');
    });
});
