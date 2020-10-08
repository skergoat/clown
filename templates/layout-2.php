<?php ob_start(); ?>
<!-- <img src="../assets/img/background.jpg" style="width:100%;min-height:90%;display:block;object-fit:cover;position:fixed;" /> -->
<div id="spacer-between" style="border:2px solid black;overflow:relative;overflow:hidden;position:fixed;max-height:500px;">
            <img src="../assets/img/background.jpg" style="width:100%;min-height:90%;object-fit:cover;" />
            <!-- <div style="width: 220px;position: absolute;top: 0;left: -240px;"></div>-->
        </div>
<!-- main section -->
<section class="main-content" id="main-content-id" style="background:transparent;!important;">
    <!--<div id="spacer-between">-->
        
    <div style="width:100%;min-height:100%;border:2px solid red;overflow:hidden;position:absolute;top:490px;"></div>
    <!-- </div> -->
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