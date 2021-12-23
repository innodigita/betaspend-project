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
            /////////////////////
            /////////////////////

            //$table->increments('Products_id');
            $table->string("Sku");
            $table->unsignedInteger('Vendor_product_id');
            $table->string('Product_name');
            $table->string('Product_desc');
            $table->unsignedInteger('Vendor_id');
            $table->unsignedInteger('product_category_id');
            $table->bigInteger('Quantity');
            $table->float('Price');
            $table->date('Product_date');
            $table->string('Available_size');
            $table->string('Available_color');
            $table->string('Size');
            $table->string('Color');
            $table->string('Discount');
            $table->string('Unit_weight');
            $table->unsignedInteger('Unit_in_stock');
            $table->unsignedInteger('Unit_in_order');
            $table->string('Recorder_level');
            $table->string('Product_available');
            $table->string('Discount_available');
            $table->string('Current_order');
            $table->string('Product_img');
            $table->string('Product_review');
            $table->string('Additional_note');

            ///////////////////
            //////////////////
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
