<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $result = DB::table('questions')->get();
        $view= view('questions.index');
        $view->questions = $result;
        return $view  ;
    }

    public function show($question_id){
         $view= view('questions.show');
         $answers = DB::table('answers')
                    ->where('question_id', $question_id)
                    ->get();

        $question = DB::table('questions')
                    ->where('id', $question_id)
                    ->first();
         $view->answers = $answers;
         $view->question = $question;
        return $view ;
    }
}
