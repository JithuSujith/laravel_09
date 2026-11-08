<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function postcreate(){
        return view('posts.create');
    }

    public function postsave(PostRequest $request){
         Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'img'=>$request->file('img')?$request->file('img')->store('img','public'):'images/pexels-marcos-sanchez-620772900-25745383.jpg'
         ]);
         return redirect(route('Home'));
    }

    public function postindex(){
        $posts=Post::all();
        return view('Posts.index',compact('posts'));
    }
}
