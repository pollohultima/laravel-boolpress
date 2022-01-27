@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="{{ $post->cover }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->body }}</p>


                        <a name="shop" class="btn btn-primary text-white" href="{{ route('posts.index') }}"
                            role="button">Back to posts</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
