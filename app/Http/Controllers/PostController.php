<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view ('posts.index', ['posts' => $posts]);
    }
    public function aboutMe(){
        $posts = Post::all();
        return view ('posts.overmij', ['posts' => $posts]);
    }
    public function contact(){
        $posts = Post::all();
        return view ('posts.contact', ['posts' => $posts]);
    }
}
