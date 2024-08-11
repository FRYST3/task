<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function addComment(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id' => 'required|exists:articles,id',
            'name' => 'required|string|max:255',
            'text' => 'required|string|min:10|max:1000',
        ], [
            'name.required' => 'Пожалуйста, введите ваше имя.',
            'text.required' => 'Пожалуйста, введите текст.',
            'text.min' => 'Текст должен быть не менее 10 символов.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()->first()
            ]);
        }

        $comment = Comments::create([
            'article_id' => $r->id,
            'name' => $r->name,
            'text' => $r->text,
        ]);

        return response()->json(['success' => true, 'comment' => $comment]);
    }
}
