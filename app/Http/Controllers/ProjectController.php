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
    public function edit(Post $post, Image $image){
        
        return view('projecten.edit', ['post' => $post, 'image' => $image]);
    }
    public function update(Request $request, Post $post){
            // Bewerk de postinformatie
        $new_title = $request->input('title');
        $new_content = $request->input('content');

        // Controleer of er nieuwe afbeeldingen zijn geüpload
        if ($request->hasFile('images')) {
            $imageFileNames = [];

            foreach ($request->file('images') as $image) {
                // Genereer een unieke bestandsnaam voor elke afbeelding
                $newImageFileName = $image->getClientOriginalName();

                // Sla de afbeelding op met de nieuwe bestandsnaam
                $image->storeAs('images', $newImageFileName);

                $imageFileNames[] = $newImageFileName;
            }
        } else {
            // Als er geen nieuwe afbeeldingen zijn geüpload, behoud de bestaande afbeeldingsnamen
            $imageFileNames = $post->images->pluck('fileName')->toArray();
        }

        // Bijwerken van de database
        $post->title = $new_title;
        $post->content = $new_content;
        $post->save();

        // Bewerk de relatie tussen post en afbeeldingen
        $post->images()->delete(); // Verwijder bestaande afbeeldingen

        foreach ($imageFileNames as $imageName) {
            $post->images()->create(['fileName' => $imageName]);
        }

        return redirect()->route('projecten.index');
    }
    public function destroy(Request $request, Post $post)
    {
        if (!$post) {
            return response()->json(['message' => 'Post niet gevonden'], 404);
        }

        // Controleer of de ingevoerde projectnaam overeenkomt met de daadwerkelijke posttitel
        if ($request->input('project_name') != $post->title) {
            return response()->json(['message' => 'Ongeldige projectnaam'], 400);
        }

        // Verwijder de post
        $post->delete();

        return response()->json(['message' => 'Post succesvol verwijderd'], 200);
    }

}
