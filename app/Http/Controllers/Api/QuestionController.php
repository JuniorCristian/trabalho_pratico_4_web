<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Questao;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = Questao::select("pergunta", "imagem", "resposta_correta", "resposta_incorreta_1", "resposta_incorreta_2", "resposta_incorreta_3")->inRandomOrder()->limit('10')->get();


        $response = ['response_code'=>1, 'results'=>$question];

        return response()->json($response);
    }
}
