<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DonationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('donations')->delete();

        \DB::table('donations')->insert(array (
            0 =>
            array (
                'amount' => '20000',
                'anonymous' => 0,

                'donation_id' => 7,
                'id' => 15,
                'ref_id' => 'o3Lte67WR09KwLLc',
                'status' => 1,

                'user_id' => NULL,
            ),
            1 =>
            array (
                'amount' => '4000',
                'anonymous' => 1,

                'donation_id' => 9,
                'id' => 22,
                'ref_id' => 'Z2aSP4hsu1asN9YL',
                'status' => 1,

                'user_id' => NULL,
            ),
            2 =>
            array (
                'amount' => '10000',
                'anonymous' => 1,

                'donation_id' => 9,
                'id' => 23,
                'ref_id' => '13CNtowdkEkRLg36',
                'status' => 1,

                'user_id' => NULL,
            ),
            3 =>
            array (
                'amount' => '300',
                'anonymous' => 1,

                'donation_id' => 12,
                'id' => 36,
                'ref_id' => 'P4gjLYgEo8lys7df',
                'status' => 1,

                'user_id' => 41,
            ),
            4 =>
            array (
                'amount' => '20000',
                'anonymous' => 0,

                'donation_id' => 12,
                'id' => 37,
                'ref_id' => 'srYdShdMjpJIuknr',
                'status' => 1,

                'user_id' => 41,
            ),
            5 =>
            array (
                'amount' => '100',
                'anonymous' => 1,

                'donation_id' => 12,
                'id' => 38,
                'ref_id' => 'vlWZnv0UZ5RaEjhV',
                'status' => 1,

                'user_id' => 41,
            ),
            6 =>
            array (
                'amount' => '3000',
                'anonymous' => 0,

                'donation_id' => 17,
                'id' => 39,
                'ref_id' => 'vVwpJyGqEeJQ0P45',
                'status' => 1,

                'user_id' => 41,
            ),
            7 =>
            array (
                'amount' => '5000',
                'anonymous' => 0,

                'donation_id' => 17,
                'id' => 40,
                'ref_id' => 'Ftmn3WgppeSl5cT0',
                'status' => 1,

                'user_id' => 41,
            ),
            8 =>
            array (
                'amount' => '4000',
                'anonymous' => 1,

                'donation_id' => 17,
                'id' => 41,
                'ref_id' => 'd3Um9xCe3CTuRZju',
                'status' => 1,

                'user_id' => 41,
            ),
            9 =>
            array (
                'amount' => '4000',
                'anonymous' => 1,

                'donation_id' => 17,
                'id' => 42,
                'ref_id' => 'dp0qxarG2V7PDu9v',
                'status' => 1,

                'user_id' => 41,
            ),
            10 =>
            array (
                'amount' => '4000',
                'anonymous' => 1,

                'donation_id' => 17,
                'id' => 43,
                'ref_id' => 'TBeRbqUzjCz6vFoK',
                'status' => 1,

                'user_id' => 41,
            ),
            11 =>
            array (
                'amount' => '5000',
                'anonymous' => 1,

                'donation_id' => 17,
                'id' => 44,
                'ref_id' => '1siwUNWx4SCK2wmu',
                'status' => 1,

                'user_id' => NULL,
            ),
            12 =>
            array (
                'amount' => '300000',
                'anonymous' => 1,

                'donation_id' => 17,
                'id' => 45,
                'ref_id' => 'nSvWnmUy1lcyAFXu',
                'status' => 1,

                'user_id' => NULL,
            ),
            13 =>
            array (
                'amount' => '30000',
                'anonymous' => 1,

                'donation_id' => 18,
                'id' => 46,
                'ref_id' => 'GgGSZ8y7iwaCvwmO',
                'status' => 1,

                'user_id' => NULL,
            ),
            14 =>
            array (
                'amount' => '3000',
                'anonymous' => 0,

                'donation_id' => 20,
                'id' => 47,
                'ref_id' => 'DN-jOqZPA',
                'status' => 0,

                'user_id' => NULL,
            ),
            15 =>
            array (
                'amount' => '3000',
                'anonymous' => 0,

                'donation_id' => 20,
                'id' => 48,
                'ref_id' => 'DN-QKsjbx',
                'status' => 1,

                'user_id' => NULL,
            ),
            16 =>
            array (
                'amount' => '50000',
                'anonymous' => 1,

                'donation_id' => 20,
                'id' => 50,
                'ref_id' => 'DN-sNsDLd',
                'status' => 1,

                'user_id' => NULL,
            ),
            17 =>
            array (
                'amount' => '3000',
                'anonymous' => 0,

                'donation_id' => 20,
                'id' => 51,
                'ref_id' => 'DN-QA0Qxy',
                'status' => 0,

                'user_id' => NULL,
            ),
            18 =>
            array (
                'amount' => '20000',
                'anonymous' => 1,

                'donation_id' => 20,
                'id' => 52,
                'ref_id' => 'DN-5PD6fN',
                'status' => 1,

                'user_id' => NULL,
            ),
            19 =>
            array (
                'amount' => '3000',
                'anonymous' => 1,

                'donation_id' => 20,
                'id' => 54,
                'ref_id' => 'DN-ExHG1w',
                'status' => 1,

                'user_id' => NULL,
            ),
            20 =>
            array (
                'amount' => '30000',
                'anonymous' => 1,

                'donation_id' => 20,
                'id' => 55,
                'ref_id' => 'DN-vArCAQ',
                'status' => 1,

                'user_id' => 41,
            ),
        ));


    }
}
