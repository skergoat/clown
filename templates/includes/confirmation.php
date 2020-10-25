<!-- formulaire -->
<div class="col-lg-6 pl-lg-4 mb-xs-none mb-sm-0 mb-lg-4 mb-lg-0 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Coordonnées</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- address -->
    <table class="table table-confirm">
        <tbody>
            <tr>
                <td><span class="bold">Nom/Prénom</span></td>
                <td>Théo Phil</td>
            </tr>
            <tr>
                <td><span class="bold">Email</span></td>
                <td>theo@identiteur.fr</td>
            </tr>
            <tr>
                <td><span class="bold">Téléphone</span></td>
                <td>06.63.66.35.97</td>
            </tr>
            <tr>
                <td><span class="bold">Société</span></td>
                <td>theo.graphics</td>
            </tr>
            <tr>
                <td><span class="bold">Adresse de Facturation</span></td>
                <td>20 rue de Paris, 75015 Paris, FRANCE</td>
            </tr>
            <tr>
                <td><span class="bold">Adresse de Livraison</span></td>
                <td>20 rue de Paris, 75015 Paris, FRANCE</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-lg-6 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Choix d'expédition</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- shipping -->
    <div class="d-flex">
        <div id="shipping-relais" class="payment-choice shipping-choice pt-2 pb-2 pr-2 pl-2 mr-4 mt-2" data-url="relais">
            <div><img src="../assets/img/point-relais.png" alt="logo relais"></div>
        </div>
        <div>
            <p class="search-text__title bold mb-2">L’univers du mobile</p>
            <p class="search-text__content mb-1 font-12">1 RUE DES PROUVAIRES</p>
            <p class="search-text__content font-12">75001 - PARIS</p>
        </div>
    </div>
    <div class="mt-4" id="maps"></div>
</div>

<!-- text area -->
<div class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-2 p-xs-none pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Votre Message</h5>
    <span class="border-bottom-orange mb-1"></span>
    <p class="pt-3 font-15" style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan sapien sit amet quam semper elementum. Nam mattis turpis rutrum massa congue pellentesque ac eu erat. Maecenas mauris est, posuere ac lectus eget, facilisis vulputate dolor. Aenean sed augue dignissim, ultricies sem nec, scelerisque erat. Suspendisse at nulla vel metus rutrum gravida a id urna. Aliquam porta ipsum eget sapien lobortis, ac sollicitudin neque sodales. Vestibulum vel libero et elit fermentum ultrices luctus id velit. Etiam eleifend, purus ac facilisis tincidunt, est urna porta orci, cursus tempor odio tortor non augue.</p>
</div>

<!-- shipping -->
<div class="col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-3 p-xs-none pb-3 pt-2">
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
                <div class="form-check form-check-inline">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="colissimo" value="colissimo">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
            <!-- reception options -->
            <div class="dropdown dropdown-reception mt-3 mx-auto">
                <button class="btn dropdown-color btn-sm dropdown-toggle regular d-block mx-auto mt-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Lieu de réception
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex justify-content-between" href="#">Domicile</a>
                    <a class="dropdown-item d-flex justify-content-between" href="#">Commerçant</a>
                    <a class="dropdown-item d-flex justify-content-between" href="#">La Poste</a>
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
                <div class="form-check form-check-inline">
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
                <div class="form-check form-check-inline">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="relais" value="relais" checked="true">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
        </div>
        <!-- paypal -->
        <div class="col-lg-2 mb-xs-3 mb-sm-3 pl-0 pr-xs-0 pr-xs-none pr-sm-0 pr-lg-3">
            <div id="shipping-retrait" class="payment-choice shipping-choice pointer d-flex align-items-center justify-content-center" data-url="retrait">
                <span class="icon-shop" style="color:black!important;font-size:15px;"></span>
                <p class="black font-12 text-center m-0 ml-2">Retrait en magasin</p>
            </div>
            <!-- radio -->
            <div class="mt-2 d-flex justify-content-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input shipping-selection" type="radio" name="shipping" id="retrait" value="retrait">
                    <span class="form-check-input form-check-input__pay checkmark"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="shipping-find mt-4">
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
                                <label for="cityname" class="bold font-13 pr-3 mb-0">Ville</label>
                                <input type="text" class="search form-control w-100 mb-0 font-12" id="cityname" value="Paris">
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
                            <p class="search-text__title bold mb-2">1- L’univers du mobile</p>
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
