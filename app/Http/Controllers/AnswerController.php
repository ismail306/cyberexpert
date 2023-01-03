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
            'question_id' => $request->get('question_id'),
        ]);
        $answer->save();
        return redirect()->Route('questionanswer');
    }

    public function delete($id)
    {
        $answer = answer::find($id);
        $answer->delete();
        return redirect()->Route('questionanswer');
    }

    public function update(Request $request)
    {
        $answer = answer::find($request->id);
        $answer->answer = $request->answer;
        $answer->save();
        return redirect()->Route('questionanswer');
    }
}
