@extends('layouts.master')

@section('title', 'Add Contact')

@section('addContact')
    <div class="card">
        <div class="card-header">
            <h1> Create a New User </h1>
        </div>

        <div class="card-body">
            <form action="{{ route('phone-book.store') }}" method="POST">
                @include('phone_book.form')
                <button type="submit" class="btn btn-primary"> Add New Contact </button>
            </form>

        </div>
    </div>
@endsection
