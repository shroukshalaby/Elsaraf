<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentLinkTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('payment_link')->delete();

        \DB::table('payment_link')->insert(array (
            0 =>
            array (
                'active' => 1,
                'amount' => NULL,

                'description' => 'Customization service for investment project',
                'id' => 1,
                'image' => NULL,
                'name' => 'Customization services',
                'redirect_link' => NULL,
                'ref_id' => 'XEPIruSFH3avCJ33',
                'status' => 0,
                'type' => 1,

                'user_id' => 27,
            ),
            1 =>
            array (
                'active' => 1,
                'amount' => 30000.0,

                'description' => 'dszfxgchvjbn',
                'id' => 12,
                'image' => 'donation1608643391.jpg',
                'name' => 'Fish Farming',
                'redirect_link' => NULL,
                'ref_id' => '76BgHHh8Fvg2DNnI',
                'status' => 0,
                'type' => 2,

                'user_id' => 41,
            ),
            2 =>
            array (
                'active' => 1,
                'amount' => 400000.0,

                'description' => 'Latest Console',
                'id' => 14,
                'image' => NULL,
                'name' => 'Ps5',
                'redirect_link' => NULL,
                'ref_id' => '7NydPhSrCv526euc',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            3 =>
            array (
                'active' => 1,
                'amount' => 70000.0,

                'description' => 'A stubborn and fun dog',
                'id' => 15,
                'image' => NULL,
                'name' => 'Lhassa Apso',
                'redirect_link' => NULL,
                'ref_id' => 'ejE4BNdtIa2wFUKU',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            4 =>
            array (
                'active' => 1,
                'amount' => NULL,

                'description' => 'sdfdfg',
                'id' => 16,
                'image' => NULL,
                'name' => 'Zone',
                'redirect_link' => NULL,
                'ref_id' => 'uLbtGuqp2UNdkDnL',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            5 =>
            array (
                'active' => 1,
                'amount' => 4000000.0,

                'description' => 'Apple farm',
                'id' => 17,
                'image' => 'donation1608643366.jpg',
                'name' => 'Apple Farm',
                'redirect_link' => NULL,
                'ref_id' => 'xufj59LTUjUS6TZ5',
                'status' => 0,
                'type' => 2,

                'user_id' => 41,
            ),
            6 =>
            array (
                'active' => 1,
                'amount' => 500000.0,

                'description' => 'Macbook M1 Chip',
                'id' => 18,
                'image' => 'donation1608643351.jpg',
                'name' => 'Macbook M1 Chip',
                'redirect_link' => NULL,
                'ref_id' => 'AivKD8mR7anHUVWV',
                'status' => 0,
                'type' => 2,

                'user_id' => 41,
            ),
            7 =>
            array (
                'active' => 1,
                'amount' => 400000.0,

                'description' => 'New Phone',
                'id' => 19,
                'image' => NULL,
                'name' => 'Iphone 12',
                'redirect_link' => NULL,
                'ref_id' => 'SC-525n8z',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            8 =>
            array (
                'active' => 1,
                'amount' => 1000000.0,

                'description' => 'dewcd',
                'id' => 20,
                'image' => 'donation1611153952.jpg',
                'name' => 'Boomchain',
                'redirect_link' => NULL,
                'ref_id' => 'DN-YjbEuN',
                'status' => 0,
                'type' => 2,

                'user_id' => 41,
            ),
        ));


    }
}
