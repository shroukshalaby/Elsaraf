<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepositTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deposit')->delete();
        
        \DB::table('deposit')->insert(array (
            0 => 
            array (
                'amount' => '100',
                'date' => '2019-08-16 13:27:35',
                'details' => '',
                'id' => 29,
                'payment_id' => '2',
                'status' => 0,
                'token' => 242331,
                'trans_id' => '',
                'user_id' => 11,
            ),
            1 => 
            array (
                'amount' => '1000000',
                'date' => '2019-08-29 05:18:12',
                'details' => 'Paid',
                'id' => 30,
                'payment_id' => '2',
                'status' => 0,
                'token' => 1567048693,
                'trans_id' => 'zMwZ8WWAasBqbeu7hmMK',
                'user_id' => 11,
            ),
            2 => 
            array (
                'amount' => '0',
                'date' => '2019-09-06 17:55:51',
                'details' => 'Domain purchase',
                'id' => 31,
                'payment_id' => 'Bitcoin',
                'status' => 0,
                'token' => 1567785352,
                'trans_id' => 'xpAGtoelWiDdPVgiBMGr',
                'user_id' => 11,
            ),
        ));
        
        
    }
}