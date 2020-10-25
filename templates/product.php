<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Collants sorcière enfant fluo</h2>" ?>
<?php $previous = "<a class='black link-black' href='http://localhost:8888/templates/shop.php'><span class='mr-2 black chevron'><</span>Boutique</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="row flex-xs-column flex-sm-column flex-md-row mx-auto content__product container-width p-xs-3 p-sm-5">
    <div class="col-xs-12 col-lg-6 mx-xs-auto pr-xs-none pt-lg-5 pb-lg-5 pr-lg-5 pl-0">
        <!-- share -->
        <ul class="share d-flex m-0 mt-3 p-0 list">
            <li class="pr-1 mt-1 font-15 bold">Partager</li>
            <li class="mr-2"><a href="#" class="link-black"><i class="icon-facebook share-fb"></i></a></li>
            <li class="mr-2"><a href="#" class="link-black"><i class="icon-twitter share-twi"></i></a></li>
            <li class="mr-2"><a href="#" class="link-black"><i class="icon-instagram share-insta"></i></a></li>
            <li class="mr-2"><a href="#" class="link-black"><i class="icon-whatsapp share-wha"></i></a></li>
        </ul>
        <!-- loupe responsive -->
        <div class="loupe-widget js-loupe d-xs-none d-sm-none d-lg-block">
            <div class="loupe-widget__loupe js-loupe-element"></div>
            <img class="loupe-widget__image js-loupe-image primary-img-top d-block mb-xs-4 mx-auto ml-lg-5 mr-lg-5 mt-lg-5" src="../assets/img/collant-orange.png" alt="Card image cap" data-image-full="../assets/img/collant-orange.png">
        </div>
        <img class="d-xs-block d-sm-block d-lg-none primary-img-top d-block mb-xs-4 mx-auto ml-lg-5 mr-lg-5 mt-lg-5" src="../assets/img/collant-orange.png" alt="Card image cap">
        <span class="icon-question-circle-o pointer d-block" title="Question sur l'article" id="link-modal" data-toggle="modal" data-target="#ask-question"></span>
    </div>
    <div class="col-xs-12 col-lg-6 pr-xs-0 pr-lg-5">
        <div class="mr-lg-none mr-lg-4 mb-4">
            <p class="black font-17 mb-2">Description</p>
            <p class="font-13 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
        </div>
        <div class="mr-lg-none mr-lg-4 mb-2">
            <p class="black font-17">Disponibilité</p>
            <div class="d-flex">
                <ul class="p-0 pr-5" style="list-style-type:none;">
                    <li class="font-13"><i class="icon-check"></i>Achat</li>
                    <li class="font-13"><i class="icon-cancel"></i>Location</li>
                </ul>
                <ul style="list-style-type:none;">
                    <li class="font-13"><i class="icon-check"></i>Boutique</li>
                    <li class="font-13"><i class="icon-check"></i>En ligne</li>
                </ul>
            </div>
        </div>
        <div class="mr-lg-none mr-lg-4">
            <p class="black font-17">Commander</p>
            <p class="font-14 mb-4">Référence : <span class="black">550695</span></p>
            <form>
                <div class="form-row m-0 mb-4 justify-content-between">
                    <div>
                        <button class="black mr-2 font-14 size active">S</button>
                        <button class="black mr-2 font-14 size">M</button>
                        <button class="black mr-2 font-14 size">L</button>
                        <button class="black font-14 size">XL</button>
                    </div>
                    <div class="dropdown mt-1">
                        <button class="btn dropdown-color btn-sm dropdown-toggle regular" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Couleurs
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item d-flex justify-content-between" href="#">Blanc<span class="ml-2 color-square color-square__white"></span></a>
                            <a class="dropdown-item d-flex justify-content-between" href="#">Orange<span class="ml-2 color-square color-square__orange"></span></a>
                            <a class="dropdown-item d-flex justify-content-between" href="#">Rose<span class="ml-2 color-square color-square__pink"></span></a>
                        </div>
                    </div>
                    <div class="form-row m-0 mt-3 font-13">
                        <span class="black mr-2">Matière : </span>nylon 
                    </div> 
                </div>
                <div class="form-row m-0 mt-0 mb-3">
                    <div class="form-row mr-3">
                        <div class="form-check shopping form-check-inline">
                            <input class="form-check-input payment-selection" type="radio" name="whenbuy" id="whenbuy" value="whenbuy" checked>
                            <span class="form-check-input form-check-input__pay shopping checkmark"></span>
                        </div>
                        <label class="font-13">Achat</label>
                    </div>
                    <div class="form-row">
                        <div class="form-check shopping form-check-inline">
                            <input class="form-check-input payment-selection" type="radio" name="borrow" id="borrow" value="borrow">
                            <span class="form-check-input form-check-input__pay shopping checkmark disabled"></span>
                        </div>
                        <label class="font-13 disabled">Location</label>
                    </div>
                </div>
                <div class="">
                <p class="black font-16 pricing-title mt-3">Tarifs dégressifs</p>
                    <table class="table pricing mt-2 mb-4">
                        <thead>
                            <tr>
                                <th scope="col" class="p-2 font-15">Quantité</th>
                                <th scope="col" class="p-2 font-15">Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2">1</td>
                                <td class="p-2 bold font-16 strong-pink">6,95€</td>
                            </tr>
                            <tr>
                                <td class="p-2">10</td>
                                <td class="p-2 bold font-16 strong-pink">20 €</td>
                            </tr>
                            <tr>
                                <td class="p-2">20</td>
                                <td class="p-2 bold font-16 strong-pink">30 €</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="strong-pink black font-18">6,95€ <span class="font-13" style="color:#212529;">(Location dès 10€ / jour)</span></p>
                    <div class="form-row align-items-center justify-content-xs-between">
                        <label class="font-13 pl-1 mb-0 mt-1">Quantité</label>
                        <div class="shopping quantity ml-xs-none ml-sm-4 mt-3">
                            <input type="number" min="1" max="9" step="1" value="1">
                        </div>
                        <button class="btn shopping button-orange btn-cart bold ml-xs-none ml-sm-4">Ajouter au panier</button>
                    </div>
                </div>
                <div class="form-row m-0 mt-4 mb-4 bold">
                    <div><img class="card-img-top d-block mx-auto" src="../assets/img/shipping-fast-black.png" alt="Card image cap" style="max-width:15px;margin-top:6px;"></div>
                    <span class="ml-2 bold">Délais de livraison : <span class="strong-pink bold">2 semaines</span></span>
                </div>
                <div class="d-flex mt-xs-5 mt-lg-4 justify-content-xs-between">
                    <div class="mr-xs-none mr-sm-4">
                        <div><img class="card-img-top d-block mx-auto" src="../assets/img/undo.png" alt="Card image cap" style="max-width:12px;"></div>
                        <div class="font-13 shipping-conditions text-center">Retour sous 14 jours</div>
                    </div>
                    <div class="mr-xs-none mr-sm-4">
                        <div><img class="card-img-top d-block mx-auto" src="../assets/img/shipping-fast.png" alt="Card image cap" style="max-width:15px;"></div>
                        <div class="font-13 shipping-conditions text-center">Livraison rapide</div>
                    </div>
                    <div class="mr-xs-none mr-sm-4">
                        <div><img class="card-img-top d-block mx-auto" src="../assets/img/lock.png" alt="Card image cap" style="max-width:12px;"></div>
                        <div class="font-13 shipping-conditions text-center">Paiement sécurisé</div>
                    </div>
                </div>
            </form>
            <div></div>
        </div>
    </div>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<!-- title -->
