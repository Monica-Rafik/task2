
@extends('layouts.app')

@section('content')
    <h1>Create Contact</h1>
    <form action="{{ route('contacts.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
        
        <button type="submit">Create Contact</button>
    </form>
@endsection
