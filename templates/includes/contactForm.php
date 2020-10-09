
<!-- title -->
<h5 class="black pb-2">Nous contacter</h5>
<span class="border-bottom mb-4"></span>

<!-- contact form -->
<form class="contact-form">
    <!-- citizenship -->
    <label for="exampleInputEmail1">Civilité</label>
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship1" value="monsieur" checked>
            <label class="form-check-label" for="exampleRadios1">M.</label>
         </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship2" value="madame">
            <label class="form-check-label" for="exampleRadios1">Mme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship3" value="mademoiselle">
            <label class="form-check-label" for="exampleRadios1">Mlle</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="citizenship" id="citizenship3" value="autre">
            <label class="form-check-label" for="exampleRadios1">Autre</label>
        </div>
    </div>
    <!-- lastname -->
    <div class="form-group">
        <input type="text" class="form-control" id="lastname" aria-describedby="lastname" value="nom">
    </div>
    <!-- firstname -->
    <div class="form-group">
        <input type="text" class="form-control" id="firstname" aria-describedby="firstname" value="Prénom">
    </div>
    <!-- city  -->
    <div class="form-group">
        <input type="text" class="form-control" id="city" aria-describedby="city" value="Ville">
    </div>
    <!-- mail -->
    <div class="form-group">
        <input type="email" class="form-control" id="country" aria-describedby="country" value="Pays">
    </div>
    <!-- firstname -->
    <div class="form-group">
        <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" value="E-mail">
    </div>
    <!-- subject -->
    <label for="exampleInputEmail1">Sujet</label>
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="subject" id="subject1" value="renseignements" checked>
            <label class="form-check-label" for="exampleRadios1">Renseignements</label>
         </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="subject" id="subject2" value="suggestions">
            <label class="form-check-label" for="exampleRadios1">Suggestions</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="subject" id="subject3" value="commerciales">
            <label class="form-check-label" for="exampleRadios1">Commerciales</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="subject" id="subject4" value="autres">
            <label class="form-check-label" for="exampleRadios1">Autres</label>
        </div>
    </div>
    <!-- message -->
    <div class="form-group">
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <!-- submit -->
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>