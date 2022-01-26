@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-3">

            @foreach ($products as $product)
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $product->image }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->name }}</h4>
                            <p class="card-text">{{ $product->description }}</p>
                            <h6 class="card-text">{{ $product->price }}</h6>

                            <a name="shop" class="btn btn-primary text-white"
                                href="{{ route('products.show', $product->id) }}" role="button">Show</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
