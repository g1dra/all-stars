<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lastMatch = DB::table('schedule')->get()->last();
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y');
        $lastMatch->date = $date;

        //$posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lastMatch = DB::table('schedule')->get()->last();
        $clubs = DB::table('clubs')->get();
        $homeTeam = DB::table('clubs')->where('name','=', $lastMatch->home)->get()->first();
        $guestTeam = DB::table('clubs')->where('name','=', $lastMatch->guest)->get()->first();
        $date = date_create($lastMatch->date);
        $date = date_format($date, 'F d, Y');
        $lastMatch->date = $date;

        return view('posts.create', compact(['lastMatch','clubs','homeTeam','guestTeam','posts']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('cover_image'))
        {
                //get filename with  extension
                $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
                //get just filename
                $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                //uploade image
                $path = $request->file('cover_image')->storeAs('public/posts/cover_images', $fileNameToStore);
            }
        else {
            $fileNameToStore ='noimage.jpg';
        }
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/')->with('success', 'Post created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
    }
}
