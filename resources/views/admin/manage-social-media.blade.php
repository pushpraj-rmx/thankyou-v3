@extends('layouts.admin')

@section('title', 'Manage Social Media Links')

@section('content')
    <h2>Manage Social Media Links</h2>
    <form action="{{ route('socialMedia.store') }}" method="POST">
        @csrf
        <div>
            <label for="platform_name">Platform Name:</label>
            <input type="text" name="platform_name" id="platform_name" required>
        </div>

        <div>
            <label for="url">Platform URL:</label>
            <input type="url" name="url" id="url" required>
        </div>

        <div>
            <label for="enabled">Enable:</label>
            <input type="checkbox" name="enabled" id="enabled" checked>
        </div>

        <button type="submit">Add Social Media Link</button>
    </form>

    <h3>Existing Social Media Links</h3>
    <ul>
        @foreach($socialMediaLinks as $link)
            <li>
                <strong>{{ $link->platform_name }}</strong> 
                - <a href="{{ $link->url }}">{{ $link->url }}</a>
                - Status: {{ $link->enabled ? 'Enabled' : 'Disabled' }}
                - <a href="{{ route('socialMedia.edit', $link->id) }}">Edit</a> 
                - <form action="{{ route('socialMedia.destroy', $link->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                  </form>
            </li>
        @endforeach
    </ul>
@endsection
