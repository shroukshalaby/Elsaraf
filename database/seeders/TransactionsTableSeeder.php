<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('transactions')->delete();

        \DB::table('transactions')->insert(array (
            0 =>
            array (
                'amount' => 300.0,
                'card_number' => NULL,
                'charge' => '30',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 56,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 12,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'P4gjLYgEo8lys7df',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            1 =>
            array (
                'amount' => 200.0,
                'card_number' => NULL,
                'charge' => '12',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 58,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 16,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'SWTJ9Axhn1Z3VAXi',
                'sender_id' => 41,
                'status' => 1,
                'type' => 1,

            ),
            2 =>
            array (
                'amount' => 70000.0,
                'card_number' => NULL,
                'charge' => '4200',

                'email' => 'info@boomchart.net',
                'first_name' => 'ddddd',
                'id' => 59,
                'ip_address' => '::1',
                'last_name' => 'fffff',
                'payment_link' => 15,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'hxYBQDGeTpW1oVYz',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            3 =>
            array (
                'amount' => 20000.0,
                'card_number' => NULL,
                'charge' => '2000',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 60,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 12,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'srYdShdMjpJIuknr',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            4 =>
            array (
                'amount' => 100.0,
                'card_number' => NULL,
                'charge' => '10',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 61,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 12,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'vlWZnv0UZ5RaEjhV',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            5 =>
            array (
                'amount' => 3000.0,
                'card_number' => NULL,
                'charge' => '300',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 62,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 17,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'vVwpJyGqEeJQ0P45',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            6 =>
            array (
                'amount' => 5000.0,
                'card_number' => NULL,
                'charge' => '500',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 63,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 17,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'Ftmn3WgppeSl5cT0',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            7 =>
            array (
                'amount' => 4000.0,
                'card_number' => NULL,
                'charge' => '400',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 64,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 17,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'd3Um9xCe3CTuRZju',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            8 =>
            array (
                'amount' => 4000.0,
                'card_number' => NULL,
                'charge' => '400',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 65,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 17,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'dp0qxarG2V7PDu9v',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            9 =>
            array (
                'amount' => 4000.0,
                'card_number' => NULL,
                'charge' => '400',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 66,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 17,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'TBeRbqUzjCz6vFoK',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
            10 =>
            array (
                'amount' => 5000.0,
                'card_number' => NULL,
                'charge' => '500',

                'email' => 'info@boomchart.net',
                'first_name' => 'wjvdhvh',
                'id' => 67,
                'ip_address' => '::1',
                'last_name' => 'ej dhe h',
                'payment_link' => 17,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => '1siwUNWx4SCK2wmu',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            11 =>
            array (
                'amount' => 300000.0,
                'card_number' => NULL,
                'charge' => '30000',

                'email' => 'info@boomchart.net',
                'first_name' => 'dwfeee',
                'id' => 68,
                'ip_address' => '::1',
                'last_name' => 'cfefee',
                'payment_link' => 17,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'nSvWnmUy1lcyAFXu',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            12 =>
            array (
                'amount' => 460000.0,
                'card_number' => '4242 4242 4242 4242',
                'charge' => NULL,

                'email' => 'freakboss3@gmail.com',
                'first_name' => 'ffddd',
                'id' => 69,
                'ip_address' => '::1',
                'last_name' => 'ggggg',
                'payment_link' => 14,
                'payment_type' => NULL,
                'receiver_id' => 41,
                'ref_id' => 'q5HcnfkJ12mUwX8o',
                'sender_id' => NULL,
                'status' => 0,
                'type' => 3,

            ),
            13 =>
            array (
                'amount' => 460000.0,
                'card_number' => '4242 4242 4242 4242',
                'charge' => NULL,

                'email' => 'freakboss3@gmail.com',
                'first_name' => 'ffddd',
                'id' => 70,
                'ip_address' => '::1',
                'last_name' => 'ggggg',
                'payment_link' => 14,
                'payment_type' => NULL,
                'receiver_id' => 41,
                'ref_id' => 'FUCy9f2N4w8HSqdS',
                'sender_id' => NULL,
                'status' => 0,
                'type' => 3,

            ),
            14 =>
            array (
                'amount' => 460000.0,
                'card_number' => '4242 4242 4242 4242',
                'charge' => NULL,

                'email' => 'freakboss3@gmail.com',
                'first_name' => 'ffddd',
                'id' => 71,
                'ip_address' => '::1',
                'last_name' => 'ggggg',
                'payment_link' => 14,
                'payment_type' => NULL,
                'receiver_id' => 41,
                'ref_id' => 'h02snQY3Ak6gCUpJ',
                'sender_id' => NULL,
                'status' => 0,
                'type' => 3,

            ),
            15 =>
            array (
                'amount' => 460000.0,
                'card_number' => '4242 4242 4242 4242',
                'charge' => '46000',

                'email' => 'freakboss3@gmail.com',
                'first_name' => 'ffddd',
                'id' => 72,
                'ip_address' => '::1',
                'last_name' => 'ggggg',
                'payment_link' => 14,
                'payment_type' => NULL,
                'receiver_id' => 41,
                'ref_id' => '2Cqn7XI36uIBbMXL',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 3,

            ),
            16 =>
            array (
                'amount' => 3000.0,
                'card_number' => NULL,
                'charge' => '180',

                'email' => 'freak@f.com',
                'first_name' => 'sadfg',
                'id' => 73,
                'ip_address' => '::1',
                'last_name' => 'dsfg',
                'payment_link' => 16,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'Xl38bQUP9KGeMNKo',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            17 =>
            array (
                'amount' => 3000.0,
                'card_number' => NULL,
                'charge' => '180',

                'email' => 'f@s.com',
                'first_name' => 'sadfg',
                'id' => 74,
                'ip_address' => '::1',
                'last_name' => 'dsfg',
                'payment_link' => 16,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'KyH2oGwEBTLEsh8d',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            18 =>
            array (
                'amount' => 30000.0,
                'card_number' => NULL,
                'charge' => '3000',

                'email' => 'd@s.com',
                'first_name' => 'sdfgf',
                'id' => 75,
                'ip_address' => '::1',
                'last_name' => 'fffff',
                'payment_link' => 18,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'GgGSZ8y7iwaCvwmO',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            19 =>
            array (
                'amount' => 3000.0,
                'card_number' => NULL,
                'charge' => NULL,

                'email' => 'freakboss3@gmail.com',
                'first_name' => 'chhch',
                'id' => 76,
                'ip_address' => '::1',
                'last_name' => 'dj d c',
                'payment_link' => 16,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'SC-UAB0oC',
                'sender_id' => NULL,
                'status' => 0,
                'type' => 1,

            ),
            20 =>
            array (
                'amount' => 2760.0,
                'card_number' => '4242 4242 4242 4242',
                'charge' => '276',

                'email' => 'support@boomchart.com.ng',
                'first_name' => 'Castro',
                'id' => 77,
                'ip_address' => '::1',
                'last_name' => 'King',
                'payment_link' => 16,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => '7vzjXe7j8PYx69n4',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 3,

            ),
            21 =>
            array (
                'amount' => 3720.0,
                'card_number' => '4242 4242 4242 4242',
                'charge' => '372',

                'email' => 'info@boomchart.net',
                'first_name' => 'kjebv',
                'id' => 78,
                'ip_address' => '::1',
                'last_name' => 'dvduvbc',
                'payment_link' => 17,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'S6DTIfvxQwobCxh7',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 3,

            ),
            22 =>
            array (
                'amount' => 400000.0,
                'card_number' => NULL,
                'charge' => '24000',

                'email' => 'info@boomchart.net',
                'first_name' => 'sjdch',
                'id' => 80,
                'ip_address' => '::1',
                'last_name' => 'sdhcvh',
                'payment_link' => 19,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'SC-0HvHrn',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            23 =>
            array (
                'amount' => 3000.0,
                'card_number' => NULL,
                'charge' => NULL,

                'email' => 'info@boomchart.net',
                'first_name' => 'sdf',
                'id' => 81,
                'ip_address' => '::1',
                'last_name' => 'adsf',
                'payment_link' => 20,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'DN-jOqZPA',
                'sender_id' => NULL,
                'status' => 0,
                'type' => 1,

            ),
            24 =>
            array (
                'amount' => 3000.0,
                'card_number' => NULL,
                'charge' => '300',

                'email' => 'info@boomchart.net',
                'first_name' => 'sdf',
                'id' => 82,
                'ip_address' => '::1',
                'last_name' => 'adsf',
                'payment_link' => 20,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'DN-QKsjbx',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            25 =>
            array (
                'amount' => 50000.0,
                'card_number' => '4242 4242 4242 4242',
                'charge' => '5000',

                'email' => 'info@boomchart.net',
                'first_name' => 'weef',
                'id' => 84,
                'ip_address' => '::1',
                'last_name' => 'dadf',
                'payment_link' => 20,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'DN-sNsDLd',
                'sender_id' => NULL,
                'status' => 1,
                'type' => 1,

            ),
            26 =>
            array (
                'amount' => 103.03,
                'card_number' => NULL,
                'charge' => NULL,

                'email' => NULL,
                'first_name' => NULL,
                'id' => 92,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 28,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'MER-VSXLqn',
                'sender_id' => 41,
                'status' => 0,
                'type' => 4,

            ),
            27 =>
            array (
                'amount' => 1025.71,
                'card_number' => '4242 4242 4242 4242',
                'charge' => NULL,

                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 93,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'payment_link' => 29,
                'payment_type' => 'card',
                'receiver_id' => 41,
                'ref_id' => 'MER-TFUIZ8',
                'sender_id' => NULL,
                'status' => 0,
                'type' => 4,

            ),
            28 =>
            array (
                'amount' => 30000.0,
                'card_number' => NULL,
                'charge' => '3000',

                'email' => NULL,
                'first_name' => NULL,
                'id' => 94,
                'ip_address' => '::1',
                'last_name' => NULL,
                'payment_link' => 20,
                'payment_type' => 'account',
                'receiver_id' => 41,
                'ref_id' => 'DN-vArCAQ',
                'sender_id' => 41,
                'status' => 1,
                'type' => 2,

            ),
        ));


    }
}
