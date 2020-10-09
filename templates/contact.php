<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Contact</h2>" ?>
<?php $subTitle = "<h5 class='text-center light sub-title-sm lh-xs-17 font-18'>Vous avez une question concernant nos produits, la livraison, le paiement… ?</h5>" ?>
<?php $previous = "<a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto mt-4">
    <div class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-5 pb-5 pl-3">
        <div class="col-lg-8 mt-2 mb-xs-4 mb-sm-4 mb-lg-0 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 pb-3">
            <!-- include content right -->
            <?php include('includes/contactForm.php'); ?>
        </div>
        <div class="col-lg-4 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-2 p-xs-none pb-3">
            <h5 class="black pb-2">Coordonnées</h5>
            <span class="border-bottom-orange mb-4"></span>
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
                <div class="mt-2">
                    <div style="width:170px;" class="mt-3"><img src="../assets/img/metros.png" style="width:100%;"></div>
                    <div style="width:220px;" class="mt-2"><img src="../assets/img/bus.png" style="width:100%;"></div>
                </div>
            </div>
        </div>
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
    let activeId = '#active-contact';
</script>
<?php $script = ob_get_clean(); ?>

<!-- include -->
<?php require('layout/layoutSecond.php'); ?>