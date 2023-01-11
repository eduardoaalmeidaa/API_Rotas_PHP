<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_type_id', 
        'last_name', 
        'first_name', 
        'adrress', 
        'phone',
    ];

}

