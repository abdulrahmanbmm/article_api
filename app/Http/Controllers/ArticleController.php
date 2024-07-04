<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return Article::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "content" => "required"
        ]);

        return Article::create($request->all());
    }
    public function show(int $id)
    {
        return Article::find($id);
    }


    public function update(Request $request, int $id)
    {
        $article = Article::find($id);
        $article->update($request->all());
        return $article;
    }

    public function destroy(int $id)
    {
        return Article::find($id)->delete();
    }
    public function search(string $title)
    {
        //
        return Article::where('title', 'like', '%' . $title . '%')->get();
    }
}
