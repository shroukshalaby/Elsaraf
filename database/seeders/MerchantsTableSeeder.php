<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('merchants')->delete();

        \DB::table('merchants')->insert(array (
            0 =>
            array (

                'email' => 'freakboss3@gmail.com',
                'id' => 42,
                'merchant_key' => 'ABRgVASTvWO7G60r',
                'name' => 'sadfg',
                'ref_id' => NULL,
                'status' => 1,

                'user_id' => 41,
            ),
            1 =>
            array (

                'email' => 'info@boomchart.net',
                'id' => 43,
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'name' => 'Stakecrypto',
                'ref_id' => NULL,
                'status' => 1,

                'user_id' => 41,
            ),
            2 =>
            array (

                'email' => NULL,
                'id' => 44,
                'merchant_key' => '88MpaPYglF6qfACI',
                'name' => 'Boomchain',
                'ref_id' => 'MER-fDmla4',
                'status' => 1,

                'user_id' => 41,
            ),
        ));


    }
}
