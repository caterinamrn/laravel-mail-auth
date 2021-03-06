<?php

namespace App\Http\Controllers;


use App\Post;
use App\Mail\UserAction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function delete($id) {

      $post = Post::findOrFail($id);
      $post -> delete();

      $user = Auth::user();
      $action = 'Delete';

      Mail::to('admin@mail.com')
            ->send(new UserAction($post,$user,$action));

      return redirect() -> route('post-index');

  }

  public function create() {

    return view('post-create');

  }

  public function store(Request $request) {

    $data = $request -> all();
    $post = Post::create($data);

    return redirect() -> route('post-index', $post -> id);
  }

  public function edit($id) {

    $post = Post::findOrFail($id);
    return view('post-edit',compact('post'));

  }
  public function update(Request $request, $id) {

    $data = $request -> all();
    $post = Post::findOrFail($id);
    $post -> update($data);

    return redirect() -> route('post-index', $post -> id);

  }

}
