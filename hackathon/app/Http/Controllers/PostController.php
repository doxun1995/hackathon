<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(1);
        return view('posts/index', [
            'posts' => $posts,
        ]);
    }

    public function new()
    {
        return view('posts.new');
    }

    public function create(Request $request)
    {
        $imagefile = $request->file('image_url')->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $imagefile);
        return view('posts.create', [
            'title' => $request->title,
            'body' => $request->body,
            'url' => $request->url,
            'image_url' => $request->image_url,
            'imagefile' => $imagefile,
            'read_temp_path' => $read_temp_path,
        ]);
    }

    public function insert(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->url = $request->url;
        $post->image_url = $request->image_url;
        Auth::user()->posts()->save($post);

        return redirect('/');
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

    public function delete()
    {
        
    }

}
