<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\react;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class ReactController extends Controller
{
    public function like(Request $request)
    {
        // Log::info('AJAX request received in myControllerMethod');
        //store react data in database
        $react = new react();
        $react->user_id = $request->user_id;
        $react->blog_id = $request->blog_id;
        $react->save();

        return response()->json([
            'message' => 'The react has been created',
        ]);
    }

    public function dislike(Request $request)
    {
        //delete react data from database
        $react = react::where('user_id', $request->user_id)->where('blog_id', $request->blog_id)->first();
        $react->delete();

        return response()->json([
            'message' => 'The react has been deleted',
        ]);

        
    }
}
