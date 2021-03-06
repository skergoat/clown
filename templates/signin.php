<!-- titles -->
<?php $title = "home" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Inscription</h2>" ?>
<?php ob_start(); ?>
    <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2 d-flex" id="main-title-1">
        <a class='black link-black' href='http://localhost:8888/templates/home.php'><span class='mr-2 black chevron'><</span>Accueil</a>
    </div>
<?php $previous = ob_get_clean(); ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto">
    <!-- contact form -->
    <form class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-5 pb-5 pl-3 signin">
        <?php include('includes/signInForm.php'); ?>
    </form>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<?php ob_start(); ?>
    <script>
        $class="select-selected";
        $class2="select-items";
        // temporary cart button 
        $('#to-cart').on('click', function(e) {
            e.preventDefault();
            window.location.href = "http://localhost:8888/templates/cart.php";
        });
    </script>
    <script src="../assets/js/custom-select.js"></script>
    <script src="../assets/js/cart.js"></script>
<?php $script = ob_get_clean(); ?>
<!-- include -->
<?php require('layout/layoutSecond.php'); ?>