<div class="col-lg-6 pl-lg-4 mb-xs-none mb-sm-0 mb-lg-4 mb-lg-0 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 pb-xs-none pb-sm-0 pb-lg-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Identifiants</h5>
    <span class="border-bottom-orange mb-4"></span>
        <!-- username-->
        <div class="form-group">
            <input type="text" class="form-control form-control-1 is-invalid mt-4 font-13" id="username" aria-describedby="username" value="Nom d'utilisateur" required>
            <!-- error message -->
            <div class="invalid-feedback">
                Entrez un nom valide svp
            </div>
        </div>
        <!-- password -->
        <div class="form-group">
            <input type="password" class="form-control form-control-1 mt-4 font-13" id="password" aria-describedby="password" value="Mot de passe" required>
            <div class="invalid-feedback">
                Entrez un nom mot de passe valide svp
            </div>
        </div>
        <!-- confirmation -->
        <div class="form-group">
            <input type="password" class="form-control form-control-1 mt-4 font-13" id="confirmation" aria-describedby="confirmation" value="Confirmation du mot de passe" required>
            <div class="invalid-feedback">
                Les mots de passe ne correspondent pas 
            </div>
        </div>
        <!-- email -->
        <div class="form-group mb-4">
            <input type="email" class="form-control form-control-1 mt-4 font-13" id="mail" aria-describedby="email" value="E-mail" required>
            <div class="invalid-feedback">
                Entrez un mail valide svp 
            </div>
        </div>
        <!-- tel -->
        <div class="form-group mb-4">
            <input type="tel" class="form-control form-control-1 mt-4 font-13" id="tel" aria-describedby="tel" value="Numéro de téléphone" required>
            <div class="invalid-feedback">
                Entrez un numéro valide svp 
            </div>
        </div>
</div>
<div class="col-lg-6 mb-xs-4 mb-lg-0 mt-xs-4 mt-sm-4 mt-lg-0 p-xs-none pl-xs-none pl-lg-5 pb-3 pt-2">
    <!-- title -->
    <h5 class="black pb-2">Coordonnées</h5>
    <span class="border-bottom-orange mb-4"></span>
    <!-- lastname -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-13" id="lastname" aria-describedby="lastname" value="Nom" required>
        <div class="invalid-feedback">
            Entrez un nom valide svp 
        </div>
    </div>
    <!-- firstname -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-13" id="firstname" aria-describedby="firstname" value="Prénom" required>
        <div class="invalid-feedback">
            Entrez un nom valide svp 
        </div>
    </div>
    <!-- company -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-13" id="company" aria-describedby="company" value="Société (facultatif)">
        <div class="invalid-feedback">
            Entrez un nom valide svp 
        </div>
    </div>
    <!-- address 1 -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-13" id="address1" aria-describedby="address1" value="Adresse" required>
        <div class="invalid-feedback">
            Entrez une adresse valide svp 
        </div>
    </div>
    <!-- address 2 -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-13" id="address2" aria-describedby="address2" value="Complément d'adresse" required>
        <div class="invalid-feedback">
            Entrez une adresse valide svp 
        </div>
    </div>
    <!-- zip code -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-13" id="zipcode" aria-describedby="zipcode" value="Code postal" required>
        <div class="invalid-feedback">
            Entrez un code postal valide svp 
        </div>
    </div>
    <!-- city  -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-13" id="city" aria-describedby="city" value="Ville" required>
        <div class="invalid-feedback">
            Entrez une ville valide svp 
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
        <div class="invalid-feedback">
            champ requis 
        </div>
    </div>
</div>

<!-- submit -->
<div class="form-submit mx-auto mb-3">
    <!-- btn de demonstration -->
    <a href="http://localhost:8888/templates/account.php" class="btn button-orange btn-white-outlined black" id="button-modal">Connexion</a> 
    <!-- btn definitif -->
    <!-- <button type="submit" class="btn button-orange btn-white-outlined black" id="button-modal" data-toggle="modal" data-target="#validate">Connexion</button> -->
</div>


    