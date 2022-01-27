@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12 ">
                <div class="card">
                    <img class="card-img-top" src="{{ $post->cover }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->body }}</p>
                        <h6 class="card-text">{{ $post->slug }}</h6>

                        <a name="shop" class="btn btn-primary text-white" href="{{ route('admin.posts.index') }}"
                            role="button">Back to posts</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
