<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;

    protected $fillable = [
        // definir la relacion de la tabla "statistics"
        'user_count',
        'order_count',
        'product_count',
    ];
}
