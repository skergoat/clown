<?php ob_start(); ?>
    <div id="spacer-between" style="border:2px solid black;overflow:relative;overflow:hidden;position:fixed;">
        <img src="../assets/img/background.jpg" style="width:100vw;height:90vh;min-height:550px;" />
    </div>
<!-- main section -->
<section class="main-content" id="main-content-id" style="background:transparent;!important;">        
    <div style="width:100%;min-height:100%;border:2px solid red;overflow:hidden;position:absolute;top:70vh;"></div>
    <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2" id="main-title-1" style="background:transparent;!important;"><a class='black link-black' href='#'><span class="mr-1 black chevron"><</span> <?= $previous ?></a></div>
    <div class="title pb-4 mt-4" id="main-title-2" style="background:transparent;!important;"><?= $mainTitle ?></div>
    <div class="content mt-1 mb-5" id="content-cross" style="background:transparent;!important;">
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