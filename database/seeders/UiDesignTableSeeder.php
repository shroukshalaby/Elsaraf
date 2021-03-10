<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UiDesignTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ui_design')->delete();

        \DB::table('ui_design')->insert(array (
            0 =>
            array (

                'header_body' => 'Give your customers the gift of modern, frictionless, painless payments. Integrate once and let your customers pay you however they want.',
                'header_title' => 'The easy way to pay is right here',
                'id' => 1,
                'nav_type' => 1,
                's1_title' => 'Market leaders use app to reach their brand & business.',
                's2_body' => '<p>Over 10,000 businesses of all sizes use Boompay to accept payments online, including some of Africa\'s biggest brands.</p>
<p>Your customers will love the simple, secure payment experience, and if you need any help, our friendly Support team is only a quick phone call (or email) away.</p>
<p>Thank you for choosing Boompay. We look forward to being a reliable growth engine and partner to you, your team, and your business.</p>',
                's2_image' => 'section1_1595628336.png',
                's2_title' => 'Trusted by 60,000+ businesses',
                's3_body' => 'Introduce your own payment solution for your customers and employees to use worldwide. Everything is possible, from card products all the way to digital banking and payment apps.

We’re your specialists for issuing and technically integrating payment solutions. With us, you get everything from one source: modular end-to-end solutions, flexibly configurable white-label products.',
                's3_image' => 'section2_1595626647.png',
                's3_title' => 'Optimize your business processes with your own solutions',
                's4_body' => 'Join our program and learn to invest on asset. Earn from buying, selling and exchanging assets. Asset can also be transferred within platform. The value of asset changes every 1hour based on live market prices',
                's4_image' => 'section3_1612152049.png',
                's4_title' => 'Reliable asset program',
                's5_body' => 'Turn on Round-up Rules and start saving up effortlessly. Whenever you make a purchase, Goals make it easy to save for the things you want or want to do. There’s no need for spreadsheets or extra apps to budget and track your money.',
                's5_title' => 'Build your savings without even trying.',
                's6_body' => 'Boost your sales with our modular service portfolio. For one, you can accept and process payments via various sales channels.',
                's6_title' => 'Accepting payments worldwide',
                's7_body' => 'Boompay is backed by notable investors as well as some of the best payments companies on the planet.',
                's7_image' => 'section7_1595629930.png',
                's7_title' => 'What our happy client say about our success',
                's8_body' => 'Join our program and learn to invest on asset. Earn from buying, selling and exchanging assets. Asset can also be transferred within platform. The value of asset changes every 1hour based on live market prices',
                's8_image' => 'section8_1586432780.png',
                's8_title' => 'Reliable asset program',
                's9_body' => 'We charge 10% of loaned amount as interest fee. Balance must exceed or equal to 50% of loaned amount as collateral. Participation in save 4 me & PY scheme will not be allowed until loan is paid.',
                's9_image' => 'section9_1586432802.png',
                's9_title' => 'Easy access to loan',

            ),
        ));


    }
}
