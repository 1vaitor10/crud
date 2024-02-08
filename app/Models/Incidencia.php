<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    // Instancio la tabla 'productos' 
    protected $table = 'incidencias';
    
    // Declaro los campos que usaré de la tabla 'productos' 
    protected $fillable = ['nom', 'tipus', 'descripcio', 'foto']; 

}
