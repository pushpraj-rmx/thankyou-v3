@extends('layouts.admin')

@section('title', 'Manage Sections')

@section('content')
    <h2>Manage Sections</h2>
    <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Section Title:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="content">Section Content:</label>
            <textarea name="content" id="content" rows="5" required></textarea>
        </div>

        <div>
            <label for="image">Section Image (optional):</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <label for="button_text">Button Text (optional):</label>
            <input type="text" name="button_text" id="button_text">
        </div>

        <div>
            <label for="button_url">Button URL (optional):</label>
            <input type="url" name="button_url" id="button_url">
        </div>

        <div>
            <label for="enabled">Enable Section:</label>
            <input type="checkbox" name="enabled" id="enabled" checked>
        </div>

        <button type="submit">Save Section</button>
    </form>

    <h3>Existing Sections</h3>
    <ul>
        @foreach($sections as $section)
            <li>
                {{ $section->title }} - {{ $section->enabled ? 'Enabled' : 'Disabled' }}
                <a href="{{ route('section.edit', $section->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
