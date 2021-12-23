<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'Parent_cat_id',
        'Parent_cat_title',
        'Parent_cat_desc',
        'Parent_cat_img',
        'Parent_cat_status'

    ];
}
