<?php ob_start(); ?>

<!-- main section -->
<section class="main-content" id="main-content-id">
    <div id="spacer-between">
        <div style="margin: 0 auto;position: relative; width:100%;height:100%;border:2px solid black;">
            <img src="../assets/img/background.jpg" style="width:100%;display:block;object-fit:cover;" />
        </div>
    </div>
    <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2" id="main-title-1"><a class='black link-black' href='#'><span class="mr-1 black chevron"><</span> <?= $previous ?></a></div>
    <div class="title pb-4 mt-4" id="main-title-2"><?= $mainTitle ?></div>
    <div class="content mt-1 mb-5" id="content-cross">
        <div class="mx-auto content__product">
            <?= $primaryContent ?>
        </div>
    </div>
</section>
<!-- secondary section -->
<section class="secondary-content">
    <?= $secondaryContent ?>
</section>

<?php $content = ob_get_clean(); ?>

<!-- script -->
<?php ob_start(); ?>
<?php $script = ob_get_clean(); ?>

<?php require('layout.php'); ?>