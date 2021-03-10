<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_link', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('ref_id', 16)->nullable();
            $table->float('amount', 10, 0)->nullable();
            $table->integer('type')->nullable();
            $table->text('name');
            $table->text('description');
            $table->text('redirect_link')->nullable();
            $table->string('image', 32)->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->integer('active')->nullable()->default(1);
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
        Schema::dropIfExists('payment_link');
    }
}
