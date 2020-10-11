
<!-- formulaire -->
<div class="col-lg-6 pl-lg-4 mb-xs-none mb-sm-0 mb-lg-4 mb-lg-0 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Coordonnées</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- row 1 -->
    <div class="form-row">
        <!-- first name -->
        <div class="form-group col-md-6">
            <label for="firstname" class="font-14 sbold">Prénom</label>
            <input type="text" class="form-control form-large font-14" id="firstname" value="Théo">
            <div class="invalid-feedback">
                Entrez un nom svp
            </div>
        </div>
        <!-- last name -->
        <div class="form-group col-md-6">
            <label for="lastname" class="font-14 sbold">Nom de famille</label>
            <input type="text" class="form-control form-large font-13" id="lastname" placeholder="Votre nom de famille">
            <div class="invalid-feedback">
                Entrez un nom svp
            </div>
        </div>
    </div>
    <!-- row 2 -->
    <div class="form-row">
        <!-- mail -->
        <div class="form-group col-md-6">
            <label for="mail" class="font-14 sbold">E-mail</label>
            <input type="text" class="form-control form-large font-13" id="mail" value="theo@identiteur.fr">
            <div class="invalid-feedback">
                Entrez un mail svp
            </div>
        </div>
        <!-- company -->
        <div class="form-group col-md-6">
            <label for="tel" class="font-14 sbold">Téléphone</label>
            <input type="tel" class="form-control form-large font-13" id="tel" value="06.63.66.35.97">
            <div class="invalid-feedback">
                Entrez un nom valide svp
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="company" class="font-14 sbold">Société (facultatif)</label>
        <input type="text" class="form-control form-large font-13" id="company" value="theo.graphics">
        <div class="invalid-feedback">
            Entrez une adresse valide svp
        </div>
    </div>
</div>
<div class="col-lg-6 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Adresse</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- adress -->
    <div class="form-group">
        <label for="address1" class="font-14 sbold">Adresse</label>
        <input type="text" class="form-control form-large font-13 is-invalid" id="address1" value="20 rue de Paris">
        <div class="invalid-feedback">
            Entrez une adresse valide svp
        </div>
    </div>
    <div class="form-group">
        <label for="addressBis" class="font-14 sbold">Complément d'adresse</label>
        <input type="text" class="form-control form-large font-13" id="addressBis" value="Bâtiment B">
        <div class="invalid-feedback">
            Entrez une adresse valide svp
        </div>
    </div>
    <!-- row 3 -->
    <div class="form-row">
        <!-- zip code -->
        <div class="form-group col-md-6">
            <label for="currentpass" class="font-14 sbold">Code postal</label>
            <input type="text" class="form-control form-large font-13" id="currentpass" value="75001">
            <div class="invalid-feedback">
                Entrez un code postal valide svp
            </div>
        </div>
        <!-- city -->
        <div class="form-group col-md-6">
            <label for="city" class="font-14 sbold">Ville</label>
            <input type="text" class="form-control form-large font-13" id="city" value="Paris">
            <!-- error message -->
            <div class="invalid-feedback">
                Entrez un nom valide svp
            </div>
        </div>
    </div>
    <!-- country -->
    <label for="country-select" class="font-13">Pays</label>
    <div class="form-group custom-selects">
        <select name="country" id="country-select" class="font-13 bold">
            <option value="">France</option>
            <option value="parrot">Belgique</option>
            <option value="hamster">Suisse</option>
            <option value="cat">Allemagne</option>
            <option value="spider">Pays-Bas</option>
            <option value="dog">Angleterre</option>
            <option value="goldfish">Danemark</option>
        </select>
        <!-- error message -->
        <div class="invalid-feedback">
            Ce champ est requis
        </div>
    </div>
</div>

<!-- text area -->
<div class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-3 p-xs-none pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Message (facultatif)</h5>
    <span class="border-bottom-orange mb-1"></span>
    <!-- text area -->
    <div class="form-group">
        <label for="exampleFormControlTextarea1"></label>
        <textarea class="form-control font-12" id="exampleFormControlTextarea1" placeholder="Emballage, date de votre soirée..." rows="5"></textarea>
    </div>
</div>

