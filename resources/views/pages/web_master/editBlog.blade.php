@extends('layouts.master')
@section('page_title', 'Blogs | Admin')

@section('content')
    <div class="container">
        <h2>Edit Blog</h2>
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="short_description">Short Description</label>
                <textarea name="short_description" id="short_description" class="form-control" rows="4" required>{{ old('short_description', $blog->short_description) }}</textarea>
                @error('short_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea name="long_description" id="long_description" class="form-control" rows="4" required>{{ old('long_description', $blog->long_description) }}</textarea>
                @error('long_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="details">Blog Details</label>
                <textarea name="details" id="details" class="form-control" rows="4" required>{{ old('details', $blog->details) }}</textarea>
                @error('details')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Blog Image (Optional)</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($blog->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" style="max-width: 200px; height: auto;">
                        <p>Current image</p>
                    </div>
                @endif
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Blog</button>
                <a href="{{ route('blog.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection