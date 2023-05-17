<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //all images
    public function index() {
        return view('images.index', [
            'images' => Image::latest()->filter(request(['search']))->get()
        ]);
    }

    
    //show create form
    public function create() {
        return view('images.create');
    }

        //store image
    public function store(Request $request) {
        $form = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'artist' => 'required'
        ]);
        Image::create($form);

        return redirect('/');
    }

    //single image
    public function show(Image $image) {
        return view('images.show', [
            'image' => $image
        ]);
    }

    //show edit form
    public function edit(Image $image) {
        return view('images.edit', ['image' => $image
        ]);
    }

    //update listing
    public function update(Request $request, Image $image) {
        $form = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'artist' => 'required'
        ]);
        $image->update($form);

        return redirect('/');
    }

    //delete
    public function delete(Image $image) {
        $image->delete();
        return redirect('/');
    }
}
