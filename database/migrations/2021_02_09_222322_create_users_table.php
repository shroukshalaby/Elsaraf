<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('business_name');
            $table->string('image', 32)->nullable();
            $table->string('email', 100);
            $table->text('support_email')->nullable();
            $table->string('balance', 32)->nullable();
            $table->string('country', 32)->nullable();
            $table->string('password', 100);
            $table->string('phone', 32)->nullable();
            $table->integer('status')->default(0);
            $table->string('ip_address', 32);
            $table->string('last_login', 32)->nullable();
            $table->string('kyc_link', 32)->nullable();
            $table->integer('kyc_status')->default(0);
            $table->rememberToken();
            $table->text('office_address')->nullable();
            $table->text('website_link')->nullable();
            $table->integer('developer')->nullable()->default(0);
            $table->string('verification_code', 191);
            $table->tinyInteger('email_verify');
            $table->dateTime('email_time');
            $table->string('googlefa_secret', 32)->nullable();
            $table->integer('fa_status')->default(0);
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('fa_expiring', 32)->nullable();
            $table->string('public_key', 64);
            $table->string('secret_key', 64);
            $table->integer('business_level')->default(1);
            $table->integer('shipping')->default(0);
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->timestamps();
            $table->bigInteger('current_team_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
