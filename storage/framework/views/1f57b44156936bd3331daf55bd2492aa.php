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
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
</head>

<body>
    
    <header class="d-flex flex-wrap justify-content-between p-3 mb-4 border-bottom drop-shadow">
        <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none gap-2">
            <img src="<?php echo e(asset('/SFPME_LOGO_CMYK.png')); ?>" alt="logo sfpme" height="48px">
            <img src="<?php echo e(asset('/logo-efp-sb.png')); ?>" alt="logo efp" height="48px">
        </a>
        
        <nav class="d-flex justify-content-between align-items-center fw-bolder">
            <ul class="nav nav-pills flex-row gap-2">
                <li class="nav-item"><a href="/catalogue" class="header-link">Catalogue</a></li>
                <li class="nav-item"><a href="/contact" class="header-link">Contacts</a></li>
                <li class="nav-item"><a href="/boite-outils" class="header-link">Boite à outils</a></li>
                <li class="nav-item"><a href="/faq" class="header-link">FAQ</a></li>
            </ul>
        </nav>

        <img class="yellow-bg rounded m-2 p-2" src=" <?php echo e(asset('/icons/list.svg')); ?>" alt="burger menu icon"
            width="48" height="48" id="burger-button">
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
<?php /**PATH /home/coline/REPOS PERSO/Hackathon-TrouveTonStage/resources/views/partials/header.blade.php ENDPATH**/ ?>