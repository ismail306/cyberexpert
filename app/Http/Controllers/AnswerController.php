<?php

namespace App\Http\Controllers;

use App\Models\answer;

use Illuminate\Http\Request;

class AnswerController extends Controller
{

    public function index()
    {
        return view('users.questionanswer');
    }



    public function store(Request $request)
    {



        $request->validate([
            'answer' => 'required',
        ]);

        $answer = new answer([
            'answer' => $request->get('answer'),
            'user_pk' => $request->get('user_pk'),
            'question_pk' => $request->get('question_pk'),
        ]);
        $answer->save();
        return redirect()->Route('questionanswer');
    }
}
