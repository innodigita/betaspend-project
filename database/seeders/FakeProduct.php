<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
class FakeProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'Sku'=>Str::random(10),
'Vendor_product_id'=>rand(),
'Product_name'=>Str::random(10),
'Product_desc'=>Str::random(10),
'Vendor_id'=>rand(),
'product_category_id'=>rand(),
'Quantity'=>rand(),
'Price'=>rand(1,200),
'Product_date'=>now(),
'Available_size'=>Str::random(10),
'Available_color'=>Str::random(10),
'Size'=>Str::random(10),
'Color'=>Str::random(10),
'Discount'=>Str::random(10),
'Unit_weight'=>Str::random(10),
'Unit_in_stock'=>rand(),
'Unit_in_order'=>rand(),
'Recorder_level'=>Str::random(10),
'Product_available'=>Str::random(10),
'Discount_available'=>Str::random(10),
'Current_order'=>Str::random(10),
'Product_img'=>Str::random(10),
'Product_review'=>Str::random(10),
'Additional_note'=>Str::random(10)

            ]
        );
    }
}
