@extends('layouts.admin')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-md-6">
                <h1>Tags</h1>
                {{-- Form per creare un categoria --}}
                <form action="{{ route('admin.tags.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="tag name here"
                            aria-describedby="nameHelper">
                        <small id="nameHelper" class="text-muted">Type a tag name</small>
                    </div>
                    <button type="submit" class="btn btn-primary text-white">Add tag</button>
                </form>
                @csrf

            </div>
            <div class="col-md-3">
                {{-- Lista categorie --}}

                <ul class="list-group">
                    @foreach ($tags as $tag)
                        <li class="list-group-item d-flex align-items-center">{{ $tag->name }}



                            <span class="badge  bg-primary mx-2">{{ $tag->posts()->count() }}</span>

                            <form class="text-center" action="{{ route('admin.tags.destroy', $tag->id) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn text-danger">
                                    <i class="fas fa-trash fa-lg fa-fw"></i>
                                </button>
                            </form>
                        </li>
                    @endforeach
                    {{-- <form action="{{ route('admin.tags.update', $tag->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="text" name="name" id="name" value="{{ $tag->name }}">
                        </form> --}}

                </ul>

            </div>

        </div>
    </div>



@endsection
