@extends('layouts.master')
@section('page_title', 'All Contacts')
@section('content')

    <div class="container mt-5">
        <h2 class="text-center">Contact List</h2>
        <table  class="table datatable-button-html5-columns">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->last_name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone_number ?? 'N/A' }}</td>
                        <td>{{ $contact->message ?? 'No message provided' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No contacts found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection