<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view ('projecten.index', ['posts' => $posts]);
    }
    public function create(){
        $posts = Post::all();
        return view ('projecten.create', ['posts' => $posts]);
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        // $post = new Post();

        // // Controleer of de gebruiker een afbeelding heeft geupload
        // if (!$request->hasFile('image')) {
        //     // Geef een foutmelding
        //     throw new BadRequestException('Je moet een afbeelding uploaden.');
        // }

        // // Vul de gegevens van het bericht in
        // $post->title = $request->input('title');
        // $post->content = $request->input('content');
        // $post->image = $request->file('image')->store('public/images');

        // // Sla het bericht op
        // $post->save();
        // $file = $request->file('image');

        // // Store the file in the public/images directory
        // $filename = Storage::disk('public')->putFile('images', $file);
    
        // Return the filename
        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {

                $imageName = $image->getClientOriginalName();

                $image->move(public_path('images'), $imageName);

 

                Image::create([

                    'path' => $imageName,

                    'project_id' => $project->id,

                ]);

            }

        }
        return redirect()->route('projecten.index');
    }
}
