<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class FakeVendor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('vendors')->insert(
            [
'Vendor_company_name'=>Str::random(10),
'Vendor_coupon'=>Str::random(10),
'Vendor_fname'=>Str::random(10),
'Vendor_lname'=>Str::random(10),
'Vendor_email'=>Str::random(5).rand(1,20).'@gmail.com',
'Vendor_phone'=>Str::random(10),
'Vendor_address'=>Str::random(10),
'Vendor_city'=>Str::random(10),
'Vendor_state'=>Str::random(10),
'Vendor_postal_code'=>Str::random(10),
'Vendor_url'=>Str::random(10),
'Vendor_payment'=>Str::random(10),
'Vendor_discount'=>Str::random(10),
'Vendor_discount_available'=>Str::random(10),
'Vendor_current_order'=>Str::random(10),
'Vendor_logo'=>Str::random(10),
'Vendor_banner'=>Str::random(10),
'Customer_id'=>rand(1,200),
'vendor_shipping'=>Str::random(10),
            ]
        );
    }
}
