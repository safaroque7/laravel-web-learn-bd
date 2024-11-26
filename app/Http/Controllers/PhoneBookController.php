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
        return 'Hello';
        return view('phone-book.index');
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
        PhoneBook::create($request->all());
        return redirect()->route('phone-book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhoneBook $phoneBook)
    {
        //
    }
}