<!-- shipping -->
<div class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-3 p-xs-none pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Livraison</h5>
    <span class="border-bottom-orange mb-1"></span>
    <!-- shipping methods -->
    <div class="shipping-methods row b-red mt-4 p-0 m-0">
        <!-- credit card -->
        <div class="col-lg-3 mb-xs-3 mb-sm-3 pl-0 pr-xs-0 pr-xs-none pr-sm-0 pr-lg-3">
            <div id="payment-creditcard" class="pay-choice p-4 pointer choice-selected" data-url="creditcard">
                <img src="../assets/img/credit-card-icon.png" class="icon-single d-block mx-auto mb-3 mt-1" alt="logo lydia">
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
        <div class="col-lg-3 pl-xs-none pl-sm-0 pl-lg-3 pr-0">
            <div id="payment-paypal" class="pay-choice p-4 pointer" data-url="paypal">
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
        <!-- paypal -->
        <div class="col-lg-3 pl-xs-none pl-sm-0 pl-lg-3 pr-0">
            <div id="payment-paypal" class="pay-choice p-4 pointer" data-url="paypal">
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
        <!-- paypal -->
        <div class="col-lg-3 pl-xs-none pl-sm-0 pl-lg-3 pr-0">
            <div id="payment-paypal" class="pay-choice p-4 pointer" data-url="paypal">
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
    <div class="shipping-find mt-5">
        <div class="shipping-title row p-2 m-0 d-flex justify-content-center">
            <h5 class="black font-16 m-0">Sélectionnez votre Point Relais® Mondial Relay.</h5>
        </div>
        <div class="shipping-content p-4">
            <div class="row p-0 m-0">
            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                    </div>
                    <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    </div>
                    <div class="col-auto">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                        Remember me
                        </label>
                    </div>
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="row p-0 m-0">
                <div>address</div>
                <div>map</div>
            </div>
        </div>
    </div>
</div>

<!-- summary -->
<div class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-3 p-xs-none pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Récapitulatif</h5>
    <span class="border-bottom-orange mb-1"></span>

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
                        <td>1</td>
                        <!-- <td class="td-produit">
                            <div class="quantity">
                                <input type="number" min="1" max="9" step="1" value="1">
                            </div>
                        </td> -->
                        <td class="light-grey">8,50€</td>
                        <td class="bold width-100">8,50€</td>
                        <td><i class="icon-trash font-23 pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="light-grey">78</td>
                        <td class="bold td-produit"><img src="../assets/img/noeud.png" class="mr-2"/>Nœud papillon France</td>
                        <td class="bold">L</td>
                        <td>Verte</td>
                        <td>1</td>
                        <!-- <td class="td-produit">
                            <div class="quantity">
                                <input type="number" min="1" max="9" step="1" value="1">
                            </div>
                        </td> -->
                        <td class="light-grey">3,95€</td>
                        <td class="bold width-100">3,95€</td>
                        <td><i class="icon-trash font-23 pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="light-grey">78</td>
                        <td class="bold td-produit"><img src="../assets/img/ailes.png" class="mr-2"/>Ailes d’ange en plumes blanches</td>
                        <td class="bold">XL</td>
                        <td>Rouge</td>
                        <td>1</td>
                        <!-- <td class="td-produit">
                            <div class="quantity">
                                <input type="number" min="1" max="9" step="1" value="1">
                            </div>
                        </td> -->
                        <td class="light-grey">8,50€</td>
                        <td class="bold width-100">8,50€</td>
                        <td><i class="icon-trash font-23 pointer width-100" title='supprimer'></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- table bottom -->
        <div class="row justify-content-end mt-0 ml-0 mr-0">
            <div class="col-lg-5 p-0">
                <!-- code promo -->
                <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                    <p class="font-14 light d-block m-0">Entrez un code promo</p>
                    <input type="text" class="form-control form-large font-13 col-4" id="promo">
                </div> -->
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
                <div class="row mb-5 mt-4 justify-content-end mr-0 ml-0">
                    <div class="form-submit">
                        <button type="submit" class="btn button-orange btn-orange-outlined black">Mettre à jour</button>
                    </div>
                    <div class="form-submit ml-3">
                        <!-- btn provisoire -->
                        <a href="http://localhost:8888/templates/payment.php" class="btn button-orange black">Valider</a>
                        <!-- btn définitif -->
                        <!-- <button type="submit" class="btn button-orange btn-cart black">Valider</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>