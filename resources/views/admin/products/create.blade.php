@extends('layouts.admin')

@section('content')
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        {{-- <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select> --}}
        
        <select name="category_id" class="form-control" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        
        <div class="form-group">
            <label>Product Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div id="sizes-section">
            <div class="form-group">
                <label>Product Size</label>
                <input type="text" name="sizes[]" class="form-control" required>
                <label>Price</label>
                <input type="number" name="prices[]" class="form-control" required>
            </div>
        </div>

        <button type="button" id="add-size" class="btn btn-secondary">Add Another Size</button>

        <div class="form-group">
            <label>Product Images</label>
            <input type="file" name="images[]" class="form-control" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
    <script>
        document.getElementById('add-size').addEventListener('click', function() {
            var newSize = document.createElement('div');
            newSize.innerHTML = `
                <div class="form-group">
                    <label>Product Size</label>
                    <input type="text" name="sizes[]" class="form-control" required>
                    <label>Price</label>
                    <input type="number" name="prices[]" class="form-control" required>
                </div>
            `;
            document.getElementById('sizes-section').appendChild(newSize);
        });
    </script>
@endsection
