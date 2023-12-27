<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class App2Contoller extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }
    public function loginPage() {
        return view('login');
    }

    public function login(Request $request) {
        // dd($request->all());
        
    }


    //read article
    public function index() {
        $articles = Article::all();
        return view('article.index', compact('articles'));
        // return view('article.index')->with('articles', $articles);
        // return view('article.index')->withArticles($articles); 
    }

    //delete article
    public function delete($id) {
        Article::find($id)->delete();
        return back();   
     }

     //go to create form
    public function create() {
       return view('article.create');   
    }

    //create
    public function store(Request $request) {
        Article::create([
            'title' => $request->title,
            'content' => $request->content
            //'title' => request('title'),
            // 'content' => request('content')
        ]);
        return redirect('article');
    }

    //edit
    public function edit($id) {
        // dd($id);
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    //update
    public function update(Request $request, $id){
        $article = Article::findOrfail($id);
        $article->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect('article');
        // return view('article.index'); false
    }
    
}
