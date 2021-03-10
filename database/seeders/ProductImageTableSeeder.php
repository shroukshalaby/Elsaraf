<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('product_image')->delete();

        \DB::table('product_image')->insert(array (
            0 =>
            array (

                'id' => 17,
                'image' => '1590272746.jpeg',
                'product_id' => 3,

            ),
            1 =>
            array (

                'id' => 30,
                'image' => '1611594647.jpg',
                'product_id' => 15,

            ),
            2 =>
            array (

                'id' => 31,
                'image' => '1611595108.jpg',
                'product_id' => 7,

            ),
            3 =>
            array (

                'id' => 32,
                'image' => '1611595118.jpg',
                'product_id' => 7,

            ),
            4 =>
            array (

                'id' => 34,
                'image' => '1611595306.jpg',
                'product_id' => 6,

            ),
            5 =>
            array (

                'id' => 36,
                'image' => '1611601026.jpg',
                'product_id' => 16,

            ),
            6 =>
            array (

                'id' => 37,
                'image' => '1611659092.jpg',
                'product_id' => 9,

            ),
            7 =>
            array (

                'id' => 38,
                'image' => '1611690325.jpg',
                'product_id' => 17,

            ),
            8 =>
            array (

                'id' => 39,
                'image' => '1611690339.jpg',
                'product_id' => 17,

            ),
            9 =>
            array (

                'id' => 40,
                'image' => '1611690348.jpg',
                'product_id' => 17,

            ),
            10 =>
            array (

                'id' => 41,
                'image' => '1611690359.jpg',
                'product_id' => 17,

            ),
        ));


    }
}
