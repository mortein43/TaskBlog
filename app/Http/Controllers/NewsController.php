<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function addNews(Request $request)
    {
        $summary = $request->input('header');
        $short_description = $request->input('short_text');
        $full_text = $request->input('article');

        $news = new News;
        $news->summary = $summary;
        $news->short_description = $short_description;
        $news->full_text = $full_text;

        $news->save();

        return redirect('/news');
    }

    public function showNews()
    {
        session(['locale' => 'uk']);
        $news = News::all();

        return view('news',compact('news'));
    }

    public function showOneNews($id)
    {
        $data = News::with('comments.user')->findOrFail($id);
        return view('oneNews', compact('data'));
    }
}
