<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellCardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sell_cards')->delete();

        \DB::table('sell_cards')->insert(array (
            0 =>
            array (
                'amount' => '100',
                'bank' => 2,
                'c_image' => NULL,
                'charge' => NULL,

                'id' => 8,
                'plan_id' => 13,
                'rate' => '240',
                'status' => 1,
                'total' => '24000',
                'trx' => '5NDGsfwwtq',

                'user_id' => 11,
            ),
            1 =>
            array (
                'amount' => '200',
                'bank' => 2,
                'c_image' => NULL,
                'charge' => NULL,

                'id' => 9,
                'plan_id' => 17,
                'rate' => '260',
                'status' => 1,
                'total' => '52000',
                'trx' => 'VV8e2IHT1uzo1p6I',

                'user_id' => 11,
            ),
            2 =>
            array (
                'amount' => '200',
                'bank' => 2,
                'c_image' => 'reason_1605291491.png',
                'charge' => NULL,

                'id' => 10,
                'plan_id' => 17,
                'rate' => '260',
                'status' => 2,
                'total' => '52000',
                'trx' => 'C02GNirhZZBb4Ti3',

                'user_id' => 11,
            ),
            3 =>
            array (
                'amount' => '200',
                'bank' => 2,
                'c_image' => NULL,
                'charge' => NULL,

                'id' => 11,
                'plan_id' => 17,
                'rate' => '260',
                'status' => 0,
                'total' => '52000',
                'trx' => 'r3dnAvEhQ4fwXjQk',

                'user_id' => 11,
            ),
        ));


    }
}
