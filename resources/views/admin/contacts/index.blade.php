@extends('layouts.admin')

@section('content')

    <h1>All messages received</h1>

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>

    @endif

    <table class="table striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($contacts as $contact)
                <tr>
                    <td scope="row">{{ $contact->id }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td></td>
                    <td>
                        <a href="{{ route('admin.contacts.show', $contact->id) }}">Read Message</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                            data-bs-target="#delete_message_{{ $contact->id }}">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete_message_{{ $contact->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="removeMessage_{{ $contact->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Remove Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are You sure buddy
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="post">
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
        </tbody>
    </table>


@endsection
