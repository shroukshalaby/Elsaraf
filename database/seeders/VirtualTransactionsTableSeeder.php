<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VirtualTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('virtual_transactions')->delete();

        \DB::table('virtual_transactions')->insert(array (
            0 =>
            array (
                'amount' => '3000',

                'description' => 'Virtual Card Funding',
                'id' => 1,
                'trx' => 'VC-Z52fyM',
                'type' => 1,

                'user_id' => 41,
                'virtual_id' => '7',
            ),
            1 =>
            array (
                'amount' => '3000',

                'description' => 'Virtual Card Funding',
                'id' => 2,
                'trx' => 'VC-SpDqlM',
                'type' => 1,

                'user_id' => 41,
                'virtual_id' => '333fee70-3004-4cb0-9d85-cd21f311833e',
            ),
            2 =>
            array (
                'amount' => '3000',

                'description' => 'Virtual Card Funding',
                'id' => 3,
                'trx' => 'VC-wZERnF',
                'type' => 1,

                'user_id' => 41,
                'virtual_id' => '7',
            ),
            3 =>
            array (
                'amount' => '3000',

                'description' => 'Virtual Card Funding',
                'id' => 4,
                'trx' => 'VC-zwyPGG',
                'type' => 1,

                'user_id' => 41,
                'virtual_id' => '4',
            ),
            4 =>
            array (
                'amount' => '3000',

                'description' => 'Virtual Card Funding',
                'id' => 5,
                'trx' => 'VC-LOB5t1',
                'type' => 1,

                'user_id' => 41,
                'virtual_id' => '8',
            ),
            5 =>
            array (
                'amount' => '1000',

                'description' => 'Virtual Card Funding',
                'id' => 6,
                'trx' => 'VC-hxb94j',
                'type' => 1,

                'user_id' => 41,
                'virtual_id' => '8',
            ),
            6 =>
            array (
                'amount' => '1000',

                'description' => 'Virtual Card Funding',
                'id' => 7,
                'trx' => 'VC-uGffx2',
                'type' => 1,

                'user_id' => 41,
                'virtual_id' => '8',
            ),
            7 =>
            array (
                'amount' => '1000',

                'description' => 'Virtual Card Funding',
                'id' => 8,
                'trx' => 'VC-wkjL2i',
                'type' => 1,

                'user_id' => 48,
                'virtual_id' => '10',
            ),
        ));


    }
}
