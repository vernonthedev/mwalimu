<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{

    public function index()
    {
        $events = Event::paginate(10);
        return view('pages.web_master.events', compact('events'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'details' => 'required|string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $validatedData['image'] = $imagePath;
        }

        Event::create($validatedData);

        return redirect()->back()->with('success', 'Event created successfully!');
    }

    public function showEvents()
    {
        $events = Event::paginate(20);  // Fetching all events from the database
        return view('home.events', compact('events'));
    }


    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('home.eventDetails', compact('event'));
    }


    public function edit(Event $event)
    {
        // Return the edit view with the event data
        return view('pages.web_master.editEvents', compact('event'));
    }


    public function update(Request $request, Event $event)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the event details
        $event->update($request->only('name', 'date', 'details'));

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $event->update(['image' => $imagePath]);
        }

        // Redirect back with success message
        return redirect()->route('events.store')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        // Delete the event
        $event->delete();
    
        // Optionally delete the image from storage if it exists
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }
    
        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }
    
}
