<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = 
    [
            
        'product_type',
        'Product_name',
        'Price',
        'sale_Price',
        'Product_date',
        'Product_end_date',
        'Quantity',
        'Product_desc',
        'Product_long_desc',
        'Product_label',
        'Size',
        'Product_status',
        'Product_img',
        'product_category_id',
        'Product_sub_category_id',
        'tags',
        'Sku',
        'Unit_weight',
        'Available_color',
        
        
        'Vendor_product_id',
        'Vendor_id',
        'Available_size',
        'Color',
        'Discount',
        'Unit_in_stock',
        'Unit_in_order',
        'Recorder_level',
        'Product_available',
        'Discount_available',
        'Current_order',
        'Product_review',
        'Additional_note',
    ];
}
