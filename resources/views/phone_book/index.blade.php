@extends('layouts.master')

@section('title', 'Phone Book List')

@section('contactList')
    <div class="card">
        <div class="card-header">
            <h1> Phone Book List </h1>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <th> SL </th>
                    <th> Name </th>
                    <th> Phone </th>
                    <th> Crated At </th>
                    <th> Updated At </th>
                    <th> Action </th>
                </thead>

                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($contactsCollection as $contactsItem)
                        <tr>
                            <td> {{ __($sl++) }} </td>
                            <td> {{ __($contactsItem->name) }} </td>
                            <td> {{ __($contactsItem->phone_number) }} </td>
                            <td> {{ __($contactsItem->created_at->toDayDateTimeString()) }} </td>
                            <td> {{ __($contactsItem->updated_at == $contactsItem->created_at ? 'Not updated yet' : $contactsItem->updated_at->toDayDateTimeString()) }}
                            </td>
                            <td>
                                <button class="btn btn-info btn-sm"> <a
                                        href="{{ route('phone-book.show', $contactsItem->id) }}"
                                        class="text-decoration-none text-white"> View </a> </button>
                                <button class="btn btn-warning btn-sm"> <a
                                        href="{{ route('phone-book.edit', $contactsItem->id) }}"
                                        class="text-decoration-none text-dark"> Edit </a> </button>
                                {{-- <button class="btn btn-danger btn-sm"> <a
                                    onclick="return confirm('Are you sure you want to delete this item?')"
                                    href="{{ route('phone-book.destory', $contactsItem->id) }}"
                                    class="text-decoration-none text-white"> Delete </a> </button> --}}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
