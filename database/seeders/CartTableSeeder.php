<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart')->delete();
        
        \DB::table('cart')->insert(array (
            0 => 
            array (
                'cost' => 20000.0,
                'id' => 184,
                'product' => 16,
                'quantity' => 3,
                'store' => NULL,
                'title' => 'Baby Towel',
                'total' => NULL,
                'uniqueid' => 'VSsJA0T',
            ),
            1 => 
            array (
                'cost' => 20000.0,
                'id' => 185,
                'product' => 15,
                'quantity' => 1,
                'store' => NULL,
                'title' => 'Bottle',
                'total' => NULL,
                'uniqueid' => 'VSsJA0T',
            ),
            2 => 
            array (
                'cost' => 300000.0,
                'id' => 186,
                'product' => 7,
                'quantity' => 1,
                'store' => NULL,
                'title' => 'Lg Tv 2.0',
                'total' => NULL,
                'uniqueid' => 'VSsJA0T',
            ),
            3 => 
            array (
                'cost' => 2500000.0,
                'id' => 187,
                'product' => 6,
                'quantity' => 1,
                'store' => 1,
                'title' => '2020 Camry SE',
                'total' => NULL,
                'uniqueid' => 'VSsJA0T',
            ),
            4 => 
            array (
                'cost' => 20000.0,
                'id' => 189,
                'product' => 15,
                'quantity' => 3,
                'store' => 1,
                'title' => 'Bottle',
                'total' => '60000',
                'uniqueid' => 'rNzA6fl',
            ),
            5 => 
            array (
                'cost' => 2000.0,
                'id' => 200,
                'product' => 9,
                'quantity' => 1,
                'store' => 3,
                'title' => 'Fish',
                'total' => '2000',
                'uniqueid' => 'P2aGXCZ',
            ),
            6 => 
            array (
                'cost' => 2000.0,
                'id' => 201,
                'product' => 9,
                'quantity' => 3,
                'store' => 3,
                'title' => 'Fish',
                'total' => '6000',
                'uniqueid' => 'NwIfW6x',
            ),
            7 => 
            array (
                'cost' => 2000.0,
                'id' => 202,
                'product' => 9,
                'quantity' => 1,
                'store' => 3,
                'title' => 'Fish',
                'total' => '2000',
                'uniqueid' => 'M5dV8pl',
            ),
            8 => 
            array (
                'cost' => 2000.0,
                'id' => 203,
                'product' => 9,
                'quantity' => 3,
                'store' => 3,
                'title' => 'Fish',
                'total' => '6000',
                'uniqueid' => 'r5oUpd5',
            ),
            9 => 
            array (
                'cost' => 2000.0,
                'id' => 204,
                'product' => 9,
                'quantity' => 2,
                'store' => 3,
                'title' => 'Fish',
                'total' => '4000',
                'uniqueid' => 'BjREcXy',
            ),
            10 => 
            array (
                'cost' => 300000.0,
                'id' => 205,
                'product' => 7,
                'quantity' => 1,
                'store' => 1,
                'title' => 'Lg Tv 2.0',
                'total' => '300000',
                'uniqueid' => 'ccaixXO',
            ),
            11 => 
            array (
                'cost' => 20000.0,
                'id' => 206,
                'product' => 15,
                'quantity' => 1,
                'store' => 1,
                'title' => 'Bottle',
                'total' => '20000',
                'uniqueid' => 'pb9KuaD',
            ),
            12 => 
            array (
                'cost' => 2500000.0,
                'id' => 207,
                'product' => 6,
                'quantity' => 1,
                'store' => 1,
                'title' => '2020 Camry SE',
                'total' => '2500000',
                'uniqueid' => 'pb9KuaD',
            ),
            13 => 
            array (
                'cost' => 10000.0,
                'id' => 208,
                'product' => 17,
                'quantity' => 1,
                'store' => 4,
                'title' => 'Bread',
                'total' => '10000',
                'uniqueid' => 'TuCtVsk',
            ),
        ));
        
        
    }
}