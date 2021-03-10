<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('bank')->delete();

        \DB::table('bank')->insert(array (
            0 =>
            array (
                'acct_name' => 'xdrfgchvjb',
                'acct_no' => '345678965',
                'bank_id' => 3,

                'id' => 9,
                'status' => 0,

                'user_id' => 41,
            ),
            1 =>
            array (
                'acct_name' => 'xdrcfgvhbjn',
                'acct_no' => '345678987654',
                'bank_id' => 1,

                'id' => 10,
                'status' => 1,

                'user_id' => 41,
            ),
            2 =>
            array (
                'acct_name' => 'tttfff gggg',
                'acct_no' => '1234567655',
                'bank_id' => 1,

                'id' => 16,
                'status' => 1,

                'user_id' => 48,
            ),
        ));


    }
}
