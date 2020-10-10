<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm'>Panier</h2>" ?>
<?php $previous = "<a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto mt-2">
    <div class="border-radius-10 m-0 p-xs-4 pb-sm-0 p-4">
        <table class="table table-cart-top mt-3">
            <thead>
                <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Article</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Prix TTC</th>
                    <th scope="col">Prix total TTC</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="light-grey">78</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td class="light-grey">8,50€</td>
                    <td class="bold">8,50€</td>
                    <td><i class="icon-trash font-23 pointer" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="light-grey">78</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class="light-grey">3,95€</td>
                    <td class="bold">3,95€</td>
                    <td><i class="icon-trash font-23 pointer" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="light-grey">78</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td class="light-grey">8,50€</td>
                    <td class="bold">8,50€</td>
                    <td><i class="icon-trash font-23 pointer" title='supprimer'></i></td>
                </tr>
            </tbody>
        </table>
        <div class="row justify-content-end b-red mt-4 ml-0 mr-0">
            <div class="b-green col-lg-5">
                <table class="table table-cart-bottom">
                    <tbody>
                        <tr>
                            <td>Sous-total :</td>
                            <td>20,95€</td>
                        </tr>
                        <tr>
                            <td>Transport (France métropolitaine) :</td>
                            <td>7,94€</td>
                        </tr>
                        <tr>
                            <td>Total :</td>
                            <td>28,89€</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row mb-5 justify-content-end">
                    <!-- submit -->
                    <div class="form-submit">
                        <button type="submit" class="btn button-orange black mt-4">Envoyer</button>
                    </div>
                    <!-- submit -->
                    <div class="form-submit">
                        <button type="submit" class="btn button-orange black mt-4">Envoyer</button>
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
<?php $script = ob_get_clean(); ?>

<!-- include -->
<?php require('layout/layoutSecond.php'); ?>