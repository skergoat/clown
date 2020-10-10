<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Paiement</h2>" ?>
<?php $previous = "<a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto">
    <!-- contact form -->
    <div class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-5 pl-xs-3 pl-sm-5 pb-5 pl-3 signin">
        <div class="col-lg-12 pl-0 mb-xs-none mb-sm-0 mb-lg-4 mb-lg-0 pl-xs-none pr-xs-none pr-0 pr-0 pt-2">
            <!-- title -->
            <h5 class="black pb-2">Choisissez votre mode de paiement !</h5>
            <span class="border-bottom-orange mb-4"></span>
            <p class="font-14 light">Le montant de votre commande s’élève à <span class="strong-pink bold">28,89€</span>. Vous pouvez la régler en toute sécurité, en utilisant votre carte bancaire ou PayPal.</p>
            <form class="mt-5">
                <div class="row mr-0 ml-0 mb-3">
                    <div class="col-lg-6 pl-0 pr-3">
                        <div class="pay-choice p-4">
                            <img src="../assets/img/credit-card-icon.png" class="icon-single d-block mx-auto mb-3 mt-2" alt="logo lydia">
                            <p class="black text-center mb-1">Carte Bancaire (Lydia)</p>
                            <p class="light font-13 text-center">Paiement sécurisé</p>
                            <div class="d-flex justify-content-center">
                                <img src="../assets/img/logo-lydia-single.png" class="know-more-icon logo-single" alt="logo lydia">
                                <p class="light font-13 ml-4 mb-1"><a href="#" class="link-black">En savoir plus sur Lydia</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-3 pr-0">
                        <div class="pay-choice p-4">
                            <img src="../assets/img/paypal-icon.png" class="icon-single d-block mx-auto mb-3 mt-2" alt="logo paypal">
                            <p class="black text-center mb-1">Paypal</p>
                            <p class="light font-13 text-center">Paiement sécurisé</p>
                            <div class="d-flex justify-content-center">
                                <img src="../assets/img/logo-paypal-single.png" class="know-more-icon logo-single" alt="logo lydia">
                                <p class="light font-13 ml-4 mb-1"><a href="#" class="link-black">En savoir plus sur Paypal</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mr-0 ml-0 mt-3">
                    <div class="col-lg-6 pl-0 pr-3">
                        <div class="pay-choice p-4">
                            <img src="../assets/img/logo-check-icon.png" class="icon-single d-block mx-auto mb-3 mt-2" alt="logo check">
                            <p class="black text-center mb-1">Chèque</p>
                            <p class="light font-13 text-center">Paiement à la livraison</p>
                            <div class="d-flex justify-content-center">
                                <img src="../assets/img/logo-check-single.png" class="know-more-icon logo-check-single" alt="logo lydia">
                                <p class="light font-13 ml-4 mb-1"><a href="#" class="link-black">En savoir plus sur le paiement par chèque</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<?php ob_start(); ?>
    <script>
        $class="select-selected-large";
        $class2="select-items-large";
    </script>
    <script src="../assets/js/custom-select.js"></script>
<?php $script = ob_get_clean(); ?>
<!-- include -->
<?php require('layout/layoutSecond.php'); ?>