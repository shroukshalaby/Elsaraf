<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplianceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliance', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->integer('day')->nullable();
            $table->string('month', 3)->nullable();
            $table->string('year', 4)->nullable();
            $table->text('nationality')->nullable();
            $table->string('id_type', 32)->nullable();
            $table->string('idcard', 32)->nullable();
            $table->text('address')->nullable();
            $table->text('website')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->text('city')->nullable();
            $table->text('office_address')->nullable();
            $table->string('phone_code', 32)->nullable();
            $table->string('phone_number', 32)->nullable();
            $table->string('business_type', 32)->nullable();
            $table->text('registration_type')->nullable();
            $table->text('industry')->nullable();
            $table->text('category')->nullable();
            $table->string('staff_size', 32)->nullable();
            $table->text('description')->nullable();
            $table->text('trading_name')->nullable();
            $table->text('legal_name')->nullable();
            $table->string('proof', 32)->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('compliance');
    }
}
