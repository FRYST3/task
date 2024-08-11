<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Comments;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function article($id)
    {
        $article = Articles::where('id', $id)->first();
        $comments = Comments::where('article_id', $id)->get();

        return view('article', compact('article', 'comments'));
    }
}
