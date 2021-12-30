<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products' , function($table){
            $table->string('product_type');
            $table->float('sale_Price');
            $table->longText('Product_long_desc');
            $table->string('Product_label');
            $table->string('Product_status');
            $table->date('Product_end_date')->nullable();
            $table->unsignedInteger('Product_sub_category_id');
            $table->string('tags');
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
    }
}
