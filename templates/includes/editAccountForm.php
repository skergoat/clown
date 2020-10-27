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
            <label for="company" class="font-14 sbold">Société (facultatif)</label>
            <input type="text" class="form-control form-large font-13" id="company" value="theo.graphics">
            <div class="invalid-feedback">
                Entrez un nom valide svp
            </div>
        </div>
    </div>
    <!-- adress -->
    <div class="form-group">
        <label for="addressA" class="font-14 sbold">Adresse</label>
        <input type="text" class="form-control form-large font-13" id="addressA" value="20 rue de Paris">
        <div class="invalid-feedback">
            Entrez une adresse valide svp
        </div>
    </div>
    <div class="form-group">
        <label for="addressB" class="font-14 sbold">Complément d'adresse</label>
        <input type="text" class="form-control form-large font-13" id="addressB" value="Bâtiment B">
        <div class="invalid-feedback">
            Entrez une adresse valide svp
        </div>
    </div>
    <!-- row 3 -->
    <div class="form-row">
        <!-- zip code -->
        <div class="form-group col-md-6">
            <label for="currentPass" class="font-14 sbold">Code postal</label>
            <input type="text" class="form-control form-large font-13" id="currentPass" value="75001">
            <div class="invalid-feedback">
                Entrez un code postal valide svp
            </div>
        </div>
        <!-- city -->
        <div class="form-group col-md-6">
            <label for="city" class="font-14 sbold">Ville</label>
            <input type="text" class="form-control form-large font-13 is-invalid" id="city" value="Paris">
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
<div class="col-lg-6 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Mot de passe</h5>
    <span class="border-bottom-orange mb-4"></span>
    <div class="form-group">
        <label for="currentpass" class="font-14 sbold">Mot de passe actuel</label>
        <input type="password" class="form-control form-large font-13" id="currentpass" value="Password">
        <!-- error message -->
        <div class="invalid-feedback">
            Entrez un nom mot de passe svp
        </div>
    </div>
    <div class="form-group">
        <label for="addressa" class="font-14 sbold">Adresse</label>
        <input type="password" class="form-control form-large font-13" id="addressa" value="addressa">
        <!-- error message -->
        <div class="invalid-feedback">
            Entrez une adresse valide svp
        </div>
    </div>
    <div class="form-group">
        <label for="addressb" class="font-14 sbold">Adresse</label>
        <input type="password" class="form-control form-large font-13" id="addressb" value="addressb">
        <div class="invalid-feedback">
            Entrez une adresse valide svp
        </div>
    </div>
</div>

<!-- submit -->
<div class="form-submit mx-auto mb-3">
    <button type="submit" class="btn button-orange black font-15">Mettre à jour</button>
</div>

    