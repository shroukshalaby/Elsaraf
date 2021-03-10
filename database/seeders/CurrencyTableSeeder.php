<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('currency')->delete();

        \DB::table('currency')->insert(array (
            0 =>
            array (
                'country' => 'Albania',

                'currency' => 'Leke',
                'id' => 1,
                'name' => 'ALL',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Lek',

            ),
            1 =>
            array (
                'country' => 'Afghanistan',

                'currency' => 'Afghanis',
                'id' => 3,
                'name' => 'AFN',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '؋',

            ),
            2 =>
            array (
                'country' => 'Argentina',

                'currency' => 'Pesos',
                'id' => 4,
                'name' => 'ARS',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            3 =>
            array (
                'country' => 'Aruba',

                'currency' => 'Guilders',
                'id' => 5,
                'name' => 'AWG',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'ƒ',

            ),
            4 =>
            array (
                'country' => 'Australia',

                'currency' => 'Dollars',
                'id' => 6,
                'name' => 'AUD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            5 =>
            array (
                'country' => 'Azerbaijan',

                'currency' => 'New Manats',
                'id' => 7,
                'name' => 'AZN',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'ман',

            ),
            6 =>
            array (
                'country' => 'Bahamas',

                'currency' => 'Dollars',
                'id' => 8,
                'name' => 'BSD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            7 =>
            array (
                'country' => 'Barbados',

                'currency' => 'Dollars',
                'id' => 9,
                'name' => 'BBD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            8 =>
            array (
                'country' => 'Belarus',

                'currency' => 'Rubles',
                'id' => 10,
                'name' => 'BYR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'p.',

            ),
            9 =>
            array (
                'country' => 'Belgium',

                'currency' => 'Euro',
                'id' => 11,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            10 =>
            array (
                'country' => 'Beliz',

                'currency' => 'Dollars',
                'id' => 12,
                'name' => 'BZD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'BZ$',

            ),
            11 =>
            array (
                'country' => 'Bermuda',

                'currency' => 'Dollars',
                'id' => 13,
                'name' => 'BMD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            12 =>
            array (
                'country' => 'Bolivia',

                'currency' => 'Bolivianos',
                'id' => 14,
                'name' => 'BOB',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$b',

            ),
            13 =>
            array (
                'country' => 'Bosnia and Herzegovina',

                'currency' => 'Convertible Marka',
                'id' => 15,
                'name' => 'BAM',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'KM',

            ),
            14 =>
            array (
                'country' => 'Botswana',

                'currency' => 'Pula',
                'id' => 16,
                'name' => 'BWP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'P',

            ),
            15 =>
            array (
                'country' => 'Bulgaria',

                'currency' => 'Leva',
                'id' => 17,
                'name' => 'BGN',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'лв',

            ),
            16 =>
            array (
                'country' => 'Brazil',

                'currency' => 'Reais',
                'id' => 18,
                'name' => 'BRL',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'R$',

            ),
            17 =>
            array (
            'country' => 'Britain (United Kingdom)',

                'currency' => 'Pounds',
                'id' => 19,
                'name' => 'GBP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            18 =>
            array (
                'country' => 'Brunei Darussalam',

                'currency' => 'Dollars',
                'id' => 20,
                'name' => 'BND',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            19 =>
            array (
                'country' => 'Cambodia',

                'currency' => 'Riels',
                'id' => 21,
                'name' => 'KHR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '៛',

            ),
            20 =>
            array (
                'country' => 'Canada',

                'currency' => 'Dollars',
                'id' => 22,
                'name' => 'CAD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            21 =>
            array (
                'country' => 'Cayman Islands',

                'currency' => 'Dollars',
                'id' => 23,
                'name' => 'KYD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            22 =>
            array (
                'country' => 'Chile',

                'currency' => 'Pesos',
                'id' => 24,
                'name' => 'CLP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            23 =>
            array (
                'country' => 'China',

                'currency' => 'Yuan Renminbi',
                'id' => 25,
                'name' => 'CNY',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '¥',

            ),
            24 =>
            array (
                'country' => 'Colombia',

                'currency' => 'Pesos',
                'id' => 26,
                'name' => 'COP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            25 =>
            array (
                'country' => 'Costa Rica',

                'currency' => 'Colón',
                'id' => 27,
                'name' => 'CRC',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₡',

            ),
            26 =>
            array (
                'country' => 'Croatia',

                'currency' => 'Kuna',
                'id' => 28,
                'name' => 'HRK',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'kn',

            ),
            27 =>
            array (
                'country' => 'Cuba',

                'currency' => 'Pesos',
                'id' => 29,
                'name' => 'CUP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₱',

            ),
            28 =>
            array (
                'country' => 'Cyprus',

                'currency' => 'Euro',
                'id' => 30,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            29 =>
            array (
                'country' => 'Czech Republic',

                'currency' => 'Koruny',
                'id' => 31,
                'name' => 'CZK',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Kč',

            ),
            30 =>
            array (
                'country' => 'Denmark',

                'currency' => 'Kroner',
                'id' => 32,
                'name' => 'DKK',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'kr',

            ),
            31 =>
            array (
                'country' => 'Dominican Republic',

                'currency' => 'Pesos',
                'id' => 33,
                'name' => 'DOP ',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'RD$',

            ),
            32 =>
            array (
                'country' => 'East Caribbean',

                'currency' => 'Dollars',
                'id' => 34,
                'name' => 'XCD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            33 =>
            array (
                'country' => 'Egypt',

                'currency' => 'Pounds',
                'id' => 35,
                'name' => 'EGP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            34 =>
            array (
                'country' => 'El Salvador',

                'currency' => 'Colones',
                'id' => 36,
                'name' => 'SVC',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            35 =>
            array (
            'country' => 'England (United Kingdom)',

                'currency' => 'Pounds',
                'id' => 37,
                'name' => 'GBP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            36 =>
            array (
                'country' => 'Euro',

                'currency' => 'Euro',
                'id' => 38,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            37 =>
            array (
                'country' => 'Falkland Islands',

                'currency' => 'Pounds',
                'id' => 39,
                'name' => 'FKP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            38 =>
            array (
                'country' => 'Fiji',

                'currency' => 'Dollars',
                'id' => 40,
                'name' => 'FJD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            39 =>
            array (
                'country' => 'France',

                'currency' => 'Euro',
                'id' => 41,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            40 =>
            array (
                'country' => 'Ghana',

                'currency' => 'Cedis',
                'id' => 42,
                'name' => 'GHS',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '¢',

            ),
            41 =>
            array (
                'country' => 'Gibraltar',

                'currency' => 'Pounds',
                'id' => 43,
                'name' => 'GIP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            42 =>
            array (
                'country' => 'Greece',

                'currency' => 'Euro',
                'id' => 44,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            43 =>
            array (
                'country' => 'Guatemala',

                'currency' => 'Quetzales',
                'id' => 45,
                'name' => 'GTQ',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Q',

            ),
            44 =>
            array (
                'country' => 'Guernsey',

                'currency' => 'Pounds',
                'id' => 46,
                'name' => 'GGP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            45 =>
            array (
                'country' => 'Guyana',

                'currency' => 'Dollars',
                'id' => 47,
                'name' => 'GYD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            46 =>
            array (
            'country' => 'Holland (Netherlands)',

                'currency' => 'Euro',
                'id' => 48,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            47 =>
            array (
                'country' => 'Honduras',

                'currency' => 'Lempiras',
                'id' => 49,
                'name' => 'HNL',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'L',

            ),
            48 =>
            array (
                'country' => 'Hong Kong',

                'currency' => 'Dollars',
                'id' => 50,
                'name' => 'HKD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            49 =>
            array (
                'country' => 'Hungary',

                'currency' => 'Forint',
                'id' => 51,
                'name' => 'HUF',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Ft',

            ),
            50 =>
            array (
                'country' => 'Iceland',

                'currency' => 'Kronur',
                'id' => 52,
                'name' => 'ISK',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'kr',

            ),
            51 =>
            array (
                'country' => 'India',

                'currency' => 'Rupees',
                'id' => 53,
                'name' => 'INR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Rp',

            ),
            52 =>
            array (
                'country' => 'Indonesia',

                'currency' => 'Rupiahs',
                'id' => 54,
                'name' => 'IDR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Rp',

            ),
            53 =>
            array (
                'country' => 'Iran',

                'currency' => 'Rials',
                'id' => 55,
                'name' => 'IRR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '﷼',

            ),
            54 =>
            array (
                'country' => 'Ireland',

                'currency' => 'Euro',
                'id' => 56,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            55 =>
            array (
                'country' => 'Isle of Man',

                'currency' => 'Pounds',
                'id' => 57,
                'name' => 'IMP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            56 =>
            array (
                'country' => 'Israel',

                'currency' => 'New Shekels',
                'id' => 58,
                'name' => 'ILS',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₪',

            ),
            57 =>
            array (
                'country' => 'Italy',

                'currency' => 'Euro',
                'id' => 59,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            58 =>
            array (
                'country' => 'Jamaica',

                'currency' => 'Dollars',
                'id' => 60,
                'name' => 'JMD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'J$',

            ),
            59 =>
            array (
                'country' => 'Japan',

                'currency' => 'Yen',
                'id' => 61,
                'name' => 'JPY',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '¥',

            ),
            60 =>
            array (
                'country' => 'Jersey',

                'currency' => 'Pounds',
                'id' => 62,
                'name' => 'JEP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            61 =>
            array (
                'country' => 'Kazakhstan',

                'currency' => 'Tenge',
                'id' => 63,
                'name' => 'KZT',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'лв',

            ),
            62 =>
            array (
            'country' => 'Korea (North)',

                'currency' => 'Won',
                'id' => 64,
                'name' => 'KPW',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₩',

            ),
            63 =>
            array (
            'country' => 'Korea (South)',

                'currency' => 'Won',
                'id' => 65,
                'name' => 'KRW',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₩',

            ),
            64 =>
            array (
                'country' => 'Kyrgyzstan',

                'currency' => 'Soms',
                'id' => 66,
                'name' => 'KGS',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'лв',

            ),
            65 =>
            array (
                'country' => 'Laos',

                'currency' => 'Kips',
                'id' => 67,
                'name' => 'LAK',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₭',

            ),
            66 =>
            array (
                'country' => 'Latvia',

                'currency' => 'Lati',
                'id' => 68,
                'name' => 'LVL',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Ls',

            ),
            67 =>
            array (
                'country' => 'Lebanon',

                'currency' => 'Pounds',
                'id' => 69,
                'name' => 'LBP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            68 =>
            array (
                'country' => 'Liberia',

                'currency' => 'Dollars',
                'id' => 70,
                'name' => 'LRD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            69 =>
            array (
                'country' => 'Liechtenstein',

                'currency' => 'Switzerland Francs',
                'id' => 71,
                'name' => 'CHF',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'CHF',

            ),
            70 =>
            array (
                'country' => 'Lithuania',

                'currency' => 'Litai',
                'id' => 72,
                'name' => 'LTL',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Lt',

            ),
            71 =>
            array (
                'country' => 'Luxembourg',

                'currency' => 'Euro',
                'id' => 73,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            72 =>
            array (
                'country' => 'Macedonia',

                'currency' => 'Denars',
                'id' => 74,
                'name' => 'MKD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'ден',

            ),
            73 =>
            array (
                'country' => 'Malaysia',

                'currency' => 'Ringgits',
                'id' => 75,
                'name' => 'MYR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'RM',

            ),
            74 =>
            array (
                'country' => 'Malta',

                'currency' => 'Euro',
                'id' => 76,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            75 =>
            array (
                'country' => 'Mauritius',

                'currency' => 'Rupees',
                'id' => 77,
                'name' => 'MUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₨',

            ),
            76 =>
            array (
                'country' => 'Mexico',

                'currency' => 'Pesos',
                'id' => 78,
                'name' => 'MXN',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            77 =>
            array (
                'country' => 'Mongolia',

                'currency' => 'Tugriks',
                'id' => 79,
                'name' => 'MNT',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₮',

            ),
            78 =>
            array (
                'country' => 'Mozambique',

                'currency' => 'Meticais',
                'id' => 80,
                'name' => 'MZN',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'MT',

            ),
            79 =>
            array (
                'country' => 'Namibia',

                'currency' => 'Dollars',
                'id' => 81,
                'name' => 'NAD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            80 =>
            array (
                'country' => 'Nepal',

                'currency' => 'Rupees',
                'id' => 82,
                'name' => 'NPR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₨',

            ),
            81 =>
            array (
                'country' => 'Netherlands Antilles',

                'currency' => 'Guilders',
                'id' => 83,
                'name' => 'ANG',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'ƒ',

            ),
            82 =>
            array (
                'country' => 'Netherlands',

                'currency' => 'Euro',
                'id' => 84,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            83 =>
            array (
                'country' => 'New Zealand',

                'currency' => 'Dollars',
                'id' => 85,
                'name' => 'NZD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            84 =>
            array (
                'country' => 'Nicaragua',

                'currency' => 'Cordobas',
                'id' => 86,
                'name' => 'NIO',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'C$',

            ),
            85 =>
            array (
                'country' => 'Nigeria',

                'currency' => 'Nairas',
                'id' => 87,
                'name' => 'NGN',
                'rate' => 390.0,
                'status' => 1,
                'symbol' => '₦',

            ),
            86 =>
            array (
                'country' => 'North Korea',

                'currency' => 'Won',
                'id' => 88,
                'name' => 'KPW',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₩',

            ),
            87 =>
            array (
                'country' => 'Norway',

                'currency' => 'Krone',
                'id' => 89,
                'name' => 'NOK',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'kr',

            ),
            88 =>
            array (
                'country' => 'Oman',

                'currency' => 'Rials',
                'id' => 90,
                'name' => 'OMR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '﷼',

            ),
            89 =>
            array (
                'country' => 'Pakistan',

                'currency' => 'Rupees',
                'id' => 91,
                'name' => 'PKR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₨',

            ),
            90 =>
            array (
                'country' => 'Panama',

                'currency' => 'Balboa',
                'id' => 92,
                'name' => 'PAB',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'B/.',

            ),
            91 =>
            array (
                'country' => 'Paraguay',

                'currency' => 'Guarani',
                'id' => 93,
                'name' => 'PYG',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Gs',

            ),
            92 =>
            array (
                'country' => 'Peru',

                'currency' => 'Nuevos Soles',
                'id' => 94,
                'name' => 'PEN',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'S/.',

            ),
            93 =>
            array (
                'country' => 'Philippines',

                'currency' => 'Pesos',
                'id' => 95,
                'name' => 'PHP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Php',

            ),
            94 =>
            array (
                'country' => 'Poland',

                'currency' => 'Zlotych',
                'id' => 96,
                'name' => 'PLN',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'zł',

            ),
            95 =>
            array (
                'country' => 'Qatar',

                'currency' => 'Rials',
                'id' => 97,
                'name' => 'QAR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '﷼',

            ),
            96 =>
            array (
                'country' => 'Romania',

                'currency' => 'New Lei',
                'id' => 98,
                'name' => 'RON',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'lei',

            ),
            97 =>
            array (
                'country' => 'Russia',

                'currency' => 'Rubles',
                'id' => 99,
                'name' => 'RUB',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'руб',

            ),
            98 =>
            array (
                'country' => 'Saint Helena',

                'currency' => 'Pounds',
                'id' => 100,
                'name' => 'SHP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            99 =>
            array (
                'country' => 'Saudi Arabia',

                'currency' => 'Riyals',
                'id' => 101,
                'name' => 'SAR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '﷼',

            ),
            100 =>
            array (
                'country' => 'Serbia',

                'currency' => 'Dinars',
                'id' => 102,
                'name' => 'RSD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Дин.',

            ),
            101 =>
            array (
                'country' => 'Seychelles',

                'currency' => 'Rupees',
                'id' => 103,
                'name' => 'SCR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₨',

            ),
            102 =>
            array (
                'country' => 'Singapore',

                'currency' => 'Dollars',
                'id' => 104,
                'name' => 'SGD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            103 =>
            array (
                'country' => 'Slovenia',

                'currency' => 'Euro',
                'id' => 105,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            104 =>
            array (
                'country' => 'Solomon Islands',

                'currency' => 'Dollars',
                'id' => 106,
                'name' => 'SBD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            105 =>
            array (
                'country' => 'Somalia',

                'currency' => 'Shillings',
                'id' => 107,
                'name' => 'SOS',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'S',

            ),
            106 =>
            array (
                'country' => 'South Africa',

                'currency' => 'Rand',
                'id' => 108,
                'name' => 'ZAR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'R',

            ),
            107 =>
            array (
                'country' => 'South Korea',

                'currency' => 'Won',
                'id' => 109,
                'name' => 'KRW',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₩',

            ),
            108 =>
            array (
                'country' => 'Spain',

                'currency' => 'Euro',
                'id' => 110,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            109 =>
            array (
                'country' => 'Sri Lanka',

                'currency' => 'Rupees',
                'id' => 111,
                'name' => 'LKR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₨',

            ),
            110 =>
            array (
                'country' => 'Sweden',

                'currency' => 'Kronor',
                'id' => 112,
                'name' => 'SEK',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'kr',

            ),
            111 =>
            array (
                'country' => 'Switzerland',

                'currency' => 'Francs',
                'id' => 113,
                'name' => 'CHF',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'CHF',

            ),
            112 =>
            array (
                'country' => 'Suriname',

                'currency' => 'Dollars',
                'id' => 114,
                'name' => 'SRD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            113 =>
            array (
                'country' => 'Syria',

                'currency' => 'Pounds',
                'id' => 115,
                'name' => 'SYP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            114 =>
            array (
                'country' => 'Taiwan',

                'currency' => 'New Dollars',
                'id' => 116,
                'name' => 'TWD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'NT$',

            ),
            115 =>
            array (
                'country' => 'Thailand',

                'currency' => 'Baht',
                'id' => 117,
                'name' => 'THB',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '฿',

            ),
            116 =>
            array (
                'country' => 'Trinidad and Tobago',

                'currency' => 'Dollars',
                'id' => 118,
                'name' => 'TTD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'TT$',

            ),
            117 =>
            array (
                'country' => 'Turkey',

                'currency' => 'Lira',
                'id' => 119,
                'name' => 'TRY',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'TL',

            ),
            118 =>
            array (
                'country' => 'Turkey',

                'currency' => 'Liras',
                'id' => 120,
                'name' => 'TRL',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            119 =>
            array (
                'country' => 'Tuvalu',

                'currency' => 'Dollars',
                'id' => 121,
                'name' => 'TVD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            120 =>
            array (
                'country' => 'Ukraine',

                'currency' => 'Hryvnia',
                'id' => 122,
                'name' => 'UAH',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₴',

            ),
            121 =>
            array (
                'country' => 'United Kingdom',

                'currency' => 'Pounds',
                'id' => 123,
                'name' => 'GBP',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '£',

            ),
            122 =>
            array (
                'country' => 'United States of America',

                'currency' => 'Dollars',
                'id' => 124,
                'name' => 'USD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$',

            ),
            123 =>
            array (
                'country' => 'Uruguay',

                'currency' => 'Pesos',
                'id' => 125,
                'name' => 'UYU',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '$U',

            ),
            124 =>
            array (
                'country' => 'Uzbekistan',

                'currency' => 'Sums',
                'id' => 126,
                'name' => 'UZS',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'лв',

            ),
            125 =>
            array (
                'country' => 'Vatican City',

                'currency' => 'Euro',
                'id' => 127,
                'name' => 'EUR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '€',

            ),
            126 =>
            array (
                'country' => 'Venezuela',

                'currency' => 'Bolivares Fuertes',
                'id' => 128,
                'name' => 'VEF',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Bs',

            ),
            127 =>
            array (
                'country' => 'Vietnam',

                'currency' => 'Dong',
                'id' => 129,
                'name' => 'VND',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₫',

            ),
            128 =>
            array (
                'country' => 'Yemen',

                'currency' => 'Rials',
                'id' => 130,
                'name' => 'YER',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '﷼',

            ),
            129 =>
            array (
                'country' => 'Zimbabwe',

                'currency' => 'Zimbabwe Dollars',
                'id' => 131,
                'name' => 'ZWD',
                'rate' => NULL,
                'status' => 0,
                'symbol' => 'Z$',

            ),
            130 =>
            array (
                'country' => 'India',

                'currency' => 'Rupees',
                'id' => 132,
                'name' => 'INR',
                'rate' => NULL,
                'status' => 0,
                'symbol' => '₹',

            ),
        ));


    }
}
