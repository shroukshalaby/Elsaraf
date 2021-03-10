<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('branch')->delete();

        \DB::table('branch')->insert(array (
            0 =>
            array (
                'address' => 'Hell',
                'country' => 'Indonesia',

                'id' => 3,
                'mobile' => '43567865433567',
                'name' => 'Histol',
                'postal_code' => '3454447567',
                'state' => 'Georgia',

                'zip_code' => 4365443,
            ),
            1 =>
            array (
                'address' => 'Sekupang Batamg',
                'country' => 'Antigua & Barbuda',

                'id' => 4,
                'mobile' => '13245678786',
                'name' => 'Bilson',
                'postal_code' => '2423',
                'state' => 'Georgia',

                'zip_code' => 300216,
            ),
            2 =>
            array (
                'address' => '47 Nungua Link Road 2nd Floor',
                'country' => 'England',

                'id' => 6,
                'mobile' => '13245678786',
                'name' => 'Manchester',
                'postal_code' => '2423',
                'state' => 'Bigboss',

                'zip_code' => 300216,
            ),
        ));


    }
}
