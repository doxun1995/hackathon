<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $posts = Post::where("user_id", $user_id)->paginate(1);
        return view('posts/index', [
            'posts' => $posts,
        ]);
    }
}
