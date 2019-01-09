<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;


class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    public function index()
    {
        $albums = Album::with('photos')->get();
        return view('album.index',compact('albums'));
    }

    public function create()
    {
        return view('album.create');
    }

    public function show($id)
    {
        $album = Album::with('photos')->find($id);
        $albums = Album::with('photos')->get();
        return view('album.show', compact(['album','albums']));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $fileNameToStore;
        $album->save();
        return redirect('/album')->with('success', 'Post Created');
    }

    public function destroy($id)
    {
        $album = Album::find($id)->delete();

        return redirect('album.index');
    }
}
