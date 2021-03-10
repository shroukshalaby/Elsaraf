<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupportTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('support')->delete();

        \DB::table('support')->insert(array (
            0 =>
            array (

                'files' => '["support_WwE9ljgfRj.png"]',
                'id' => 16,
                'message' => 'sdfgh',
                'priority' => 'Low',
                'ref_no' => NULL,
                'status' => 0,
                'subject' => 'sdfgh',
                'ticket_id' => 'RC85IcDNcyU1QcEY',
                'type' => 'subscription',

                'user_id' => 41,
            ),
        ));


    }
}
