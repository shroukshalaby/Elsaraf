<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StorefrontProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('storefront_products')->delete();

        \DB::table('storefront_products')->insert(array (
            0 =>
            array (

                'id' => 1,
                'product_id' => 6,
                'store_id' => 1,

            ),
            1 =>
            array (

                'id' => 2,
                'product_id' => 7,
                'store_id' => 1,

            ),
            2 =>
            array (

                'id' => 8,
                'product_id' => 15,
                'store_id' => 1,

            ),
            3 =>
            array (

                'id' => 9,
                'product_id' => 16,
                'store_id' => 2,

            ),
            4 =>
            array (

                'id' => 10,
                'product_id' => 9,
                'store_id' => 3,

            ),
            5 =>
            array (

                'id' => 11,
                'product_id' => 17,
                'store_id' => 4,

            ),
            6 =>
            array (

                'id' => 14,
                'product_id' => 15,
                'store_id' => 4,

            ),
            7 =>
            array (

                'id' => 15,
                'product_id' => 16,
                'store_id' => 4,

            ),
            8 =>
            array (

                'id' => 16,
                'product_id' => 7,
                'store_id' => 5,

            ),
        ));


    }
}
