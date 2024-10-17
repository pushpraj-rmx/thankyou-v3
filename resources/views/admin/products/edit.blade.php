@extends('layouts.admin')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control">
        </div>

        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="sizes">Sizes</label>
            @foreach ($product->sizes as $size)
                <input type="text" name="sizes[]" value="{{ old('sizes', $size->size) }}" class="form-control">
                <input type="text" name="prices[]" value="{{ old('prices', $size->price) }}" class="form-control">
            @endforeach
        </div>

        <div class="form-group">
            <label for="images">Product Images</label>
            @foreach ($product->images as $image)
                <img src="{{ asset($image->image) }}" width="100">
            @endforeach
            <input type="file" name="images[]" class="form-control" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
