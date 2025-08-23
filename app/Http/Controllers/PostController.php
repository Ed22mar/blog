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

        return redirect('/')->with('mensagem','Postagem criada com sucesso!');
    }
    public function show(Post $post){
        return view('post.show',compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit',compact('post'));
    }

    public function update(Request $request, Post $post){
        $validateDate = $request->validate([
            'title'=>'required|max:255',
            'body'=>'required',
        ]);
        $post->update($validateDate);

        return redirect('/posts/'. $post->id)->with('mensagem','Actualizado com sucesso');
    }


    public function dashboard(){
        $posts = Post::all();
        return view('post.dashboard',compact('posts'));
    }
}
