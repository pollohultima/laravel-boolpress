@extends('layouts.admin')


@section('content')

    <h1>Products</h1>
    <a name="" id="" class="btn btn-primary text-white float-end" style="margin-right: 86px;"
        href="{{ route('admin.products.create') }}" role="button">Create
        Product</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td scope="row">{{ $product->id }}</td>
                    <td><img width="100" src="{{ $product->image }}" alt=""></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('admin.products.show', $product->id) }}"><i
                                class="fas fa-eye fa-lg fa-fw"></i></a>
                        <a href=""><i class="fas fa-pencil-alt fa-lg fa-fw"></i></a>

                        <a href=""><i class="fas fa-trash fa-lg fa-fw text-danger"></i></a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
