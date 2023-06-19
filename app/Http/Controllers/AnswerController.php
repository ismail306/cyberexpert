<?php


namespace App\Http\Controllers;

use App\Models\answer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        if (isset(auth()->user()->id)) {
            if ($answer->user_pk != auth()->user()->id) {
                Session::flash('dump', "You are not authorized to access this page!");
                return redirect()->Route('404');
            }
        }
        $answer->delete();
        return redirect()->Route('questionanswer');
    }

    public function update(Request $request)
    {
        $answer = answer::find($request->id);
        if (isset(auth()->user()->id)) {
            if ($answer->user_pk != auth()->user()->id) {
                Session::flash('dump', "You are not authorized to access this page!");
                return redirect()->Route('404');
            }
        }
        $answer->answer = $request->answer;
        $answer->save();
        return redirect()->Route('questionanswer');
    }


    public function adminanswer()
    {
        $answers = answer::paginate(25);
        dd($answers);
        View()->share('answers', $answers);
        return view('admin/answer');
    }
}
