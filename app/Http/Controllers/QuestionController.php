<?php

namespace App\Http\Controllers;


use App\Models\question;
use App\Models\answer;
use App\Models\User;
use Session;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function question()
    {

        $questions = question::orderBy('created_at', 'desc')->get();
        $answers = answer::all();
        $users = User::all();

        View()->share('questions', $questions);
        View()->share('answers', $answers);
        View()->share('users', $users);

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

    public function delete($id)
    {
        $question = question::find($id);
        $question->delete();
        return redirect()->Route('questionanswer');
    }

    public function adminquestion()
    {
        $questions = question::paginate(25);

        View()->share('questions', $questions);
        return view('admin/question');
    }
    public function admin_question_delete($id)
    {
        $question = question::find($id);
        $question->delete();
        return redirect()->Route('admin.questions')->withMessage('Answer Successfully Deleted');
    }
}
