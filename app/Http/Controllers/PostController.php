<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        $validateDate = $request->validate([
            'title'=>'required|max:255',
            'body'=>'required',
        ]);
        Post::create($validateDate);

        return redirect('/')->with('mensagem','Postagem criado com sucesso!');
    }
}
