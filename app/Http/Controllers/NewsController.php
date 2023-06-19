<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index()
    {
        //last two news
        $lastNews = news::orderBy('id', 'desc')->take(2)->get();
        //all news except last two news
        $news = news::orderBy('id', 'desc')->paginate(10);
        View()->share('lastNews', $lastNews);
        return view('users.news', compact('news'));
    }

    //store news with link
    public function storenews(Request $request)
    {
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'certified') {
            //validate
            $validatedData = $request->validate([
                'url' => 'required|url',

            ]);

            //Extract the link information
            $html = file_get_contents($validatedData['url']);
            $dom = new \DOMDocument();
            @$dom->loadHTML($html);
            $xpath = new \DOMXPath($dom);

            $title = null;
            $titleNode = $xpath->query('//title')[0];
            if ($titleNode) {
                $title = $titleNode->nodeValue;
            }



            $image = null;
            $imageNode = $xpath->query('//meta[@property="og:image"]/@content')[0];
            if ($imageNode) {
                $image = $imageNode->nodeValue;
            }

            //title max 15 words
            $title = implode(' ', array_slice(explode(' ', $title), 0, 15));

            //store the news
            $news = new news();
            $news->title = $title;
            $news->url = $validatedData['url'];
            $news->image_url = $image;
            $news->user_id = auth()->user()->id;
            $news->save();
            return redirect()->back()->with('status', 'News Added Successfully');
        } else {
            return redirect()->back()->with('status',    'You are not authorized to add news');
        }
    }



    public function adminnews()
    {
        $news = news::paginate(25);

        View()->share('news', $news);
        return view('admin/news');
    }
    public function admin_news_delete($id)
    {
        $news = news::find($id);
        $news->delete();
        return redirect()->Route('admin.news')->withMessage('News Successfully Deleted');
    }
}
