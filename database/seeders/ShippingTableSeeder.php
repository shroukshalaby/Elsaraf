<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shipping')->delete();

        \DB::table('shipping')->insert(array (
            0 =>
            array (
                'amount' => '3000',

                'id' => 1,
                'region' => 'Lagos',

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => '4000',

                'id' => 2,
                'region' => 'Delta',

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => '3200',

                'id' => 3,
                'region' => 'Castro Town',

                'user_id' => 41,
            ),
        ));


    }
}
