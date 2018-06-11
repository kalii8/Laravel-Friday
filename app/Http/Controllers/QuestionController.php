<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Answer;
use App\Question;
class QuestionController extends Controller
{
    public function index()
    {

        $result = Question::latest()->get();
        
        // prepare the view for the list of the questions
        $view= View('questions/index');
        // give the array of questions to the view
        // where it will be available as $questions
        $view->question=$result;
        return $view;
    }

    public function show($question_id){

    $answers = Answer::where('question_id', $question_id)->oldest()->get();
    $question = Question::find($question_id)
;
      $view= view('questions/show');
      $view->answers=$answers;
      $view->question=$question;
   
        return $view  ;
    }
}
