<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('plan_id');
            $table->string('expiring_date', 32);
            $table->string('amount', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->string('ref_id', 32);
            $table->integer('status')->nullable()->default(1);
            $table->integer('times')->nullable();
            $table->integer('notify')->nullable()->default(1);
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
        Schema::dropIfExists('subscribers');
    }
}
