<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscribersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('subscribers')->delete();

        \DB::table('subscribers')->insert(array (
            0 =>
            array (
                'amount' => '5000',
                'charge' => '1500',

                'expiring_date' => '2021-01-23 21:50:28',
                'id' => 12,
                'notify' => 1,
                'plan_id' => 4,
                'ref_id' => 'Q15sgSoFlVKRYlLd',
                'status' => 1,
                'times' => 0,

                'user_id' => 41,
            ),
        ));


    }
}
