
<?php ob_start(); ?>

<div class="background">
    <!-- parallax image -->
    <div id="parallax-image">
        <img src="../assets/img/background.jpg" id="parallax-image__img" />        
        <img src="../assets/img/background.jpg" id="parallax-image__img" style="transform:rotate(180deg);"/>
        <img src="../assets/img/background.jpg" id="parallax-image__img" />       
        <img src="../assets/img/background.jpg" id="parallax-image__img" style="transform:rotate(180deg);"/>
    </div>

    <!-- shoop breadcumb -->
    <?= $breadcumb ?>

    <!-- link top --> 
    <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2 d-flex" id="main-title-1">
        <a class='black link-black d-block' href='#'><?= $previous ?></a>
    </div>

    <!-- main section -->
    <section class="main-content" id="main-content-id"> 
        <!-- main title --> 
        <div class="title pb-4 mt-4" id="main-title-2"><?= $mainTitle ?><?= $subTitle ?></div>
        <!-- primary content --> 
        <div class="content mt-1 pb-5" id="content-cross">
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