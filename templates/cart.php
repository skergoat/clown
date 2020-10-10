<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm'>Panier</h2>" ?>
<?php $previous = "<a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<!-- form to refresh -->
<form>
    <div class="content__product container-width mx-auto mt-2">
        <div class="border-radius-10 m-0 p-xs-4 pb-sm-0 p-4">
            <!-- table responsive -->
            <div class="overflow-scroll">
                <!-- table top -->
                <table class="table table-cart-top mt-3">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th scope="col">Référence</th>
                            <th scope="col">Article</th>
                            <th scope="col">Taille</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Prix TTC</th>
                            <th scope="col width-100">Prix total TTC</th>
                            <th scope="col width-100">Supprimer</th>
                        </tr>
                    </thead>
                    <!-- body -->
                    <tbody>
                        <tr>
                            <td class="light-grey">78</td>
                            <td class="bold td-produit"><img src="../assets/img/collant.png" class="mr-2"/>Collant sorcière enfant</td>
                            <td class="bold">XL</td>
                            <td>Rouge</td>
                            <td class="td-produit">
                                <div class="quantity">
                                    <input type="number" min="1" max="9" step="1" value="1">
                                </div>
                            </td>
                            <td class="light-grey">8,50€</td>
                            <td class="bold width-100">8,50€</td>
                            <td><i class="icon-trash font-23 pointer width-100" title='supprimer'></i></td>
                        </tr>
                        <tr>
                            <td class="light-grey">78</td>
                            <td class="bold td-produit"><img src="../assets/img/noeud.png" class="mr-2"/>Nœud papillon France</td>
                            <td class="bold">L</td>
                            <td>Verte</td>
                            <td class="td-produit">
                                <div class="quantity">
                                    <input type="number" min="1" max="9" step="1" value="1">
                                </div>
                            </td>
                            <td class="light-grey">3,95€</td>
                            <td class="bold width-100">3,95€</td>
                            <td><i class="icon-trash font-23 pointer width-100" title='supprimer'></i></td>
                        </tr>
                        <tr>
                            <td class="light-grey">78</td>
                            <td class="bold td-produit"><img src="../assets/img/ailes.png" class="mr-2"/>Ailes d’ange en plumes blanches</td>
                            <td class="bold">XL</td>
                            <td>Rouge</td>
                            <td class="td-produit">
                                <div class="quantity">
                                    <input type="number" min="1" max="9" step="1" value="1">
                                </div>
                            </td>
                            <td class="light-grey">8,50€</td>
                            <td class="bold width-100">8,50€</td>
                            <td><i class="icon-trash font-23 pointer width-100" title='supprimer'></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- table bottom -->
            <div class="row justify-content-end mt-4 ml-0 mr-0">
                <div class="col-lg-5 p-0">
                    <!-- code promo -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="font-14 light d-block m-0">Entrez un code promo</p>
                        <input type="text" class="form-control form-large font-13 col-4" id="promo">
                    </div>
                    <!-- totals -->
                    <table class="table table-cart-bottom">
                        <tbody>
                            <tr>
                                <td class="black">Sous-total :</td>
                                <td class="">20,95€</td>
                            </tr>
                            <tr>
                                <td class="black">Transport (France métropolitaine) :</td>
                                <td>7,94€</td>
                            </tr>
                            <tr>
                                <td class="black">Total :</td>
                                <td class="bold icon-pink">28,89€</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- submit -->
                    <div class="row mb-5 justify-content-end mr-0 ml-0">
                        <div class="form-submit">
                            <button type="submit" class="btn button-orange btn-orange-outlined black">Mettre à jour</button>
                        </div>
                        <div class="form-submit ml-3">
                            <button type="submit" class="btn button-orange btn-cart black" id="button-modal" data-toggle="modal" data-target="#validate">Valider</button>
                        </div>
                    </div>
                    <!-- Bootstrap Modal -->
                    <div class="modal fade" id="validate" role="dialog" style="border-radius:50px;">
                        <div class="modal-dialog modal-lg" style="border-radius:10px;!important">
                            <div class="modal-content">
                                <div class="modal-header p-0" >
                                    <div class="row mr-0 ml-0" style="width:100%;">
                                        <div class="col-6" style="background:url('../assets/img/background.jpg');background-size:cover;"></div>
                                        <div class="col-6">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="row pr-0 pl-0 mr-0 ml-0">
                                        <div class="col-6 pb-5 pt-3 pl-5 pr-5" style="background:url('../assets/img/background.jpg');background-size:cover;padding-bottom:120px!important;padding-top:90px!important;">
                                            <h5 style="text-align:center;" class="font-18 bold mb-3">Se Connecter</h5>
                                            <form>
                                                <div class="form-group" style="background:transparent;">
                                                    <label for="exampleInputPassword1" class="font-14 sbold">Identifiant</label>
                                                    <input type="text" class="form-control form-large font-13" id="address2">
                                                </div>
                                                <div class="form-group" style="background:transparent;">
                                                    <label for="exampleInputPassword1" class="font-14 sbold">Mot de passe</label>
                                                    <input type="password" class="form-control form-large font-13" id="address2">
                                                    <div class="pull-left mt-2" style="background:transparent;">
                                                        <span class="font-13"><a href="#" style="color:#FD6044;">Mot de passe oublié ?</a></span>
                                                    </div>
                                                </div>
                                                <div class="form-submit mt-4" style="background:transparent;">
                                                    <button type="submit" class="btn button-orange btn-white-outlined black" id="button-modal" data-toggle="modal" data-target="#validate">Connexion</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-6 d-flex align-items-center pb-4" style="background:transparent;">
                                            <div style="width:100%;text-align:center;"><a href="#" style="color:#FD9644;" class="bold">Continuer sans créer de compte <span class='ml-2 black chevron'>></span></a></div>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
                </div>
            </div>
        </div>
    </div>
<!-- end form -->
</form>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<!-- JS  --> 
<?php ob_start(); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    // disable modal button 
    $('#button-modal').on('click', function(e) {
        e.preventDefault();
    });
    // active link 
    let activeId = '#active-cart';
</script>
<?php $script = ob_get_clean(); ?>

<!-- include -->
<?php require('layout/layoutSecond.php'); ?>