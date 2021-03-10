<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankSupportedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('bank_supported')->delete();

        \DB::table('bank_supported')->insert(array (
            0 =>
            array (
                'code' => '033',
                'country_id' => 156,

                'id' => 1,
                'name' => 'Zenith Bank',

            ),
            1 =>
            array (
                'code' => '012',
                'country_id' => 13,

                'id' => 2,
                'name' => 'First Bank',

            ),
            2 =>
            array (
                'code' => '22d',
                'country_id' => 156,

                'id' => 3,
                'name' => 'GTB',

            ),
            3 =>
            array (
                'code' => '2233',
                'country_id' => 226,

                'id' => 5,
                'name' => 'Castro Bank',

            ),
        ));


    }
}
