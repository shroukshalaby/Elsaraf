<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('logo')->delete();

        \DB::table('logo')->insert(array (
            0 =>
            array (

                'dark' => 'images/logo_1601821066.png',
                'id' => 1,
                'image_link' => 'images/logo_1601871271.png',
                'image_link2' => 'images/favicon_1610092046.jpg',

            ),
        ));


    }
}
