<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminBankTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_bank')->delete();

        \DB::table('admin_bank')->insert(array (
            0 =>
            array (
                'acct_no' => '12345678982',
                'address' => 'Somewhere in uk',
                'bank_name' => 'Boomchart bank',

                'iban' => '5678876',
                'id' => 1,
                'name' => 'Boomchart',
                'status' => 1,
                'swift' => '5444',

            ),
        ));


    }
}
