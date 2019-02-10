<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests\admin\ArticleRequest;
use Illuminate\Http\Request;


class ArticleController extends Main
{

    public function index()
    {
        $articles = Article::latest()->paginate(15);
        return view("admin.page.article.index",compact("articles"));
    }


    public function create()
    {
        return view("admin.page.article.create");
    }


    public function store(ArticleRequest $request)
    {

      $imagePathArray = $this->upLoadImage($request->file("imageUrl"));

      return auth()->user()->name;
    }

    public function show(Article $Article)
    {
        return $Article;
    }


    public function edit(Article $Article)
    {
        return view("admin.page.article.edit",compact('Article'));
    }


    public function update(Request $request, Article $Article)
    {
        //
    }


    public function destroy(Article $Article)
    {

        $Article->delete();
        return redirect()->route("admin.article.index");
    }
}
