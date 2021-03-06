@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-9">

                @foreach ($posts as $post)

                    <div class="mb-4">
                        <div class="card">
                            <img class="card-img-top w-25" src="{{ $post->cover }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->title }}</h4>
                                <p class="card-text text-truncate">{{ $post->body }}</p>


                                <a name="shop" class="btn btn-primary text-white "
                                    href="{{ route('posts.show', $post->id) }}" role="button">Show</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

            <div class="col-md-3">
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
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Tags
                        </h3>
                        <ul>
                            @foreach ($tags as $tag)
                                <li>
                                    <a href="{{ route('tags.posts', $tag->slug) }}">{{ $tag->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{ $posts->links() }}
    </div>


@endsection
