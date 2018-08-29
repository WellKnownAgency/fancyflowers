<?php

namespace App\Http\Controllers;

use App\Post;
use Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::orderBy('id')->get();
      return view('admin.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the data
     $this->validate($request, array(
             'title'         => 'required|max:255',
             'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
             'dscr'          => 'required'
         ));
     // store in the database
     $post = new Post;
     $post->title = $request->title;
     $post->slug = $request->slug;
     $post->metatitle = $request->metatitle;
     $post->dscr = $request->dscr;
     $post->excerpt = $request->excerpt;
     $post->body = $request->body;
     

     if ($request->hasFile('image')) {
       $image = $request->file('image');
       $filename = time() . $image->getClientOriginalName();
       $location = public_path('images/blog/' . $filename);
       Image::make($image)->resize(900, 450)->save($location);
       $post->image = $filename;
     }


     $post->save();



      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
