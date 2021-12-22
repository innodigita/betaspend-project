<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();

            /////////////////////////////

//            Vendor_id

$table->string('Vendor_company_name');
$table->string('Vendor_coupon');
$table->string('Vendor_fname');
$table->string('Vendor_lname');
$table->string('Vendor_email');
$table->string('Vendor_phone');
$table->string('Vendor_address');
$table->string('Vendor_city');
$table->string('Vendor_state');
$table->string('Vendor_postal_code');
$table->string('Vendor_url');
$table->string('Vendor_payment');
$table->string('Vendor_discount');
$table->string('Vendor_discount_available');
$table->string('Vendor_current_order');
$table->string('Vendor_logo');
$table->string('Vendor_banner');
$table->unsignedInteger('Customer_id');
$table->string('vendor_shipping');

            //////////////////////////////
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
        Schema::dropIfExists('vendors');
    }
}
