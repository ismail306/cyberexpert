<?php

namespace App\Http\Controllers;


use App\Models\question;
use App\Models\answer;
use App\Models\User;

use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function question()
    {
        $questions = question::all();
        $answers = answer::all();
        $users = User::all();

        View()->share('questions', $questions);
        View()->share('answers', $answers);
        View()->share('users', $users);

        return view('users.questionanswer');
    }


    public function index()
    {


        return view('users.questionanswer');
    }


    public function store(Request $request)
    {


        $request->validate([
            'question' => 'required',
        ]);

        $question = new question([
            'question' => $request->get('question'),
            'user_pk' => $request->get('user_pk'),
        ]);

        $question->save();
        return redirect()->back();
    }
}
