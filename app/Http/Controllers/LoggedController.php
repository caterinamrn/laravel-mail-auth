<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function delete($id) {

    $post = Post::findOrFail($id);
    $post -> delete();

    return redirect() -> route('post-index');

  }
}
