<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balade extends Model
{
     
    
        protected $table = 'balades';
        protected $primaryKey = 'id';
        protected $fillable = ['title','description', 'price', 
        'image','category','quantity','discount_price'];
}