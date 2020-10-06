@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>POSTS</h1> </div>

                <div class="card-body">
                  @auth
                  <div class="spacearound">
                    <a class='btn btn-primary' href="{{route('post-create')}}">CREATE NEW POST</a>
                  </div>

                  @endauth
                  <ul>
                    @foreach ($posts as $post)
                    <li>
                      <a href="{{ route('post-show', $post -> id )}}">{{ $post -> title }}</a>
                      <br>
                       {{$post -> content }}
                    </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
