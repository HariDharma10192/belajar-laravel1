<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="/assets/image/png" sizes="16x16" href="/assets/../../assets/images/favicon.png">


    {{-- My Styles --}}
    <link rel="stylesheet" href="/css/style.css">
    <link href="/assets/css/style.css" rel="stylesheet">


</head>
<style>
    .navbar {
        background-color: salmon;
    }


</style>


<body class="h-100">
    {{-- //include navbar dari partials/navbar --}}
    @include('partials.navbar')

    {{-- //incude yield --}}
    <div class="container mt-4">

    @yield('container')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>