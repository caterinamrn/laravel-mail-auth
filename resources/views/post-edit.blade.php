@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Post: {{$post -> title}}</h2></div>

                <div class="card-body">

                  <form  action="{{route('post-update', $post -> id)}}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="title">Title :</label>
                      <input type="text" name="title" value="{{$post -> title}}">
                    </div>
                    <div class="form-group">
                      <label for="content">Content :</label>
                      <input type="text" name="content" value="{{$post -> content}}">
                    </div>
                    <div class="form-group">
                      <label for="like">Like :</label>
                      <input type="number" name="like" value="{{$post -> like}}">
                    </div>
                    <div class="form-group">
                      <label for="dislike">Dislike :</label>
                      <input type="number" name="dislike" value="{{$post -> dislike}}">
                    </div>
                    <br>
                    <button type="submit" name="button">EDIT</button>

                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
