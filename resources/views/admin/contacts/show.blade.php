@extends('layouts.admin')

@section('content')

    <h1>{{ $contact->name }}</h1>

    <div class="metadata">
        <span>From: {{ $contact->email }}</span> | <span>Date: {{ $contact->created_at }}</span>
    </div>
    <p>
        {{ $contact->message }}
    </p>


@endsection
