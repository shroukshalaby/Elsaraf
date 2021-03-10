<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorefrontTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storefront', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->text('store_name');
            $table->text('store_desc');
            $table->integer('status')->default(1);
            $table->text('store_url');
            $table->text('category');
            $table->string('revenue', 32)->nullable()->default('0');
            $table->integer('shipping_status')->default(0);
            $table->integer('note_status')->default(0);
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
        Schema::dropIfExists('storefront');
    }
}
