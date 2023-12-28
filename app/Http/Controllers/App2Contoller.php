<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
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
        $articles = Article::paginate(5);
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
    public function store(Request $request) 
    {
        $request -> validate([
            'title' => 'required|unique:articles,title|min:5',
            'content' => 'required',
        ]);
        Article::create([
            'title' => $request->title,
            'content' => $request->content
            //'title' => request('title'),
            // 'content' => request('content')
        ]);
        session()->flash('successMsg','An article has been created successfully.');
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


    //post crud
    //read
    public function indexPost() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    //create post
    public function createPost() {
        return view('posts.create');
    }

    public function storePost(Request $request) {
        $request->validate([
            'title' => 'required',
            'name' => 'required|unique:posts,name'
        ]);
        Post::create([
            'title' => $request->title,
            'name' => $request->name,
        ]);
        return redirect()->route('index');
    }

    //edit post
    public function editPost($id) {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    //update post
    public function updatePost(Request $request, $id) {
        $post = Post::findOrFail($id);
    
        $post->update([
            'title' => $request->input('title'),
            'name' => $request->input('name')
        ]);
        return redirect()->route('index');
    }

    //delete post
    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return back();
    }
    
}
