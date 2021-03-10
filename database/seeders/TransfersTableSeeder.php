<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransfersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('transfers')->delete();

        \DB::table('transfers')->insert(array (
            0 =>
            array (
                'amount' => '2000',
                'charge' => 100,

                'id' => 72,
                'receiver_id' => 48,
                'ref_id' => 'TR-uxkqHX',
                'sender_id' => 41,
                'status' => 1,
                'temp' => NULL,

            ),
        ));


    }
}
