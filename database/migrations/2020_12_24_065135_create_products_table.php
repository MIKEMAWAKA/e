<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->string('regular_price');
            $table->string('sale_price');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('subcategory_id')->nullable();
            $table->unsignedInteger('tag_id')->nullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->string('stock')->nullable();
            $table->Integer('viewer')->default(1)->nullable();
            $table->string('sku')->nullable();
            $table->string('location')->nullable();
            $table->string('region')->nullable();
            $table->string('shortdescription')->nullable();
            $table->string('font_image')->nullable();
            $table->string('discount')->nullable();     
            $table->unsignedInteger('parent')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('products');
    }
}
