@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">View Products</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
