<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'message' => 'nullable|string',
        ]);

        // Save the data to the database
        Contact::create($validatedData);
    
        // Return a JSON response to the ajax form contact handler
        return response()->json(['success' => 'Your Contact information Has Been Received Successfully!']);
    }


    public function show(Contact $contact)
    {
          // Fetch all contacts
        $contacts = Contact::paginate(20);

        // Pass data to the view
        return view('pages.web_master.contacts', compact('contacts'));
    }


    public function edit(Contact $contact)
    {
        //
    }


    public function update(Request $request, Contact $contact)
    {
        //
    }


    public function destroy(Contact $contact)
    {
        //
    }
}
