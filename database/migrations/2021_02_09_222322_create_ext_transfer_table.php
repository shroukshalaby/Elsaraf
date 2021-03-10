<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ext_transfer', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('email')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('ip_address', 32)->nullable();
            $table->string('card_number', 32)->nullable();
            $table->string('payment_type', 16)->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('reference', 32)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->double('amount')->nullable();
            $table->double('total')->nullable();
            $table->integer('charge')->nullable();
            $table->string('merchant_key', 32)->nullable()->index('merchant_key');
            $table->text('callback_url')->nullable();
            $table->text('tx_ref')->nullable();
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
        Schema::dropIfExists('ext_transfer');
    }
}
