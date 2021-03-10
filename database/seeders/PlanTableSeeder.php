<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('plan')->delete();

        \DB::table('plan')->insert(array (
            0 =>
            array (
                'active' => 1,
                'amount' => '5000',

                'id' => 4,
                'intervals' => '1 Week',
                'name' => 'Dog food',
                'ref_id' => '1Udf0bj465M9ecoz',
                'status' => 0,
                'times' => 3,

                'user_id' => 41,
            ),
            1 =>
            array (
                'active' => 1,
                'amount' => '3000',

                'id' => 5,
                'intervals' => '1 Month',
                'name' => 'Map',
                'ref_id' => 'PLAN-n0SjNy',
                'status' => 0,
                'times' => 4,

                'user_id' => 41,
            ),
        ));


    }
}
