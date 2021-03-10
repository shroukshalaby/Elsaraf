<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable();
            $table->string('first_name', 64)->nullable();
            $table->string('last_name', 64)->nullable();
            $table->integer('seller_id')->nullable();
            $table->string('email')->nullable();
            $table->string('ip_address', 32)->nullable();
            $table->string('card_number', 32)->nullable();
            $table->string('payment_type', 32)->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('total')->nullable();
            $table->integer('charge')->nullable();
            $table->string('shipping_fee', 32)->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->text('town')->nullable();
            $table->string('ref_id', 32);
            $table->integer('status')->nullable()->default(0);
            $table->string('phone', 32)->nullable();
            $table->text('note')->nullable();
            $table->integer('ship_id')->nullable();
            $table->integer('store_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
