@extends('layouts.app')

@section('content')



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="container-fluid">
                    <div class="row ">
                        @foreach ($posts as $post)

                            <div class="col-12 mb-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ $post->cover }}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p class="card-text">{{ $post->body }}</p>


                                        <a name="shop" class="btn btn-primary text-white"
                                            href="{{ route('posts.show', $post->id) }}" role="button">Show</a>
                                    </div>
                                </div>

                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Categories
                        </h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('categories.posts', $category->slug) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
