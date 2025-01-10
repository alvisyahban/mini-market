<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    // Tentukan atribut yang dapat diisi
    protected $fillable = [
        'name', 'quantity',
    ];

    // Tentukan atribut yang tidak dapat diisi
    // protected $guarded = [];
}
