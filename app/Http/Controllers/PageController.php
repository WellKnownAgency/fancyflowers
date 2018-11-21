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

    public function sitemap()
    {
      $posts = Post::get();
      $flowers = Flower::get();
      return response()->view('sitemap')->withPosts($posts)->withFlowers($flowers)->header('Content-Type', 'text/xml');
    }

}
