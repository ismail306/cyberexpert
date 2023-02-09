<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index()
    {
        $news = news::orderBy('created_at', 'desc')->paginate(10);
        return view('users.news', compact('news'));
    }

    //store news with link
    public function storenews(Request $request)
    {
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



        //store the news
        $news = new news();
        $news->title = $title;
        $news->url = $validatedData['url'];
        $news->image_url = $image;
        $news->user_id = auth()->user()->id;
        $news->save();
        return redirect()->back()->with('status', 'News Added Successfully');
    }
}
