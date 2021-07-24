<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Picture;

class PictureController extends Controller
{
    /**
     * Display a listing of all submitted dogs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::all();

        return view('index', ['pictures' => $pictures]);
    }

    /**
     * Show the form for uploading a new dog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Handle the form submission and save the uploaded dog
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // See PictureControllerTest to see what this should do

        // Instantiate Picture object and save to variable picture 
        $picture = new Picture;
        // Send request to content in name input and store it in name field of picture object
        $picture->name = request('name');
        // Request image file hashname (name) and save it as file_name 
        $file_name = $request->file('image')->hashName();
        // Store file_name into column file_path within picture model table
        $picture->file_path = $file_name;
        // Variable that is assigned in the function’s call (image) sends request for file to be stored in Storage/App/Public 
        request()->file('image')->storeAs('/public', $file_name);
        // Store request - saving to variable picture
        $picture->save();
        // Redirect to homepage once store completed 
        return redirect()->to('/');
    }

    /**
     * Upvote a dog by ID
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upvote(Request $request, Picture $picture)
    {
        // Increment function on column votes within Picture model
        $picture->increment('votes');
        // Save to associated picture with Id
        $picture->save();
        // Redirect to homepage once update completed 
        return redirect()->to('/');
    }
}
