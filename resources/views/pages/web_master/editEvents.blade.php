@extends('layouts.master')
@section('page_title', 'Events | Admin')

@section('content')
    <div class="container">
        <h2>Edit Event</h2>
        <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $event->name) }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">Event Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $event->date) }}" required>
                @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="details">Event Details</label>
                <textarea name="details" id="details" class="form-control" rows="4" required>{{ old('details', $event->details) }}</textarea>
                @error('details')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Event Image (Optional)</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($event->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" style="max-width: 200px; height: auto;">
                        <p>Current image</p>
                    </div>
                @endif
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Event</button>
                <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection