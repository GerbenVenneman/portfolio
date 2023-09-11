<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view ('projecten.index', ['posts' => $posts]);
    }
}
