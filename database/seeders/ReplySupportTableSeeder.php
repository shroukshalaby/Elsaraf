<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReplySupportTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('reply_support')->delete();

        \DB::table('reply_support')->insert(array (
            0 =>
            array (

                'id' => 6,
                'reply' => 'sdfghfd',
                'staff_id' => NULL,
                'status' => 1,
                'ticket_id' => 'XvuX4mNrFIMp0KpI',

            ),
            1 =>
            array (

                'id' => 7,
                'reply' => 'ok',
                'staff_id' => NULL,
                'status' => 0,
                'ticket_id' => '2eADkpESfSdctt2f',

            ),
            2 =>
            array (

                'id' => 8,
                'reply' => '<script>
$(\'#customFileLang\').on(\'change\',function(){
//get the file name
var fileName = $(this).val().replace(\'C:\\\\fakepath\\\\\', " ");
//replace the "Choose a file" label
$(this).next(\'.custom-file-label\').html(fileName);
})
$(\'.carousel\').carousel({
interval: 2000
})
populateCountries("country", "state");
function sellVals(){
var quantity = $("#quantity").val();
var amount = $("#amount").val();
var ship_fee = $("#ship_fee").val();
var subtotal = parseInt(amount)*parseInt(quantity);
var total = parseInt(subtotal)+parseInt(ship_fee);
$("#product1").text(quantity);
$("#subtotal1").text(subtotal);
$("#total1").text(total);
}
$("#quantity").change(sellVals);
sellVals();
</script>',
        'staff_id' => NULL,
        'status' => 1,
        'ticket_id' => '2eADkpESfSdctt2f',

    ),
    3 =>
    array (

        'id' => 9,
        'reply' => 'Ok we will look into your report',
        'staff_id' => NULL,
        'status' => 0,
        'ticket_id' => 'AW1GaEObUOPORtwA',

    ),
    4 =>
    array (

        'id' => 10,
        'reply' => 'Thanks',
        'staff_id' => NULL,
        'status' => 1,
        'ticket_id' => 'AW1GaEObUOPORtwA',

    ),
    5 =>
    array (

        'id' => 11,
        'reply' => 'We are running our investigations',
        'staff_id' => 1,
        'status' => 0,
        'ticket_id' => 'AW1GaEObUOPORtwA',

    ),
    6 =>
    array (

        'id' => 12,
        'reply' => 'We are running our investigations',
        'staff_id' => 1,
        'status' => 0,
        'ticket_id' => 'AW1GaEObUOPORtwA',

    ),
    7 =>
    array (

        'id' => 13,
        'reply' => 'hello',
        'staff_id' => NULL,
        'status' => 1,
        'ticket_id' => 'DZgX0Gln7g1xI1aX',

    ),
    8 =>
    array (

        'id' => 14,
        'reply' => 'hey',
        'staff_id' => NULL,
        'status' => 0,
        'ticket_id' => 'DZgX0Gln7g1xI1aX',

    ),
    9 =>
    array (

        'id' => 15,
        'reply' => 'ddd',
        'staff_id' => 4,
        'status' => 0,
        'ticket_id' => 'DZgX0Gln7g1xI1aX',

    ),
    10 =>
    array (

        'id' => 16,
        'reply' => 'Rate Our customer support',
        'staff_id' => 1,
        'status' => 0,
        'ticket_id' => 'DZgX0Gln7g1xI1aX',

    ),
));


    }
}
