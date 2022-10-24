<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventss extends Model
{
    use HasFactory;
    protected $table = "eventss";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'date',
        'details',
        'address',
        'mobile',
        'sponsor',
        'participants',
        'places',
        'image'
    ];
}
