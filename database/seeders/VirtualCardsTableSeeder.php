<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VirtualCardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('virtual_cards')->delete();

        \DB::table('virtual_cards')->insert(array (
            0 =>
            array (
                'account_id' => 118661,
                'address' => NULL,
                'amount' => '8000.00',
                'callback' => 'http://localhost/new-pay/use-virtual',
                'card_hash' => '993b7edd-de5a-4d13-96ca-4cae52807f2c',
                'card_pan' => '5366139800942370',
                'card_type' => 'mastercard',
                'charge' => '300',
                'city' => NULL,

                'cvv' => 208,
                'expiration' => '2024-01',
                'id' => 8,
                'masked_card' => '536613*******2370',
                'name_on_card' => 'idbjfd jhcdd',
                'ref_id' => 'VC-LjBDgP',
                'secret' => 'VC-LjBDgP',
                'state' => NULL,
                'status' => 1,

                'user_id' => 41,
                'zip_code' => NULL,
            ),
            1 =>
            array (
                'account_id' => 118661,
                'address' => NULL,
                'amount' => '3000',
                'callback' => 'http://localhost/new-pay/use-virtual',
                'card_hash' => 'e9bc954b-261c-4d70-a1c5-2c64fd3c716c',
                'card_pan' => '5366135864840013',
                'card_type' => 'mastercard',
                'charge' => '300',
                'city' => NULL,

                'cvv' => 799,
                'expiration' => '2024-01',
                'id' => 9,
                'masked_card' => '536613*******0013',
                'name_on_card' => 'Rashford kim',
                'ref_id' => 'VC-C4nBtK',
                'secret' => 'VC-C4nBtK',
                'state' => NULL,
                'status' => 1,

                'user_id' => 44,
                'zip_code' => NULL,
            ),
            2 =>
            array (
                'account_id' => 118661,
                'address' => NULL,
                'amount' => '6000.00',
                'callback' => 'http://localhost/new-pay/use-virtual',
                'card_hash' => '261c4a37-7cc1-4a92-9411-c2c979e9f991',
                'card_pan' => '5366132423730116',
                'card_type' => 'mastercard',
                'charge' => '500',
                'city' => NULL,

                'cvv' => 149,
                'expiration' => '2024-01',
                'id' => 10,
                'masked_card' => '536613*******0116',
                'name_on_card' => 'fghj dfghj',
                'ref_id' => 'VC-lnYXIr',
                'secret' => 'VC-lnYXIr',
                'state' => NULL,
                'status' => 1,

                'user_id' => 48,
                'zip_code' => NULL,
            ),
            3 =>
            array (
                'account_id' => 118661,
                'address' => NULL,
                'amount' => '4000',
                'callback' => 'http://localhost/new-pay/use-virtual',
                'card_hash' => '0d3b95be-4aee-4092-bac2-d48b7ae32ce0',
                'card_pan' => '5563388086145536',
                'card_type' => 'mastercard',
                'charge' => '400',
                'city' => NULL,

                'cvv' => 843,
                'expiration' => '2024-01',
                'id' => 11,
                'masked_card' => '556338*******5536',
                'name_on_card' => 'fghj dfghj',
                'ref_id' => 'VC-U2m2hN',
                'secret' => 'VC-U2m2hN',
                'state' => NULL,
                'status' => 1,

                'user_id' => 48,
                'zip_code' => NULL,
            ),
            4 =>
            array (
                'account_id' => 118661,
                'address' => NULL,
                'amount' => '0',
                'callback' => 'http://localhost/new-pay/use-virtual',
                'card_hash' => '97560e24-3542-44a7-a507-cc47e58ffc55',
                'card_pan' => '5563388648907886',
                'card_type' => 'mastercard',
                'charge' => '1000',
                'city' => NULL,

                'cvv' => 156,
                'expiration' => '2024-01',
                'id' => 12,
                'masked_card' => '556338*******7886',
                'name_on_card' => 'idbjfd jhcdd',
                'ref_id' => 'VC-ZA7hEb',
                'secret' => 'VC-ZA7hEb',
                'state' => NULL,
                'status' => 0,

                'user_id' => 41,
                'zip_code' => NULL,
            ),
            5 =>
            array (
                'account_id' => 118661,
                'address' => NULL,
                'amount' => '5000',
                'callback' => 'http://localhost/new-pay/use-virtual',
                'card_hash' => '460606e6-45b4-4600-86a6-3e80d78fc1fe',
                'card_pan' => '5366138187338285',
                'card_type' => 'mastercard',
                'charge' => '500',
                'city' => 'Lekki',

                'cvv' => 989,
                'expiration' => '2024-01',
                'id' => 13,
                'masked_card' => '536613*******8285',
                'name_on_card' => 'idbjfd jhcdd',
                'ref_id' => 'VC-xEYulb',
                'secret' => 'VC-xEYulb',
                'state' => 'Lagos',
                'status' => 1,

                'user_id' => 41,
                'zip_code' => '23401',
            ),
        ));


    }
}
