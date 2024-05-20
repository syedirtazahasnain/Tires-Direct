<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tire extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'title', 'sku', 'brand_id', 'price_id', 'tire_specs_id', 'discount_id', 'feature', 'inventory', 'in_stock', 'is_discount', 'image'];
}
