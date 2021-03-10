<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subaccounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->text('name')->nullable();
            $table->text('email');
            $table->integer('bank_id');
            $table->integer('country')->nullable();
            $table->integer('type')->nullable();
            $table->string('amount', 32)->nullable();
            $table->text('acct_no')->nullable();
            $table->text('acct_name')->nullable();
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
        Schema::dropIfExists('subaccounts');
    }
}
