<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = new \stdClass();
        $question->response_code = 0;
        $result1 = new \stdClass();
        $result1->category = "Teste";
        $result1->type = "Teste";
        $result1->difficulty = "easy";
        $result1->question = "Teste?";
        $result1->correct_answer = "Teste";
        $result1->incorrect_answers = ["Não Teste", "!Teste", "Negativo Teste"];
        $result2 = new \stdClass();
        $result2->category = "Teste";
        $result2->type = "Teste";
        $result2->difficulty = "easy";
        $result2->question = "Teste?";
        $result2->correct_answer = "Teste";
        $result2->incorrect_answers = ["Não Teste", "!Teste", "Negativo Teste"];
        $question->results = array($result1, $result2, $result1, $result2);

        return response()->json($question);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
