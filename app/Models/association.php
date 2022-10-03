<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class association extends Model
{
    /**
     * The primary key associated with the table.
     * @var integer
     */
    protected $primaryKey;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $name;
}
