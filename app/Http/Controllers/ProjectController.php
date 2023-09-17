<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(){
        $posts = Post::all();
        $images = Image::all();
        return view ('projecten.index', ['posts' => $posts, 'images' => $images]);
    }
    public function create(){
        $posts = Post::all();
        return view ('projecten.create', ['posts' => $posts]);
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $post = Post::create($request->post());
        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                Image::create([
                    'fileName' => $imageName,
                    'post_id' => $post->id,
                ]);
            }
        }
        $post->save();
        return redirect()->route('projecten.index');
    }
}
