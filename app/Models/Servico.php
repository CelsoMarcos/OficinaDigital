<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
        // Nome da tabela no banco de dados
        protected $table = 'servicos';

        // Campos que podem ser preenchidos em massa
        protected $fillable = ['nome', 'preco'];
}
