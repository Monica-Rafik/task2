
@extends('layouts.app')

@section('content')
    <h1>Contact Details</h1>
    <p>
        Contact ID: {{ $contact->id }} <br>
        Name: {{ $contact->name }} <br>
        Age: {{ $contact->age }}
    </p>
@endsection
