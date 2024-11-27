<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="contianer">
        <div class="row">
            <div class="col-md-6 mx-auto mt-md-5">
                <div class="card">
                    <div class="card-header">
                        <h1> Contact Details </h1>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr>
                                    <th> ID </th>
                                    <td> {{ __($singleContact->id) }} </td>
                                </tr>
                                <tr>
                                    <th> Name </th>
                                    <td> {{ __($singleContact->name) }} </td>
                                </tr>
                                <tr>
                                    <th> Phone Number </th>
                                    <td> {{ __($singleContact->phone_number) }} </td>
                                </tr>


                                <tr>
                                    <th> Created At </th>
                                    <td> {{ __($singleContact->created_at->toDayDateTimeString()) }} </td>
                                </tr>
                                <tr>
                                    <th> Updated At </th>
                                    <td> {{ __($singleContact->updated_at == $singleContact->created_at ? 'Not updated yet' : $singleContact->updated_at->toDayDateTimeString()) }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <button class="btn btn-success btn-sm"> <a href="{{ route('phone-book.index') }}" class="text-white text-decoration-none"> Back </a> </button>
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
