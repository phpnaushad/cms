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
            $table->id();  
            $table->foreignId('category_id')->constrained('category');        
            $table->string('product_name');
            $table->string('product_image');
            $table->text('product_detail');
            $table->string('product_price');
            $table->string('product_sku');
            $table->integer('product_stock');
            $table->string('product_grn');
            $table->integer('status');
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
        Schema::dropIfExists('products');
    }
}
