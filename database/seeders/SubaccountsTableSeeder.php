<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubaccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('subaccounts')->delete();

        \DB::table('subaccounts')->insert(array (
            0 =>
            array (
                'acct_name' => 'Finn Marshall',
                'acct_no' => '12345678',
                'active' => 1,
                'amount' => '10',
                'bank_id' => 1,
                'country' => 156,

                'email' => 'd@s.com',
                'id' => 4,
                'name' => 'Bryt',
                'type' => 2,

                'user_id' => 41,
            ),
            1 =>
            array (
                'acct_name' => 'Finn',
                'acct_no' => '123456789654',
                'active' => 1,
                'amount' => '30000',
                'bank_id' => 2,
                'country' => 13,

                'email' => 's@s.com',
                'id' => 6,
                'name' => 'Boomchart',
                'type' => 1,

                'user_id' => 41,
            ),
        ));


    }
}
