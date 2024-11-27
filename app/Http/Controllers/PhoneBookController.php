<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        $contactsCollection = PhoneBook::all();
        return view('phone-book.index', compact('contactsCollection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phone-book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PhoneBook::create($request->all());
        return redirect()->route('phone-book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     $singleContact = PhoneBook::find($id);
     return view('phone-book.show', compact('singleContact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = PhoneBook::find($id);
        return view('phone-book.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = PhoneBook::find($id);

        $contact->update($request->all());
        
        return redirect()->route('phone-book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhoneBook $phoneBook)
    {
        //
    }
}
