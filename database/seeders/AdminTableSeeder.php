<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin')->delete();

        \DB::table('admin')->insert(array (
            0 =>
            array (
                'bill' => 1,
                'blog' => 1,
                'charges' => 1,

                'crypto' => 1,
                'deposit' => 1,
                'donation' => 1,
                'first_name' => '',
                'id' => 1,
                'invoice' => 1,
                'last_name' => '',
                'merchant' => 1,
                'message' => 1,
                'password' => '$2y$10$gJ55pI6ziCGWsupNpPIVeeN7WfWw5nGr2elYHhBfFwYsylTc7sRrO',
                'profile' => 1,
                'promo' => 1,
                'remember_token' => 'HIlmzqNbd8clZI7TY8jd4sbaYAVAt5vIIbzEZySUrDqrTPJjM0hfhm2OjQUf',
                'request_money' => 1,
                'settlement' => 1,
                'single_charge' => 1,
                'store' => 1,
                'subscription' => 1,
                'support' => 1,
                'transfer' => 1,

                'username' => 'admin',
                'vcard' => 1,
            ),
        ));


    }
}
