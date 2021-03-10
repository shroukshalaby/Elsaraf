<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrySupportedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('country_supported')->delete();

        \DB::table('country_supported')->insert(array (
            0 =>
            array (
                'country_id' => 13,

                'id' => 1,

            ),
            1 =>
            array (
                'country_id' => 81,

                'id' => 2,

            ),
            2 =>
            array (
                'country_id' => 156,

                'id' => 3,

            ),
            3 =>
            array (
                'country_id' => 81,

                'id' => 4,

            ),
            4 =>
            array (
                'country_id' => 80,

                'id' => 5,

            ),
            5 =>
            array (
                'country_id' => 98,

                'id' => 6,

            ),
            6 =>
            array (
                'country_id' => 229,

                'id' => 7,

            ),
        ));


    }
}
