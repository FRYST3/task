<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getArticles(Request $r)
    {
        $page = $r->input('page', 1);
        $perPage = 6;
        $articles = Articles::skip(($page - 1) * $perPage)->take($perPage)->get();
        $total = Articles::count();

        return response()->json([
            'success' => true,
            'articles' => $articles,
            'total' => $total,
            'currentPage' => $page,
            'lastPage' => ceil($total / $perPage),
        ]);
    }
}
