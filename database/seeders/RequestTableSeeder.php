<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('request')->delete();

        \DB::table('request')->insert(array (
            0 =>
            array (
                'amount' => 2000.0,
                'charge' => '100',
                'confirm' => 'mUt5z5ZW',

                'email' => 'freakboss3@gmail.com',
                'id' => 19,
                'ref_id' => '9JSOi2QSERPIzGVs',
                'status' => 0,

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => 300.0,
                'charge' => '15',
                'confirm' => 'sCol2Z07',

                'email' => 'freakboss3@gmail.com',
                'id' => 20,
                'ref_id' => 'RQ-73OKuxlx',
                'status' => 0,

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => 40000.0,
                'charge' => '2000',
                'confirm' => 'wfT3Ly0e',

                'email' => 'freakboss3@gmail.com',
                'id' => 21,
                'ref_id' => 'RQ-qcuJh9',
                'status' => 0,

                'user_id' => 41,
            ),
            3 =>
            array (
                'amount' => 40000.0,
                'charge' => '2000',
                'confirm' => 'w1Drjefw',

                'email' => 'freakboss3@gmail.com',
                'id' => 22,
                'ref_id' => 'RQ-VkIlkJ',
                'status' => 0,

                'user_id' => 41,
            ),
            4 =>
            array (
                'amount' => 3000.0,
                'charge' => '150',
                'confirm' => 'kRGEwXpT',

                'email' => 'freakboss3@gmail.com',
                'id' => 23,
                'ref_id' => 'RQ-9kb2rr',
                'status' => 0,

                'user_id' => 41,
            ),
        ));


    }
}
