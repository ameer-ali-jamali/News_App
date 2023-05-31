<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::orderBy('id')->get();
        return response()->json($articles);
    }
    //
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return response()->json($article);
    }
    //
    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'title' => 'required|max:30',
        //     'content' => 'required',
        //     'author' => 'required',
        //     'category' => 'required',

        // ]);
        $article = new Article();
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->author = $request['author'];
        $article->category = $request['category'];
        $article->save();
        return response()->json($article, 201);
    }
    //
    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|max:30',
        //     'content' => 'required',
        //     'author' => 'required',
        //     'category' => 'required',
        // ]);
        $article = Article::findOrFail($id);
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->author = $request['author'];
        $article->category = $request['category'];
        $article->save();
        return response()->json($article);
    }
    //
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return response()->json(['message' => 'Article deleted successfully']);
        } else {
            return response()->json(['message' => 'Article not found'], 404);
        }
    }
}
