<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\react;
use App\Models\blog;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ReactController extends Controller
{
    public function like(Request $request)
    {
        // Checking if user has already reacted to the blog
        $the_react = React::where('blog_id', $request->blog_id)->where('user_username', $request->user_id)->first();
        if ($the_react) {

            return response()->json([
                'message' => 'You have already reacted to this blog',
            ]);
        }

        // Giving react to a blog
        $blog = Blog::find($request->blog_id);
        $user = User::where('username', $request->user_id)->first();

        $react = new React;

        $react->blog_id = $blog->id;
        $react->user_username = $user->username;

        $react->save();

        return response()->json([
            'message' => 'Reacted to blog',
        ]);
    }

    public function dislike(Request $request)
    {
        $the_react = React::where('blog_id', $request->blog_id)->where('user_username', $request->user_id)->first();

        if ($the_react) {

            // The regular deleting system is not working here, So I used the DB class here
            DB::delete('delete from reacts where blog_id = ? and user_username = ?', [$request->blog_id, $request->user_id]);

            return response()->json([
                'message' => 'The react has been deleted',
            ]);
        }

        return response()->json([
            'message' => 'You have not reacted to this blog',
        ]);
    }
}
