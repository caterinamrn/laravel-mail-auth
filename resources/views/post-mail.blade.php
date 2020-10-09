@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ $user -> name }}: {{$action}}</h2></div>

                <div class="card-body">
                    {{ $post -> title }}
                    {{ $post -> content }}
                    <div class="">

                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
