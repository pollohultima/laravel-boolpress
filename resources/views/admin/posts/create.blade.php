@extends('layouts.admin')

@section('content')

    <h1>Create a new post</h1>

    <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is_invalid @enderror"
                placeholder="Type your title" aria-describedby="helpId" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="sub_title" class="form-label">Subtitle</label>
            <input type="text" name="sub_title" id="sub_title" class="form-control  @error('sub_title') is_invalid @enderror"
                placeholder="Type your subtitle" aria-describedby="helpId" value="{{ old('sub_title') }}">
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Image URL</label>
            <input type="file" accept="images/*" name="cover" id="cover"
                class="form-control  @error('cover') is_invalid @enderror" placeholder="URL or upload your img"
                aria-describedby="helpId">
        </div>


        <div class="   mb-3">
            <label for="category_id" class="form-label">Categories</label>
            <select class="form-control @error('category_id') is_invalid @enderror" name="category_id" id="category_id">
                <option value="" selected>Select a category</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select multiple class="form-select" name="tags[]" id="tags">
                <option disabled>Select all tags</option>

                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="   mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" name="body" id="body" class="form-control  @error('body') is_invalid @enderror"
                placeholder="Type your text" aria-describedby="helpId" value="{{ old('body') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Post</button>

    </form>

@endsection
