<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
            0 =>
            array (
                'active' => 1,
                'add_status' => 1,
                'address' => NULL,
                'amount' => '2500000',
                'cat_id' => NULL,
                'charge' => NULL,

                'description' => NULL,
                'id' => 6,
                'name' => '2020 Camry SE',
                'new' => 1,
                'note' => NULL,
                'note_status' => 1,
                'quantity' => 3,
                'quantity_status' => 0,
                'ref_id' => 'B0a6ucScVJ',
                'rq' => NULL,
                'shipping_fee' => NULL,
                'shipping_status' => 0,
                'sold' => 1,
                'status' => 1,

                'user_id' => 41,
            ),
            1 =>
            array (
                'active' => 1,
                'add_status' => 0,
                'address' => NULL,
                'amount' => '300000',
                'cat_id' => NULL,
                'charge' => NULL,

                'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                'id' => 7,
                'name' => 'Lg Tv 2.0',
                'new' => 1,
                'note' => NULL,
                'note_status' => 0,
                'quantity' => 0,
                'quantity_status' => 0,
                'ref_id' => 'CLJEnfOGxB',
                'rq' => NULL,
                'shipping_fee' => NULL,
                'shipping_status' => 0,
                'sold' => 1,
                'status' => 1,

                'user_id' => 41,
            ),
            2 =>
            array (
                'active' => 1,
                'add_status' => 0,
                'address' => NULL,
                'amount' => '20000',
                'cat_id' => 4,
                'charge' => NULL,

                'description' => NULL,
                'id' => 15,
                'name' => 'Bottle',
                'new' => 1,
                'note' => NULL,
                'note_status' => 0,
                'quantity' => 3,
                'quantity_status' => 0,
                'ref_id' => 'PRD-75lms6',
                'rq' => NULL,
                'shipping_fee' => NULL,
                'shipping_status' => 0,
                'sold' => 3,
                'status' => 1,

                'user_id' => 41,
            ),
            3 =>
            array (
                'active' => 1,
                'add_status' => 0,
                'address' => NULL,
                'amount' => '20000',
                'cat_id' => 4,
                'charge' => NULL,

                'description' => NULL,
                'id' => 16,
                'name' => 'Baby Towel',
                'new' => 1,
                'note' => NULL,
                'note_status' => 0,
                'quantity' => 8,
                'quantity_status' => 0,
                'ref_id' => 'PRD-ZGKYQ7',
                'rq' => NULL,
                'shipping_fee' => NULL,
                'shipping_status' => 1,
                'sold' => 4,
                'status' => 0,

                'user_id' => 41,
            ),
            4 =>
            array (
                'active' => 0,
                'add_status' => 0,
                'address' => NULL,
                'amount' => '10000',
                'cat_id' => 6,
                'charge' => NULL,

                'description' => NULL,
                'id' => 17,
                'name' => 'Bread',
                'new' => 1,
                'note' => NULL,
                'note_status' => 0,
                'quantity' => 89,
                'quantity_status' => 0,
                'ref_id' => 'PRD-2wzBQF',
                'rq' => NULL,
                'shipping_fee' => NULL,
                'shipping_status' => 1,
                'sold' => 1,
                'status' => 1,

                'user_id' => 41,
            ),
        ));


    }
}
