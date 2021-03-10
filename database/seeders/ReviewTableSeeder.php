<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('review')->delete();

        \DB::table('review')->insert(array (
            0 =>
            array (

                'id' => 11,
                'image_link' => 'update_1595666475.jpg',
                'name' => 'Jason Well',
                'occupation' => 'Forex trader',
                'review' => 'As YC\'s first Nigerian startup Boompay leads the charge of great companies coming out of Africa, powering modern payments for an entire continent.',
                'status' => 1,

            ),
            1 =>
            array (

                'id' => 12,
                'image_link' => 'update_1595666510.jpg',
                'name' => 'JacK Mill',
                'occupation' => 'Market analyst',
                'review' => 'Our investment in Boompay aligns with the kind of investments we look for - those that will help extend our reach into the global commerce ecosystem',
                'status' => 1,

            ),
            2 =>
            array (

                'id' => 14,
                'image_link' => 'update_1595666519.jpg',
                'name' => 'Big brother',
                'occupation' => 'Web developer',
                'review' => 'Boompay is highly technical and fanatically customer oriented. We’re excited to back such people in one of the world’s fastest-growing regions.',
                'status' => 1,

            ),
        ));


    }
}
