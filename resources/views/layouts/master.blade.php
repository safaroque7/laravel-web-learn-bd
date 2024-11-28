<!doctype html>
<html lang="en">

<head>
    @include('includes/header')
</head>

<body>

    <div class="container-fluid">
        <div class="row mt-md-5">

            @include('includes/menus')

            <div class="col-md-9 mx-auto">
                @yield('contactList')
                @yield('addContact')
                @yield('contactDetails')
                @yield('editContact')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
