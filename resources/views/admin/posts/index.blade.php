@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>
    <a name="" id="" class="btn btn-primary text-white float-end" style="margin-right: 86px;"
        href="{{ route('admin.posts.create') }}" role="button">Create
        Post</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cover</th>
                <th>Title</th>
                <th>Body</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tslug>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td><img width="100" src="{{ $post->cover }}" alt=""></td>
                    <td>{{ $post->title }}</td>
                    <td class="text-truncate" style="max-width: 300px;">{{ $post->body }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}"><i class="fas fa-eye fa-lg fa-fw "></i></a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}"> <i
                                class="fas fa-pencil-alt fa-lg fa-fw"></i></a>

                        <!-- Button trigger modal -->
                        <a data-bs-toggle="modal" data-bs-target="#delete{{ $post->id }}">
                            <i class="fas fa-trash fa-lg fa-fw text-danger"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="modal-{{ $post->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete post {{ $post->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Vuoi davvero cancellare il post?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tslug>
    </table>


@endsection
