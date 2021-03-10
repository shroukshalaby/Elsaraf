<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country')->delete();
        
        \DB::table('country')->insert(array (
            0 => 
            array (
                'id' => 1,
                'iso' => 'AF',
                'iso3' => 'AFG',
                'name' => 'AFGHANISTAN',
                'nicename' => 'Afghanistan',
                'numcode' => 4,
                'phonecode' => 93,
            ),
            1 => 
            array (
                'id' => 2,
                'iso' => 'AL',
                'iso3' => 'ALB',
                'name' => 'ALBANIA',
                'nicename' => 'Albania',
                'numcode' => 8,
                'phonecode' => 355,
            ),
            2 => 
            array (
                'id' => 3,
                'iso' => 'DZ',
                'iso3' => 'DZA',
                'name' => 'ALGERIA',
                'nicename' => 'Algeria',
                'numcode' => 12,
                'phonecode' => 213,
            ),
            3 => 
            array (
                'id' => 4,
                'iso' => 'AS',
                'iso3' => 'ASM',
                'name' => 'AMERICAN SAMOA',
                'nicename' => 'American Samoa',
                'numcode' => 16,
                'phonecode' => 1684,
            ),
            4 => 
            array (
                'id' => 5,
                'iso' => 'AD',
                'iso3' => 'AND',
                'name' => 'ANDORRA',
                'nicename' => 'Andorra',
                'numcode' => 20,
                'phonecode' => 376,
            ),
            5 => 
            array (
                'id' => 6,
                'iso' => 'AO',
                'iso3' => 'AGO',
                'name' => 'ANGOLA',
                'nicename' => 'Angola',
                'numcode' => 24,
                'phonecode' => 244,
            ),
            6 => 
            array (
                'id' => 7,
                'iso' => 'AI',
                'iso3' => 'AIA',
                'name' => 'ANGUILLA',
                'nicename' => 'Anguilla',
                'numcode' => 660,
                'phonecode' => 1264,
            ),
            7 => 
            array (
                'id' => 8,
                'iso' => 'AQ',
                'iso3' => NULL,
                'name' => 'ANTARCTICA',
                'nicename' => 'Antarctica',
                'numcode' => NULL,
                'phonecode' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'iso' => 'AG',
                'iso3' => 'ATG',
                'name' => 'ANTIGUA AND BARBUDA',
                'nicename' => 'Antigua and Barbuda',
                'numcode' => 28,
                'phonecode' => 1268,
            ),
            9 => 
            array (
                'id' => 10,
                'iso' => 'AR',
                'iso3' => 'ARG',
                'name' => 'ARGENTINA',
                'nicename' => 'Argentina',
                'numcode' => 32,
                'phonecode' => 54,
            ),
            10 => 
            array (
                'id' => 11,
                'iso' => 'AM',
                'iso3' => 'ARM',
                'name' => 'ARMENIA',
                'nicename' => 'Armenia',
                'numcode' => 51,
                'phonecode' => 374,
            ),
            11 => 
            array (
                'id' => 12,
                'iso' => 'AW',
                'iso3' => 'ABW',
                'name' => 'ARUBA',
                'nicename' => 'Aruba',
                'numcode' => 533,
                'phonecode' => 297,
            ),
            12 => 
            array (
                'id' => 13,
                'iso' => 'AU',
                'iso3' => 'AUS',
                'name' => 'AUSTRALIA',
                'nicename' => 'Australia',
                'numcode' => 36,
                'phonecode' => 61,
            ),
            13 => 
            array (
                'id' => 14,
                'iso' => 'AT',
                'iso3' => 'AUT',
                'name' => 'AUSTRIA',
                'nicename' => 'Austria',
                'numcode' => 40,
                'phonecode' => 43,
            ),
            14 => 
            array (
                'id' => 15,
                'iso' => 'AZ',
                'iso3' => 'AZE',
                'name' => 'AZERBAIJAN',
                'nicename' => 'Azerbaijan',
                'numcode' => 31,
                'phonecode' => 994,
            ),
            15 => 
            array (
                'id' => 16,
                'iso' => 'BS',
                'iso3' => 'BHS',
                'name' => 'BAHAMAS',
                'nicename' => 'Bahamas',
                'numcode' => 44,
                'phonecode' => 1242,
            ),
            16 => 
            array (
                'id' => 17,
                'iso' => 'BH',
                'iso3' => 'BHR',
                'name' => 'BAHRAIN',
                'nicename' => 'Bahrain',
                'numcode' => 48,
                'phonecode' => 973,
            ),
            17 => 
            array (
                'id' => 18,
                'iso' => 'BD',
                'iso3' => 'BGD',
                'name' => 'BANGLADESH',
                'nicename' => 'Bangladesh',
                'numcode' => 50,
                'phonecode' => 880,
            ),
            18 => 
            array (
                'id' => 19,
                'iso' => 'BB',
                'iso3' => 'BRB',
                'name' => 'BARBADOS',
                'nicename' => 'Barbados',
                'numcode' => 52,
                'phonecode' => 1246,
            ),
            19 => 
            array (
                'id' => 20,
                'iso' => 'BY',
                'iso3' => 'BLR',
                'name' => 'BELARUS',
                'nicename' => 'Belarus',
                'numcode' => 112,
                'phonecode' => 375,
            ),
            20 => 
            array (
                'id' => 21,
                'iso' => 'BE',
                'iso3' => 'BEL',
                'name' => 'BELGIUM',
                'nicename' => 'Belgium',
                'numcode' => 56,
                'phonecode' => 32,
            ),
            21 => 
            array (
                'id' => 22,
                'iso' => 'BZ',
                'iso3' => 'BLZ',
                'name' => 'BELIZE',
                'nicename' => 'Belize',
                'numcode' => 84,
                'phonecode' => 501,
            ),
            22 => 
            array (
                'id' => 23,
                'iso' => 'BJ',
                'iso3' => 'BEN',
                'name' => 'BENIN',
                'nicename' => 'Benin',
                'numcode' => 204,
                'phonecode' => 229,
            ),
            23 => 
            array (
                'id' => 24,
                'iso' => 'BM',
                'iso3' => 'BMU',
                'name' => 'BERMUDA',
                'nicename' => 'Bermuda',
                'numcode' => 60,
                'phonecode' => 1441,
            ),
            24 => 
            array (
                'id' => 25,
                'iso' => 'BT',
                'iso3' => 'BTN',
                'name' => 'BHUTAN',
                'nicename' => 'Bhutan',
                'numcode' => 64,
                'phonecode' => 975,
            ),
            25 => 
            array (
                'id' => 26,
                'iso' => 'BO',
                'iso3' => 'BOL',
                'name' => 'BOLIVIA',
                'nicename' => 'Bolivia',
                'numcode' => 68,
                'phonecode' => 591,
            ),
            26 => 
            array (
                'id' => 27,
                'iso' => 'BA',
                'iso3' => 'BIH',
                'name' => 'BOSNIA AND HERZEGOVINA',
                'nicename' => 'Bosnia and Herzegovina',
                'numcode' => 70,
                'phonecode' => 387,
            ),
            27 => 
            array (
                'id' => 28,
                'iso' => 'BW',
                'iso3' => 'BWA',
                'name' => 'BOTSWANA',
                'nicename' => 'Botswana',
                'numcode' => 72,
                'phonecode' => 267,
            ),
            28 => 
            array (
                'id' => 29,
                'iso' => 'BV',
                'iso3' => NULL,
                'name' => 'BOUVET ISLAND',
                'nicename' => 'Bouvet Island',
                'numcode' => NULL,
                'phonecode' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'iso' => 'BR',
                'iso3' => 'BRA',
                'name' => 'BRAZIL',
                'nicename' => 'Brazil',
                'numcode' => 76,
                'phonecode' => 55,
            ),
            30 => 
            array (
                'id' => 31,
                'iso' => 'IO',
                'iso3' => NULL,
                'name' => 'BRITISH INDIAN OCEAN TERRITORY',
                'nicename' => 'British Indian Ocean Territory',
                'numcode' => NULL,
                'phonecode' => 246,
            ),
            31 => 
            array (
                'id' => 32,
                'iso' => 'BN',
                'iso3' => 'BRN',
                'name' => 'BRUNEI DARUSSALAM',
                'nicename' => 'Brunei Darussalam',
                'numcode' => 96,
                'phonecode' => 673,
            ),
            32 => 
            array (
                'id' => 33,
                'iso' => 'BG',
                'iso3' => 'BGR',
                'name' => 'BULGARIA',
                'nicename' => 'Bulgaria',
                'numcode' => 100,
                'phonecode' => 359,
            ),
            33 => 
            array (
                'id' => 34,
                'iso' => 'BF',
                'iso3' => 'BFA',
                'name' => 'BURKINA FASO',
                'nicename' => 'Burkina Faso',
                'numcode' => 854,
                'phonecode' => 226,
            ),
            34 => 
            array (
                'id' => 35,
                'iso' => 'BI',
                'iso3' => 'BDI',
                'name' => 'BURUNDI',
                'nicename' => 'Burundi',
                'numcode' => 108,
                'phonecode' => 257,
            ),
            35 => 
            array (
                'id' => 36,
                'iso' => 'KH',
                'iso3' => 'KHM',
                'name' => 'CAMBODIA',
                'nicename' => 'Cambodia',
                'numcode' => 116,
                'phonecode' => 855,
            ),
            36 => 
            array (
                'id' => 37,
                'iso' => 'CM',
                'iso3' => 'CMR',
                'name' => 'CAMEROON',
                'nicename' => 'Cameroon',
                'numcode' => 120,
                'phonecode' => 237,
            ),
            37 => 
            array (
                'id' => 38,
                'iso' => 'CA',
                'iso3' => 'CAN',
                'name' => 'CANADA',
                'nicename' => 'Canada',
                'numcode' => 124,
                'phonecode' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'iso' => 'CV',
                'iso3' => 'CPV',
                'name' => 'CAPE VERDE',
                'nicename' => 'Cape Verde',
                'numcode' => 132,
                'phonecode' => 238,
            ),
            39 => 
            array (
                'id' => 40,
                'iso' => 'KY',
                'iso3' => 'CYM',
                'name' => 'CAYMAN ISLANDS',
                'nicename' => 'Cayman Islands',
                'numcode' => 136,
                'phonecode' => 1345,
            ),
            40 => 
            array (
                'id' => 41,
                'iso' => 'CF',
                'iso3' => 'CAF',
                'name' => 'CENTRAL AFRICAN REPUBLIC',
                'nicename' => 'Central African Republic',
                'numcode' => 140,
                'phonecode' => 236,
            ),
            41 => 
            array (
                'id' => 42,
                'iso' => 'TD',
                'iso3' => 'TCD',
                'name' => 'CHAD',
                'nicename' => 'Chad',
                'numcode' => 148,
                'phonecode' => 235,
            ),
            42 => 
            array (
                'id' => 43,
                'iso' => 'CL',
                'iso3' => 'CHL',
                'name' => 'CHILE',
                'nicename' => 'Chile',
                'numcode' => 152,
                'phonecode' => 56,
            ),
            43 => 
            array (
                'id' => 44,
                'iso' => 'CN',
                'iso3' => 'CHN',
                'name' => 'CHINA',
                'nicename' => 'China',
                'numcode' => 156,
                'phonecode' => 86,
            ),
            44 => 
            array (
                'id' => 45,
                'iso' => 'CX',
                'iso3' => NULL,
                'name' => 'CHRISTMAS ISLAND',
                'nicename' => 'Christmas Island',
                'numcode' => NULL,
                'phonecode' => 61,
            ),
            45 => 
            array (
                'id' => 46,
                'iso' => 'CC',
                'iso3' => NULL,
            'name' => 'COCOS (KEELING) ISLANDS',
            'nicename' => 'Cocos (Keeling) Islands',
                'numcode' => NULL,
                'phonecode' => 672,
            ),
            46 => 
            array (
                'id' => 47,
                'iso' => 'CO',
                'iso3' => 'COL',
                'name' => 'COLOMBIA',
                'nicename' => 'Colombia',
                'numcode' => 170,
                'phonecode' => 57,
            ),
            47 => 
            array (
                'id' => 48,
                'iso' => 'KM',
                'iso3' => 'COM',
                'name' => 'COMOROS',
                'nicename' => 'Comoros',
                'numcode' => 174,
                'phonecode' => 269,
            ),
            48 => 
            array (
                'id' => 49,
                'iso' => 'CG',
                'iso3' => 'COG',
                'name' => 'CONGO',
                'nicename' => 'Congo',
                'numcode' => 178,
                'phonecode' => 242,
            ),
            49 => 
            array (
                'id' => 50,
                'iso' => 'CD',
                'iso3' => 'COD',
                'name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
                'nicename' => 'Congo, the Democratic Republic of the',
                'numcode' => 180,
                'phonecode' => 242,
            ),
            50 => 
            array (
                'id' => 51,
                'iso' => 'CK',
                'iso3' => 'COK',
                'name' => 'COOK ISLANDS',
                'nicename' => 'Cook Islands',
                'numcode' => 184,
                'phonecode' => 682,
            ),
            51 => 
            array (
                'id' => 52,
                'iso' => 'CR',
                'iso3' => 'CRI',
                'name' => 'COSTA RICA',
                'nicename' => 'Costa Rica',
                'numcode' => 188,
                'phonecode' => 506,
            ),
            52 => 
            array (
                'id' => 53,
                'iso' => 'CI',
                'iso3' => 'CIV',
                'name' => 'COTE D\'IVOIRE',
                'nicename' => 'Cote D\'Ivoire',
                'numcode' => 384,
                'phonecode' => 225,
            ),
            53 => 
            array (
                'id' => 54,
                'iso' => 'HR',
                'iso3' => 'HRV',
                'name' => 'CROATIA',
                'nicename' => 'Croatia',
                'numcode' => 191,
                'phonecode' => 385,
            ),
            54 => 
            array (
                'id' => 55,
                'iso' => 'CU',
                'iso3' => 'CUB',
                'name' => 'CUBA',
                'nicename' => 'Cuba',
                'numcode' => 192,
                'phonecode' => 53,
            ),
            55 => 
            array (
                'id' => 56,
                'iso' => 'CY',
                'iso3' => 'CYP',
                'name' => 'CYPRUS',
                'nicename' => 'Cyprus',
                'numcode' => 196,
                'phonecode' => 357,
            ),
            56 => 
            array (
                'id' => 57,
                'iso' => 'CZ',
                'iso3' => 'CZE',
                'name' => 'CZECH REPUBLIC',
                'nicename' => 'Czech Republic',
                'numcode' => 203,
                'phonecode' => 420,
            ),
            57 => 
            array (
                'id' => 58,
                'iso' => 'DK',
                'iso3' => 'DNK',
                'name' => 'DENMARK',
                'nicename' => 'Denmark',
                'numcode' => 208,
                'phonecode' => 45,
            ),
            58 => 
            array (
                'id' => 59,
                'iso' => 'DJ',
                'iso3' => 'DJI',
                'name' => 'DJIBOUTI',
                'nicename' => 'Djibouti',
                'numcode' => 262,
                'phonecode' => 253,
            ),
            59 => 
            array (
                'id' => 60,
                'iso' => 'DM',
                'iso3' => 'DMA',
                'name' => 'DOMINICA',
                'nicename' => 'Dominica',
                'numcode' => 212,
                'phonecode' => 1767,
            ),
            60 => 
            array (
                'id' => 61,
                'iso' => 'DO',
                'iso3' => 'DOM',
                'name' => 'DOMINICAN REPUBLIC',
                'nicename' => 'Dominican Republic',
                'numcode' => 214,
                'phonecode' => 1809,
            ),
            61 => 
            array (
                'id' => 62,
                'iso' => 'EC',
                'iso3' => 'ECU',
                'name' => 'ECUADOR',
                'nicename' => 'Ecuador',
                'numcode' => 218,
                'phonecode' => 593,
            ),
            62 => 
            array (
                'id' => 63,
                'iso' => 'EG',
                'iso3' => 'EGY',
                'name' => 'EGYPT',
                'nicename' => 'Egypt',
                'numcode' => 818,
                'phonecode' => 20,
            ),
            63 => 
            array (
                'id' => 64,
                'iso' => 'SV',
                'iso3' => 'SLV',
                'name' => 'EL SALVADOR',
                'nicename' => 'El Salvador',
                'numcode' => 222,
                'phonecode' => 503,
            ),
            64 => 
            array (
                'id' => 65,
                'iso' => 'GQ',
                'iso3' => 'GNQ',
                'name' => 'EQUATORIAL GUINEA',
                'nicename' => 'Equatorial Guinea',
                'numcode' => 226,
                'phonecode' => 240,
            ),
            65 => 
            array (
                'id' => 66,
                'iso' => 'ER',
                'iso3' => 'ERI',
                'name' => 'ERITREA',
                'nicename' => 'Eritrea',
                'numcode' => 232,
                'phonecode' => 291,
            ),
            66 => 
            array (
                'id' => 67,
                'iso' => 'EE',
                'iso3' => 'EST',
                'name' => 'ESTONIA',
                'nicename' => 'Estonia',
                'numcode' => 233,
                'phonecode' => 372,
            ),
            67 => 
            array (
                'id' => 68,
                'iso' => 'ET',
                'iso3' => 'ETH',
                'name' => 'ETHIOPIA',
                'nicename' => 'Ethiopia',
                'numcode' => 231,
                'phonecode' => 251,
            ),
            68 => 
            array (
                'id' => 69,
                'iso' => 'FK',
                'iso3' => 'FLK',
            'name' => 'FALKLAND ISLANDS (MALVINAS)',
            'nicename' => 'Falkland Islands (Malvinas)',
                'numcode' => 238,
                'phonecode' => 500,
            ),
            69 => 
            array (
                'id' => 70,
                'iso' => 'FO',
                'iso3' => 'FRO',
                'name' => 'FAROE ISLANDS',
                'nicename' => 'Faroe Islands',
                'numcode' => 234,
                'phonecode' => 298,
            ),
            70 => 
            array (
                'id' => 71,
                'iso' => 'FJ',
                'iso3' => 'FJI',
                'name' => 'FIJI',
                'nicename' => 'Fiji',
                'numcode' => 242,
                'phonecode' => 679,
            ),
            71 => 
            array (
                'id' => 72,
                'iso' => 'FI',
                'iso3' => 'FIN',
                'name' => 'FINLAND',
                'nicename' => 'Finland',
                'numcode' => 246,
                'phonecode' => 358,
            ),
            72 => 
            array (
                'id' => 73,
                'iso' => 'FR',
                'iso3' => 'FRA',
                'name' => 'FRANCE',
                'nicename' => 'France',
                'numcode' => 250,
                'phonecode' => 33,
            ),
            73 => 
            array (
                'id' => 74,
                'iso' => 'GF',
                'iso3' => 'GUF',
                'name' => 'FRENCH GUIANA',
                'nicename' => 'French Guiana',
                'numcode' => 254,
                'phonecode' => 594,
            ),
            74 => 
            array (
                'id' => 75,
                'iso' => 'PF',
                'iso3' => 'PYF',
                'name' => 'FRENCH POLYNESIA',
                'nicename' => 'French Polynesia',
                'numcode' => 258,
                'phonecode' => 689,
            ),
            75 => 
            array (
                'id' => 76,
                'iso' => 'TF',
                'iso3' => NULL,
                'name' => 'FRENCH SOUTHERN TERRITORIES',
                'nicename' => 'French Southern Territories',
                'numcode' => NULL,
                'phonecode' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'iso' => 'GA',
                'iso3' => 'GAB',
                'name' => 'GABON',
                'nicename' => 'Gabon',
                'numcode' => 266,
                'phonecode' => 241,
            ),
            77 => 
            array (
                'id' => 78,
                'iso' => 'GM',
                'iso3' => 'GMB',
                'name' => 'GAMBIA',
                'nicename' => 'Gambia',
                'numcode' => 270,
                'phonecode' => 220,
            ),
            78 => 
            array (
                'id' => 79,
                'iso' => 'GE',
                'iso3' => 'GEO',
                'name' => 'GEORGIA',
                'nicename' => 'Georgia',
                'numcode' => 268,
                'phonecode' => 995,
            ),
            79 => 
            array (
                'id' => 80,
                'iso' => 'DE',
                'iso3' => 'DEU',
                'name' => 'GERMANY',
                'nicename' => 'Germany',
                'numcode' => 276,
                'phonecode' => 49,
            ),
            80 => 
            array (
                'id' => 81,
                'iso' => 'GH',
                'iso3' => 'GHA',
                'name' => 'GHANA',
                'nicename' => 'Ghana',
                'numcode' => 288,
                'phonecode' => 233,
            ),
            81 => 
            array (
                'id' => 82,
                'iso' => 'GI',
                'iso3' => 'GIB',
                'name' => 'GIBRALTAR',
                'nicename' => 'Gibraltar',
                'numcode' => 292,
                'phonecode' => 350,
            ),
            82 => 
            array (
                'id' => 83,
                'iso' => 'GR',
                'iso3' => 'GRC',
                'name' => 'GREECE',
                'nicename' => 'Greece',
                'numcode' => 300,
                'phonecode' => 30,
            ),
            83 => 
            array (
                'id' => 84,
                'iso' => 'GL',
                'iso3' => 'GRL',
                'name' => 'GREENLAND',
                'nicename' => 'Greenland',
                'numcode' => 304,
                'phonecode' => 299,
            ),
            84 => 
            array (
                'id' => 85,
                'iso' => 'GD',
                'iso3' => 'GRD',
                'name' => 'GRENADA',
                'nicename' => 'Grenada',
                'numcode' => 308,
                'phonecode' => 1473,
            ),
            85 => 
            array (
                'id' => 86,
                'iso' => 'GP',
                'iso3' => 'GLP',
                'name' => 'GUADELOUPE',
                'nicename' => 'Guadeloupe',
                'numcode' => 312,
                'phonecode' => 590,
            ),
            86 => 
            array (
                'id' => 87,
                'iso' => 'GU',
                'iso3' => 'GUM',
                'name' => 'GUAM',
                'nicename' => 'Guam',
                'numcode' => 316,
                'phonecode' => 1671,
            ),
            87 => 
            array (
                'id' => 88,
                'iso' => 'GT',
                'iso3' => 'GTM',
                'name' => 'GUATEMALA',
                'nicename' => 'Guatemala',
                'numcode' => 320,
                'phonecode' => 502,
            ),
            88 => 
            array (
                'id' => 89,
                'iso' => 'GN',
                'iso3' => 'GIN',
                'name' => 'GUINEA',
                'nicename' => 'Guinea',
                'numcode' => 324,
                'phonecode' => 224,
            ),
            89 => 
            array (
                'id' => 90,
                'iso' => 'GW',
                'iso3' => 'GNB',
                'name' => 'GUINEA-BISSAU',
                'nicename' => 'Guinea-Bissau',
                'numcode' => 624,
                'phonecode' => 245,
            ),
            90 => 
            array (
                'id' => 91,
                'iso' => 'GY',
                'iso3' => 'GUY',
                'name' => 'GUYANA',
                'nicename' => 'Guyana',
                'numcode' => 328,
                'phonecode' => 592,
            ),
            91 => 
            array (
                'id' => 92,
                'iso' => 'HT',
                'iso3' => 'HTI',
                'name' => 'HAITI',
                'nicename' => 'Haiti',
                'numcode' => 332,
                'phonecode' => 509,
            ),
            92 => 
            array (
                'id' => 93,
                'iso' => 'HM',
                'iso3' => NULL,
                'name' => 'HEARD ISLAND AND MCDONALD ISLANDS',
                'nicename' => 'Heard Island and Mcdonald Islands',
                'numcode' => NULL,
                'phonecode' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'iso' => 'VA',
                'iso3' => 'VAT',
            'name' => 'HOLY SEE (VATICAN CITY STATE)',
            'nicename' => 'Holy See (Vatican City State)',
                'numcode' => 336,
                'phonecode' => 39,
            ),
            94 => 
            array (
                'id' => 95,
                'iso' => 'HN',
                'iso3' => 'HND',
                'name' => 'HONDURAS',
                'nicename' => 'Honduras',
                'numcode' => 340,
                'phonecode' => 504,
            ),
            95 => 
            array (
                'id' => 96,
                'iso' => 'HK',
                'iso3' => 'HKG',
                'name' => 'HONG KONG',
                'nicename' => 'Hong Kong',
                'numcode' => 344,
                'phonecode' => 852,
            ),
            96 => 
            array (
                'id' => 97,
                'iso' => 'HU',
                'iso3' => 'HUN',
                'name' => 'HUNGARY',
                'nicename' => 'Hungary',
                'numcode' => 348,
                'phonecode' => 36,
            ),
            97 => 
            array (
                'id' => 98,
                'iso' => 'IS',
                'iso3' => 'ISL',
                'name' => 'ICELAND',
                'nicename' => 'Iceland',
                'numcode' => 352,
                'phonecode' => 354,
            ),
            98 => 
            array (
                'id' => 99,
                'iso' => 'IN',
                'iso3' => 'IND',
                'name' => 'INDIA',
                'nicename' => 'India',
                'numcode' => 356,
                'phonecode' => 91,
            ),
            99 => 
            array (
                'id' => 100,
                'iso' => 'ID',
                'iso3' => 'IDN',
                'name' => 'INDONESIA',
                'nicename' => 'Indonesia',
                'numcode' => 360,
                'phonecode' => 62,
            ),
            100 => 
            array (
                'id' => 101,
                'iso' => 'IR',
                'iso3' => 'IRN',
                'name' => 'IRAN, ISLAMIC REPUBLIC OF',
                'nicename' => 'Iran, Islamic Republic of',
                'numcode' => 364,
                'phonecode' => 98,
            ),
            101 => 
            array (
                'id' => 102,
                'iso' => 'IQ',
                'iso3' => 'IRQ',
                'name' => 'IRAQ',
                'nicename' => 'Iraq',
                'numcode' => 368,
                'phonecode' => 964,
            ),
            102 => 
            array (
                'id' => 103,
                'iso' => 'IE',
                'iso3' => 'IRL',
                'name' => 'IRELAND',
                'nicename' => 'Ireland',
                'numcode' => 372,
                'phonecode' => 353,
            ),
            103 => 
            array (
                'id' => 104,
                'iso' => 'IL',
                'iso3' => 'ISR',
                'name' => 'ISRAEL',
                'nicename' => 'Israel',
                'numcode' => 376,
                'phonecode' => 972,
            ),
            104 => 
            array (
                'id' => 105,
                'iso' => 'IT',
                'iso3' => 'ITA',
                'name' => 'ITALY',
                'nicename' => 'Italy',
                'numcode' => 380,
                'phonecode' => 39,
            ),
            105 => 
            array (
                'id' => 106,
                'iso' => 'JM',
                'iso3' => 'JAM',
                'name' => 'JAMAICA',
                'nicename' => 'Jamaica',
                'numcode' => 388,
                'phonecode' => 1876,
            ),
            106 => 
            array (
                'id' => 107,
                'iso' => 'JP',
                'iso3' => 'JPN',
                'name' => 'JAPAN',
                'nicename' => 'Japan',
                'numcode' => 392,
                'phonecode' => 81,
            ),
            107 => 
            array (
                'id' => 108,
                'iso' => 'JO',
                'iso3' => 'JOR',
                'name' => 'JORDAN',
                'nicename' => 'Jordan',
                'numcode' => 400,
                'phonecode' => 962,
            ),
            108 => 
            array (
                'id' => 109,
                'iso' => 'KZ',
                'iso3' => 'KAZ',
                'name' => 'KAZAKHSTAN',
                'nicename' => 'Kazakhstan',
                'numcode' => 398,
                'phonecode' => 7,
            ),
            109 => 
            array (
                'id' => 110,
                'iso' => 'KE',
                'iso3' => 'KEN',
                'name' => 'KENYA',
                'nicename' => 'Kenya',
                'numcode' => 404,
                'phonecode' => 254,
            ),
            110 => 
            array (
                'id' => 111,
                'iso' => 'KI',
                'iso3' => 'KIR',
                'name' => 'KIRIBATI',
                'nicename' => 'Kiribati',
                'numcode' => 296,
                'phonecode' => 686,
            ),
            111 => 
            array (
                'id' => 112,
                'iso' => 'KP',
                'iso3' => 'PRK',
                'name' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF',
                'nicename' => 'Korea, Democratic People\'s Republic of',
                'numcode' => 408,
                'phonecode' => 850,
            ),
            112 => 
            array (
                'id' => 113,
                'iso' => 'KR',
                'iso3' => 'KOR',
                'name' => 'KOREA, REPUBLIC OF',
                'nicename' => 'Korea, Republic of',
                'numcode' => 410,
                'phonecode' => 82,
            ),
            113 => 
            array (
                'id' => 114,
                'iso' => 'KW',
                'iso3' => 'KWT',
                'name' => 'KUWAIT',
                'nicename' => 'Kuwait',
                'numcode' => 414,
                'phonecode' => 965,
            ),
            114 => 
            array (
                'id' => 115,
                'iso' => 'KG',
                'iso3' => 'KGZ',
                'name' => 'KYRGYZSTAN',
                'nicename' => 'Kyrgyzstan',
                'numcode' => 417,
                'phonecode' => 996,
            ),
            115 => 
            array (
                'id' => 116,
                'iso' => 'LA',
                'iso3' => 'LAO',
                'name' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC',
                'nicename' => 'Lao People\'s Democratic Republic',
                'numcode' => 418,
                'phonecode' => 856,
            ),
            116 => 
            array (
                'id' => 117,
                'iso' => 'LV',
                'iso3' => 'LVA',
                'name' => 'LATVIA',
                'nicename' => 'Latvia',
                'numcode' => 428,
                'phonecode' => 371,
            ),
            117 => 
            array (
                'id' => 118,
                'iso' => 'LB',
                'iso3' => 'LBN',
                'name' => 'LEBANON',
                'nicename' => 'Lebanon',
                'numcode' => 422,
                'phonecode' => 961,
            ),
            118 => 
            array (
                'id' => 119,
                'iso' => 'LS',
                'iso3' => 'LSO',
                'name' => 'LESOTHO',
                'nicename' => 'Lesotho',
                'numcode' => 426,
                'phonecode' => 266,
            ),
            119 => 
            array (
                'id' => 120,
                'iso' => 'LR',
                'iso3' => 'LBR',
                'name' => 'LIBERIA',
                'nicename' => 'Liberia',
                'numcode' => 430,
                'phonecode' => 231,
            ),
            120 => 
            array (
                'id' => 121,
                'iso' => 'LY',
                'iso3' => 'LBY',
                'name' => 'LIBYAN ARAB JAMAHIRIYA',
                'nicename' => 'Libyan Arab Jamahiriya',
                'numcode' => 434,
                'phonecode' => 218,
            ),
            121 => 
            array (
                'id' => 122,
                'iso' => 'LI',
                'iso3' => 'LIE',
                'name' => 'LIECHTENSTEIN',
                'nicename' => 'Liechtenstein',
                'numcode' => 438,
                'phonecode' => 423,
            ),
            122 => 
            array (
                'id' => 123,
                'iso' => 'LT',
                'iso3' => 'LTU',
                'name' => 'LITHUANIA',
                'nicename' => 'Lithuania',
                'numcode' => 440,
                'phonecode' => 370,
            ),
            123 => 
            array (
                'id' => 124,
                'iso' => 'LU',
                'iso3' => 'LUX',
                'name' => 'LUXEMBOURG',
                'nicename' => 'Luxembourg',
                'numcode' => 442,
                'phonecode' => 352,
            ),
            124 => 
            array (
                'id' => 125,
                'iso' => 'MO',
                'iso3' => 'MAC',
                'name' => 'MACAO',
                'nicename' => 'Macao',
                'numcode' => 446,
                'phonecode' => 853,
            ),
            125 => 
            array (
                'id' => 126,
                'iso' => 'MK',
                'iso3' => 'MKD',
                'name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
                'nicename' => 'Macedonia, the Former Yugoslav Republic of',
                'numcode' => 807,
                'phonecode' => 389,
            ),
            126 => 
            array (
                'id' => 127,
                'iso' => 'MG',
                'iso3' => 'MDG',
                'name' => 'MADAGASCAR',
                'nicename' => 'Madagascar',
                'numcode' => 450,
                'phonecode' => 261,
            ),
            127 => 
            array (
                'id' => 128,
                'iso' => 'MW',
                'iso3' => 'MWI',
                'name' => 'MALAWI',
                'nicename' => 'Malawi',
                'numcode' => 454,
                'phonecode' => 265,
            ),
            128 => 
            array (
                'id' => 129,
                'iso' => 'MY',
                'iso3' => 'MYS',
                'name' => 'MALAYSIA',
                'nicename' => 'Malaysia',
                'numcode' => 458,
                'phonecode' => 60,
            ),
            129 => 
            array (
                'id' => 130,
                'iso' => 'MV',
                'iso3' => 'MDV',
                'name' => 'MALDIVES',
                'nicename' => 'Maldives',
                'numcode' => 462,
                'phonecode' => 960,
            ),
            130 => 
            array (
                'id' => 131,
                'iso' => 'ML',
                'iso3' => 'MLI',
                'name' => 'MALI',
                'nicename' => 'Mali',
                'numcode' => 466,
                'phonecode' => 223,
            ),
            131 => 
            array (
                'id' => 132,
                'iso' => 'MT',
                'iso3' => 'MLT',
                'name' => 'MALTA',
                'nicename' => 'Malta',
                'numcode' => 470,
                'phonecode' => 356,
            ),
            132 => 
            array (
                'id' => 133,
                'iso' => 'MH',
                'iso3' => 'MHL',
                'name' => 'MARSHALL ISLANDS',
                'nicename' => 'Marshall Islands',
                'numcode' => 584,
                'phonecode' => 692,
            ),
            133 => 
            array (
                'id' => 134,
                'iso' => 'MQ',
                'iso3' => 'MTQ',
                'name' => 'MARTINIQUE',
                'nicename' => 'Martinique',
                'numcode' => 474,
                'phonecode' => 596,
            ),
            134 => 
            array (
                'id' => 135,
                'iso' => 'MR',
                'iso3' => 'MRT',
                'name' => 'MAURITANIA',
                'nicename' => 'Mauritania',
                'numcode' => 478,
                'phonecode' => 222,
            ),
            135 => 
            array (
                'id' => 136,
                'iso' => 'MU',
                'iso3' => 'MUS',
                'name' => 'MAURITIUS',
                'nicename' => 'Mauritius',
                'numcode' => 480,
                'phonecode' => 230,
            ),
            136 => 
            array (
                'id' => 137,
                'iso' => 'YT',
                'iso3' => NULL,
                'name' => 'MAYOTTE',
                'nicename' => 'Mayotte',
                'numcode' => NULL,
                'phonecode' => 269,
            ),
            137 => 
            array (
                'id' => 138,
                'iso' => 'MX',
                'iso3' => 'MEX',
                'name' => 'MEXICO',
                'nicename' => 'Mexico',
                'numcode' => 484,
                'phonecode' => 52,
            ),
            138 => 
            array (
                'id' => 139,
                'iso' => 'FM',
                'iso3' => 'FSM',
                'name' => 'MICRONESIA, FEDERATED STATES OF',
                'nicename' => 'Micronesia, Federated States of',
                'numcode' => 583,
                'phonecode' => 691,
            ),
            139 => 
            array (
                'id' => 140,
                'iso' => 'MD',
                'iso3' => 'MDA',
                'name' => 'MOLDOVA, REPUBLIC OF',
                'nicename' => 'Moldova, Republic of',
                'numcode' => 498,
                'phonecode' => 373,
            ),
            140 => 
            array (
                'id' => 141,
                'iso' => 'MC',
                'iso3' => 'MCO',
                'name' => 'MONACO',
                'nicename' => 'Monaco',
                'numcode' => 492,
                'phonecode' => 377,
            ),
            141 => 
            array (
                'id' => 142,
                'iso' => 'MN',
                'iso3' => 'MNG',
                'name' => 'MONGOLIA',
                'nicename' => 'Mongolia',
                'numcode' => 496,
                'phonecode' => 976,
            ),
            142 => 
            array (
                'id' => 143,
                'iso' => 'MS',
                'iso3' => 'MSR',
                'name' => 'MONTSERRAT',
                'nicename' => 'Montserrat',
                'numcode' => 500,
                'phonecode' => 1664,
            ),
            143 => 
            array (
                'id' => 144,
                'iso' => 'MA',
                'iso3' => 'MAR',
                'name' => 'MOROCCO',
                'nicename' => 'Morocco',
                'numcode' => 504,
                'phonecode' => 212,
            ),
            144 => 
            array (
                'id' => 145,
                'iso' => 'MZ',
                'iso3' => 'MOZ',
                'name' => 'MOZAMBIQUE',
                'nicename' => 'Mozambique',
                'numcode' => 508,
                'phonecode' => 258,
            ),
            145 => 
            array (
                'id' => 146,
                'iso' => 'MM',
                'iso3' => 'MMR',
                'name' => 'MYANMAR',
                'nicename' => 'Myanmar',
                'numcode' => 104,
                'phonecode' => 95,
            ),
            146 => 
            array (
                'id' => 147,
                'iso' => 'NA',
                'iso3' => 'NAM',
                'name' => 'NAMIBIA',
                'nicename' => 'Namibia',
                'numcode' => 516,
                'phonecode' => 264,
            ),
            147 => 
            array (
                'id' => 148,
                'iso' => 'NR',
                'iso3' => 'NRU',
                'name' => 'NAURU',
                'nicename' => 'Nauru',
                'numcode' => 520,
                'phonecode' => 674,
            ),
            148 => 
            array (
                'id' => 149,
                'iso' => 'NP',
                'iso3' => 'NPL',
                'name' => 'NEPAL',
                'nicename' => 'Nepal',
                'numcode' => 524,
                'phonecode' => 977,
            ),
            149 => 
            array (
                'id' => 150,
                'iso' => 'NL',
                'iso3' => 'NLD',
                'name' => 'NETHERLANDS',
                'nicename' => 'Netherlands',
                'numcode' => 528,
                'phonecode' => 31,
            ),
            150 => 
            array (
                'id' => 151,
                'iso' => 'AN',
                'iso3' => 'ANT',
                'name' => 'NETHERLANDS ANTILLES',
                'nicename' => 'Netherlands Antilles',
                'numcode' => 530,
                'phonecode' => 599,
            ),
            151 => 
            array (
                'id' => 152,
                'iso' => 'NC',
                'iso3' => 'NCL',
                'name' => 'NEW CALEDONIA',
                'nicename' => 'New Caledonia',
                'numcode' => 540,
                'phonecode' => 687,
            ),
            152 => 
            array (
                'id' => 153,
                'iso' => 'NZ',
                'iso3' => 'NZL',
                'name' => 'NEW ZEALAND',
                'nicename' => 'New Zealand',
                'numcode' => 554,
                'phonecode' => 64,
            ),
            153 => 
            array (
                'id' => 154,
                'iso' => 'NI',
                'iso3' => 'NIC',
                'name' => 'NICARAGUA',
                'nicename' => 'Nicaragua',
                'numcode' => 558,
                'phonecode' => 505,
            ),
            154 => 
            array (
                'id' => 155,
                'iso' => 'NE',
                'iso3' => 'NER',
                'name' => 'NIGER',
                'nicename' => 'Niger',
                'numcode' => 562,
                'phonecode' => 227,
            ),
            155 => 
            array (
                'id' => 156,
                'iso' => 'NG',
                'iso3' => 'NGA',
                'name' => 'NIGERIA',
                'nicename' => 'Nigeria',
                'numcode' => 566,
                'phonecode' => 234,
            ),
            156 => 
            array (
                'id' => 157,
                'iso' => 'NU',
                'iso3' => 'NIU',
                'name' => 'NIUE',
                'nicename' => 'Niue',
                'numcode' => 570,
                'phonecode' => 683,
            ),
            157 => 
            array (
                'id' => 158,
                'iso' => 'NF',
                'iso3' => 'NFK',
                'name' => 'NORFOLK ISLAND',
                'nicename' => 'Norfolk Island',
                'numcode' => 574,
                'phonecode' => 672,
            ),
            158 => 
            array (
                'id' => 159,
                'iso' => 'MP',
                'iso3' => 'MNP',
                'name' => 'NORTHERN MARIANA ISLANDS',
                'nicename' => 'Northern Mariana Islands',
                'numcode' => 580,
                'phonecode' => 1670,
            ),
            159 => 
            array (
                'id' => 160,
                'iso' => 'NO',
                'iso3' => 'NOR',
                'name' => 'NORWAY',
                'nicename' => 'Norway',
                'numcode' => 578,
                'phonecode' => 47,
            ),
            160 => 
            array (
                'id' => 161,
                'iso' => 'OM',
                'iso3' => 'OMN',
                'name' => 'OMAN',
                'nicename' => 'Oman',
                'numcode' => 512,
                'phonecode' => 968,
            ),
            161 => 
            array (
                'id' => 162,
                'iso' => 'PK',
                'iso3' => 'PAK',
                'name' => 'PAKISTAN',
                'nicename' => 'Pakistan',
                'numcode' => 586,
                'phonecode' => 92,
            ),
            162 => 
            array (
                'id' => 163,
                'iso' => 'PW',
                'iso3' => 'PLW',
                'name' => 'PALAU',
                'nicename' => 'Palau',
                'numcode' => 585,
                'phonecode' => 680,
            ),
            163 => 
            array (
                'id' => 164,
                'iso' => 'PS',
                'iso3' => NULL,
                'name' => 'PALESTINIAN TERRITORY, OCCUPIED',
                'nicename' => 'Palestinian Territory, Occupied',
                'numcode' => NULL,
                'phonecode' => 970,
            ),
            164 => 
            array (
                'id' => 165,
                'iso' => 'PA',
                'iso3' => 'PAN',
                'name' => 'PANAMA',
                'nicename' => 'Panama',
                'numcode' => 591,
                'phonecode' => 507,
            ),
            165 => 
            array (
                'id' => 166,
                'iso' => 'PG',
                'iso3' => 'PNG',
                'name' => 'PAPUA NEW GUINEA',
                'nicename' => 'Papua New Guinea',
                'numcode' => 598,
                'phonecode' => 675,
            ),
            166 => 
            array (
                'id' => 167,
                'iso' => 'PY',
                'iso3' => 'PRY',
                'name' => 'PARAGUAY',
                'nicename' => 'Paraguay',
                'numcode' => 600,
                'phonecode' => 595,
            ),
            167 => 
            array (
                'id' => 168,
                'iso' => 'PE',
                'iso3' => 'PER',
                'name' => 'PERU',
                'nicename' => 'Peru',
                'numcode' => 604,
                'phonecode' => 51,
            ),
            168 => 
            array (
                'id' => 169,
                'iso' => 'PH',
                'iso3' => 'PHL',
                'name' => 'PHILIPPINES',
                'nicename' => 'Philippines',
                'numcode' => 608,
                'phonecode' => 63,
            ),
            169 => 
            array (
                'id' => 170,
                'iso' => 'PN',
                'iso3' => 'PCN',
                'name' => 'PITCAIRN',
                'nicename' => 'Pitcairn',
                'numcode' => 612,
                'phonecode' => 0,
            ),
            170 => 
            array (
                'id' => 171,
                'iso' => 'PL',
                'iso3' => 'POL',
                'name' => 'POLAND',
                'nicename' => 'Poland',
                'numcode' => 616,
                'phonecode' => 48,
            ),
            171 => 
            array (
                'id' => 172,
                'iso' => 'PT',
                'iso3' => 'PRT',
                'name' => 'PORTUGAL',
                'nicename' => 'Portugal',
                'numcode' => 620,
                'phonecode' => 351,
            ),
            172 => 
            array (
                'id' => 173,
                'iso' => 'PR',
                'iso3' => 'PRI',
                'name' => 'PUERTO RICO',
                'nicename' => 'Puerto Rico',
                'numcode' => 630,
                'phonecode' => 1787,
            ),
            173 => 
            array (
                'id' => 174,
                'iso' => 'QA',
                'iso3' => 'QAT',
                'name' => 'QATAR',
                'nicename' => 'Qatar',
                'numcode' => 634,
                'phonecode' => 974,
            ),
            174 => 
            array (
                'id' => 175,
                'iso' => 'RE',
                'iso3' => 'REU',
                'name' => 'REUNION',
                'nicename' => 'Reunion',
                'numcode' => 638,
                'phonecode' => 262,
            ),
            175 => 
            array (
                'id' => 176,
                'iso' => 'RO',
                'iso3' => 'ROM',
                'name' => 'ROMANIA',
                'nicename' => 'Romania',
                'numcode' => 642,
                'phonecode' => 40,
            ),
            176 => 
            array (
                'id' => 177,
                'iso' => 'RU',
                'iso3' => 'RUS',
                'name' => 'RUSSIAN FEDERATION',
                'nicename' => 'Russian Federation',
                'numcode' => 643,
                'phonecode' => 70,
            ),
            177 => 
            array (
                'id' => 178,
                'iso' => 'RW',
                'iso3' => 'RWA',
                'name' => 'RWANDA',
                'nicename' => 'Rwanda',
                'numcode' => 646,
                'phonecode' => 250,
            ),
            178 => 
            array (
                'id' => 179,
                'iso' => 'SH',
                'iso3' => 'SHN',
                'name' => 'SAINT HELENA',
                'nicename' => 'Saint Helena',
                'numcode' => 654,
                'phonecode' => 290,
            ),
            179 => 
            array (
                'id' => 180,
                'iso' => 'KN',
                'iso3' => 'KNA',
                'name' => 'SAINT KITTS AND NEVIS',
                'nicename' => 'Saint Kitts and Nevis',
                'numcode' => 659,
                'phonecode' => 1869,
            ),
            180 => 
            array (
                'id' => 181,
                'iso' => 'LC',
                'iso3' => 'LCA',
                'name' => 'SAINT LUCIA',
                'nicename' => 'Saint Lucia',
                'numcode' => 662,
                'phonecode' => 1758,
            ),
            181 => 
            array (
                'id' => 182,
                'iso' => 'PM',
                'iso3' => 'SPM',
                'name' => 'SAINT PIERRE AND MIQUELON',
                'nicename' => 'Saint Pierre and Miquelon',
                'numcode' => 666,
                'phonecode' => 508,
            ),
            182 => 
            array (
                'id' => 183,
                'iso' => 'VC',
                'iso3' => 'VCT',
                'name' => 'SAINT VINCENT AND THE GRENADINES',
                'nicename' => 'Saint Vincent and the Grenadines',
                'numcode' => 670,
                'phonecode' => 1784,
            ),
            183 => 
            array (
                'id' => 184,
                'iso' => 'WS',
                'iso3' => 'WSM',
                'name' => 'SAMOA',
                'nicename' => 'Samoa',
                'numcode' => 882,
                'phonecode' => 684,
            ),
            184 => 
            array (
                'id' => 185,
                'iso' => 'SM',
                'iso3' => 'SMR',
                'name' => 'SAN MARINO',
                'nicename' => 'San Marino',
                'numcode' => 674,
                'phonecode' => 378,
            ),
            185 => 
            array (
                'id' => 186,
                'iso' => 'ST',
                'iso3' => 'STP',
                'name' => 'SAO TOME AND PRINCIPE',
                'nicename' => 'Sao Tome and Principe',
                'numcode' => 678,
                'phonecode' => 239,
            ),
            186 => 
            array (
                'id' => 187,
                'iso' => 'SA',
                'iso3' => 'SAU',
                'name' => 'SAUDI ARABIA',
                'nicename' => 'Saudi Arabia',
                'numcode' => 682,
                'phonecode' => 966,
            ),
            187 => 
            array (
                'id' => 188,
                'iso' => 'SN',
                'iso3' => 'SEN',
                'name' => 'SENEGAL',
                'nicename' => 'Senegal',
                'numcode' => 686,
                'phonecode' => 221,
            ),
            188 => 
            array (
                'id' => 189,
                'iso' => 'CS',
                'iso3' => NULL,
                'name' => 'SERBIA AND MONTENEGRO',
                'nicename' => 'Serbia and Montenegro',
                'numcode' => NULL,
                'phonecode' => 381,
            ),
            189 => 
            array (
                'id' => 190,
                'iso' => 'SC',
                'iso3' => 'SYC',
                'name' => 'SEYCHELLES',
                'nicename' => 'Seychelles',
                'numcode' => 690,
                'phonecode' => 248,
            ),
            190 => 
            array (
                'id' => 191,
                'iso' => 'SL',
                'iso3' => 'SLE',
                'name' => 'SIERRA LEONE',
                'nicename' => 'Sierra Leone',
                'numcode' => 694,
                'phonecode' => 232,
            ),
            191 => 
            array (
                'id' => 192,
                'iso' => 'SG',
                'iso3' => 'SGP',
                'name' => 'SINGAPORE',
                'nicename' => 'Singapore',
                'numcode' => 702,
                'phonecode' => 65,
            ),
            192 => 
            array (
                'id' => 193,
                'iso' => 'SK',
                'iso3' => 'SVK',
                'name' => 'SLOVAKIA',
                'nicename' => 'Slovakia',
                'numcode' => 703,
                'phonecode' => 421,
            ),
            193 => 
            array (
                'id' => 194,
                'iso' => 'SI',
                'iso3' => 'SVN',
                'name' => 'SLOVENIA',
                'nicename' => 'Slovenia',
                'numcode' => 705,
                'phonecode' => 386,
            ),
            194 => 
            array (
                'id' => 195,
                'iso' => 'SB',
                'iso3' => 'SLB',
                'name' => 'SOLOMON ISLANDS',
                'nicename' => 'Solomon Islands',
                'numcode' => 90,
                'phonecode' => 677,
            ),
            195 => 
            array (
                'id' => 196,
                'iso' => 'SO',
                'iso3' => 'SOM',
                'name' => 'SOMALIA',
                'nicename' => 'Somalia',
                'numcode' => 706,
                'phonecode' => 252,
            ),
            196 => 
            array (
                'id' => 197,
                'iso' => 'ZA',
                'iso3' => 'ZAF',
                'name' => 'SOUTH AFRICA',
                'nicename' => 'South Africa',
                'numcode' => 710,
                'phonecode' => 27,
            ),
            197 => 
            array (
                'id' => 198,
                'iso' => 'GS',
                'iso3' => NULL,
                'name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
                'nicename' => 'South Georgia and the South Sandwich Islands',
                'numcode' => NULL,
                'phonecode' => 0,
            ),
            198 => 
            array (
                'id' => 199,
                'iso' => 'ES',
                'iso3' => 'ESP',
                'name' => 'SPAIN',
                'nicename' => 'Spain',
                'numcode' => 724,
                'phonecode' => 34,
            ),
            199 => 
            array (
                'id' => 200,
                'iso' => 'LK',
                'iso3' => 'LKA',
                'name' => 'SRI LANKA',
                'nicename' => 'Sri Lanka',
                'numcode' => 144,
                'phonecode' => 94,
            ),
            200 => 
            array (
                'id' => 201,
                'iso' => 'SD',
                'iso3' => 'SDN',
                'name' => 'SUDAN',
                'nicename' => 'Sudan',
                'numcode' => 736,
                'phonecode' => 249,
            ),
            201 => 
            array (
                'id' => 202,
                'iso' => 'SR',
                'iso3' => 'SUR',
                'name' => 'SURINAME',
                'nicename' => 'Suriname',
                'numcode' => 740,
                'phonecode' => 597,
            ),
            202 => 
            array (
                'id' => 203,
                'iso' => 'SJ',
                'iso3' => 'SJM',
                'name' => 'SVALBARD AND JAN MAYEN',
                'nicename' => 'Svalbard and Jan Mayen',
                'numcode' => 744,
                'phonecode' => 47,
            ),
            203 => 
            array (
                'id' => 204,
                'iso' => 'SZ',
                'iso3' => 'SWZ',
                'name' => 'SWAZILAND',
                'nicename' => 'Swaziland',
                'numcode' => 748,
                'phonecode' => 268,
            ),
            204 => 
            array (
                'id' => 205,
                'iso' => 'SE',
                'iso3' => 'SWE',
                'name' => 'SWEDEN',
                'nicename' => 'Sweden',
                'numcode' => 752,
                'phonecode' => 46,
            ),
            205 => 
            array (
                'id' => 206,
                'iso' => 'CH',
                'iso3' => 'CHE',
                'name' => 'SWITZERLAND',
                'nicename' => 'Switzerland',
                'numcode' => 756,
                'phonecode' => 41,
            ),
            206 => 
            array (
                'id' => 207,
                'iso' => 'SY',
                'iso3' => 'SYR',
                'name' => 'SYRIAN ARAB REPUBLIC',
                'nicename' => 'Syrian Arab Republic',
                'numcode' => 760,
                'phonecode' => 963,
            ),
            207 => 
            array (
                'id' => 208,
                'iso' => 'TW',
                'iso3' => 'TWN',
                'name' => 'TAIWAN, PROVINCE OF CHINA',
                'nicename' => 'Taiwan, Province of China',
                'numcode' => 158,
                'phonecode' => 886,
            ),
            208 => 
            array (
                'id' => 209,
                'iso' => 'TJ',
                'iso3' => 'TJK',
                'name' => 'TAJIKISTAN',
                'nicename' => 'Tajikistan',
                'numcode' => 762,
                'phonecode' => 992,
            ),
            209 => 
            array (
                'id' => 210,
                'iso' => 'TZ',
                'iso3' => 'TZA',
                'name' => 'TANZANIA, UNITED REPUBLIC OF',
                'nicename' => 'Tanzania, United Republic of',
                'numcode' => 834,
                'phonecode' => 255,
            ),
            210 => 
            array (
                'id' => 211,
                'iso' => 'TH',
                'iso3' => 'THA',
                'name' => 'THAILAND',
                'nicename' => 'Thailand',
                'numcode' => 764,
                'phonecode' => 66,
            ),
            211 => 
            array (
                'id' => 212,
                'iso' => 'TL',
                'iso3' => NULL,
                'name' => 'TIMOR-LESTE',
                'nicename' => 'Timor-Leste',
                'numcode' => NULL,
                'phonecode' => 670,
            ),
            212 => 
            array (
                'id' => 213,
                'iso' => 'TG',
                'iso3' => 'TGO',
                'name' => 'TOGO',
                'nicename' => 'Togo',
                'numcode' => 768,
                'phonecode' => 228,
            ),
            213 => 
            array (
                'id' => 214,
                'iso' => 'TK',
                'iso3' => 'TKL',
                'name' => 'TOKELAU',
                'nicename' => 'Tokelau',
                'numcode' => 772,
                'phonecode' => 690,
            ),
            214 => 
            array (
                'id' => 215,
                'iso' => 'TO',
                'iso3' => 'TON',
                'name' => 'TONGA',
                'nicename' => 'Tonga',
                'numcode' => 776,
                'phonecode' => 676,
            ),
            215 => 
            array (
                'id' => 216,
                'iso' => 'TT',
                'iso3' => 'TTO',
                'name' => 'TRINIDAD AND TOBAGO',
                'nicename' => 'Trinidad and Tobago',
                'numcode' => 780,
                'phonecode' => 1868,
            ),
            216 => 
            array (
                'id' => 217,
                'iso' => 'TN',
                'iso3' => 'TUN',
                'name' => 'TUNISIA',
                'nicename' => 'Tunisia',
                'numcode' => 788,
                'phonecode' => 216,
            ),
            217 => 
            array (
                'id' => 218,
                'iso' => 'TR',
                'iso3' => 'TUR',
                'name' => 'TURKEY',
                'nicename' => 'Turkey',
                'numcode' => 792,
                'phonecode' => 90,
            ),
            218 => 
            array (
                'id' => 219,
                'iso' => 'TM',
                'iso3' => 'TKM',
                'name' => 'TURKMENISTAN',
                'nicename' => 'Turkmenistan',
                'numcode' => 795,
                'phonecode' => 7370,
            ),
            219 => 
            array (
                'id' => 220,
                'iso' => 'TC',
                'iso3' => 'TCA',
                'name' => 'TURKS AND CAICOS ISLANDS',
                'nicename' => 'Turks and Caicos Islands',
                'numcode' => 796,
                'phonecode' => 1649,
            ),
            220 => 
            array (
                'id' => 221,
                'iso' => 'TV',
                'iso3' => 'TUV',
                'name' => 'TUVALU',
                'nicename' => 'Tuvalu',
                'numcode' => 798,
                'phonecode' => 688,
            ),
            221 => 
            array (
                'id' => 222,
                'iso' => 'UG',
                'iso3' => 'UGA',
                'name' => 'UGANDA',
                'nicename' => 'Uganda',
                'numcode' => 800,
                'phonecode' => 256,
            ),
            222 => 
            array (
                'id' => 223,
                'iso' => 'UA',
                'iso3' => 'UKR',
                'name' => 'UKRAINE',
                'nicename' => 'Ukraine',
                'numcode' => 804,
                'phonecode' => 380,
            ),
            223 => 
            array (
                'id' => 224,
                'iso' => 'AE',
                'iso3' => 'ARE',
                'name' => 'UNITED ARAB EMIRATES',
                'nicename' => 'United Arab Emirates',
                'numcode' => 784,
                'phonecode' => 971,
            ),
            224 => 
            array (
                'id' => 225,
                'iso' => 'GB',
                'iso3' => 'GBR',
                'name' => 'UNITED KINGDOM',
                'nicename' => 'United Kingdom',
                'numcode' => 826,
                'phonecode' => 44,
            ),
            225 => 
            array (
                'id' => 226,
                'iso' => 'US',
                'iso3' => 'USA',
                'name' => 'UNITED STATES',
                'nicename' => 'United States',
                'numcode' => 840,
                'phonecode' => 1,
            ),
            226 => 
            array (
                'id' => 227,
                'iso' => 'UM',
                'iso3' => NULL,
                'name' => 'UNITED STATES MINOR OUTLYING ISLANDS',
                'nicename' => 'United States Minor Outlying Islands',
                'numcode' => NULL,
                'phonecode' => 1,
            ),
            227 => 
            array (
                'id' => 228,
                'iso' => 'UY',
                'iso3' => 'URY',
                'name' => 'URUGUAY',
                'nicename' => 'Uruguay',
                'numcode' => 858,
                'phonecode' => 598,
            ),
            228 => 
            array (
                'id' => 229,
                'iso' => 'UZ',
                'iso3' => 'UZB',
                'name' => 'UZBEKISTAN',
                'nicename' => 'Uzbekistan',
                'numcode' => 860,
                'phonecode' => 998,
            ),
            229 => 
            array (
                'id' => 230,
                'iso' => 'VU',
                'iso3' => 'VUT',
                'name' => 'VANUATU',
                'nicename' => 'Vanuatu',
                'numcode' => 548,
                'phonecode' => 678,
            ),
            230 => 
            array (
                'id' => 231,
                'iso' => 'VE',
                'iso3' => 'VEN',
                'name' => 'VENEZUELA',
                'nicename' => 'Venezuela',
                'numcode' => 862,
                'phonecode' => 58,
            ),
            231 => 
            array (
                'id' => 232,
                'iso' => 'VN',
                'iso3' => 'VNM',
                'name' => 'VIET NAM',
                'nicename' => 'Viet Nam',
                'numcode' => 704,
                'phonecode' => 84,
            ),
            232 => 
            array (
                'id' => 233,
                'iso' => 'VG',
                'iso3' => 'VGB',
                'name' => 'VIRGIN ISLANDS, BRITISH',
                'nicename' => 'Virgin Islands, British',
                'numcode' => 92,
                'phonecode' => 1284,
            ),
            233 => 
            array (
                'id' => 234,
                'iso' => 'VI',
                'iso3' => 'VIR',
                'name' => 'VIRGIN ISLANDS, U.S.',
                'nicename' => 'Virgin Islands, U.s.',
                'numcode' => 850,
                'phonecode' => 1340,
            ),
            234 => 
            array (
                'id' => 235,
                'iso' => 'WF',
                'iso3' => 'WLF',
                'name' => 'WALLIS AND FUTUNA',
                'nicename' => 'Wallis and Futuna',
                'numcode' => 876,
                'phonecode' => 681,
            ),
            235 => 
            array (
                'id' => 236,
                'iso' => 'EH',
                'iso3' => 'ESH',
                'name' => 'WESTERN SAHARA',
                'nicename' => 'Western Sahara',
                'numcode' => 732,
                'phonecode' => 212,
            ),
            236 => 
            array (
                'id' => 237,
                'iso' => 'YE',
                'iso3' => 'YEM',
                'name' => 'YEMEN',
                'nicename' => 'Yemen',
                'numcode' => 887,
                'phonecode' => 967,
            ),
            237 => 
            array (
                'id' => 238,
                'iso' => 'ZM',
                'iso3' => 'ZMB',
                'name' => 'ZAMBIA',
                'nicename' => 'Zambia',
                'numcode' => 894,
                'phonecode' => 260,
            ),
            238 => 
            array (
                'id' => 239,
                'iso' => 'ZW',
                'iso3' => 'ZWE',
                'name' => 'ZIMBABWE',
                'nicename' => 'Zimbabwe',
                'numcode' => 716,
                'phonecode' => 263,
            ),
        ));
        
        
    }
}