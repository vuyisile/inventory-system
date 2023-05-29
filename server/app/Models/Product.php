<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'quantity_on_hand',
        'reorder_level',
        'cost',
        'selling_price',
        'supplier_info',
        'location',
        'date_received',
        'date_sold',
        'sales_channel',
        'sales_order_number',
        'serial_number',
    ];

    protected $casts = [
        'date_received' => 'datetime',
        'date_sold' => 'datetime',
    ];
}
