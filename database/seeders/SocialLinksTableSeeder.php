<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('social_links')->delete();

        \DB::table('social_links')->insert(array (
            0 =>
            array (

                'id' => 1,
                'type' => 'facebook',

                'value' => 'https://facebook.com/',
            ),
            1 =>
            array (

                'id' => 2,
                'type' => 'instagram',

                'value' => 'https://instagram.com/',
            ),
            2 =>
            array (

                'id' => 3,
                'type' => 'twitter',

                'value' => 'https://twitter.com/',
            ),
            3 =>
            array (

                'id' => 4,
                'type' => 'skype',

                'value' => NULL,
            ),
            4 =>
            array (

                'id' => 5,
                'type' => 'pinterest',

                'value' => NULL,
            ),
            5 =>
            array (

                'id' => 7,
                'type' => 'linkedin',

                'value' => NULL,
            ),
            6 =>
            array (

                'id' => 8,
                'type' => 'youtube',

                'value' => NULL,
            ),
            7 =>
            array (

                'id' => 9,
                'type' => 'whatsapp',

                'value' => 'https://whatsapp.com/',
            ),
            8 =>
            array (

                'id' => 10,
                'type' => 'telegram',

                'value' => 'https://telegram.com/',
            ),
        ));


    }
}
