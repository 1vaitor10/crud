<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table = 'productos';
    
    // Declaro los campos que usaré de la tabla 'productos' 
    protected $fillable = ['nombre', 'descripcion', 'precio','stock', 'img']; 
}
