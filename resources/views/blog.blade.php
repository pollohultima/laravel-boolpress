@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>SPA Blog</h1>

        <div class="card text-start mb-3" v-for="post in posts">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">@{{ post.title }}</h4>
                <p class="card-text">@{{ post.body }}</p>
            </div>
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

@endsection
