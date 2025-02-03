<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viatura extends Model
{
    use HasFactory;
     // Campos que podem ser preenchidos em massa (mass assignment)
     protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'tipo_avaria',
        'estado',
        'codigo_validacao',
    ];
}
