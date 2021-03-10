<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('brands')->delete();

        \DB::table('brands')->insert(array (
            0 =>
            array (

                'id' => 1,
                'image' => 'brand_1595624243.png',
                'status' => 1,
                'title' => 'Capterra',

            ),
            1 =>
            array (

                'id' => 2,
                'image' => 'brand_1595624257.png',
                'status' => 1,
                'title' => 'crowd',

            ),
            2 =>
            array (

                'id' => 3,
                'image' => 'brand_1595624229.png',
                'status' => 1,
                'title' => 'Getapp',

            ),
            3 =>
            array (

                'id' => 4,
                'image' => 'brand_1595624268.png',
                'status' => 1,
                'title' => 'softwareadvice',

            ),
            4 =>
            array (

                'id' => 5,
                'image' => 'brand_1595624280.png',
                'status' => 1,
                'title' => 'trustpilot',

            ),
        ));


    }
}
