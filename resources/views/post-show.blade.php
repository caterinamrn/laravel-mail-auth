@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ $post -> title }}</h2></div>

                <div class="card-body">

                    {{ $post -> content }}
                    <div class="">
                      like: {{ $post -> like }}   dislike: {{ $post -> dislike }}
                    </div>


                </div>
            </div>
            <div class="spacearound">
              @auth
              <a class='btn btn-primary' href="#">CREATE NEW POST</a>
              <a class='btn btn-danger' href="#">DELETE</a>
              @endauth
            </div>

        </div>
    </div>
</div>
@endsection
