<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'country',
        'city_and_street',
        'delivery_date',
    ];
}
