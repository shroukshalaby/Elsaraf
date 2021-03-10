<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_bank', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('bank_name', 128);
            $table->text('address');
            $table->string('swift', 32);
            $table->string('iban', 32);
            $table->string('acct_no', 15);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_bank');
    }
}
