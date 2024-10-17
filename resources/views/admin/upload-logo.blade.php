@extends('layouts.admin')

@section('title', 'Upload Logo')

@section('content')
    <h2>Upload Site Logo</h2>
    <form action="{{ route('logo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="logo">Select Logo:</label>
            <input type="file" name="logo" id="logo" required>
        </div>
        <button type="submit">Upload</button>
    </form>
@endsection
