<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChargesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('charges')->delete();

        \DB::table('charges')->insert(array (
            0 =>
            array (
                'amount' => '1.98',

                'finn' => NULL,
                'id' => 174,
                'log' => 'Received payment for Payment Link #pVRvxl7PF9V6f79F',
                'real_amount' => NULL,
                'ref_id' => 'eNxkwyyUkWbhZ5kV',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => '50',

                'finn' => NULL,
                'id' => 175,
                'log' => 'Charges for transfer #tVbGU7h2KodlvZKt',
                'real_amount' => NULL,
                'ref_id' => '0HkumOXUJmQXpyQH',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => '50',

                'finn' => NULL,
                'id' => 176,
                'log' => 'Charges for transfer #C74JZL4XfYgKmN13',
                'real_amount' => NULL,
                'ref_id' => 'phVzzFxUm3AS7CxT',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            3 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 177,
                'log' => 'Charges for transfer #1VZ1vfA9BCSOxdT8',
                'real_amount' => NULL,
                'ref_id' => 'kpgOzf4Q9sExtYuZ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            4 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 178,
                'log' => 'Charges for transfer #DNEDXOop0BfSPKAq',
                'real_amount' => NULL,
                'ref_id' => 'GgcgHeYegGKq70c7',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            5 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 179,
                'log' => 'Charges for transfer #5OC0N1igPJgT9ieY',
                'real_amount' => NULL,
                'ref_id' => 'WQINaqXF9ZTa6vjW',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            6 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 180,
                'log' => 'Received Donation for Payment Link76BgHHh8Fvg2DNnI',
                'real_amount' => NULL,
                'ref_id' => 'RjoV1nlAfoM96hvy',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            7 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 181,
                'log' => 'Charges for withdrawal 83dfIrdT004qxuLJ',
                'real_amount' => NULL,
                'ref_id' => 'UG6ylEPXAnVS9mez',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            8 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 184,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'WVR4uakQsd0qk9r0',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            9 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 185,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => '2T7jjN55z7WKpVC7',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            10 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 186,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'DqRHOz0g14xZhrKG',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            11 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 187,
                'log' => 'Charges for withdrawal OWgXxI7Ja5X3a8Qh',
                'real_amount' => NULL,
                'ref_id' => 'nTH4qGVHDC5vv2n7',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            12 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 188,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'afyGZFEJ3eFbzOBS',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            13 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 189,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'NRyQzFg7bgPyVujd',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            14 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 190,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => '2SvubBVLWmittjbV',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            15 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 191,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'AYszYoeLZPydJttF',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            16 =>
            array (
                'amount' => '70',

                'finn' => NULL,
                'id' => 192,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => '6Ar6eb2m5R07hFpV',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            17 =>
            array (
                'amount' => '70',

                'finn' => NULL,
                'id' => 193,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'YO54LGi3XrCMzIc1',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            18 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 194,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'HQfn5F8SxLy6JFzA',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            19 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 195,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => '6EtGdkgL542671ul',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            20 =>
            array (
                'amount' => '400',

                'finn' => NULL,
                'id' => 196,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => '4BaidwPCkLHwiDdY',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            21 =>
            array (
                'amount' => '12',

                'finn' => NULL,
                'id' => 197,
                'log' => 'Received payment for Payment Link #uLbtGuqp2UNdkDnL',
                'real_amount' => NULL,
                'ref_id' => 'Cf0ceCD7OGx84Pl4',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            22 =>
            array (
                'amount' => '4200',

                'finn' => NULL,
                'id' => 198,
                'log' => 'Received payment for Payment Link #ejE4BNdtIa2wFUKU',
                'real_amount' => NULL,
                'ref_id' => '9iqDcnW9VssOxjJJ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            23 =>
            array (
                'amount' => '2000',

                'finn' => NULL,
                'id' => 199,
                'log' => 'Received Donation for Payment Link76BgHHh8Fvg2DNnI',
                'real_amount' => NULL,
                'ref_id' => 'u3O5qNQcGqHiJDG6',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            24 =>
            array (
                'amount' => '10',

                'finn' => NULL,
                'id' => 200,
                'log' => 'Received Donation for Payment Link76BgHHh8Fvg2DNnI',
                'real_amount' => NULL,
                'ref_id' => 'hgKt2E2SmVpQiTKf',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            25 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 201,
                'log' => 'Received Donation for Payment Linkxufj59LTUjUS6TZ5',
                'real_amount' => NULL,
                'ref_id' => 'wgnHReh8DqHLQNIX',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            26 =>
            array (
                'amount' => '500',

                'finn' => NULL,
                'id' => 202,
                'log' => 'Received Donation for Payment Linkxufj59LTUjUS6TZ5',
                'real_amount' => NULL,
                'ref_id' => 'uEekfjBC8BTj5umT',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            27 =>
            array (
                'amount' => '400',

                'finn' => NULL,
                'id' => 203,
                'log' => 'Received Donation for Payment Linkxufj59LTUjUS6TZ5',
                'real_amount' => NULL,
                'ref_id' => 'fhIILpsNe0HWzA4F',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            28 =>
            array (
                'amount' => '400',

                'finn' => NULL,
                'id' => 204,
                'log' => 'Received Donation for Payment Linkxufj59LTUjUS6TZ5',
                'real_amount' => NULL,
                'ref_id' => 'YGclZfURKCRVXEWC',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            29 =>
            array (
                'amount' => '400',

                'finn' => NULL,
                'id' => 205,
                'log' => 'Received Donation for Payment Linkxufj59LTUjUS6TZ5',
                'real_amount' => NULL,
                'ref_id' => '6M8qpHpfa9grnsFj',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            30 =>
            array (
                'amount' => '500',

                'finn' => NULL,
                'id' => 206,
                'log' => 'Received Donation for Payment Linkxufj59LTUjUS6TZ5',
                'real_amount' => NULL,
                'ref_id' => 'i1P3aDgkKwyrxcvm',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            31 =>
            array (
                'amount' => '30000',

                'finn' => NULL,
                'id' => 207,
                'log' => 'Received Donation for Payment Linkxufj59LTUjUS6TZ5',
                'real_amount' => NULL,
                'ref_id' => 'LqKaDgFnlMBDANf5',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            32 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 208,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'O3sc4jhnYCO3W3D1',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            33 =>
            array (
                'amount' => '6',

                'finn' => NULL,
                'id' => 209,
                'log' => 'Verified Funding Request of 206NGN via Deposit with Card',
                'real_amount' => NULL,
                'ref_id' => '8NLpKpfpeev2mxnG',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            34 =>
            array (
                'amount' => '120',

                'finn' => NULL,
                'id' => 210,
                'log' => 'Verified Funding Request of 4120NGN via Deposit with Card',
                'real_amount' => NULL,
                'ref_id' => 'VSPzOAUeiv24aneV',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            35 =>
            array (
                'amount' => '1500',

                'finn' => NULL,
                'id' => 211,
                'log' => 'Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',
                'real_amount' => NULL,
                'ref_id' => 'CIdwQQMvZLumnqHK',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            36 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 212,
                'log' => 'Bill payment for #fKu7nJf9',
                'real_amount' => NULL,
                'ref_id' => 'L18jrxB4MqeIfJ1O',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            37 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 213,
                'log' => 'Bill payment for #qA1cC9CF',
                'real_amount' => NULL,
                'ref_id' => 'lfozZIo9pZWufi3o',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            38 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 214,
                'log' => 'Bill payment for #2qMsa8g0',
                'real_amount' => NULL,
                'ref_id' => 'YwLo0i6Pgj2PVzYN',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            39 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 215,
                'log' => 'Bill payment for #mhSMBmj4',
                'real_amount' => NULL,
                'ref_id' => 'LCksLE08RdZARMa5',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            40 =>
            array (
                'amount' => '50',

                'finn' => NULL,
                'id' => 216,
                'log' => 'Bill payment for #lvxJsjk8',
                'real_amount' => NULL,
                'ref_id' => '9ckidCKJv5rtxs9w',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            41 =>
            array (
                'amount' => '60',

                'finn' => NULL,
                'id' => 217,
                'log' => 'Bill payment for #e8SWnvKF',
                'real_amount' => NULL,
                'ref_id' => 'azpPrpwwlDgK0qk1',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            42 =>
            array (
                'amount' => '60',

                'finn' => NULL,
                'id' => 218,
                'log' => 'Bill payment for #cewTQj97',
                'real_amount' => NULL,
                'ref_id' => 'yc3N6I35pRCPBNLi',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            43 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 219,
                'log' => 'Bill payment for #wDZtJDT7',
                'real_amount' => NULL,
                'ref_id' => 'jwTnaZgHWHIqVpZE',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            44 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 220,
                'log' => 'Bill payment for #7u6Pb7mr',
                'real_amount' => NULL,
                'ref_id' => 'LuOaPI1wtjdBT0TD',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            45 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 221,
                'log' => 'Bill payment for #W1bnjVeo',
                'real_amount' => NULL,
                'ref_id' => 'u70pwBr3nphHqXmy',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            46 =>
            array (
                'amount' => '30',

                'finn' => NULL,
                'id' => 222,
                'log' => 'Bill payment for #XeOFoEeH',
                'real_amount' => NULL,
                'ref_id' => 'npcKbPZesCEyDyCm',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            47 =>
            array (
                'amount' => '10',

                'finn' => NULL,
                'id' => 223,
                'log' => 'Bill payment for #PQ766D15',
                'real_amount' => NULL,
                'ref_id' => 'FYGk8YjM69vOwRvo',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            48 =>
            array (
                'amount' => '10',

                'finn' => NULL,
                'id' => 224,
                'log' => 'Bill payment for #mo8BEVo7',
                'real_amount' => NULL,
                'ref_id' => 'QlAikp5ZX8I1lXdy',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            49 =>
            array (
                'amount' => '5',

                'finn' => NULL,
                'id' => 225,
                'log' => 'Bill payment for #VtinoWDT',
                'real_amount' => NULL,
                'ref_id' => 'Lnc3fXfJOdVzlFiq',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            50 =>
            array (
                'amount' => '5',

                'finn' => NULL,
                'id' => 226,
                'log' => 'Bill payment for #v4ytWkr0',
                'real_amount' => NULL,
                'ref_id' => 'M0nklwmhSNYjCPRy',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            51 =>
            array (
                'amount' => '5',

                'finn' => NULL,
                'id' => 227,
                'log' => 'Bill payment for #mkidxE87',
                'real_amount' => NULL,
                'ref_id' => '2eFZrtd3n9T2O5f0',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            52 =>
            array (
                'amount' => '5',

                'finn' => NULL,
                'id' => 228,
                'log' => 'Bill payment for #B91QIOXh',
                'real_amount' => NULL,
                'ref_id' => 'Vgaeotr5T0bi4A6d',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            53 =>
            array (
                'amount' => '5',

                'finn' => NULL,
                'id' => 229,
                'log' => 'Bill payment for #DFO04z0x',
                'real_amount' => NULL,
                'ref_id' => 'g0Jbb1WtW2ggNnPm',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            54 =>
            array (
                'amount' => '10',

                'finn' => NULL,
                'id' => 230,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'RILYFaS2G0ua0h7d',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            55 =>
            array (
                'amount' => '900',

                'finn' => NULL,
                'id' => 231,
                'log' => 'Verified Funding Request of 30900NGN via Deposit with Card',
                'real_amount' => NULL,
                'ref_id' => 'A4pgDcQEeghYaNJU',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            56 =>
            array (
                'amount' => '1500',

                'finn' => NULL,
                'id' => 232,
                'log' => 'Verified Funding Request of 51500NGN via Deposit with Card',
                'real_amount' => NULL,
                'ref_id' => 'KPq4nRU5iuvdWAkO',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            57 =>
            array (
                'amount' => '12',

                'finn' => NULL,
                'id' => 233,
                'log' => 'Verified Funding Request of 412NGN via Deposit with Card',
                'real_amount' => NULL,
                'ref_id' => 'kkB1MsoV8qL6VuGn',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            58 =>
            array (
                'amount' => '103.32',

                'finn' => NULL,
                'id' => 234,
                'log' => 'Verified Funding Request of 3547.32NGN via Deposit with Card',
                'real_amount' => NULL,
                'ref_id' => 'fkegXHSHk4FtWtkd',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            59 =>
            array (
                'amount' => '90',

                'finn' => NULL,
                'id' => 235,
                'log' => 'Verified Funding Request of 3090NGN via Deposit with Card',
                'real_amount' => NULL,
                'ref_id' => 'CHzEv4YtfMF3wgDD',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            60 =>
            array (
                'amount' => '46000',

                'finn' => NULL,
                'id' => 236,
                'log' => 'Charges for invoice #qhnAOpLAOVjMvCUI',
                'real_amount' => NULL,
                'ref_id' => 'MJ5t1pyZfTjs0WrH',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            61 =>
            array (
                'amount' => '180',

                'finn' => NULL,
                'id' => 237,
                'log' => 'Received payment for Payment Link #uLbtGuqp2UNdkDnL',
                'real_amount' => NULL,
                'ref_id' => 'i8brCaRzJxbUTO21',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            62 =>
            array (
                'amount' => '180',

                'finn' => NULL,
                'id' => 238,
                'log' => 'Received payment for Payment Link #uLbtGuqp2UNdkDnL',
                'real_amount' => NULL,
                'ref_id' => 'HFALHcxGWA7GIuXS',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            63 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 239,
                'log' => 'Received Donation for Payment LinkAivKD8mR7anHUVWV',
                'real_amount' => NULL,
                'ref_id' => 'zdpu8ziw79mSiuxQ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            64 =>
            array (
                'amount' => '30000',

                'finn' => NULL,
                'id' => 240,
                'log' => 'Received payment for order #2tYSgbm2pIhyz5l5',
                'real_amount' => NULL,
                'ref_id' => 'S1FmBPFXYzohTTYP',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            65 =>
            array (
                'amount' => '6000',

                'finn' => NULL,
                'id' => 241,
                'log' => 'Charges for BTC purchase #71FWQbbCDamd3IxA',
                'real_amount' => NULL,
                'ref_id' => '7gRAKKq087OmQNIK',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            66 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 242,
                'log' => 'Charges for ETH purchase #KqZUVS5uwauFQMLh',
                'real_amount' => NULL,
                'ref_id' => 'c4DPnxtjKaYvDuwL',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            67 =>
            array (
                'amount' => '10.302999999999999',

                'finn' => NULL,
                'id' => 243,
                'log' => 'Charges for merchant #5d3rcP1lNxcfNIAL',
                'real_amount' => NULL,
                'ref_id' => '7IW9yth31eKolJVi',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            68 =>
            array (
                'amount' => '20.555',

                'finn' => NULL,
                'id' => 244,
                'log' => 'Charges for merchant #qVW7obiJP5BuVaxf',
                'real_amount' => NULL,
                'ref_id' => 'rYxIsfUGGYaOkFc5',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            69 =>
            array (
                'amount' => '308.07',

                'finn' => NULL,
                'id' => 245,
                'log' => 'Charges for merchant #9gF5dSURbdXCfoKv',
                'real_amount' => NULL,
                'ref_id' => 'eopT6AeaviASpRwV',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            70 =>
            array (
                'amount' => '1500',

                'finn' => NULL,
                'id' => 246,
                'log' => 'Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',
                'real_amount' => NULL,
                'ref_id' => 'zrdSw6t3DaMJhXHR',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            71 =>
            array (
                'amount' => '2000',

                'finn' => 2,
                'id' => 247,
                'log' => 'Charges for transfer #H8eznc',
                'real_amount' => '40000',
                'ref_id' => 'Kb6bNa4rLgieb0d0',
                'tx_ref' => 'TR-H8eznc',
                'type' => 'TR',

                'user_id' => 41,
            ),
            72 =>
            array (
                'amount' => '1.5',

                'finn' => 2,
                'id' => 248,
                'log' => 'Bill payment for #BP-n7j9hh',
                'real_amount' => '50',
                'ref_id' => 'vpIquf3maboR5Dgy',
                'tx_ref' => 'BP-n7j9hh',
                'type' => 'BP',

                'user_id' => 41,
            ),
            73 =>
            array (
                'amount' => '6900',

                'finn' => 1,
                'id' => 249,
                'log' => 'Charges for BTC sold #BTC-DTNKc7',
                'real_amount' => '300',
                'ref_id' => 'tJxvtQV1NAagPPNC',
                'tx_ref' => 'BTC-DTNKc7',
                'type' => 'BTC',

                'user_id' => 41,
            ),
            74 =>
            array (
                'amount' => '6900',

                'finn' => 1,
                'id' => 250,
                'log' => 'Charges for BTC sold #BTC-Omo6I5',
                'real_amount' => '138000',
                'ref_id' => 'CfsX6vTGwDvzVcxH',
                'tx_ref' => 'BTC-Omo6I5',
                'type' => 'BTC',

                'user_id' => 41,
            ),
            75 =>
            array (
                'amount' => '27360',

                'finn' => 1,
                'id' => 251,
                'log' => 'Charges for BTC sold #BTC-67Poca',
                'real_amount' => '912000',
                'ref_id' => '4gmKk2oAgpZ4G0E5',
                'tx_ref' => 'BTC-67Poca',
                'type' => 'BTC',

                'user_id' => 41,
            ),
            76 =>
            array (
                'amount' => '12000',

                'finn' => 2,
                'id' => 252,
                'log' => 'Charges for BTC purchase #BTC-qwlp6S',
                'real_amount' => '400000',
                'ref_id' => 'Re5YzAB0rxf6YDtf',
                'tx_ref' => 'BTC-qwlp6S',
                'type' => 'BTC',

                'user_id' => 41,
            ),
            77 =>
            array (
                'amount' => '900',

                'finn' => 2,
                'id' => 253,
                'log' => 'Charges for withdrawal #ST-mg4WML84',
                'real_amount' => '30000',
                'ref_id' => 'P1Lro9TnGi82ILZn',
                'tx_ref' => 'ST-mg4WML84',
                'type' => 'ST',

                'user_id' => 41,
            ),
            78 =>
            array (
                'amount' => '1.5',

                'finn' => 2,
                'id' => 254,
                'log' => 'Bill payment for #BP-wQvGqW',
                'real_amount' => '50',
                'ref_id' => '31Kuq0iHHuI4D0Xm',
                'tx_ref' => 'BP-wQvGqW',
                'type' => 'BP',

                'user_id' => 41,
            ),
            79 =>
            array (
                'amount' => '103.03',

                'finn' => 1,
                'id' => 255,
                'log' => 'Charges for merchant #MER-sgDbmI',
                'real_amount' => '103.03',
                'ref_id' => 'jPDQX3RljAy6xg01',
                'tx_ref' => 'MER-sgDbmI',
                'type' => 'MER',

                'user_id' => 41,
            ),
            80 =>
            array (
                'amount' => '20000',

                'finn' => 2,
                'id' => 256,
                'log' => 'Charges for ETH purchase #ETH-pq61OU',
                'real_amount' => '400000',
                'ref_id' => 'Y4ExuELzak5wA9L4',
                'tx_ref' => 'ETH-pq61OU',
                'type' => 'ETH',

                'user_id' => 41,
            ),
            81 =>
            array (
                'amount' => '12000',

                'finn' => 2,
                'id' => 257,
                'log' => 'Charges for withdrawal #ST-hFLZmrGf',
                'real_amount' => '400000',
                'ref_id' => 'uD1fw0Cff2vBRtxm',
                'tx_ref' => 'ST-hFLZmrGf',
                'type' => 'ST',

                'user_id' => 41,
            ),
            82 =>
            array (
                'amount' => '0',

                'finn' => 2,
                'id' => 258,
                'log' => 'Charges for request money #RQ-VkIlkJ',
                'real_amount' => '0',
                'ref_id' => '9vgu0KfPGJoNXFjB',
                'tx_ref' => 'RQ-VkIlkJ',
                'type' => 'RQ',

                'user_id' => 41,
            ),
            83 =>
            array (
                'amount' => '1500',

                'finn' => NULL,
                'id' => 259,
                'log' => 'Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',
                'real_amount' => NULL,
                'ref_id' => 'EV4T65hHFEkxbt9V',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            84 =>
            array (
                'amount' => '1500',

                'finn' => NULL,
                'id' => 260,
                'log' => 'Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',
                'real_amount' => NULL,
                'ref_id' => 'HLwdG2huahxqmME0',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            85 =>
            array (
                'amount' => '400',

                'finn' => 2,
                'id' => 261,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => '4000',
                'ref_id' => 'Cj79kKTtj4LtJh8P',
                'tx_ref' => 'VC-1qm62j',
                'type' => 'VC',

                'user_id' => 41,
            ),
            86 =>
            array (
                'amount' => '300',

                'finn' => 2,
                'id' => 262,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => '3000',
                'ref_id' => 'K9VHShKe3dnwd8N9',
                'tx_ref' => 'VC-GELtK7',
                'type' => 'VC',

                'user_id' => 41,
            ),
            87 =>
            array (
                'amount' => '300',

                'finn' => 2,
                'id' => 263,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => '3000',
                'ref_id' => 'NQFntoKxt2IGyMtb',
                'tx_ref' => 'VC-Z52fyM',
                'type' => 'VC',

                'user_id' => 41,
            ),
            88 =>
            array (
                'amount' => '1000',

                'finn' => NULL,
                'id' => 264,
                'log' => 'Charges for transfer #TR-LNyPGo',
                'real_amount' => NULL,
                'ref_id' => 'TR-LNyPGo',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            89 =>
            array (
                'amount' => '400',

                'finn' => NULL,
                'id' => 265,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-mLQl0h',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            90 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 266,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-SpDqlM',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            91 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 267,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-wZERnF',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            92 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 268,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-zwyPGG',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            93 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 269,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-LjBDgP',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            94 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 270,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-LOB5t1',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            95 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 271,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-hxb94j',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            96 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 272,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-uGffx2',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            97 =>
            array (
                'amount' => '3',

                'finn' => NULL,
                'id' => 273,
                'log' => 'Bill payment for #BP-5hOGj9',
                'real_amount' => NULL,
                'ref_id' => 'BP-5hOGj9',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            98 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 274,
                'log' => 'Charges for BTC purchase #BTC-FrWmFM',
                'real_amount' => NULL,
                'ref_id' => 'mOcgvrbmZ0373KPP',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            99 =>
            array (
                'amount' => '90',

                'finn' => NULL,
                'id' => 275,
                'log' => 'Charges for withdrawal #ST-oe1UWN',
                'real_amount' => NULL,
                'ref_id' => 'ST-oe1UWN',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            100 =>
            array (
                'amount' => '120',

                'finn' => NULL,
                'id' => 276,
                'log' => 'Charges for withdrawal #ST-kDCd9b',
                'real_amount' => NULL,
                'ref_id' => 'ST-kDCd9b',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            101 =>
            array (
                'amount' => '30000',

                'finn' => NULL,
                'id' => 279,
                'log' => 'Received payment for order #au6xy8JqzMGL7fKF',
                'real_amount' => NULL,
                'ref_id' => 'au6xy8JqzMGL7fKF',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            102 =>
            array (
                'amount' => '276',

                'finn' => 1,
                'id' => 280,
                'log' => 'Charges for invoice #INV-rkQsl5',
                'real_amount' => '2760',
                'ref_id' => 'BAprogiNnPx94Hff',
                'tx_ref' => 'INV-rkQsl5',
                'type' => 'INV',

                'user_id' => 41,
            ),
            103 =>
            array (
                'amount' => '372',

                'finn' => 1,
                'id' => 281,
                'log' => 'Charges for invoice #INV-uPCJgY',
                'real_amount' => '3720',
                'ref_id' => 'HObeRxf1dXv0BzmX',
                'tx_ref' => 'INV-uPCJgY',
                'type' => 'INV',

                'user_id' => 41,
            ),
            104 =>
            array (
                'amount' => '372',

                'finn' => 1,
                'id' => 282,
                'log' => 'Charges for invoice #INV-uPCJgY',
                'real_amount' => '3720',
                'ref_id' => 'fat7Ih349MWyBZDO',
                'tx_ref' => 'INV-uPCJgY',
                'type' => 'INV',

                'user_id' => 41,
            ),
            105 =>
            array (
                'amount' => '24000',

                'finn' => NULL,
                'id' => 283,
                'log' => 'Received payment for Payment Link #SC-525n8z',
                'real_amount' => NULL,
                'ref_id' => 'SC-0HvHrn',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            106 =>
            array (
                'amount' => '180',

                'finn' => NULL,
                'id' => 284,
                'log' => 'Received Donation for Payment Link #DN-YjbEuN',
                'real_amount' => NULL,
                'ref_id' => 'DN-QKsjbx',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            107 =>
            array (
                'amount' => '180',

                'finn' => NULL,
                'id' => 285,
                'log' => 'Received Donation for Payment Link #DN-YjbEuN',
                'real_amount' => NULL,
                'ref_id' => 'DN-MhCI4g',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            108 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 286,
                'log' => 'Received Donation for Payment Link #DN-YjbEuN',
                'real_amount' => NULL,
                'ref_id' => 'DN-sNsDLd',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            109 =>
            array (
                'amount' => '1200',

                'finn' => NULL,
                'id' => 287,
                'log' => 'Received Donation for Payment Link #DN-YjbEuN',
                'real_amount' => NULL,
                'ref_id' => 'DN-5PD6fN',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            110 =>
            array (
                'amount' => '180',

                'finn' => NULL,
                'id' => 288,
                'log' => 'Received Donation for Payment Link #DN-YjbEuN',
                'real_amount' => NULL,
                'ref_id' => 'DN-RQq6pA',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            111 =>
            array (
                'amount' => '180',

                'finn' => NULL,
                'id' => 289,
                'log' => 'Received Donation for Payment Link #DN-YjbEuN',
                'real_amount' => NULL,
                'ref_id' => 'DN-ExHG1w',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            112 =>
            array (
                'amount' => '24000',

                'finn' => NULL,
                'id' => 290,
                'log' => 'Received payment for Payment Link #SC-525n8z',
                'real_amount' => NULL,
                'ref_id' => 'SC-afRhSZ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            113 =>
            array (
                'amount' => '2000',

                'finn' => NULL,
                'id' => 291,
                'log' => 'Charges for transfer #TR-6Jv7VJ',
                'real_amount' => NULL,
                'ref_id' => 'TR-6Jv7VJ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            114 =>
            array (
                'amount' => '150',

                'finn' => NULL,
                'id' => 292,
                'log' => 'Charges for transfer #TR-yn8OHf',
                'real_amount' => NULL,
                'ref_id' => 'TR-yn8OHf',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            115 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 293,
                'log' => 'Charges for transfer #TR-Tn9LaK',
                'real_amount' => NULL,
                'ref_id' => 'TR-Tn9LaK',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            116 =>
            array (
                'amount' => '2000',

                'finn' => NULL,
                'id' => 294,
                'log' => 'Charges for transfer #TR-VYN4im',
                'real_amount' => NULL,
                'ref_id' => 'TR-VYN4im',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            117 =>
            array (
                'amount' => '46000',

                'finn' => 1,
                'id' => 295,
                'log' => 'Charges for invoice #qhnAOpLAOVjMvCUI',
                'real_amount' => '460000',
                'ref_id' => 'x7VQJpwZ94Wz0Z6K',
                'tx_ref' => 'qhnAOpLAOVjMvCUI',
                'type' => 'INV',

                'user_id' => 41,
            ),
            118 =>
            array (
                'amount' => '846',

                'finn' => NULL,
                'id' => 296,
                'log' => 'Charges for invoice #INV-C7ShAS',
                'real_amount' => NULL,
                'ref_id' => 'INV-NCjgDm',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            119 =>
            array (
                'amount' => '380',

                'finn' => NULL,
                'id' => 297,
                'log' => 'Received payment for order #vh0NeXY7ZTeAe6WK',
                'real_amount' => NULL,
                'ref_id' => 'vh0NeXY7ZTeAe6WK',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            120 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 298,
                'log' => 'Verified Funding Request of 20200NGN via Card',
                'real_amount' => NULL,
                'ref_id' => 'ixgU2ABlgdlQcdrd',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            121 =>
            array (
                'amount' => '200',

                'finn' => NULL,
                'id' => 299,
                'log' => 'Verified Funding Request of 20200NGN via Card',
                'real_amount' => NULL,
                'ref_id' => 'hUH2gUV0V3CwuMZF',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            122 =>
            array (
                'amount' => '102.571',

                'finn' => NULL,
                'id' => 303,
                'log' => 'Charges for merchant payment #MER-8i0cqX',
                'real_amount' => NULL,
                'ref_id' => 'MER-8i0cqX',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            123 =>
            array (
                'amount' => '102.571',

                'finn' => NULL,
                'id' => 304,
                'log' => 'Charges for merchant payment #MER-8i0cqX',
                'real_amount' => NULL,
                'ref_id' => 'MER-8i0cqX',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            124 =>
            array (
                'amount' => '1025.71',

                'finn' => NULL,
                'id' => 305,
                'log' => 'Charges for merchant payment #MER-e6rF2A',
                'real_amount' => NULL,
                'ref_id' => 'MER-e6rF2A',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            125 =>
            array (
                'amount' => '1025.71',

                'finn' => NULL,
                'id' => 306,
                'log' => 'Charges for merchant payment #MER-e6rF2A',
                'real_amount' => NULL,
                'ref_id' => 'MER-e6rF2A',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            126 =>
            array (
                'amount' => '103.03',

                'finn' => NULL,
                'id' => 309,
                'log' => 'Charges for merchant payment #MER-VSXLqn',
                'real_amount' => NULL,
                'ref_id' => 'MER-VSXLqn',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            127 =>
            array (
                'amount' => '1025.71',

                'finn' => NULL,
                'id' => 310,
                'log' => 'Charges for merchant payment #MER-TFUIZ8',
                'real_amount' => NULL,
                'ref_id' => 'MER-TFUIZ8',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            128 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 311,
                'log' => 'Charges for withdrawal #ST-TEJJnY',
                'real_amount' => NULL,
                'ref_id' => 'ST-TEJJnY',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            129 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 312,
                'log' => 'Charges for withdrawal #ST-82pfm6',
                'real_amount' => NULL,
                'ref_id' => 'ST-82pfm6',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            130 =>
            array (
                'amount' => '1800',

                'finn' => NULL,
                'id' => 313,
                'log' => 'Charges for withdrawal #ST-BR5OW6',
                'real_amount' => NULL,
                'ref_id' => 'ST-BR5OW6',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            131 =>
            array (
                'amount' => '2100',

                'finn' => NULL,
                'id' => 314,
                'log' => 'Charges for withdrawal #ST-Fb0bY7',
                'real_amount' => NULL,
                'ref_id' => 'ST-Fb0bY7',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            132 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 315,
                'log' => 'Charges for withdrawal #ST-uOraAn',
                'real_amount' => NULL,
                'ref_id' => 'ST-uOraAn',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            133 =>
            array (
                'amount' => '150',

                'finn' => NULL,
                'id' => 316,
                'log' => 'Charges for withdrawal #ST-BfWN1z',
                'real_amount' => NULL,
                'ref_id' => 'ST-BfWN1z',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            134 =>
            array (
                'amount' => '150',

                'finn' => NULL,
                'id' => 317,
                'log' => 'Charges for withdrawal #ST-JD0D00',
                'real_amount' => NULL,
                'ref_id' => 'ST-JD0D00',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            135 =>
            array (
                'amount' => '1500',

                'finn' => NULL,
                'id' => 318,
                'log' => 'Charges for withdrawal #ST-ADDdyQ',
                'real_amount' => NULL,
                'ref_id' => 'ST-ADDdyQ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            136 =>
            array (
                'amount' => '3600',

                'finn' => NULL,
                'id' => 319,
                'log' => 'Charges for withdrawal #ST-82wlvW',
                'real_amount' => NULL,
                'ref_id' => 'ST-82wlvW',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            137 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 320,
                'log' => 'Charges for withdrawal #ST-xKvDnN',
                'real_amount' => NULL,
                'ref_id' => 'ST-xKvDnN',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            138 =>
            array (
                'amount' => '1800',

                'finn' => NULL,
                'id' => 321,
                'log' => 'Received Donation for Payment Link #DN-YjbEuN',
                'real_amount' => NULL,
                'ref_id' => 'DN-vArCAQ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            139 =>
            array (
                'amount' => '3000',

                'finn' => NULL,
                'id' => 322,
                'log' => 'Charges for BTC purchase #BTC-lg7Ooj',
                'real_amount' => NULL,
                'ref_id' => 'WLFH42Zeb4yeD3Lz',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            140 =>
            array (
                'amount' => '0',

                'finn' => NULL,
                'id' => 323,
                'log' => 'Received payment for order #ORD-QPlOPF',
                'real_amount' => NULL,
                'ref_id' => 'ORD-QPlOPF',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            141 =>
            array (
                'amount' => '2000',

                'finn' => NULL,
                'id' => 324,
                'log' => 'Received payment for order #ORD-DA5kcd',
                'real_amount' => NULL,
                'ref_id' => 'ORD-DA5kcd',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            142 =>
            array (
                'amount' => '4000',

                'finn' => NULL,
                'id' => 325,
                'log' => 'Received payment for order #ORD-8eR6JQ',
                'real_amount' => NULL,
                'ref_id' => 'ORD-8eR6JQ',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            143 =>
            array (
                'amount' => '2000',

                'finn' => NULL,
                'id' => 326,
                'log' => 'Received payment for order #ORD-bhYtqO',
                'real_amount' => NULL,
                'ref_id' => 'ORD-bhYtqO',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            144 =>
            array (
                'amount' => '8000',

                'finn' => NULL,
                'id' => 327,
                'log' => 'Received payment for order #ORD-LrQkhA',
                'real_amount' => NULL,
                'ref_id' => 'ORD-LrQkhA',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            145 =>
            array (
                'amount' => '8000',

                'finn' => NULL,
                'id' => 328,
                'log' => 'Received payment for order #ORD-LrQkhA',
                'real_amount' => NULL,
                'ref_id' => 'ORD-LrQkhA',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            146 =>
            array (
                'amount' => '6000',

                'finn' => NULL,
                'id' => 329,
                'log' => 'Received payment for order #ORD-zdQdj2',
                'real_amount' => NULL,
                'ref_id' => 'ORD-zdQdj2',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            147 =>
            array (
                'amount' => '6000',

                'finn' => NULL,
                'id' => 330,
                'log' => 'Received payment for order #ORD-mItFzn',
                'real_amount' => NULL,
                'ref_id' => 'ORD-mItFzn',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            148 =>
            array (
                'amount' => '30300',

                'finn' => NULL,
                'id' => 340,
                'log' => 'Received payment for order #ORD-4a0ZTS',
                'real_amount' => NULL,
                'ref_id' => 'ORD-4a0ZTS',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            149 =>
            array (
                'amount' => '252300',

                'finn' => NULL,
                'id' => 341,
                'log' => 'Received payment for order #ORD-K2vyGg',
                'real_amount' => NULL,
                'ref_id' => 'ORD-K2vyGg',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            150 =>
            array (
                'amount' => '1400',

                'finn' => NULL,
                'id' => 342,
                'log' => 'Received payment for order #ORD-zCliof',
                'real_amount' => NULL,
                'ref_id' => 'ORD-zCliof',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            151 =>
            array (
                'amount' => '300',

                'finn' => NULL,
                'id' => 343,
                'log' => 'Verified Funding Request of 30300NGN via Card',
                'real_amount' => NULL,
                'ref_id' => 'MyGaczx3n0V0hxSO',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 48,
            ),
            152 =>
            array (
                'amount' => '500',

                'finn' => NULL,
                'id' => 344,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-lnYXIr',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 48,
            ),
            153 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 345,
                'log' => 'Virtual Card funding charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-wkjL2i',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 48,
            ),
            154 =>
            array (
                'amount' => '400',

                'finn' => NULL,
                'id' => 346,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-U2m2hN',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 48,
            ),
            155 =>
            array (
                'amount' => '100',

                'finn' => NULL,
                'id' => 347,
                'log' => 'Charges for transfer #TR-uxkqHX',
                'real_amount' => NULL,
                'ref_id' => 'TR-uxkqHX',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            156 =>
            array (
                'amount' => '1000',

                'finn' => NULL,
                'id' => 348,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-ZA7hEb',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
            157 =>
            array (
                'amount' => '500',

                'finn' => NULL,
                'id' => 349,
                'log' => 'Virtual Card creation charge #',
                'real_amount' => NULL,
                'ref_id' => 'VC-xEYulb',
                'tx_ref' => NULL,
                'type' => NULL,

                'user_id' => 41,
            ),
        ));


    }
}
