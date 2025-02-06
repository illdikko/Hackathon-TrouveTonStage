<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container my-auto h-100">
    <div class="row">
        <h1 class="col page-title">Accédez à notre catalogue</h1>
    </div>
    <div class="row justify-content-center">
        <div class="pole col m-2">
            <a href="/catalogue?id=2">
                <img src="/picto-art.png" alt="" width="128px">
                <p>Floriane Perrot</p>
            </a>
        </div>
        <div class="pole col m-2">
            <a href="/catalogue?id=4">
                <img src="/picto-bienetre.png" alt="" width="128px">
                <p>Juan Pacifico y Sanchez</p>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="pole col m-2">
            <a href="/catalogue?id=1">
                <img src="/picto-numerique.png" alt="" width="128px">
                <p>Raphaële Galmisch</p>
            </a>
        </div>
        <div class="pole col m-2">
            <a href="/catalogue?id=3">
                <img src="/picto-services.png" alt="" width="128px">
                <p>Valérie Vanderwalle</p>
            </a>
        </div>
    </div>
</div>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/coline/REPOS PERSO/Hackathon-TrouveTonStage/resources/views/accueil.blade.php ENDPATH**/ ?>