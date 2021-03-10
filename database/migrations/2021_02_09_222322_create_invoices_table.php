<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('email');
            $table->integer('invoice_no');
            $table->string('due_date', 32);
            $table->string('sent_date', 32)->nullable();
            $table->integer('tax')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('quantity');
            $table->text('item');
            $table->text('notes')->nullable();
            $table->string('ref_id', 16);
            $table->string('amount', 32);
            $table->integer('charge')->nullable();
            $table->string('total', 32)->nullable();
            $table->integer('status')->default(0);
            $table->integer('sent')->default(0);
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
        Schema::dropIfExists('invoices');
    }
}
