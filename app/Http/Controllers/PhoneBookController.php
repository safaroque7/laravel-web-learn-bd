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
        return view('phone_book.index', compact('contactsCollection'));
        // return view('layouts.master', compact('contactsCollection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phone_book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            'name' => 'required|min:3|max:50',
            'phone_number' => 'required|unique:phone_books|numeric|digits:11',
        ]);
        PhoneBook::create($request->all());
        session()->flash('msg', 'Contact created successfully');
        session()->flash('cls', 'success');
        return redirect()->route('phone-book.index');
    }

    /**
     * Summary of show
     * @param \App\Models\PhoneBook $phoneBook
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    
    public function show(PhoneBook $phoneBook)
    {
     return view('phone_book.show', compact('phoneBook'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhoneBook $phoneBook)
    {
        return view('phone_book.edit', compact('phoneBook'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhoneBook $phoneBook)
    {
        $request->validate( [
            'name' => 'required|min:3|max:50',
            'phone_number' => 'required|numeric|digits:11',
        ]);

        $phoneBook->update($request->all());
        session()->flash('msg', 'Contact Updated Successfully');
        session()->flash('cls', 'info');
        return redirect()->route('phone-book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhoneBook $phoneBook)
    {
        $phoneBook->delete();
        session()->flash('msg', 'Contact Deleted Successfully');
        session()->flash('cls', 'danger');
        return redirect()->route('phone-book.index');
    }
}