<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Qusetion;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Qusetion::all();
        return view('frontend.question',compact('questions'));
    }
}
