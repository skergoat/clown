<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Paiement</h2>" ?>
<!-- primary content  -->
<?php ob_start(); ?>
<!-- link top --> 
<ol class="p-0 mt-5 mb-5">
    <!-- breadcumb -->
    <li class="lasts-child" style="">
        <a>Panier</a>
    </li>
    <li class="lasts-child">
        <a>Récapitulatif</a>
    </li>
    <li class="lasts-child active">
        <a>Paiement</a>
    </li>
</ol>
<?php $breadcumb = ob_get_clean(); ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto">
    <!-- contact form -->
    <div class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-5 pl-xs-3 pl-sm-5 pb-5 pl-3 signin">
        <div class="col-lg-12 pl-0 mb-xs-none mb-sm-0 mb-lg-3 mb-lg-0 pl-xs-none pr-xs-none pr-0 pr-0 pt-2">
            <!-- title -->
            <h5 class="black pb-2 align-left-xs">Choisissez votre mode de paiement !</h5>
            <span class="border-bottom-orange mb-4"></span>
            <!-- paragraph -->
            <p class="font-14 light line-height-xs">Le montant de votre commande s’élève à <span class="strong-pink bold">28,89€</span>. Vous pouvez la régler en toute sécurité, en utilisant votre carte bancaire ou PayPal.</p>
            <!-- form -->
            <form class="mt-5">
                <!-- row 1 -->
                <div class="column align-items-center mb-3">
                    <!-- credit card -->
                    <div class="col-lg-6 mb-3 pl-0 pr-0 mx-auto">
                        <div id="payment-creditcard" class="payment-choice p-4 pointer choice-selected" data-url="creditcard">
                            <div><img src="../assets/img/credit-card-icon.png" class="icon-single d-block mx-auto mb-3 mt-1" alt="logo lydia"></div>
                            <p class="black font-16 text-center mb-1">Carte Bancaire (Lydia)</p>
                            <p class="light font-12 text-center">Paiement sécurisé</p>
                            <div class="d-flex justify-content-center">
                                <img src="../assets/img/logo-lydia-single.png" class="know-more-icon logo-single" alt="logo lydia">
                                <p class="light font-12 ml-4 mb-1"><a href="#" class="link-black">En savoir plus sur Lydia</a></p>
                            </div>
                        </div>
                        <!-- radio -->
                        <div class="mt-2 d-flex justify-content-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input payment-selection" type="radio" name="payment" id="creditcard" value="creditcard" checked>
                                <span class="form-check-input form-check-input__pay checkmark"></span>
                            </div>
                        </div>
                    </div>
                    <!-- paypal -->
                    <div class="col-lg-6 mb-3 pl-0 pr-0 mx-auto">
                        <div id="payment-paypal" class="payment-choice p-4 pointer" data-url="paypal">
                            <img src="../assets/img/paypal-icon.png" class="icon-single d-block mx-auto mb-3 mt-1" alt="logo paypal">
                            <p class="black font-16 text-center mb-1">Paypal</p>
                            <p class="light font-12 text-center">Paiement sécurisé</p>
                            <div class="d-flex justify-content-center">
                                <img src="../assets/img/logo-paypal-single.png" class="know-more-icon logo-single" alt="logo lydia">
                                <p class="light font-12 ml-4 mb-1"><a href="#" class="link-black">En savoir plus sur Paypal</a></p>
                            </div>
                        </div>
                        <!-- radio -->
                        <div class="mt-2 d-flex justify-content-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input payment-selection" type="radio" name="payment" id="paypal" value="paypal">
                                <span class="form-check-input form-check-input__pay checkmark"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row 2 -->
                <div class="row mr-0 ml-0 mt-3">
                    <!-- check -->
                    <div class="col-lg-6 mb-3 pl-0 pr-0 mx-auto">
                        <div id="payment-check" class="payment-choice p-4 pointer" data-url="check">
                            <img src="../assets/img/logo-check-icon.png" class="icon-single d-block mx-auto mb-3 mt-1" alt="logo check">
                            <p class="black font-16 text-center mb-1">Chèque</p>
                            <p class="light font-12 text-center">Paiement à la livraison</p>
                            <div class="d-flex justify-content-center">
                                <img src="../assets/img/logo-check-single.png" class="know-more-icon logo-check-single" alt="logo lydia">
                                <p class="light font-12 ml-4 mb-1"><a href="#" class="link-black">En savoir plus sur le paiement par chèque</a></p>
                            </div>
                        </div>
                        <!-- radio -->
                        <div class="mt-2 d-flex justify-content-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input payment-selection" type="radio" name="payment" id="check" value="check">
                                <span class="form-check-input form-check-input__pay checkmark"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="font-13 light pt-5 text-center">En validant la commande, vous acceptez les <span class="black">Conditions Générales de Vente</span>.</p>
                <!-- submit -->
                <div class="form-submit mt-4 d-flex justify-content-center">
                    <!-- button provisoire -->
                    <button href="https://www.skergoat.com/clown/templates/confirm.php" type="submit" class="d-block btn button-orange black font-14">Régler ma commande</button>
                    <!-- button definitif -->
                    <!-- <button type="submit" class="btn button-orange black font-14">Régler ma commande</button> -->
                </div>
            </form>
        </div>
    </div>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<script>
    // secondary
    $('.secondary-content').css('display', 'none');
    // title
    $('#main-title-1').css('padding', '0px!important');
    // active link 
    let activeId = '#active-cart';
    $('button').on('click', function(e) {
        e.preventDefault();
        window.location.href = "http://localhost:8888/templates/confirm.php";
    });
    // button
    let $val = "payment";
</script>
<script src="../assets/js/radio-choice.js"></script>
<script src="../assets/js/cart.js"></script>
<?php $script = ob_get_clean(); ?>

<!-- include -->
<?php require('layout/layoutSecond.php'); ?>