<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WHistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('w_history')->delete();

        \DB::table('w_history')->insert(array (
            0 =>
            array (
                'amount' => 30000,
                'bank_id' => NULL,
                'charge' => NULL,

                'id' => 113,
                'next_settlement' => '2021-02-09 14:05:41',
                'reference' => 'ST-ADDdyQ',
                'secret' => NULL,
                'status' => 0,
                'sub_id' => 6,
                'type' => 2,

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => 15000,
                'bank_id' => '10',
                'charge' => 1500,

                'id' => 114,
                'next_settlement' => '2021-02-09 14:05:41',
                'reference' => 'ST-ADDdyQ',
                'secret' => NULL,
                'status' => 0,
                'sub_id' => NULL,
                'type' => 1,

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => 6000,
                'bank_id' => NULL,
                'charge' => NULL,

                'id' => 115,
                'next_settlement' => '2021-02-09 14:05:41',
                'reference' => 'ST-82wlvW',
                'secret' => 'mSQmT5',
                'status' => 0,
                'sub_id' => 4,
                'type' => 2,

                'user_id' => 41,
            ),
            3 =>
            array (
                'amount' => 30000,
                'bank_id' => NULL,
                'charge' => NULL,

                'id' => 116,
                'next_settlement' => '2021-01-28 14:05:41',
                'reference' => 'ST-82wlvW',
                'secret' => '9ka1Uw',
                'status' => 1,
                'sub_id' => 6,
                'type' => 2,

                'user_id' => 41,
            ),
            4 =>
            array (
                'amount' => 24000,
                'bank_id' => '10',
                'charge' => 3600,

                'id' => 117,
                'next_settlement' => '2021-02-09 14:05:41',
                'reference' => 'ST-82wlvW',
                'secret' => NULL,
                'status' => 0,
                'sub_id' => NULL,
                'type' => 1,

                'user_id' => 41,
            ),
            5 =>
            array (
                'amount' => 5000,
                'bank_id' => NULL,
                'charge' => NULL,

                'id' => 118,
                'next_settlement' => '2021-02-09 14:05:41',
                'reference' => 'ST-xKvDnN',
                'secret' => 'enxuSE',
                'status' => 0,
                'sub_id' => 4,
                'type' => 2,

                'user_id' => 41,
            ),
            6 =>
            array (
                'amount' => 30000,
                'bank_id' => NULL,
                'charge' => NULL,

                'id' => 119,
                'next_settlement' => '2021-01-28 14:05:41',
                'reference' => 'ST-xKvDnN',
                'secret' => 'lrH62K',
                'status' => 1,
                'sub_id' => 6,
                'type' => 2,

                'user_id' => 41,
            ),
            7 =>
            array (
                'amount' => 15000,
                'bank_id' => '10',
                'charge' => 3000,

                'id' => 120,
                'next_settlement' => '2021-01-28 14:05:41',
                'reference' => 'ST-xKvDnN',
                'secret' => NULL,
                'status' => 1,
                'sub_id' => NULL,
                'type' => 1,

                'user_id' => 41,
            ),
        ));


    }
}
