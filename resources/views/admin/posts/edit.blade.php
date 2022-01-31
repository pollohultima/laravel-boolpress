@extends('layouts.admin')

@section('content')


    <form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>Update a post</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is_invalid @enderror"
                placeholder="title" aria-describedby="helpId" value="{{ $post->title }}">
        </div>

        <div class="mb-3">

            <div class="row">
                <div class="col"><img src="{{ asset('storage/' . $post->cover) }}" alt="" class="img-fluid">
                </div>
                <div class="col"> <label for="cover" class="form-label">Change cover image</label>
                    <input type="file" name="cover" id="cover" class="form-control  @error('cover') is_invalid @enderror"
                        placeholder="cover" aria-describedby="helpId">
                </div>

            </div>

        </div>

        <div class="mb-3">
            <label for="sub_title" class="form-label">Subtitle</label>
            <input type="text" name="sub_title" id="sub_title"
                class="form-control  @error('sub_title') is_invalid @enderror" placeholder="Type your subtitle"
                aria-describedby="helpId" value="{{ $post->sub_title }}">
        </div>


        <div class="  mb-3">
            <label for="category_id" class="form-label">Categories</label>
            <select class="form-control @error('category_id') is_invalid @enderror" name="category_id" id="category_id">
                <option value="">Uncategorized</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $category->id == old('category', $post->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select multiple class="form-select" name="tags[]" id="tags">
                <option disabled>Select all tags</option>

                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>
                        {{ $tag->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">body</label>
            <input type="text" name="body" id="body" class="form-control  @error('body') is_invalid @enderror"
                placeholder="body" aria-describedby="helpId" value="{{ $post->body }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>

    </form>

@endsection
