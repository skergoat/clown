<?php ob_start(); ?>
<div id="parallax-image">
    <img src="../assets/img/background.jpg" style="width:105%;position:relative;left:-50px;height:90vh;min-height:90vh;" />
</div>
<!-- main section -->
<section class="main-content" id="main-content-id"> 
    <!-- white separator -->       
    <div id="space-between"></div>
     <!-- link top --> 
    <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2" id="main-title-1"><a class='black link-black' href='#'><span class="mr-1 black chevron"><</span> <?= $previous ?></a></div>
    <!-- main title --> 
    <div class="title pb-4 mt-4" id="main-title-2"><?= $mainTitle ?></div>
    <!-- primary content --> 
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
<?php require('layout.php'); ?>