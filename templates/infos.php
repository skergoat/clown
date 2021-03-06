<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Infos Pratiques</h2>" ?>
<?php $subTitle = "<h5 class='text-center light sub-title-sm lh-xs-17 font-18'>Vous trouverez ici toutes les infos concernant la boutique Clown Montmartre</h5>" ?>
<?php ob_start(); ?>
    <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2 d-flex" id="main-title-1">
        <a class='black link-black' href='http://localhost:8888/templates/home.php'><span class='mr-2 black chevron'><</span>Accueil</a>
    </div>
<?php $previous = ob_get_clean(); ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto mt-4">
    <div class="row border-radius-10 m-0 p-xs-4 pb-sm-0 p-5">
        <div class="col-lg-8 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 mt-2 mb-xs-5 mb-sm-5 mb-lg-5">
            <!-- include content right -->
            <?php include('includes/notreBoutique.php'); ?>
        </div>
        <div class="col-lg-4 mt-2 p-xs-none">
            <h5 class="black pb-2">Coordonnées</h5>
            <span class="border-bottom-orange mb-4"></span>
            <div>
                <div class="d-flex">
                    <div><i class="icon-location icon-pink font-20 pr-1"></i></div>
                    <div><p class="font-13 lh-2">22 rue du Faubourg Montmartre - 75009 Paris</p></div>
                </div>
                <div class="mt-0 ml-4">
                    <div class="mt-0 transports-info transports-info__metro"><img src="../assets/img/metro.png" style="width:180px;"></div>
                    <div class="mt-2 transports-info transports-info__bus"><img src="../assets/img/bus.png"></div>
                    <div class="mt-2 transports-info transports-info__bus"><img src="../assets/img/velib.png"></div>
                </div>
                <div class="d-flex mt-4">
                    <div><i class="icon-phone icon-pink font-20 pr-1"></i></div>
                    <div><p class="font-13 lh-2">01 47 70 05 93</p></div>
                </div>
                <div class="d-flex">
                    <div><i class="icon-mail-alt icon-pink font-20 pr-1"></i></div>
                    <div><p class="font-13 lh-2">clown.fr@gmail.com</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-radius-10 pt-xs-4 pt-lg-4 p-xs-none p-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.211259162632!2d2.3408797156406265!3d48.87324910761453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3e57dbdae7%3A0x86b218623adda57b!2sClown%20Montmartre!5e0!3m2!1sfr!2s!4v1602149246137!5m2!1sfr!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mt-1"></iframe>
    </div>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<!-- JS  --> 
<?php ob_start(); ?>
<script>
    // active link 
    let activeId = '#active-infos';
    // space-between position top
    $('#space-between').css('top', '63%');       
    $('.secondary-content').css('display', 'none'); 
</script>
<script src="../assets/js/cart.js"></script>
<?php $script = ob_get_clean(); ?>

<!-- include -->
<?php require('layout/layoutSecond.php'); ?>