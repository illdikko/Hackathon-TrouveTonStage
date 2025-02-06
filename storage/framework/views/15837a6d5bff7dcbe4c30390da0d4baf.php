<?php
use App\Models\Annonce;
use App\Http\Controllers\AnnonceController;

if (isset($_GET['id'])) {
    $annonces = AnnonceController::getAnnonceFiltered($_GET['id']);
} else {
    $annonces = AnnonceController::getAnnonce();
}
?>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<input type="search" id="search-string" name="search-string" placeholder="Rechercher...">

<?php $__currentLoopData = $annonces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $annonce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('partials.carte-annonce', $annonce, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset('js/search.js')); ?>"></script>
<?php /**PATH /home/coline/REPOS PERSO/Hackathon-TrouveTonStage/resources/views/catalogue.blade.php ENDPATH**/ ?>