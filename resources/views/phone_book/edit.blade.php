@extends('layouts.master')

@section('title', 'Edit Contact')

@section('editContact')
    <div class="card">
        <div class="card-header">
            <h1> Edit Contact </h1>
        </div>

        <div class="card-body">
            <form action="{{ route('phone-book.update', $phoneBook->id) }}" method="PUT">
                @csrf
                <div class="mb-md-3 md-2">
                    <label for="name" class="form-label"> Name </label>
                    <input type="text" name="name" value="{{ __($phoneBook->name) }}" id="name"
                        class="form-control">
                </div>

                <div class="mb-md-3 md-2">
                    <label for="phone-number" class="form-label"> Phone </label>
                    <input type="text" name="phone_number" value="{{ __($phoneBook->phone_number) }}" id="phone-number"
                        class="form-control">
                </div>


                

                <button type="submit" class="btn btn-primary"> Update Contact </button>

            </form>

        </div>
    </div>
@endsection
