@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12 ">
                <div class="card">
                    <img class="card-img-top" src="{{ $product->image }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <h6 class="card-text">Price: {{ $product->price }}</h6>

                        <a name="shop" class="btn btn-primary text-white" href="{{ route('products.index') }}"
                            role="button">Back to products</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
