<?php

namespace App\Http\Controllers;

use App\Post;
use App\Flower;
use Vinkla\Instagram\Instagram;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $instagram = new Instagram('248274392.1677ed0.8a29b5a11e5f4e0f8b8e6ddd0933ac4c');
      $flowers = Flower::latest()->limit(8)->get();
      $posts = Post::latest()->limit(5)->get();
      return view('index', compact('flowers'))->withPosts($posts)->withInstagram($instagram);
    }

}
