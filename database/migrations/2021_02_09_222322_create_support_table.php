<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('subject');
            $table->string('priority', 8);
            $table->text('message');
            $table->string('type')->nullable();
            $table->text('files')->nullable();
            $table->integer('status');
            $table->integer('user_id');
            $table->string('ticket_id', 16);
            $table->string('ref_no', 32)->nullable();
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
        Schema::dropIfExists('support');
    }
}
