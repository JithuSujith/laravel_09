<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postcreate(){
        return view('posts.create');
    }

    public function postsave(Request $request){
         Post::create($request->all());
         return redirect(route('Home'));
    }

    public function postindex(){
        $posts=Post::all();
        return view('Posts.index',compact('posts'));
    }
}
