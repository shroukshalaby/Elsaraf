<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('amount', 32);
            $table->string('real_amount', 32)->nullable();
            $table->string('tx_ref', 32)->nullable();
            $table->string('type', 32)->nullable();
            $table->integer('finn')->nullable();
            $table->string('ref_id', 32);
            $table->text('log');
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
        Schema::dropIfExists('charges');
    }
}