<h5 class="black pb-2">Nous vous suggérons...</h5>
<span class="border-bottom-orange"></span>

<div class="col-12 mt-4 pb-lg-3">
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="row mb-lg-0 mb-md-3">
                <div class="col-sm-12 col-md-6 p-0 mb-xs-4 mb-sm-4 mb-md-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-badge" src="../assets/img/badge-nouveaute.png" alt="Card image cap">
                        <img class="card-img-top" src="../assets/img/witch.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collier halloween</p>
                        <p class="black text-center mb-3">Dès 3,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                    </div> 
                </div>
                <div class="col-sm-12 col-md-6 p-0 mb-xs-4 mb-sm-4 mb-md-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-img-top" src="../assets/img/collant-blanc.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                        <p class="black text-center mb-3">Dès 6,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="row mb-lg-0 mb-md-3">
                <div class="col-sm-12 col-md-6 p-0 mb-xs-4 mb-sm-4 mb-md-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-img-top" src="../assets/img/collant-rose.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                        <p class="black text-center mb-3">Dès 6,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 p-0 mb-xs-4 mb-sm-4 mb-md-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-img-top" src="../assets/img/collant-orange.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                        <p class="black text-center mb-3">Dès 6,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 mt-lg-4">
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="row mb-lg-0 mb-md-3">
                <div class="col-sm-12 col-md-6 p-0 mb-xs-4 mb-sm-4 mb-md-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-img-top" src="../assets/img/witch.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collier halloween</p>
                        <p class="black text-center mb-3">Dès 3,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                    </div> 
                </div>
                <div class="col-sm-12 col-md-6 p-0 mb-xs-4 mb-sm-4 mb-md-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-badge" src="../assets/img/badge-promo.png" alt="Card image cap">
                        <img class="card-img-top" src="../assets/img/collant-blanc.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                        <p class="black text-center mb-3">Dès 6,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="row mb-lg-0 mb-md-0">
                <div class="col-sm-12 col-md-6 p-0 mb-xs-4 mb-sm-4 mb-md-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-badge" src="../assets/img/badge-occasion.png" alt="Card image cap">
                        <img class="card-img-top" src="../assets/img/collant-rose.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                        <p class="black text-center mb-3">Dès 6,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 p-0 bgd-transparent">
                    <div class="br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1">
                        <img class="card-img-top" src="../assets/img/collant-orange.png" alt="Card image cap">
                        <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                        <p class="black text-center mb-3">Dès 6,95€</p>
                        <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="ask-question" role="dialog">
    <div class="modal-dialog modal-connect modal-lg">
            <!-- content -->
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header p-0">
                <div class="row mr-0 ml-0">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
            </div>
            <!-- body -->
            <div class="modal-body p-0">
                <div class="row pr-0 pl-0 mr-0 ml-0">
                    <!-- left -->
                    <div class="col-12 pl-5 pr-5 modal-left">
                        <h5 class="font-18 bold mb-3 text-center">Question sur l'article</h5>
                        <form action="#" method="post">
                            <!-- mail -->
                            <div class="form-group">
                                <label for="email" class="font-14 sbold">Mail</label>
                                <input type="mail" class="form-control form-large font-13 is-invalid" name="email" id="email">
                                <!-- error message -->
                                <div class="invalid-feedback">
                                    Entrez un mail valide, svp
                                </div>
                            </div>
                            <!-- message -->
                            <div class="form-group">
                                <label for="message" class="font-14 sbold">Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <!-- submit -->
                            <div class="form-submit mt-4">
                                <button type="submit" class="btn button-orange btn-white-outlined black" id="button-modal" data-toggle="modal" data-target="#validate">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>         
            </div>
        </div>
    </div>
</div>

<?php $secondaryContent = ob_get_clean(); ?>

<!-- JS  --> 
<?php ob_start(); ?>
<script>
    // activate link 
    let activeId = '#active-shop';
</script>
<script src="../assets/js/loupe.js"></script>
<?php $script = ob_get_clean(); ?>

<!-- include -->
<?php require('layout/layoutSecond.php'); ?>
