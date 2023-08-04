
@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>
    
    <form action="{{ route('contacts.update', $contact->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $contact->name }}">
        
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="{{ $contact->age }}">
        
        <button type="submit">Update Contact</button>
    </form>
@endsection
