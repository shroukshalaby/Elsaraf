<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('invoices')->delete();

        \DB::table('invoices')->insert(array (
            0 =>
            array (
                'amount' => '500000',
                'charge' => 41400,

                'discount' => 10,
                'due_date' => '12/30/2020',
                'email' => 'info@boomchart.net',
                'id' => 14,
                'invoice_no' => 334533,
                'item' => 'Sony Play station 5',
                'notes' => NULL,
                'quantity' => 1,
                'ref_id' => 'qhnAOpLAOVjMvCUI',
                'sent' => 0,
                'sent_date' => NULL,
                'status' => 1,
                'tax' => 2,
                'total' => '460000',

                'user_id' => 41,
            ),
            1 =>
            array (
                'amount' => '1000',
                'charge' => NULL,

                'discount' => 10,
                'due_date' => '2021-01-20 16:41:47',
                'email' => 'demo@boomchart.net',
                'id' => 15,
                'invoice_no' => 33333,
                'item' => 'idfbvu',
                'notes' => NULL,
                'quantity' => 3,
                'ref_id' => 'INV-GXAhuI',
                'sent' => 0,
                'sent_date' => NULL,
                'status' => 0,
                'tax' => 2,
                'total' => '2760',

                'user_id' => 41,
            ),
            2 =>
            array (
                'amount' => '1000',
                'charge' => 248,

                'discount' => 10,
                'due_date' => '2021-01-20 16:41:47',
                'email' => 'demo@boomchart.net',
                'id' => 16,
                'invoice_no' => 33333,
                'item' => 'idfbvu',
                'notes' => NULL,
                'quantity' => 3,
                'ref_id' => 'INV-rkQsl5',
                'sent' => 0,
                'sent_date' => NULL,
                'status' => 0,
                'tax' => 2,
                'total' => '2760',

                'user_id' => 41,
            ),
            3 =>
            array (
                'amount' => '2000',
                'charge' => 335,

                'discount' => 10,
                'due_date' => '2021-01-20 18:03:27',
                'email' => 'info@boomchart.net',
                'id' => 17,
                'invoice_no' => 478674,
                'item' => 'hgdvgcdg',
                'notes' => NULL,
                'quantity' => 2,
                'ref_id' => 'INV-uPCJgY',
                'sent' => 0,
                'sent_date' => NULL,
                'status' => 1,
                'tax' => 3,
                'total' => '3720',

                'user_id' => 41,
            ),
            4 =>
            array (
                'amount' => '3000',
                'charge' => 761,

                'discount' => 10,
                'due_date' => '2021-01-20 20:18:42',
                'email' => 'info@boomchart.net',
                'id' => 18,
                'invoice_no' => 332333,
                'item' => 'dehjcvdhv',
                'notes' => NULL,
                'quantity' => 3,
                'ref_id' => 'INV-C7ShAS',
                'sent' => 0,
                'sent_date' => NULL,
                'status' => 1,
                'tax' => 4,
                'total' => '8460',

                'user_id' => 41,
            ),
        ));


    }
}
