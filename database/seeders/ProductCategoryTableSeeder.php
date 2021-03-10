<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('product_category')->delete();

        \DB::table('product_category')->insert(array (
            0 =>
            array (

                'id' => 1,
                'name' => 'Technology',

                'user_id' => 41,
            ),
            1 =>
            array (

                'id' => 2,
                'name' => 'Gadgets',

                'user_id' => 41,
            ),
            2 =>
            array (

                'id' => 4,
                'name' => 'Cleaning',

                'user_id' => 41,
            ),
            3 =>
            array (

                'id' => 6,
                'name' => 'Food Items',

                'user_id' => 41,
            ),
        ));


    }
}
