<!-- billing address -->
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
    <h5 class="black pb-2">Adresse de facturation</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- adress -->
    <div class="form-group">
        <label for="address" class="font-14 sbold">Adresse</label>
        <input type="text" class="form-control form-large font-13 is-invalid" id="address" value="20 rue de Paris">
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

<!-- shipping address -->
<div class="col-lg-6 pl-lg-4 mb-xs-none mb-sm-0 mb-lg-4 mb-lg-0 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Enregistrer une adresse de livraison</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- titre -->
    <div class="form-group">
        <label for="address" class="font-14 sbold">Titre</label>
        <input type="text" class="form-control form-large font-13" id="address" value="Maison">
        <div class="invalid-feedback">
            Entrez un titre valide svp
        </div>
    </div>
    <!-- adress -->
    <div class="form-group">
        <label for="address" class="font-14 sbold">Adresse</label>
        <input type="text" class="form-control form-large font-13" id="address" value="20 rue de Paris">
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
    <div class="col-auto p-0 mt-4">
        <button type="submit" class="btn button-orange btn-summary black mt-2 mb-2">Enregistrer</button>
    </div>
</div>

<div class="col-lg-6 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Adresse de livraison</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- shipping adresses -->
    <label for="country-select" class="font-13 bold">Sélectionner une adresse de livraison</label>
    <div class="form-group custom-selects">
        <select name="country" id="country-select" class="font-13 bold">
            <option value="">_</option>
            <option value="maison" selected>Maison</option>
            <option value="amazon">Amazon</option>
            <option value="maman">Maman</option>
            <option value="deliveroo">Deliveroo</option>
        </select>
        <!-- error message -->
        <div class="invalid-feedback">
            Ce champ est requis
        </div>
    </div>
    <!-- address -->
    <div class="mt-5">
        <p for="country-select" class="font-13 bold">Adresse sélectionnée</p>
        <div class="jumbotron">
            <p class="search-text__title bold mb-2 font-18">Maison</p>
            <p class="search-text__content mb-2 font-14 regular">20 rue de Paris, 75001 PARIS, FRANCE</p>
        </div>
    </div>
</div>

