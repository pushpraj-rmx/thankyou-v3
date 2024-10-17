@extends('layouts.admin')

@section('title', 'Edit Social Media Link')

@section('content')
    <h2>Edit Social Media Link</h2>
    <form action="{{ route('socialMedia.update', $socialMediaLink->id) }}" method="POST">
        @csrf
        <div>
            <label for="platform_name">Platform Name:</label>
            <input type="text" name="platform_name" id="platform_name" value="{{ $socialMediaLink->platform_name }}" required>
        </div>

        <div>
            <label for="url">Platform URL:</label>
            <input type="url" name="url" id="url" value="{{ $socialMediaLink->url }}" required>
        </div>

        <div>
            <label for="enabled">Enable:</label>
            <input type="checkbox" name="enabled" id="enabled" {{ $socialMediaLink->enabled ? 'checked' : '' }}>
        </div>

        <button type="submit">Update Social Media Link</button>
    </form>
@endsection