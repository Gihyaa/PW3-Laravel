<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    use HasFactory;
    protected $fillabel = [
        "nome",
        "telefone",
        "origem",
        "data_de_contato",
        "observacao"
    ];
}
