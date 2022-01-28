@extends('layouts.admin')

@section('content')

    <div class="container mt-5">
        <h1>Categories</h1>
        <div class="row">
            <div class="col-md-6">
                {{-- Form per creare un categoria --}}
                <form action="{{ route('admin.categories.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="category name here"
                            aria-describedby="nameHelper">
                        <small id="nameHelper" class="text-muted">Type a Category name</small>
                    </div>
                    <button type="submit" class="btn btn-primary text-white">Add Category</button>
                </form>
                @csrf

            </div>
            <div class="col-md-6">
                {{-- Lista categorie --}}

                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item ">{{ $category->name }}</li>
                        {{-- <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="text" name="name" id="name" value="{{ $category->name }}">
                        </form> --}}

                        <span class="badge  bg-primary">{{ $category->posts()->count() }}</span>

                        <form class="text-center" action="{{ route('admin.categories.destroy', $category->id) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn text-danger">
                                <i class="fas fa-trash fa-lg fa-fw"></i>
                            </button>
                        </form>
                    @endforeach
                </ul>

            </div>

        </div>
    </div>



@endsection
