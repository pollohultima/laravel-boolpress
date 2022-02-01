@extends('layouts.app')

@section('content')

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Contacts</h1>
            <p class="lead">Contact us</p>

        </div>
    </div>


    {{-- //messaggio di successo --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- //messaggio di errore --}}
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>

    @endif
    <div class="container">
        <form action="{{ route('contacts.send') }}" method="post">
            @csrf
            <div class="row">

                <div class="col"><label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Mario Rossi"
                        aria-describedby="helpId" value="{{ old('name') }}">
                    <small id="helpId" class="text-muted">Type your name here</small>
                </div>

                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Type your email"
                        aria-describedby="helpId" value="{{ old('email') }}">
                    <small id="helpId" class="text-muted">Type you email adress here</small>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"
                        value="{{ old('message') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 text-white">Send</button>



            </div>


        </form>
    </div>
@endsection
