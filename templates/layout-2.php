<?php ob_start(); ?>
<div class="background">
    <div id="parallax-image">
        <img src="../assets/img/background.jpg" id="parallax-image__img" />        
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
            <div class="mx-auto content__product pt-5 pb-5 pl-5 pr-3">
                <?= $primaryContent ?>
            </div>
        </div>
    </section>
</div>
<!-- secondary section -->
<section class="secondary-content">
    <?= $secondaryContent ?>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>