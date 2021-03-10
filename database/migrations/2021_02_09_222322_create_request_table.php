<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_id', 32);
            $table->integer('user_id');
            $table->string('email');
            $table->float('amount', 10, 0);
            $table->string('charge', 32)->nullable();
            $table->integer('status')->default(0);
            $table->string('confirm', 8)->nullable();
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
        Schema::dropIfExists('request');
    }
}
