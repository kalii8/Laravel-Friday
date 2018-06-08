<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return 'This is the list of questions';
    }
    public function show(){
      $view= view('questions.index');
        return $view  ;
    }
}
