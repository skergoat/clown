<!-- titles -->
<?php $title = "Mot de passe oublié" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Mot de passe oublié</h2>" ?>
<?php $previous = "<a class='black link-black' href='http://localhost:8888/templates/home.php'><span class='mr-2 black chevron'><</span>Accueil</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto">
    <!-- contact form -->
    <form class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-4 pl-4 pb-5 signin" action="http://localhost:8888/templates/editPassword.php" method="post">
        <?php include('includes/summaryForm.php'); ?>
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
<?php $script = ob_get_clean(); ?>
<!-- include -->
<?php require('layout/layoutSecond.php'); ?>