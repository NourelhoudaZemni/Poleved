<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balades extends Model
{
    use HasFactory;
    protected $table = "balades";
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'quantity',
        'price',
        'discount_price'
    ];
}