<!-- text area -->
<div class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-2 p-xs-none pb-3 pt-2">
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
<div id="shipping-section" class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-3 p-xs-none pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Livraison</h5>
    <span class="border-bottom-orange mb-1"></span>
    <!-- shipping methods -->
    <div class="shipping-methods row mt-4 p-0 m-0">
        <!-- credit card -->
        <div class="col-lg-2 mb-xs-3 mb-sm-3 pl-0 pr-xs-0 pr-xs-none pr-sm-0 pr-lg-3">
            <div id="shipping-colissimo" class="payment-choice shipping-choice pt-2 pb-2 pr-0 pl-0 pointer" data-url="colissimo">
                <img src="../assets/img/logo-colissimo-small.png" alt="logo colissimo">
            </div>
            <!-- radio -->
            <div class="mt-2 d-flex justify-content-center">
                <div class="form-check form-check-inline fci-summary">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="colissimo" value="colissimo">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
        </div>
        <!-- paypal -->
        <div class="col-lg-2 mb-xs-3 mb-sm-3 pl-0 pr-xs-0 pr-xs-none pr-sm-0 pr-lg-3">
            <div id="shipping-chronopost" class="payment-choice shipping-choice pt-2 pb-2 pr-0 pl-0 pointer" data-url="chronopost">
                <img src="../assets/img/logo-chronopost-small.png" alt="logo chronopost">
            </div>
            <!-- radio -->
            <div class="mt-2 d-flex justify-content-center">
                <div class="form-check form-check-inline fci-summary">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="chronopost" value="chronopost">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
        </div>
        <!-- paypal -->
        <div class="col-lg-2 mb-xs-3 mb-sm-3 pl-0 pr-xs-0 pr-xs-none pr-sm-0 pr-lg-3">
            <div id="shipping-relais" class="payment-choice shipping-choice pt-2 pb-2 pr-0 pl-0 choice-selected pointer" data-url="relais">
                <div><img src="../assets/img/point-relais.png" alt="logo relais"></div>
            </div>
            <!-- radio -->
            <div class="mt-2 d-flex justify-content-center">
                <div class="form-check form-check-inline fci-summary">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="relais" value="relais" checked="true">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
        </div>
        <!-- UPS -->
        <div class="col-lg-2 mb-xs-3 mb-sm-3 pl-0 pr-xs-0 pr-xs-none pr-sm-0 pr-lg-3">
            <div id="shipping-ups" class="payment-choice shipping-choice pt-2 pb-2 pr-0 pl-0 pointer" data-url="ups">
                <div><img src="../assets/img/ups.png" alt="logo relais" id="ups-img"></div>
            </div>
            <!-- radio -->
            <div class="mt-2 d-flex justify-content-center">
                <div class="form-check form-check-inline fci-summary">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="ups" value="ups">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
        </div>
        <!-- retrait en magasin -->
        <div class="col-lg-2 mb-xs-3 mb-sm-3 pl-0 pr-xs-0 pr-xs-none pr-sm-0 pr-lg-3">
            <div id="shipping-retrait" class="payment-choice shipping-choice pointer d-flex align-items-center justify-content-center" data-url="retrait">
                <span class="icon-shop" style="color:black!important;font-size:15px;"></span>
                <p class="black font-12 text-center m-0 ml-2">Retrait en magasin</p>
            </div>
            <!-- radio -->
            <div class="mt-2 d-flex justify-content-center">
                <div class="form-check form-check-inline fci-summary">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="retrait" value="retrait">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- reception options -->
    <div class="shipping-option option-colissimo dropdown dropdown-reception mt-3 mx-auto">
        <button class="btn dropdown-color btn-sm dropdown-toggle regular d-block mt-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Choisir un lieu de réception
        </button>
        <div id="dropdown-colissimo" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item d-flex justify-content-between" href="#">Domicile</a>
            <a class="dropdown-item d-flex justify-content-between" href="#">Commerçant</a>
            <a class="dropdown-item d-flex justify-content-between" href="#">La Poste</a>
        </div>
    </div>
    <div class="shipping-option option-relais shipping-find mt-4">
        <div class="shipping-title row p-2 m-0 d-flex justify-content-center">
            <h5 class="black font-17 m-0">Sélectionnez votre Point Relais® Mondial Relay.</h5>
        </div>
        <div class="shipping-content p-xs-2 p-sm-4">
            <div class="row p-0 pr-xs-0 pr-lg-4 m-0">
                <!-- <form> -->
                <div class="w-100">
                    <div class="form-row align-items-sm-center flex-xs-column flex-sm-column flex-xl-row pt-xs-3"> 
                        <div class="d-xs-block d-sm-block d-md-flex col-auto p-0">
                            <div><img src="../assets/img/big-logo-point-relais.png" alt="logo point relais" class="d-block mx-xs-auto mr-sm-3" id="big-logo-relais"></div>
                            <div class="d-xs-block d-flex align-items-center mr-xs-0 mr-sm-3 mt-xs-4">
                                <label for="cityName" class="bold font-13 pr-3 mb-0">Ville</label>
                                <input type="text" class="search form-control w-100 mb-0 font-12" id="cityName" value="Paris">
                            </div>
                            <div class="d-xs-block d-flex align-items-center mt-xs-4">
                                <label for="zipcode" class="bold font-13 pr-3 mb-0">CP</label>
                                <input type="text" class="search form-control mb-0 font-12" id="zipcode" value="75001">
                            </div>
                        </div>
                        <div class="d-flex align-items-center align-items-center mt-xs-4">
                            <div class="col-auto">
                                <div class="form-check">
                                    <img src="../assets/img/flag_fr.png" alt="logo point relais" id="flag">
                                </div>
                            </div>
                            <div class="col-auto p-0">
                                <button type="submit" class="btn button-orange btn-summary black">Chercher</button>
                            </div>
                            <div class="col-auto p-0">
                                <div class="form-check">
                                    <img src="../assets/img/target.png" alt="logo point relais" id="logo-target">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>
            <div class="search-result row d-sm-flex mt-5 mt-xl-4 p-0 m-0">
                <div class="d-xs-flex d-sm-flex d-xl-block"> 
                    <div class="search-text pl-0 col-xl-12 col-lg-12 d-flex flex-column">
                        <div>
                            <p class="search-text__title bold mb-2">L’univers du mobile</p>
                            <p class="search-text__content mb-1">1 RUE DES PROUVAIRES</p>
                            <p class="search-text__content">75001 - PARIS</p>
                        </div>
                        <div>
                            <p class="search-text__title bold mb-2">2- click & services</p>
                            <p class="search-text__content mb-1">FORUM DES HALLES LESCOT -2</p>
                            <p class="search-text__content">75001 - PARIS</p>
                        </div>
                        <div>
                            <p class="search-text__title bold mb-2">3- Paris 1 my auchan</p>
                            <p class="search-text__content mb-1">20 PLACE DU MARCHE SAINT HONORE</p>
                            <p class="search-text__content">75001 - PARIS</p>
                        </div>
                        <div>
                            <p class="search-text__title bold mb-2">4- Avenir informatique</p>
                            <p class="search-text__content mb-1">39 RUE BEAUREGARD</p>
                            <p class="search-text__content">75002 - PARIS</p>
                        </div>
                    </div>
                    <div class="search-text pl-0 col-xl-12 col-lg-12 d-flex flex-column">
                        <div>
                            <p class="search-text__title bold mb-2">5- Bodhi telecom</p>
                            <p class="search-text__content mb-1">2 RUE DE MULHOUSE</p>
                            <p class="search-text__content">75002 - PARIS</p>
                        </div>
                        <div>
                            <p class="search-text__title bold mb-2">6- My Auchan Reaumur</p>
                            <p class="search-text__content mb-1">85 RUE REAUMUR</p>
                            <p class="search-text__content">75002 - PARIS</p>
                        </div>
                        <div>
                            <p class="search-text__title bold mb-2">7- Rufezahoq</p>
                            <p class="search-text__content mb-1">9 RUE DE BRUXELLES</p>
                            <p class="search-text__content">75009 - PARIS</p>
                        </div>
                    </div>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<!-- shipping -->
<div class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-4 p-xs-none pb-0 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Récapitulatif</h5>
    <span class="border-bottom-orange mb-1"></span>

    <div class="border-radius-10 m-0 pb-sm-0 pt-4 pb-4">
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
                    <div class="form-submit mb-xs-4">
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
