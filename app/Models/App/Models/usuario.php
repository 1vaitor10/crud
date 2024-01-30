<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    
    // Declaro los campos que usaré de la tabla 'productos' 
    protected $fillable = ['ID_USUARI', 'NOM', 'COGNOM','CONTRASENYA', 'RANG', 'CORREU']; 
}
