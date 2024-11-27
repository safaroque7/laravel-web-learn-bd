<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="contianer">
        <div class="row">
            <div class="col-md-6 mx-auto mt-md-5">
                <div class="card">
                    <div class="card-header">
                        <h1> Edit Contact </h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('phone-book.update', $contact->id) }}" method="put">
                            @csrf
                            <div class="mb-md-3 md-2">
                                <label for="name" class="form-label"> Name </label>
                                <input type="text" name="name" value="{{ __($contact->name) }}" id="name" class="form-control">
                            </div>

                            <div class="mb-md-3 md-2">
                                <label for="phone-number" class="form-label"> Phone </label>
                                <input type="text" name="phone_number" value="{{ __($contact->phone_number) }}" id="phone-number" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary"> Update Contact </button>

                        </form>

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
