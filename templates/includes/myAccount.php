<!-- formulaire -->
<div class="mx-auto col-lg-10 mb-xs-4 mb-lg-5 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3 pt-2">
    <div class="row">
        <div class="col-6 p-2 d-flex justify-content-center align-items-center">
            <div style="max-width:200px;">
                <img src="../assets/img/avatar.png" alt="logo colissimo" style="width:100%;border-radius:200px;box-shadow:0px 4px 12px 5px rgba(167, 28, 28, 0.21) !important;">
            </div>
        </div>
        <div class="col-6">
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
                </tbody>
            </table>
        </div>    
    </div>
</div>

<!-- formulaire -->
<div class="mx-auto col-lg-12 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-4 pb-3 pt-2">
    <div class="col-12 mb-4">
        <h5 class="black pb-2 text-center">Adresses de livraison</h5>
        <span class="border-bottom-orange mb-4 mx-auto"></span>
    </div>
    <div class="row p-0 m-0">
        <!-- shipping address -->
        <div class="col-lg-6 pl-lg-0 mb-xs-none mb-sm-0 mb-lg-4 mb-lg-0 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 pt-2">
            <!-- title -->
            <h5 class="black pb-2 font-17">Ajouter une adresse de livraison</h5>
            <!-- <span class="border-bottom-orange mb-4"></span> -->
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
                <button type="submit" class="btn button-orange btn-summary black mt-2 mb-2">Ajouter</button>
            </div>
        </div>
        <div class="col-lg-6 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3 pt-2">
            <!-- title -->
            <h5 class="black pb-2 font-17">Gérer mes adresses</h5>
            <!-- <span class="border-bottom-orange mb-4"></span> -->
            <table id="table_address" class="table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Adresse</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">Maison</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="pt-3 pb-3"><a href="#" class="bold"  title="modifier">Amazon</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="pt-3 pb-3"><a href="#" class="bold"  title="modifier">Chez Maman</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="pt-3 pb-3"><a href="#" class="bold"  title="modifier">Deliveroo</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="pt-3 pb-3"><a href="#" class="bold"  title="modifier">Maison</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr> 
                        <td class="pt-3 pb-3"><a href="#" class="bold"  title="modifier">Amazon</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="pt-3 pb-3"><a href="#" class="bold"  title="modifier">Chez Maman</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                    <tr>
                        <td class="pt-3 pb-3"><a href="#"  class="bold" title="modifier">Deliveroo</a></td>
                        <td class="pt-3 pb-3">20 rue de Paris...</td>
                        <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                    </tr>
                </tbody>
            </table>
        </div>   
    </div>
</div>

<!-- formulaire -->
<div class="mx-auto col-lg-12 mb-xs-4 mb-lg-5 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3">
    <div class="col-12 mb-5">
        <h5 class="black pb-2 text-center">Historique des commandes</h5>
        <span class="border-bottom-orange mb-4 mx-auto"></span>
    </div>
    <div class="col-8 mx-auto">
        <table id="table_commands" class="table">
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905071</a></td>
                    <td class="pt-3 pb-3">23/11/2020</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905070</a></td>
                    <td class="pt-3 pb-3">02/10/2020</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905069</a></td>
                    <td class="pt-3 pb-3">14/08/2020</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905068</a></td>
                    <td class="pt-3 pb-3">25/05/2020</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905067</a></td>
                    <td class="pt-3 pb-3">01/04/2020</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905066</a></td>
                    <td class="pt-3 pb-3">10/03/2020</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905065</a></td>
                    <td class="pt-3 pb-3">03/01/2020</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
                <tr>
                    <td class="pt-3 pb-3"><a href="#" class="bold" title="modifier">905064</a></td>
                    <td class="pt-3 pb-3">20/11/2019</td>
                    <td class="pt-3 pb-3"><i class="icon-trash font-17 strong-pink pointer width-100" title='supprimer'></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

