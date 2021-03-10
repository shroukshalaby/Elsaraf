<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComplianceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('compliance')->delete();

        \DB::table('compliance')->insert(array (
            0 =>
            array (
                'address' => 'aasdfghj',
                'business_type' => 'Starter Business',
                'category' => 'Herbal Medicine',
                'city' => NULL,
                'country' => NULL,

                'day' => 30,
                'description' => 'asdfgh',
                'first_name' => 'asdfgh',
                'id' => 2,
                'id_type' => 'International Passport',
                'idcard' => 'idcard1611705156png',
                'industry' => 'Health',
                'last_name' => 'sadfgh',
                'legal_name' => NULL,
                'month' => 'Mar',
                'nationality' => 'Anguilla',
                'office_address' => NULL,
                'phone_code' => NULL,
                'phone_number' => NULL,
                'proof' => 'proof1611705067jpg',
                'registration_type' => 'Incorporated Company',
                'staff_size' => '1-5',
                'state' => NULL,
                'status' => 2,
                'trading_name' => 'Boomchart',

                'user_id' => 41,
                'website' => NULL,
                'year' => '2001',
            ),
            1 =>
            array (
                'address' => 'qwedfg',
                'business_type' => 'Registered Business',
                'category' => 'Restaurants',
                'city' => NULL,
                'country' => NULL,

                'day' => 12,
                'description' => 'asdfg',
                'first_name' => 'sdfgh',
                'id' => 3,
                'id_type' => 'Voters Card',
                'idcard' => 'idcard1611868864png',
                'industry' => 'Hospitality',
                'last_name' => 'asdsfgh',
                'legal_name' => 'aasdfgh',
                'month' => 'Mar',
                'nationality' => '-1',
                'office_address' => NULL,
                'phone_code' => NULL,
                'phone_number' => NULL,
                'proof' => 'proof1611868919png',
                'registration_type' => 'Free Zone Entity',
                'staff_size' => '1-5',
                'state' => NULL,
                'status' => 1,
                'trading_name' => 'sdfghj',

                'user_id' => 48,
                'website' => NULL,
                'year' => '1994',
            ),
        ));


    }
}
