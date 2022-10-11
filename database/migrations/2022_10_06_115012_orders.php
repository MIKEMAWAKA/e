<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();;
            $table->string('fname');
            $table->string('lname')->nullable();;
            $table->string('phone')->nullable();;
            $table->string('address')->nullable();;
            $table->string('location')->nullable();;
            $table->string('city')->nullable();;
            $table->string('productname')->nullable();;
            $table->string('quantity')->nullable();
            $table->string('itemprice')->nullable();;
            $table->string('totalprice')->nullable();;
            $table->string('product_id')->nullable();;
            $table->string('user_id')->nullable();;



            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('orders');
    }
}
