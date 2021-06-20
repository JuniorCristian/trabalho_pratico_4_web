<?php

namespace App\Http\Controllers;

use App\Models\Questao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function index()
    {
        $questoes = Questao::all();
        return view('index', compact('questoes'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $questao = new Questao();
        $questao->pergunta = $request->pergunta;
        $questao->resposta_correta = $request->resposta_correta;
        $questao->resposta_incorreta_1 = $request->resposta_incorreta_1;
        $questao->resposta_incorreta_2 = $request->resposta_incorreta_2;
        $questao->resposta_incorreta_3 = $request->resposta_incorreta_3;
        $questao->imagem = $request->imagem;
        DB::beginTransaction();
        try{
            $questao->save();
            Session::flash('success_message', 'Questão cadastrada com sucesso!');
            DB::commit();
        }catch (\Exception $e){
            Session::flash('error_message', 'Falha ao cadastrar Questão!');
            DB::rollBack();
        }
        return redirect()->route('questoes.index');
    }

    public function edit(Questao $questao)
    {
        return view('edit', compact('questao'));
    }

    public function update(Request $request, Questao $questao)
    {
        $questao->pergunta = $request->pergunta;
        $questao->resposta_correta = $request->resposta_correta;
        $questao->resposta_incorreta_1 = $request->resposta_incorreta_1;
        $questao->resposta_incorreta_2 = $request->resposta_incorreta_2;
        $questao->resposta_incorreta_3 = $request->resposta_incorreta_3;
        $questao->imagem = $request->imagem;
        DB::beginTransaction();
        try{
            $questao->save();
            Session::flash('success_message', 'Questão atualizada com sucesso!');
            DB::commit();
        }catch (\Exception $e){
            Session::flash('error_message', 'Falha ao atualizar Questão!');
            DB::rollBack();
        }
        return redirect()->route('questoes.index');
    }

    public function destroy(Questao $questao)
    {
        DB::beginTransaction();
        try{
            $questao->delete();
            Session::flash('success_message', 'Questão excluida com sucesso!');
            DB::commit();
        }catch (\Exception $e){
            Session::flash('error_message', 'Falha ao ecluir Questão!');
            DB::rollBack();
        }
        return redirect()->route('questoes.index');
    }
}
