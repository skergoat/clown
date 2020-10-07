<?php ob_start(); ?>

<!-- main section -->
<section class="main-content">
    <div class="previous"><?= $previous ?></div>
    <div class="title"><?= $mainTitle ?></div>
    <div class="content"><?= $primaryContent ?></div>
</section>
<!-- secondary section -->
<section class="secondary-content"><?= $secondaryContent ?></section>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>