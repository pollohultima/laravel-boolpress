@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12 ">
                <div class="card">
                    <img class="card-img-top" src="{{ $post->cover }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <div class="metadata">
                            <div class="category">

                                @if ($post->category)
                                    Category: <a href="{{ route('categories.posts', $post->category->slug) }}">
                                        {{ $post->category->name }}</a>


                                @else
                                    <span>Uncategorized</span>

                                @endif
                            </div>
                        </div>

                        <div class="metadata">
                            <div class="tags">
                                <h3>Tags</h3>
                                @forelse ($post->tags as $tag)
                                    <a href="{{ route('tags.posts', $tag->slug) }}">{{ $tag->name }}</a>
                                @empty
                                    <span>Untagged</span>
                                @endforelse
                            </div>
                        </div>
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
