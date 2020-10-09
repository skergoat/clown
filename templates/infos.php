<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black'>Infos Pratiques</h2>" ?>
<?php $previous = "<a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto">
    <div class="row border-radius-10 m-0 p-xs-4 pb-sm-0 p-5">
        <div class="col-lg-8 pl-xs-none pr-xs-none pr-sm-0 pr-md-5 mt-2 mb-xs-5 mb-sm-5 mb-lg-5">
            <h5 class="black pb-2">Notre Boutique</h5>
            <span class="border-bottom mb-4"></span>
            <p class="font-13 lh-19 pr-sm-0 pr-xs-none pr-md-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
            <div class="pt-2">
                <p class="font-13 black m-0 mb-1">Ouverture</p>
                <p class="font-13 lh-18 m-0 mb-1">Lundi - Samedi</p>
                <p class="font-13 lh-18 m-0 mb-1">09h30 - 19h00</p>
            </div>
        </div>
        <div class="col-lg-4 mt-2 p-xs-none">
            <h5 class="black pb-2">Coordonnées</h5>
            <span class="border-bottom mb-4"></span>
            <div>
                <div class="d-flex">
                    <div><i class="icon-location icon-pink font-20 pr-1"></i></div>
                    <div><p class="font-13 lh-2">22 rue du Faubourg Montmartre - 75009 Paris <br> Métro : Grands Boulevards</p></div>
                </div>
                <div class="d-flex">
                    <div><i class="icon-phone icon-pink font-20 pr-1"></i></div>
                    <div><p class="font-13 lh-2">01 47 70 05 93</p></div>
                </div>
                <div class="d-flex">
                    <div><i class="icon-mail icon-pink font-20 pr-1"></i></div>
                    <div><p class="font-13 lh-2">clown.fr@gmail.com</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-radius-10 pt-xs-4 pt-lg-2 p-xs-none p-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.211259162632!2d2.3408797156406265!3d48.87324910761453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3e57dbdae7%3A0x86b218623adda57b!2sClown%20Montmartre!5e0!3m2!1sfr!2s!4v1602149246137!5m2!1sfr!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mt-1"></iframe>
    </div>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<!-- include -->
<?php require('layout-2.php'); ?>