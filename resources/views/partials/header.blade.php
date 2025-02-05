<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    {{-- mobile --}}
    <header class="d-flex flex-wrap justify-content-between p-3 mb-4 border-bottom drop-shadow">
        <a href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="assets/048e0e3h.png" alt="logo_efp">
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item p-1 yellow-bg rounded"><img src="{{ asset('/icons/list.svg') }}" alt="burger menu icon"
                    width="48" height="48"></li>
        </ul>
        {{-- <nav class="d-flex flex-row justify-content-between">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/catalogue">Catalogue</a></li>
                <li class="nav-item"><a href="/contacts">Contacts</a></li>
                <li class="nav-item"><a href="/boite-outils">Boite à outils</a></li>
                <li class="nav-item"><a href="/faq">FAQ</a></li>
            </ul>
        </nav> --}}
    </header>

    {{-- desktop --}}
    <main>
