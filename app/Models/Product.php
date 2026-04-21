<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Variabel fillable HARUS di dalam class
    protected $fillable = ['name', 'price', 'image'];
}
