@extends('layouts.admin')

@section('title', 'Manage Sliders')

@section('content')
    <h2>Manage Sliders</h2>

    There are {{ $sliders->count() }} sliders available
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Slider Title:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="short_paragraph">Short Paragraph:</label>
            <textarea name="short_paragraph" id="short_paragraph" rows="3" required></textarea>
        </div>

        <div>
            <label for="image">Slider Image:</label>
            <input type="file" name="image" id="image" required>
        </div>

        <div>
            <label for="button_text">Button Text (optional):</label>
            <input type="text" name="button_text" id="button_text">
        </div>

        <div>
            <label for="button_url">Button URL (optional):</label>
            <input type="url" name="button_url" id="button_url">
        </div>

        <button type="submit">Add Slider</button>
    </form>

    <h3>Existing Sliders</h3>
    <ul>
        @foreach($sliders as $slider)
            <li>
                <img src="{{ asset('storage/' . $slider->image_path) }}" alt="{{ $slider->title }}" width="100">
                <strong>{{ $slider->title }}</strong> - {{ $slider->short_paragraph }}
                @if($slider->button_text)
                    <a href="{{ $slider->button_url }}">{{ $slider->button_text }}</a>
                @endif
                - <a href="{{ route('slider.edit', $slider->id) }}">Edit</a> 
                - <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                  </form>
            </li>
        @endforeach
    </ul>
@endsection
