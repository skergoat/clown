
<!-- title -->
<h5 class="black pb-2">Nous contacter</h5>
<span class="border-bottom-orange mb-4"></span>

<!-- contact form -->
<form class="contact-form font-15">
    <!-- citizenship -->
    <label for="citizenship" class="mb-1 mt-2">Civilité</label>
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship1" value="monsieur" checked>
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1" style="color:#9D9D9D">M.</label>
         </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship2" value="madame">
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1">Mme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship3" value="mademoiselle">
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1">Mlle</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship3" value="autre">
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1">Autre</label>
        </div>
    </div>
    <!-- lastname -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-15" id="lastname" aria-describedby="lastname" value="Nom">
    </div>
    <!-- firstname -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-15" id="firstname" aria-describedby="firstname" value="Prénom">
    </div>
    <!-- city  -->
    <div class="form-group">
        <input type="text" class="form-control form-control-1 mt-4 font-15" id="city" aria-describedby="city" value="Ville">
    </div>
    <!-- mail -->
    <div class="form-group">
        <input type="email" class="form-control form-control-1 mt-4 font-15" id="country" aria-describedby="country" value="Pays">
    </div>
    <!-- firstname -->
    <div class="form-group mb-4">
        <input type="email" class="form-control form-control-1 mt-4 font-15" id="mail" aria-describedby="emailHelp" value="E-mail">
    </div>
    <!-- subject -->
    <label for="subject" class="mb-1 mt-2 pb-xs-2">Sujet</label>
    <div class="form-group d-xs-flex flex-column">
        <div class="form-check form-check-inline mb-xs-2">
            <input class="form-check-input" type="radio" name="subject" id="subject1" value="renseignements" checked>
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1">Renseignements</label>
         </div>
        <div class="form-check form-check-inline mb-xs-2">
            <input class="form-check-input" type="radio" name="subject" id="subject2" value="suggestions">
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1">Suggestions</label>
        </div>
        <div class="form-check form-check-inline mb-xs-2">
            <input class="form-check-input" type="radio" name="subject" id="subject3" value="commerciales">
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1">Commerciales</label>
        </div>
        <div class="form-check form-check-inline mb-xs-2">
            <input class="form-check-input" type="radio" name="subject" id="subject4" value="autres">
            <span class="form-check-input checkmark"></span>
            <label class="form-check-label" for="exampleRadios1">Autres</label>
        </div>
    </div>
    <!-- message -->
    <div class="form-group mt-4 pt-1">
        <textarea class="form-control form-control-1 font-15" id="message" rows="4">Message</textarea>
    </div>
    <!-- submit -->
    <button type="submit" class="btn button-orange black mt-4">Envoyer</button>
</form>