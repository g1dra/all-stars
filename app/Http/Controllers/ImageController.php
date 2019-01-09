<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    public function create($album_id)
    {
        return view('image.create',compact('album_id'));
    }

    public function store($album_id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'images' => 'required'
        ]);

        if($request->hasFile('images')){
            // Get filename with the extension
            $allowedfileExtension=['pdf','jpg','png','docx','jpeg'];
            $files = $request->file('images');
            foreach ($files as $file)
            {
                $filenameWithExt = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    $path = $file->storeAs('public/gallery', $fileNameToStore);
                    // Store images in database
                    $image = new Image;
                    $image->album_id = $album_id;
                    $image->name = $request->input('name');
                    $image->description = $request->input('description');
                    $image->image = $fileNameToStore;
                    $image->save();
                }
                else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                    //  return redirect('/album/')->with('success', 'Images Uploaded');
                }

            }
            return redirect("/album/".$album_id)->with('success', 'Images Uploaded');
            // Upload Image
        }
        return redirect("/album/".$album_id)->with('fail', 'No images selected');
    }

    public function destroy($id)
    {
        $image =Image::find($id)->delete();
        return "success";
    }

}
