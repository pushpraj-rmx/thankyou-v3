@extends('layouts.admin')

@section('title', 'Edit Section')

@section('content')
    <h2>Edit Section</h2>
    <form action="{{ route('section.update', $section->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Section Title:</label>
            <input type="text" name="title" id="title" value="{{ $section->title }}" required>
        </div>

        <div>
            <label for="content">Section Content:</label>
            <textarea name="content" id="content" rows="5" required>{{ $section->content }}</textarea>
        </div>

        <div>
            <label for="image">Section Image (optional):</label>
            <input type="file" name="image" id="image">
            @if($section->image_path)
                <img src="{{ asset('storage/' . $section->image_path) }}" alt="Section Image" width="150">
            @endif
        </div>

        <div>
            <label for="button_text">Button Text (optional):</label>
            <input type="text" name="button_text" id="button_text" value="{{ $section->button_text }}">
        </div>

        <div>
            <label for="button_url">Button URL (optional):</label>
            <input type="url" name="button_url" id="button_url" value="{{ $section->button_url }}">
        </div>

        <div>
            <label for="enabled">Enable Section:</label>
            <input type="checkbox" name="enabled" id="enabled" {{ $section->enabled ? 'checked' : '' }}>
        </div>

        <button type="submit">Update Section</button>
    </form>
@endsection
