<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm'>Panier</h2>" ?>
<?php $previous = "<a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto mt-2">
    <div class="border-radius-10 m-0 p-xs-4 pb-sm-0 p-4">
        <div class="overflow-scroll">
            <table class="table table-cart-top mt-3">
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
        <div class="row justify-content-end mt-4 ml-0 mr-0">
            <div class="col-lg-5 p-0">
                <!-- confirmation -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="font-14 light d-block m-0">Entrez un code promo</p>
                    <input type="text" class="form-control form-large font-13 col-4" id="codepromo">
                </div>
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
                <div class="row mb-5 justify-content-end mr-0 ml-0">
                    <!-- submit -->
                    <div class="form-submit">
                        <button type="submit" class="btn button-orange btn-orange-outlined black">Mettre à jour</button>
                    </div>
                    <!-- submit -->
                    <div class="form-submit ml-3">
                        <button type="submit" class="btn button-orange btn-cart black">Valider</button>
                    </div>
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
    let activeId = '#active-cart';
</script>
<?php $script = ob_get_clean(); ?>

<!-- include -->
<?php require('layout/layoutSecond.php'); ?>