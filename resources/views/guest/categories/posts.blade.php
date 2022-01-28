@extends('layouts.app')

@section('content')

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Category: {{ $category->name }}</h1>
            <p class="lead">Jumbo helper text</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>

    <div class="container">

        @forelse ($posts as $post)
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
            @empty
                <div class="col">
                    <p>Nothing to display</p>
                </div>

        @endforelse
    </div>
    {{ $post->links() }}
    </div>


@endsection
