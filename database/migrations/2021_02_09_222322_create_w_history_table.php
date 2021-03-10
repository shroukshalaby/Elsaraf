<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('reference', 32);
            $table->string('secret', 6)->nullable();
            $table->integer('user_id');
            $table->integer('amount');
            $table->integer('charge')->nullable();
            $table->integer('status');
            $table->string('bank_id', 32)->nullable();
            $table->integer('type')->nullable();
            $table->integer('sub_id')->nullable();
            $table->string('next_settlement', 32)->nullable();
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
        Schema::dropIfExists('w_history');
    }
}
