@extends('layouts.admin')

@section('title', 'Edit Slider')

@section('content')
    <h2>Edit Slider</h2>
    <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Slider Title:</label>
            <input type="text" name="title" id="title" value="{{ $slider->title }}" required>
        </div>

        <div>
            <label for="short_paragraph">Short Paragraph:</label>
            <textarea name="short_paragraph" id="short_paragraph" rows="3" required>{{ $slider->short_paragraph }}</textarea>
        </div>

        <div>
            <label for="image">Slider Image (optional):</label>
            <input type="file" name="image" id="image">
            @if($slider->image_path)
                <img src="{{ asset('storage/' . $slider->image_path) }}" alt="Slider Image" width="150">
            @endif
        </div>

        <div>
            <label for="button_text">Button Text (optional):</label>
            <input type="text" name="button_text" id="button_text" value="{{ $slider->button_text }}">
        </div>

        <div>
            <label for="button_url">Button URL (optional):</label>
            <input type="url" name="button_url" id="button_url" value="{{ $slider->button_url }}">
        </div>

        <button type="submit">Update Slider</button>
    </form>
@endsection
