<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BillTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('bill_transactions')->delete();

        \DB::table('bill_transactions')->insert(array (
            0 =>
            array (
                'amount' => '1000',
                'biller' => 'AIRTEL VTU',
                'charge' => '100',

                'id' => 4,
                'ref' => 'wDZtJDT7',
                'track' => '9057550480',
                'trx_ref' => 'CF-FLYAPI-20201228081430880146',
                'type' => 1,

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => '1000',
                'biller' => 'MTN 1.5 GB',
                'charge' => '100',

                'id' => 5,
                'ref' => '7u6Pb7mr',
                'track' => '9057550480',
                'trx_ref' => 'CF-FLYAPI-20201228091923247473',
                'type' => 2,

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => '300',
                'biller' => 'GLO VTU',
                'charge' => '30',

                'id' => 6,
                'ref' => 'W1bnjVeo',
                'track' => '9057550480',
                'trx_ref' => 'CF-FLYAPI-20201228103143776531',
                'type' => 1,

                'user_id' => 41,
            ),
            3 =>
            array (
                'amount' => '300',
                'biller' => 'AIRTEL VTU',
                'charge' => '30',

                'id' => 7,
                'ref' => 'XeOFoEeH',
                'track' => '9072963268',
                'trx_ref' => 'CF-FLYAPI-20201228103237801634',
                'type' => 1,

                'user_id' => 41,
            ),
            4 =>
            array (
                'amount' => '100',
                'biller' => 'AIRTIME',
                'charge' => '10',

                'id' => 8,
                'ref' => 'PQ766D15',
                'track' => '9072963268',
                'trx_ref' => 'CF-FLYAPI-20201228111426447987',
                'type' => 1,

                'user_id' => 41,
            ),
            5 =>
            array (
                'amount' => '100',
                'biller' => 'AIRTEL 100 MB data bundle',
                'charge' => '10',

                'id' => 9,
                'ref' => 'mo8BEVo7',
                'track' => '9072963268',
                'trx_ref' => 'CF-FLYAPI-20201228111643570741',
                'type' => 2,

                'user_id' => 41,
            ),
            6 =>
            array (
                'amount' => '50',
                'biller' => 'AIRTEL 40 MB data bundle',
                'charge' => '5',

                'id' => 10,
                'ref' => 'VtinoWDT',
                'track' => '09072963268',
                'trx_ref' => 'CF-FLYAPI-20201228114145154024',
                'type' => 2,

                'user_id' => 41,
            ),
            7 =>
            array (
                'amount' => '50',
                'biller' => 'AIRTIME',
                'charge' => '5',

                'id' => 11,
                'ref' => 'v4ytWkr0',
                'track' => '09057550480',
                'trx_ref' => 'CF-FLYAPI-20201228114836815027',
                'type' => 1,

                'user_id' => 41,
            ),
            8 =>
            array (
                'amount' => '50',
                'biller' => 'AIRTIME',
                'charge' => '5',

                'id' => 12,
                'ref' => 'DFO04z0x',
                'track' => '09072963268',
                'trx_ref' => 'CF-FLYAPI-20201228124232234629',
                'type' => 1,

                'user_id' => 41,
            ),
            9 =>
            array (
                'amount' => '50',
                'biller' => 'AIRTIME',
                'charge' => '1.5',

                'id' => 13,
                'ref' => 'BP-n7j9hh',
                'track' => '09072963268',
                'trx_ref' => 'CF-FLYAPI-20210105113706777531',
                'type' => 1,

                'user_id' => 41,
            ),
            10 =>
            array (
                'amount' => '50',
                'biller' => 'AIRTIME',
                'charge' => '1.5',

                'id' => 14,
                'ref' => 'BP-wQvGqW',
                'track' => '07012311644',
                'trx_ref' => 'CF-FLYAPI-20210107065355116042',
                'type' => 1,

                'user_id' => 41,
            ),
            11 =>
            array (
                'amount' => '100',
                'biller' => 'AIRTIME',
                'charge' => '3',

                'id' => 15,
                'ref' => 'BP-5hOGj9',
                'track' => '09057550480',
                'trx_ref' => 'CF-FLYAPI-20210120014701952865',
                'type' => 1,

                'user_id' => 41,
            ),
        ));


    }
}
