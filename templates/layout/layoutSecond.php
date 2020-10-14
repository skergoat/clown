
<?php ob_start(); ?>

<div class="background">
    <div id="parallax-image">
        <img src="../assets/img/background.jpg" id="parallax-image__img" />        
    </div>
    <!-- main section -->
    <section class="main-content" id="main-content-id"> 
        <!-- white separator -->       
        <div id="space-between" class="bgd-white"></div>
        <!-- link top --> 
        <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2" id="main-title-1"><a class='black link-black' href='#'> <?= $previous ?></a></div>
        <!-- main title --> 
        <div class="title pb-4 mt-4" id="main-title-2"><?= $mainTitle ?><?= $subTitle ?></div>
        <!-- primary content --> 
        <div class="content mt-1 mb-5" id="content-cross">
            <?= $primaryContent ?>
        </div>
    </section>
</div>
<!-- secondary section -->
<section class="secondary-content bgd-white">
    <div class="container-width mx-auto pb-5">
        <?= $secondaryContent ?>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout/layoutMain.php'); ?>