<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('services')->delete();

        \DB::table('services')->insert(array (
            0 =>
            array (

                'details' => 'Intelligent value-added services for digital banking, sales.',
                'id' => 1,
                'image' => 'service_1587646811.png',
                'title' => 'Promote sales',

            ),
            1 =>
            array (

                'details' => 'Data-based solutions for retail, analytics, and risk management.',
                'id' => 2,
                'image' => 'service_1587646963.png',
                'title' => 'Life saving solutions',

            ),
            2 =>
            array (

                'details' => 'A centralized payment solution for accepting cards.',
                'id' => 3,
                'image' => 'service_1587647149.png',
                'title' => 'Easy payment system',

            ),
            3 =>
            array (

                'details' => 'We keep your financial details private and transactions secure.',
                'id' => 5,
                'image' => NULL,
                'title' => 'Secure payments',

            ),
        ));


    }
}
