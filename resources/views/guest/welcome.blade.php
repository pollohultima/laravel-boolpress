@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Welcome</h1>


        <a name="shop" class="btn btn-primary text-white" href="{{ route('products.index') }}" role="button">Go to Shop</a>
        <a name="shop" class="btn btn-primary text-white" href="{{ route('posts.index') }}" role="button">Go to Blog</a>

    </div>

@endsection
