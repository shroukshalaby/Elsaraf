<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('ref_id', 32);
            $table->text('name');
            $table->string('amount', 32)->nullable();
            $table->string('intervals', 32);
            $table->integer('times')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('plan');
    }
}
