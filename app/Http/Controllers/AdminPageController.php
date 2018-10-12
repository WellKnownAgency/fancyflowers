<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flower;
use App\Collection;
use App\Post;
use App\User;
use App\Comment;
use App\Contact;


class AdminPageController extends Controller
{
  public function index() {
    $flowers = Flower::get();
    $collections = Collection::get();
    $posts = Post::get();
    $users = User::get();
    $comments = Comment::take(3)->get();
    $contacts = Contact::take(3)->get();
      return view('admin/index')->withFlowers($flowers)->withCollections($collections)->withPosts($posts)->withUsers($users)->withComments($comments)->withContacts($contacts);
  }
}
