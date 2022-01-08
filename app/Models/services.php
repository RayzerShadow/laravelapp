<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable = ['name', 'image', 'price', 'time', 'description']; // fillable oznacza, że pole z formularza jest, że może być wypełnione
}
