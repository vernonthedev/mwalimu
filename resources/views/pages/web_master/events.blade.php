@extends('layouts.master')
@section('page_title', 'Events | Admin')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Manage Events</h6>
        {{-- Add panel options if needed --}}
    </div>

    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item">
                <a href="#create-event" class="nav-link active" data-toggle="tab">Create New Event</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Events</a>
                <div class="dropdown-menu dropdown-menu-right">
                    @foreach($events as $event)
                        <a href="#event{{ $event->id }}" class="dropdown-item" data-toggle="tab">{{ $event->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a href="#all-events" class="nav-link" data-toggle="tab">All Events</a>
            </li>
        </ul>

        <div class="tab-content">
            {{-- Create Event Form --}}
            <div class="tab-pane show active fade" id="create-event">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Event Name <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="Enter Event Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Event Image</label>
                                <div class="col-lg-9">
                                    <input name="image" type="file" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Event Date <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="date" value="{{ old('date') }}" required type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Details <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea name="details" rows="4" class="form-control" placeholder="Enter Event Details">{{ old('details') }}</textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit Form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Manage Events --}}
            @foreach($events as $event)
                <div class="tab-pane fade" id="event{{ $event->id }}">
                    <h5>{{ $event->name }}</h5>
                    <p><strong>Date:</strong> {{ $event->date }}</p>
                    <p><strong>Details:</strong> {{ $event->details }}</p>
                    @if($event->image)
                        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}" style="max-width: 100%; height: auto;">
                    @endif
                    <br>
                    {{-- edit the event --}}
                    <button><a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a></button>
                    {{-- delete an event --}}
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                </div>
            @endforeach

            {{-- Listing All Events --}}
            <div class="tab-pane show fade" id="all-events">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container mt-5">
                            <table  class="table datatable-button-html5-columns">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Event Name</th>
                                        <th>Image</th>
                                        <th>Details</th>
                                        <th>Date</th>
                              
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($events as $event)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $event->name }}</td>
                                            <td><img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}" width="70px"></td>
                                            <td>{{ $event->details }}</td>
                                            <td>{{ $event->date ?? 'N/A' }}</td>
                                          
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No Events found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection