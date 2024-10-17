@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <h1>Products in {{ $category->name }}</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset($product->images->first()->image) }}" class="card-img-top"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <h1>Products in {{ $category->name }}</h1>
    @forelse($category->products as $product)
        <div class="product-item">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
        </div>
    @empty
        <p>No products available in this category.</p>
    @endforelse
@endsection
