<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); 
        return view('index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id); 
        return view('show', compact('contact'));
    }

    public function showByName($id, $name = null)
    {
        $contact = Contact::findOrFail($id); 
        return view('show_name', compact('contact'));
    }

    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        $contact = Contact::create($validatedData);

        return redirect()->route('contacts.show', $contact->id);
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id); 
        return view('edit', compact('contact'));
    }

   
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($validatedData);

        return redirect()->route('contacts.show', $contact->id);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
