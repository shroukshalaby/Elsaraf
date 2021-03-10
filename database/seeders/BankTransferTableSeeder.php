<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankTransferTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('bank_transfer')->delete();

        \DB::table('bank_transfer')->insert(array (
            0 =>
            array (
                'amount' => 2000,

                'id' => 18,
                'status' => 1,
                'trx' => 'ym1TFK1p1MMIAqXr',

                'user_id' => 41,
            ),
        ));


    }
}
