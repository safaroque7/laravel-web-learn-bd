@extends('layouts.master')

@section('title', 'Add Contact')

@section('addContact')
    <div class="card">
        <div class="card-header">
            <h4> Create a New User </h4>
        </div>

        <div class="card-body">

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}


            <form action="{{ route('phone-book.store') }}" method="POST">
                @include('phone_book.form')
                <button type="submit" class="btn btn-primary"> Add New Contact </button>
            </form>

        </div>
    </div>
@endsection
