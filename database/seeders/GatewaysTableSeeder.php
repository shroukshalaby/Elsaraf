<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('gateways')->delete();

        \DB::table('gateways')->insert(array (
            0 =>
            array (
                'charge' => '1',

                'gateimg' => 'paypal.png',
                'id' => 101,
                'main_name' => 'Paypal',
                'maxamo' => '200000',
                'minamo' => '20',
                'name' => 'Paypal',
                'status' => 1,

                'val1' => 'dafuture355@gmail.com',
                'val2' => '',
                'val3' => NULL,
                'val4' => NULL,
            ),
            1 =>
            array (
                'charge' => '1',

                'gateimg' => 'stripe.png',
                'id' => 103,
                'main_name' => 'Stripe',
                'maxamo' => '200000',
                'minamo' => '20',
                'name' => 'Card',
                'status' => 1,

                'val1' => 'pk_test_51HTQdaDV81Cn4OcKSjOuNkqo1KZVr1t3XbQEJvbKlqEOkwDVvcR4SXTeYfwiRatftReH9GHmIcALpTlVRz8SaHib00m65YW6mK',
                'val2' => 'sk_test_51HTQdaDV81Cn4OcKm8Gpj26Em9zWcTSOj92zQrJtGHIhBDAqwXbGHxyx2lT8ScfT5iMw58cjLhozVno4y2IDEScY00TAByE3tf',
                'val3' => NULL,
                'val4' => NULL,
            ),
            2 =>
            array (
                'charge' => '1',

                'gateimg' => 'paystack.png',
                'id' => 107,
                'main_name' => 'Paystack',
                'maxamo' => '200000',
                'minamo' => '20',
                'name' => 'Paystack',
                'status' => 1,

                'val1' => 'pk_live_293d04f581857487ef9b5cd8cd0f843f7728c3be',
                'val2' => '',
                'val3' => NULL,
                'val4' => NULL,
            ),
            3 =>
            array (
                'charge' => '1',

                'gateimg' => 'flutter.png',
                'id' => 108,
                'main_name' => 'Flutter',
                'maxamo' => '200000',
                'minamo' => '20',
                'name' => 'Flutter',
                'status' => 1,

                'val1' => 'FLWPUBK-06d63b05eb29e07b774db3f6dc871b90-X',
                'val2' => 'FLWSECK-6b1abf0e8e65353d3c18262706f164ee-X',
                'val3' => NULL,
                'val4' => NULL,
            ),
            4 =>
            array (
                'charge' => '3',

                'gateimg' => 'btc.png',
                'id' => 505,
                'main_name' => 'Bitcoin',
                'maxamo' => '50000',
                'minamo' => '10',
                'name' => 'CoinPayment BTC',
                'status' => 1,

                'val1' => '9c4a052c343dc0f52a9e468fc4c51fa58a85539fa161bbc56404fb47acfb4e7f',
                'val2' => '17A0F59aFefaFf7876C8176626e8c256fE91F2A655b502004297f73a2cd1D761',
                'val3' => NULL,
                'val4' => NULL,
            ),
            5 =>
            array (
                'charge' => '3',

                'gateimg' => 'eth.png',
                'id' => 506,
                'main_name' => 'Ethereum',
                'maxamo' => '50000',
                'minamo' => '10',
                'name' => 'CoinPayment ETH',
                'status' => 1,

                'val1' => '954466792454d50b4a7235c6b04731f8b3562d85d12ca9782f0ba7e84dbcf28b',
                'val2' => '58b485659b7EA60Dbadf247CcD756FFa10900974dbc0acEAC01f2dfd5350dAAF',
                'val3' => NULL,
                'val4' => NULL,
            ),
        ));


    }
}
