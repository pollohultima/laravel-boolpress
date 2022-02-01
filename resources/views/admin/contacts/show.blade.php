@extends('layouts.admin')

@section('content')

    <h1>{{ $contact->name }}</h1>

    <div class="metadata">
        <span>From: {{ $contact->email }}</span> | <span>Date: {{ $contact->created_at }}</span>
    </div>
    <p>
        {{ $contact->message }}
    </p>

    <hr>

    <h2>Reply</h2>
    <form action="{{ route('') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>


@endsection
