<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Auth;

class ArticlesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        /*
        $article = new Article;

        $article->user_id = Auth::user()->id;
        $article->content = $request->content;
        $article->live = (boolean)$request->live;
        $article->post_on = $request->post_on;

        $article->save();
        */

        Article::create($request->all());

        /*
        Article::create([
            'user_id' => Auth::user()->id,
            'content' => $request->content,
            'live' => $request->live,
            'post_on' => $request->post_on
        ]);
        */
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
