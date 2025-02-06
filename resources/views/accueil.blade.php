@include('partials.header')

<div class="container my-auto h-100">
    <div class="row">
        <h1 class="col page-title">Accédez à notre catalogue</h1>
    </div>
    <div class="row justify-content-center">
        <div class="pole col m-2">
            <a href="/catalogue">
                <img src="/picto-art.png" alt="" width="128px">
                <p>Floriane Perrot</p>
            </a>
        </div>
        <div class="pole col m-2">
            <a href="/catalogue">
                <img src="/picto-bienetre.png" alt="" width="128px">
                <p>Juan Pacifico y Sanchez</p>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="pole col m-2">
            <a href="/catalogue">
                <img src="/picto-numerique.png" alt="" width="128px">
                <p>Raphaële Galmisch</p>
            </a>
        </div>
        <div class="pole col m-2">
            <a href="/catalogue">
                <img src="/picto-services.png" alt="" width="128px">
                <p>Valérie Vanderwalle</p>
            </a>
        </div>
    </div>
</div>

@include('partials.footer')