<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('posts.contact');
    }

    public function submit(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Mail::to('test@test.nl')->send(new ContactMail($data));
        $session = session();
        $session->flash('succes', 'Gelukt! Ik zal uw bericht zo spoedig mogelijk beantwoorden.');
        return view('posts.contact');
    }
}
