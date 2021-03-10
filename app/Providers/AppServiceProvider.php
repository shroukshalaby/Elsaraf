<?php

namespace App\Providers;

use App\Lib\CoinPaymentHosted;
use App\Models\About;
use App\Models\Admin;
use App\Models\Audit;
use App\Models\Banktransfer;
use App\Models\Blog;
use App\Models\Branch;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Charges;
use App\Models\Currency;
use App\Models\Deposits;
use App\Models\Design;
use App\Models\Faq;
use App\Models\Gateway;
use App\Models\Logo;
use App\Models\Page;
use App\Models\Plans;
use App\Models\Requests;
use App\Models\Review;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Social;
use App\Models\Subscribers;
use App\Models\Ticket;
use App\Models\Transfer;
use App\Models\User;
use App\Models\Withdraw;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
