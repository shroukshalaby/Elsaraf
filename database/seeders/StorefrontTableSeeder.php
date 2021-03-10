<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StorefrontTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('storefront')->delete();

        \DB::table('storefront')->insert(array (
            0 =>
            array (
                'category' => 'Drinks',

                'id' => 1,
                'note_status' => 1,
                'revenue' => '2270700',
                'shipping_status' => 1,
                'status' => 1,
                'store_desc' => 'sADFGH',
                'store_name' => 'Boomchart',
                'store_url' => 'Boomchart-GlTBvl',

                'user_id' => 41,
            ),
            1 =>
            array (
                'category' => 'Baby Products',

                'id' => 2,
                'note_status' => 0,
                'revenue' => '0',
                'shipping_status' => 0,
                'status' => 1,
                'store_desc' => 'werty',
                'store_name' => 'ffdddd',
                'store_url' => 'ffdddd',

                'user_id' => 41,
            ),
            2 =>
            array (
                'category' => 'Restaurant',

                'id' => 4,
                'note_status' => 2,
                'revenue' => '12600',
                'shipping_status' => 1,
                'status' => 1,
                'store_desc' => 'sell and buy everything in Nigeria',
                'store_name' => 'Nadia',
                'store_url' => 'Nadia',

                'user_id' => 41,
            ),
            3 =>
            array (
                'category' => 'Baby Products',

                'id' => 5,
                'note_status' => 1,
                'revenue' => '0',
                'shipping_status' => 1,
                'status' => 1,
                'store_desc' => 'asdfgh',
                'store_name' => 'Castro',
                'store_url' => 'Castro',

                'user_id' => 41,
            ),
        ));


    }
}
