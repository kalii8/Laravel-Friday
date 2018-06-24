<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('user.admin')->except('index');
    }

    public function index()
    {
    //    $request = request();

    //    if($request->has('name')){
    //     $name = $request->input('name');
    //     dd($name);
    //    }
     
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

    public function create()
    {
        $view = view('questions.create');
        return $view;

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:10',
            'text' => 'required'
        ]);
        
        $question = new Question();
        $question->fill([
            'title' => $request->input('title'),
            'text' => $request->input('text')
        ]);

        $question->save();

        session()->flash('success_message', 'Success!');
 
        return redirect()->action('QuestionController@show', ['id' => $question->id]);

      
    }
}
