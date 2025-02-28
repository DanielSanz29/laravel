<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Añade esta línea


class Pizza extends Model
{
    use HasFactory; // Usa el trait aquí

    protected $fillable = [
        'name', 'description', 'price', 'image' // Añade el campo 'image'
    ];
    protected $hidden = [
        // Campos que deseas ocultar (si aplica)
    ];
}
