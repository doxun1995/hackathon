<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $query = DB::table('posts')->get();
        return view('posts.index')->with('posts',$query);
    }

    public function new()
    {
        return view('posts.new');
    }

    public function create(Request $request)
    {
        $post = $request;
        return view('posts.create')->with('post',$post);
    }

    public function insert(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->url = $request->url;
        $post->image_url = $request->image_url;
        $post->save();

        return redirect('/posts/index');
    }

    public function edit()
    {
        // $post = Post::findOrFail($id);
        // return view('posts.edit')->with('post',$post);
        return view('posts.edit');
    }

    public function update(Request $request)
    {
        $post = $request;
        return view('posts.update')->with('post',$post);
    }

    public function update_post(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->url = $request->url;
        $post->image_url = $request->image_url;
        $post->save();

        return redirect('/posts/index');
    }

}
