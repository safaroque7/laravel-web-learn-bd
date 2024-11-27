<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Phone Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="contianer">
        <div class="row">
            <div class="col-md-10 mx-auto mt-md-5">
                <div class="card">
                    <div class="card-header">
                        <h1> Phone Book List </h1>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
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
                                            <button class="btn btn-info btn-sm"> <a href="{{ route('phone-book.show', $contactsItem->id ) }}" class="text-decoration-none text-white"> View </a> </button>
                                            <button class="btn btn-warning btn-sm"> <a href="{{ route('phone-book.edit', $contactsItem->id ) }}" class="text-decoration-none text-dark"> Edit </a>  </button>
                                            <button class="btn btn-danger btn-sm"> Delete </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
