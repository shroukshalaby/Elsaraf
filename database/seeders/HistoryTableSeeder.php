<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('history')->delete();

        \DB::table('history')->insert(array (
            0 =>
            array (
                'amount' => '21000',

                'id' => 1,
                'main' => 1,
                'ref' => 'TR-LNyPGo',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => '4400',

                'id' => 2,
                'main' => 1,
                'ref' => 'VC-mLQl0h',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => '3300',

                'id' => 3,
                'main' => 0,
                'ref' => 'VC-SpDqlM',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            3 =>
            array (
                'amount' => '3300',

                'id' => 4,
                'main' => 0,
                'ref' => 'VC-wZERnF',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            4 =>
            array (
                'amount' => '3300',

                'id' => 5,
                'main' => 0,
                'ref' => 'VC-zwyPGG',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            5 =>
            array (
                'amount' => '3300',

                'id' => 6,
                'main' => 1,
                'ref' => 'VC-LjBDgP',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            6 =>
            array (
                'amount' => '3300',

                'id' => 7,
                'main' => 0,
                'ref' => 'VC-LOB5t1',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            7 =>
            array (
                'amount' => '1100',

                'id' => 8,
                'main' => 0,
                'ref' => 'VC-hxb94j',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            8 =>
            array (
                'amount' => '1100',

                'id' => 9,
                'main' => 0,
                'ref' => 'VC-uGffx2',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            9 =>
            array (
                'amount' => '103',

                'id' => 10,
                'main' => 1,
                'ref' => 'BP-5hOGj9',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            10 =>
            array (
                'amount' => '103000',

                'id' => 11,
                'main' => 1,
                'ref' => 'BTC-FrWmFM',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            11 =>
            array (
                'amount' => '140904',

                'id' => 12,
                'main' => 1,
                'ref' => 'BTC-XeXJcV',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            12 =>
            array (
                'amount' => '4000',

                'id' => 13,
                'main' => 1,
                'ref' => 'ST-kDCd9b',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            13 =>
            array (
                'amount' => '400000',

                'id' => 15,
                'main' => 1,
                'ref' => 'SC-525n8z',
                'status' => 1,
                'type' => NULL,

                'user_id' => 41,
            ),
            14 =>
            array (
                'amount' => '1000000',

                'id' => 16,
                'main' => 1,
                'ref' => 'DN-YjbEuN',
                'status' => 1,
                'type' => NULL,

                'user_id' => 41,
            ),
            15 =>
            array (
                'amount' => NULL,

                'id' => 17,
                'main' => 1,
                'ref' => 'MER-fDmla4',
                'status' => 1,
                'type' => NULL,

                'user_id' => 41,
            ),
            16 =>
            array (
                'amount' => '2484',

                'id' => 18,
                'main' => 1,
                'ref' => 'INV-rkQsl5',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            17 =>
            array (
                'amount' => '270000',

                'id' => 19,
                'main' => 1,
                'ref' => 'au6xy8JqzMGL7fKF',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            18 =>
            array (
                'amount' => '3348',

                'id' => 20,
                'main' => 1,
                'ref' => 'INV-uPCJgY',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            19 =>
            array (
                'amount' => '376000',

                'id' => 21,
                'main' => 0,
                'ref' => 'SC-0HvHrn',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            20 =>
            array (
                'amount' => '2700',

                'id' => 22,
                'main' => 0,
                'ref' => 'DN-QKsjbx',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            21 =>
            array (
                'amount' => '2700',

                'id' => 23,
                'main' => 0,
                'ref' => 'DN-MhCI4g',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            22 =>
            array (
                'amount' => '45000',

                'id' => 24,
                'main' => 0,
                'ref' => 'DN-sNsDLd',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            23 =>
            array (
                'amount' => '18000',

                'id' => 25,
                'main' => 0,
                'ref' => 'DN-5PD6fN',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            24 =>
            array (
                'amount' => '2700',

                'id' => 26,
                'main' => 0,
                'ref' => 'DN-RQq6pA',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            25 =>
            array (
                'amount' => '2700',

                'id' => 27,
                'main' => 0,
                'ref' => 'DN-ExHG1w',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            26 =>
            array (
                'amount' => '376000',

                'id' => 28,
                'main' => 0,
                'ref' => 'SC-afRhSZ',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            27 =>
            array (
                'amount' => '42000',

                'id' => 29,
                'main' => 1,
                'ref' => 'TR-6Jv7VJ',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            28 =>
            array (
                'amount' => '3150',

                'id' => 30,
                'main' => 1,
                'ref' => 'TR-yn8OHf',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            29 =>
            array (
                'amount' => '4200',

                'id' => 31,
                'main' => 1,
                'ref' => 'TR-Tn9LaK',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            30 =>
            array (
                'amount' => '42000',

                'id' => 32,
                'main' => 1,
                'ref' => 'TR-VYN4im',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            31 =>
            array (
                'amount' => '7614',

                'id' => 34,
                'main' => 1,
                'ref' => 'INV-C7ShAS',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            32 =>
            array (
                'amount' => '7614',

                'id' => 35,
                'main' => 0,
                'ref' => 'INV-NCjgDm',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            33 =>
            array (
                'amount' => '3420',

                'id' => 36,
                'main' => 1,
                'ref' => 'ORD-123456',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            34 =>
            array (
                'amount' => '102.571',

                'id' => 45,
                'main' => 0,
                'ref' => 'MER-8i0cqX',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            35 =>
            array (
                'amount' => '1025.71',

                'id' => 46,
                'main' => 0,
                'ref' => 'MER-e6rF2A',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            36 =>
            array (
                'amount' => '1025.71',

                'id' => 47,
                'main' => 0,
                'ref' => 'MER-e6rF2A',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            37 =>
            array (
                'amount' => '103.03',

                'id' => 50,
                'main' => 0,
                'ref' => 'MER-VSXLqn',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            38 =>
            array (
                'amount' => '1025.71',

                'id' => 51,
                'main' => 0,
                'ref' => 'MER-TFUIZ8',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            39 =>
            array (
                'amount' => '100000',

                'id' => 52,
                'main' => 1,
                'ref' => 'ST-TEJJnY',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            40 =>
            array (
                'amount' => '100000',

                'id' => 53,
                'main' => 1,
                'ref' => 'ST-82pfm6',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            41 =>
            array (
                'amount' => '60000',

                'id' => 54,
                'main' => 1,
                'ref' => 'ST-BR5OW6',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            42 =>
            array (
                'amount' => '70000',

                'id' => 55,
                'main' => 1,
                'ref' => 'ST-Fb0bY7',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            43 =>
            array (
                'amount' => '10000',

                'id' => 56,
                'main' => 1,
                'ref' => 'ST-uOraAn',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            44 =>
            array (
                'amount' => '5000',

                'id' => 57,
                'main' => 1,
                'ref' => 'ST-BfWN1z',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            45 =>
            array (
                'amount' => '5000',

                'id' => 58,
                'main' => 1,
                'ref' => 'ST-JD0D00',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            46 =>
            array (
                'amount' => '50000',

                'id' => 59,
                'main' => 1,
                'ref' => 'ST-ADDdyQ',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            47 =>
            array (
                'amount' => '60000',

                'id' => 60,
                'main' => 1,
                'ref' => 'ST-82wlvW',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            48 =>
            array (
                'amount' => '50000',

                'id' => 61,
                'main' => 1,
                'ref' => 'ST-xKvDnN',
                'status' => 0,
                'type' => 1,

                'user_id' => 41,
            ),
            49 =>
            array (
                'amount' => '27000',

                'id' => 63,
                'main' => 0,
                'ref' => 'DN-vArCAQ',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            50 =>
            array (
                'amount' => '103000',

                'id' => 64,
                'main' => 1,
                'ref' => 'BTC-lg7Ooj',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            51 =>
            array (
                'amount' => '0',

                'id' => 65,
                'main' => 1,
                'ref' => 'ORD-QPlOPF',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            52 =>
            array (
                'amount' => '18000',

                'id' => 66,
                'main' => 1,
                'ref' => 'ORD-DA5kcd',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            53 =>
            array (
                'amount' => '36000',

                'id' => 67,
                'main' => 1,
                'ref' => 'ORD-8eR6JQ',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            54 =>
            array (
                'amount' => '18000',

                'id' => 68,
                'main' => 1,
                'ref' => 'ORD-bhYtqO',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            55 =>
            array (
                'amount' => '72000',

                'id' => 69,
                'main' => 1,
                'ref' => 'ORD-LrQkhA',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            56 =>
            array (
                'amount' => '72000',

                'id' => 70,
                'main' => 1,
                'ref' => 'ORD-LrQkhA',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            57 =>
            array (
                'amount' => '54000',

                'id' => 71,
                'main' => 1,
                'ref' => 'ORD-zdQdj2',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            58 =>
            array (
                'amount' => '54000',

                'id' => 72,
                'main' => 1,
                'ref' => 'ORD-mItFzn',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            59 =>
            array (
                'amount' => '272700',

                'id' => 82,
                'main' => 1,
                'ref' => 'ORD-4a0ZTS',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            60 =>
            array (
                'amount' => '2270700',

                'id' => 83,
                'main' => 1,
                'ref' => 'ORD-K2vyGg',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            61 =>
            array (
                'amount' => '12600',

                'id' => 84,
                'main' => 1,
                'ref' => 'ORD-zCliof',
                'status' => 1,
                'type' => 1,

                'user_id' => 41,
            ),
            62 =>
            array (
                'amount' => '5500',

                'id' => 85,
                'main' => 1,
                'ref' => 'VC-lnYXIr',
                'status' => 1,
                'type' => 2,

                'user_id' => 48,
            ),
            63 =>
            array (
                'amount' => '1100',

                'id' => 86,
                'main' => 0,
                'ref' => 'VC-wkjL2i',
                'status' => 1,
                'type' => 2,

                'user_id' => 48,
            ),
            64 =>
            array (
                'amount' => '4400',

                'id' => 87,
                'main' => 1,
                'ref' => 'VC-U2m2hN',
                'status' => 1,
                'type' => 2,

                'user_id' => 48,
            ),
            65 =>
            array (
                'amount' => '2100',

                'id' => 88,
                'main' => 1,
                'ref' => 'TR-uxkqHX',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            66 =>
            array (
                'amount' => '2000',

                'id' => 89,
                'main' => 1,
                'ref' => 'TR-uxkqHX',
                'status' => 1,
                'type' => 1,

                'user_id' => 48,
            ),
            67 =>
            array (
                'amount' => '11000',

                'id' => 90,
                'main' => 1,
                'ref' => 'VC-ZA7hEb',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
            68 =>
            array (
                'amount' => '5500',

                'id' => 91,
                'main' => 1,
                'ref' => 'VC-xEYulb',
                'status' => 1,
                'type' => 2,

                'user_id' => 41,
            ),
        ));


    }
}
