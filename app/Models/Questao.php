<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table="questoes";
    protected $id = "id";
    protected $fillable = [
        "pergunta",
        "imagem",
        "resposta_correta",
        "resposta_incorreta_1",
        "resposta_incorreta_2",
        "resposta_incorreta_3",
    ];
}
