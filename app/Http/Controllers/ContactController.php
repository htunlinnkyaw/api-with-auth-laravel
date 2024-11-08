<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return response()->json(["message" => "Data Fetched Successfully", "data" => $contacts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {

        $request->validate([
            'name' => 'required|max:100|unique:contacts,name',
            'email' => 'required|email',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->save();

        return response()->json(['message' => 'Contact created successfully', 'data' => $contact]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return response()->json(["data" => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
        ]);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->update();
        return response()->json(['message' => 'Contact updated successfully', 'data' => $contact]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        if ($contact) {
            $contact->delete();
            return response()->json(['message' => 'Contact deleted successfully', 'data' => $contact]);
        }
    }
}
