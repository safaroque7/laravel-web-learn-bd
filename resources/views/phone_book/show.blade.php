@extends('layouts.master')

@section('title', 'Details Contact')

@section('contactDetails')
    <div class="card">
        <div class="card-header">
            <h1> Contact Details </h1>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <tr>
                        <th> ID </th>
                        <td> {{ __($phoneBook->id) }} </td>
                    </tr>
                    <tr>
                        <th> Name </th>
                        <td> {{ __($phoneBook->name) }} </td>
                    </tr>
                    <tr>
                        <th> Phone Number </th>
                        <td> {{ __($phoneBook->phone_number) }} </td>
                    </tr>


                    <tr>
                        <th> Created At </th>
                        <td> {{ __($phoneBook->created_at->toDayDateTimeString()) }} </td>
                    </tr>
                    <tr>
                        <th> Updated At </th>
                        <td> {{ __($phoneBook->updated_at == $phoneBook->created_at ? 'Not updated yet' : $phoneBook->updated_at->toDayDateTimeString()) }}
                        </td>
                    </tr>

                </tbody>
            </table>
            <button class="btn btn-success btn-sm"> <a href="{{ route('phone-book.index') }}"
                    class="text-white text-decoration-none"> Back </a> </button>
        </div>
    </div>
@endsection
