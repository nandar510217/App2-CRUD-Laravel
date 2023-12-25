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


    public function index() {
        //read article
        $articles = Article::all();
        return view('article.index', compact('articles'));

        
    }

    public function delete($id) {
        Article::find($id)->delete();
        // dd('$articles');
        return back();   
     }

    public function create() {
       return view('article.create');   
    }
}
