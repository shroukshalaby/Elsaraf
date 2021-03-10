<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrendingCatTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('trending_cat')->delete();

        \DB::table('trending_cat')->insert(array (
            0 =>
            array (
                'categories' => 'Inspiration',

                'id' => 2,

            ),
            1 =>
            array (
                'categories' => 'Company',

                'id' => 3,

            ),
            2 =>
            array (
                'categories' => 'Engineering',

                'id' => 4,

            ),
        ));


    }
}
