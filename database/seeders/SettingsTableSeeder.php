<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'balance_reg' => 2000,
                'bill' => 1,
                'bill_charge' => '3',
                'bitcoin' => 1,
                'btc_buy' => '460',
                'btc_charge' => '3',
                'btc_sell' => '456',
                'btc_wallet' => 'kjdbd-djkdjdj-2o32-2jebk2j',

                'donation' => 1,
                'donation_charge' => '10',
                'duration' => '2',
                'email' => 'test@boomchart.net',
                'email_notify' => 0,
                'email_verification' => 0,
                'eth_buy' => '450',
                'eth_charge' => '5',
                'eth_sell' => '460',
                'eth_wallet' => 'kjdbd-djkdjdj-2o32-2jebk2s',
                'ethereum' => 1,
                'id' => 1,
                'invoice' => 1,
                'invoice_charge' => '10',
                'kyc' => 1,
                'language' => 1,
                'livechat' => NULL,
                'merchant' => 1,
                'merchant_charge' => '10',
                'min_btcbuy' => 200,
                'min_btcsell' => 300,
                'min_ethbuy' => 100,
                'min_ethsell' => NULL,
                'min_transfer' => '1000',
                'mobile' => '12345675432',
                'next_settlement' => '2021-02-09 14:05:41',
                'period' => 'Day',
                'product_charge' => '10',
                'recaptcha' => 0,
                'registration' => 1,
                'request_money' => 1,
                'single' => 1,
                'single_charge' => '6',
                'site_desc' => 'Make it as easy as possible to pay. Modular or combined with other services, our payment technologies ensure swift implementation. What’s more, you can flexibly adapt our proven standard solutions to suit each country and application. Lastingly slash your operating costs and boost your sales.',
                'site_name' => 'Boompay',
                'sms_notify' => 0,
                'sms_verification' => 0,
                'starter_limit' => '2000000',
                'store' => 1,
                'subscription' => 1,
                'subscription_charge' => '30',
                'support_email' => 'test@boomchart.net',
                'title' => 'Stay focused on your business',
                'transfer' => 1,
                'transfer_charge' => 5,

                'vc_max' => 10000.0,
                'vc_min' => 3000.0,
                'vc_no' => 2,
                'vcard' => 1,
                'virtual_charge' => '10',
                'virtual_createcharge' => '10',
                'withdraw_charge' => '3',
                'withdraw_duration' => NULL,
                'withdraw_limit' => '300000',
            ),
        ));


    }
}
