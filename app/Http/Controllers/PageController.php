<?php

namespace App\Http\Controllers;

use App\Post;
use App\Flower;
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
      $flowers = Flower::latest()->limit(8)->get();
      $posts = Post::latest()->limit(5)->get();
      return view('index', compact('flowers'))->withPosts($posts);
    }

}
