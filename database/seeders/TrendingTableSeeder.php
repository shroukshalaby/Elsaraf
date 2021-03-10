<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrendingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('trending')->delete();

        \DB::table('trending')->insert(array (
            0 =>
            array (
                'cat_id' => 2,

                'details' => '<p>It may be cold at home, but winter months are the peak season for Caribbean beaches, and for good reason: With beautiful scenery, tropical weather, and a dazzling array of adventure opportunities, a trip to sunny Mexico can be the perfect cure for the winter blues.</p>',
                'id' => 9,
                'image' => 'post_1595630633.jpg',
                'status' => 1,
                'title' => 'Budget for Your Winter Trip to Cancun',

                'views' => 25,
            ),
            1 =>
            array (
                'cat_id' => 2,

                'details' => '<p>We don’t have a crystal ball, and can’t predict when rates will change again, but we wanted to clearly communicate what’s happening today. We believe that maintaining our high Protected Goals Account rates—and rewarding the choice to save—will help our customers continue to feel confident with their money.</p>',
                'id' => 10,
                'image' => 'post_1595630773.jpg',
                'status' => 1,
                'title' => 'We are still choosing to help you grow your money and your confidence',

                'views' => 4,
            ),
            2 =>
            array (
                'cat_id' => 2,

                'details' => '<p>You know you should be saving, but what should you save for first? Prioritizing your savings goals can be confusing. Here’s how to sift through it all.</p>',
                'id' => 11,
                'image' => 'post_1595630790.jpg',
                'status' => 1,
                'title' => 'Prioritize your savings goals based on what you really want.',

                'views' => 11,
            ),
        ));


    }
}
