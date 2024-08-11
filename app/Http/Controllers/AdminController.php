<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $r)
    {
        $username = $r->username;
        $password = $r->password;

        $admin = Admins::where([['login', $username], ['password', $password]])->first();

        if (!$admin) {
            return redirect()->back();
        }

        Auth::guard('admins')->login($admin, true);

        return redirect('/admin');
    }

    public function index()
    {
        $articles = Articles::orderBy('id', 'desc')->get();

        return view('admin.index', compact('articles'));
    }

    public function article_delete($id)
    {
        Articles::where('id', $id)->delete();

        return redirect()->back();
    }

    public function article_edit($id)
    {
        $article = Articles::where('id', $id)->first();

        return view('admin.edit', compact('article'));
    }

    public function view_newArticle()
    {
        return view('admin.add');
    }

    public function article_save(Request $r, $id)
    {
        $validatedData = $r->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:4096'
        ], [
            'title' => 'Пожалуйста, введите заголовок',
            'short_desc.required' => 'Пожалуйста, введите короткое описание.',
            'description.required' => 'Пожалуйста, введите описание.',
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validatedData->errors()->first()
            ]);
        }

        $article = Articles::findOrFail($id);

        if ($r->hasFile('image')) {
            $image = $r->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images'), $imageName);
            $validatedData['image'] = 'assets/images/' . $imageName;
        }

        $article->update([
            'title' => $validatedData['title'],
            'short_desc' => $validatedData['short_desc'],
            'description' => $validatedData['description'],
            'img' => $validatedData['image'] ?? $article->img,
        ]);

        return response()->json(['success' => true]);
    }

    public function article_add(Request $r)
    {
        $validatedData = $r->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:4096'
        ], [
            'title' => 'Пожалуйста, введите заголовок',
            'short_desc.required' => 'Пожалуйста, введите короткое описание.',
            'description.required' => 'Пожалуйста, введите описание.',
            'image.required' => 'Пожалуйста, загрузите фото.',
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validatedData->errors()->first()
            ]);
        }

        if ($r->hasFile('image')) {
            $image = $r->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images'), $imageName);
            $validatedData['image'] = 'assets/images/' . $imageName;
        }

        Articles::create([
            'title' => $validatedData['title'],
            'short_desc' => $validatedData['short_desc'],
            'description' => $validatedData['description'],
            'img' => $validatedData['image'],
        ]);

        return redirect('/admin');
    }
}
