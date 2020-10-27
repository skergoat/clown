<!-- titles -->
<?php $title = "Changer le mot de passe" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Créer un nouveau mot de passe</h2>" ?>
<?php $previous = "<a class='black link-black' href='http://localhost:8888/templates/home.php'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto">
    <!-- contact form -->
    <form class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-4 pl-4 pb-5 signin" action="http://localhost:8888/templates/home.php" method="post">
        <!-- formulaire -->
        <div class="col-lg-12 pl-lg-4 mb-xs-none mb-sm-0 mb-lg-4 mb-lg-0 pl-xs-none pr-xs-none pr-sm-0 pr-lg-5 pt-2">
                <!-- title -->
                <h5 class="black pb-2">Entrez un nouveau mot de passe</h5>
                <span class="border-bottom-orange mb-4"></span>
                <!-- first name -->
                <div class="form-group pl-0 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <label for="password-1" class="font-14 sbold">Mot de passe</label>
                    <input type="password" class="form-control form-large font-14" id="password-1">
                    <div class="invalid-feedback">
                        Mot de passe invalide
                    </div>
                </div>
                <!-- first name -->
                <div class="form-group pl-0 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <label for="password-2" class="font-14 sbold">Confirmation du mot de passe</label>
                    <input type="password" class="form-control form-large font-14" id="password-2">
                    <div class="invalid-feedback">
                        Les mots de passe ne correspondent pas
                    </div>
                </div>
                <button class="btn button-orange black mt-4">Enregistrer</button>
        </div>
    </form>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<?php ob_start(); ?>
    <script>
    // delete white part bottom 
        $('#space-between').css('display', 'none');       
        $('.secondary-content').css('display', 'none'); 
    </script>
    <script src="../assets/js/cart.js"></script>
<?php $script = ob_get_clean(); ?>
<!-- include -->
<?php require('layout/layoutSecond.php'); ?>