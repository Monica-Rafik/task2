
@extends('layouts.app')

@section('content')
    <h1>List of Contacts</h1>
    @foreach ($contacts as $contact)
        <p>
            Contact ID: {{ $contact->id }} <br>
            Name: {{ $contact->name }} <br>
            Age: {{ $contact->age }}
        </p>
    @endforeach
@endsection
