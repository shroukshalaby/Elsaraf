<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

            \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'balance' => '3573071.735',
                'business_level' => 2,
                'business_name' => 'MediaGate Studios',
                'country' => '156',

                'developer' => 0,
                'email' => 'merchant@mediagate.com',
                'email_time' => '2020-10-13 16:59:20',
                'email_verify' => 1,
                'fa_expiring' => '2021-02-01 05:58:16',
                'fa_status' => 0,
                'facebook' => 'https://facebook.com',
                'first_name' => 'MediaGate',
                'googlefa_secret' => 'A2EN3UBUQW2TAKBT',
                'id' => 41,
                'image' => 'boomchart1611787749.png',
                'instagram' => NULL,
                'ip_address' => '::1',
                'kyc_link' => '1609059216_png',
                'kyc_status' => 0,
                'last_login' => '2021-02-01 06:28:33',
                'last_name' => 'Studios',
                'linkedin' => NULL,
                'office_address' => NULL,
                'password' => '$2y$10$gJ55pI6ziCGWsupNpPIVeeN7WfWw5nGr2elYHhBfFwYsylTc7sRrO',
                'phone' => NULL,
                'public_key' => 'PUB-boJXLxpvdv5jvF8E5ptfb4FSRp6uxbAL',
                'remember_token' => 'nS0UCs5iHl4KabLKkOqaOoRtQ1z8MC48zhZkInuD8RcNctyCWAe9bZwpotsv',
                'secret_key' => 'SEC-Su4MD0XjDrMWFX6TN6Ra6oqvKx5h7UwQ',
                'shipping' => 1,
                'status' => 0,
                'support_email' => NULL,
                'twitter' => 'https://twitter.com/',

                'verification_code' => 'LOMICU',
                'website_link' => NULL,
                'youtube' => NULL,
            ),
            1 =>
            array (
                'balance' => '23000',
                'business_level' => 2,
                'business_name' => 'gggg',
                'country' => '156',

                'developer' => 0,
                'email' => 's@site.com',
                'email_time' => '2021-01-28 11:09:03',
                'email_verify' => 1,
                'fa_expiring' => '2021-01-28 13:50:39',
                'fa_status' => 0,
                'facebook' => NULL,
                'first_name' => 'fghj',
                'googlefa_secret' => NULL,
                'id' => 48,
                'image' => 'person.png',
                'instagram' => NULL,
                'ip_address' => '::1',
                'kyc_link' => NULL,
                'kyc_status' => 0,
                'last_login' => '2021-01-28 22:19:23',
                'last_name' => 'dfghj',
                'linkedin' => NULL,
                'office_address' => NULL,
                'password' => '$2y$10$gJ55pI6ziCGWsupNpPIVeeN7WfWw5nGr2elYHhBfFwYsylTc7sRrO',
                'phone' => '2345678765',
                'public_key' => 'PUB-9Rcxuc0pnaWIqIFoVhdaJVDdPQqgBTZy',
                'remember_token' => '4vIlUuaD45P7lPZvmZCCnLL0tsFlRWQ2mLlVskWC8iJTWTDSZfoZ5lnEWbks',
                'secret_key' => 'SEC-U4ONkyws9RntPqOcb3AwPZuSdWh3sils',
                'shipping' => 0,
                'status' => 0,
                'support_email' => NULL,
                'twitter' => NULL,

                'verification_code' => 'R148QV',
                'website_link' => NULL,
                'youtube' => NULL,
            ),
        ));


    }
}
