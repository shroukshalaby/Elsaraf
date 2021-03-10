<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('faq')->delete();

        \DB::table('faq')->insert(array (
            0 =>
            array (
                'answer' => '<p>Corporate internet banking is a secure online banking platform that enables cutomers make transfers to anyone in the world, 24 hours a day, 7 days a week</p>',

                'id' => 43,
                'question' => 'What is corporate internate banking?',

            ),
            1 =>
            array (
                'answer' => '<p>Yes account update requsests can be made at any of the branches</p>',

                'id' => 44,
                'question' => 'Can i update my account details from any branch?',

            ),
            2 =>
            array (
                'answer' => '<p>Accounts become dormant after 6 months of inactivity</p>',

                'id' => 45,
                'question' => 'How long does it take before my account becomes inactive?',

            ),
            3 =>
            array (
                'answer' => '<p>Yes, the account can be operated through any of our internet banking solution.</p>',

                'id' => 46,
                'question' => 'Is it possible to open an account in the coutry and operate the account while out of the country?',

            ),
        ));


    }
}
