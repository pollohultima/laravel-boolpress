@extends('layouts.app')

@section('content')

    <div class="container">

        @foreach ($posts as $post)
            <div class="row ">
                <div class="col-12 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $post->cover }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <p class="card-text">{{ $post->body }}</p>


                            <a name="shop" class="btn btn-primary text-white" href="{{ route('posts.show', $post->id) }}"
                                role="button">Show</a>
                        </div>
                    </div>
                </div>
        @endforeach

    </div>
    </div>

@endsection
