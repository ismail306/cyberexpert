<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blog;
use App\Models\question;
use App\Models\answer;


class AdminController extends Controller
{

    public function index()
    {

        $users = User::all();
        View()->share('users', $users);
        // total users
        $total_users = User::count();
        View()->share('total_users', $total_users);

        $blogs = blog::orderBy('created_at', 'desc')->get();
        View()->share('blogs', $blogs);
        // total blogs
        $total_blogs = blog::count();
        View()->share('total_blogs', $total_blogs);

        $questions = question::orderBy('created_at', 'desc')->get();
        View()->share('questions', $questions);
        // total questions
        $total_questions = question::count();
        View()->share('total_questions', $total_questions);



        $answers = answer::all();
        View()->share('answers', $answers);
        // total answers
        $total_answers = answer::count();
        View()->share('total_answers', $total_answers);



        return view('admin/dashboard');
    }

    //user_delete funtion
    public function user_delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->Route('admin_dashboard');
    }

    //change user role
    public function change_role(Request $request)
    {
        $user = User::find($request->id);
        $user->role = $request->role;
        $user->save();
        return redirect()->Route('admin_dashboard');
    }


    public function settings()
    {
        return view('admin/settings');
    }
}
