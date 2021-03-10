<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExtTransferTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ext_transfer')->delete();

        \DB::table('ext_transfer')->insert(array (
            0 =>
            array (
                'amount' => 205.55,
                'callback_url' => 'http://localhost/kingsmen/ipnboompay',
                'card_number' => NULL,
                'charge' => 21,

                'description' => 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',
                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 23,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'payment_type' => 'account',
                'quantity' => 10,
                'receiver_id' => 41,
                'reference' => 'qVW7obiJP5BuVaxf',
                'status' => 1,
                'title' => 'Tesla Model S',
                'total' => 2055.5,
                'tx_ref' => 'xXIJ4T7hyekpKXJ6',

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => 308.07,
                'callback_url' => 'http://localhost/kingsmen/ipnboompay',
                'card_number' => NULL,
                'charge' => 308,

                'description' => 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',
                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 24,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'payment_type' => 'account',
                'quantity' => 10,
                'receiver_id' => 41,
                'reference' => '9gF5dSURbdXCfoKv',
                'status' => 1,
                'title' => 'Tesla Model S',
                'total' => 3080.7,
                'tx_ref' => 'PDcqQbFc4SGJmJrP',

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => 103.03,
                'callback_url' => 'http://localhost/kingsmen/ipnboompay',
                'card_number' => NULL,
                'charge' => 103,

                'description' => 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',
                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 25,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'payment_type' => 'account',
                'quantity' => 10,
                'receiver_id' => 41,
                'reference' => 'MER-sgDbmI',
                'status' => 1,
                'title' => 'Tesla Model S',
                'total' => 1030.3,
                'tx_ref' => 'PlYgZjyzZmx1We4B',

                'user_id' => 41,
            ),
            3 =>
            array (
                'amount' => 1025.71,
                'callback_url' => 'http://localhost/kingsmen/ipnboompay',
                'card_number' => NULL,
                'charge' => 103,

                'description' => 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',
                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 26,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'payment_type' => 'card',
                'quantity' => 10,
                'receiver_id' => 41,
                'reference' => 'MER-8i0cqX',
                'status' => 1,
                'title' => 'Tesla Model S',
                'total' => 10257.1,
                'tx_ref' => '51Dy72ohHyW0p1fQ',

                'user_id' => NULL,
            ),
            4 =>
            array (
                'amount' => 1025.71,
                'callback_url' => 'http://localhost/kingsmen/ipnboompay',
                'card_number' => NULL,
                'charge' => 103,

                'description' => 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',
                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 27,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'payment_type' => 'card',
                'quantity' => 10,
                'receiver_id' => 41,
                'reference' => 'MER-e6rF2A',
                'status' => 1,
                'title' => 'Tesla Model S',
                'total' => 10257.1,
                'tx_ref' => '70Vkm7WVlvF9INko',

                'user_id' => NULL,
            ),
            5 =>
            array (
                'amount' => 103.03,
                'callback_url' => 'http://localhost/kingsmen/ipnboompay',
                'card_number' => NULL,
                'charge' => 103,

                'description' => 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',
                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 28,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'payment_type' => 'account',
                'quantity' => 10,
                'receiver_id' => 41,
                'reference' => 'MER-VSXLqn',
                'status' => 1,
                'title' => 'Tesla Model S',
                'total' => 1030.3,
                'tx_ref' => 'Z1aoPK4Z415VRGgu',

                'user_id' => 41,
            ),
            6 =>
            array (
                'amount' => 1025.71,
                'callback_url' => 'http://localhost/kingsmen/ipnboompay',
                'card_number' => NULL,
                'charge' => 103,

                'description' => 'lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',
                'email' => 'user@test.com',
                'first_name' => 'Finn',
                'id' => 29,
                'ip_address' => '::1',
                'last_name' => 'Marshal',
                'merchant_key' => '3S1XUuTO5yp7fjeV',
                'payment_type' => 'card',
                'quantity' => 10,
                'receiver_id' => 41,
                'reference' => 'MER-TFUIZ8',
                'status' => 1,
                'title' => 'Tesla Model S',
                'total' => 10257.1,
                'tx_ref' => 'Fr71CHZAN2cB2WLi',

                'user_id' => NULL,
            ),
        ));


    }
}
