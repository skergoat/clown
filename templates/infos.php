<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black'>Infos Pratiques</h2>" ?>
<?php $previous = "<a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto overflow-hidden">
    <div class="row m-0 p-5">
        <div class="col-lg-8 b-red">
            <h5 class="black">Notre Boutique</h5>
        </div>
        <div class="col-lg-4 b-blue">
            <h5 class="black">Coordonnées</h5>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.211259162632!2d2.3408797156406265!3d48.87324910761453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3e57dbdae7%3A0x86b218623adda57b!2sClown%20Montmartre!5e0!3m2!1sfr!2s!4v1602149246137!5m2!1sfr!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<!-- include -->
<?php require('layout-2.php'); ?>