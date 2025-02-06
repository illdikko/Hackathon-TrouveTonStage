<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EFP</title>
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
        <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
            <img src="{{ asset('/SFPME_LOGO_CMYK.png') }}" alt="logo_efp" height="48px">
        </a>
        <img class="yellow-bg rounded m-2 p-2" src=" {{ asset('/icons/list.svg') }}" alt="burger menu icon" width="48"
            height="48" id="burger-button">

        {{-- OVERLAY for burger menu --}}
    </header>
    <main>

        <div class="overlay-menu" id="overlay">
            <nav class="d-flex flex-column justify-content-center align-items-center">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item"><a href="/catalogue">Catalogue</a></li>
                    <li class="nav-item"><a href="/contact">Contacts</a></li>
                    <li class="nav-item"><a href="/boite-outils">Boite à outils</a></li>
                    <li class="nav-item"><a href="/faq">FAQ</a></li>
                </ul>
            </nav>
        </div>
        {{-- desktop --}}