<?php ob_start(); ?>

<section class="b-black" id="slider"></section>
<section class="pb-3 pt-1">
    <div class="container">
        <div class="row p-0 pt-5 pb-5 d-flex flex-row justify-content-between">
            <div class="col-3" style="max-width:230px;"><img src="../assets/img/deguisement.png" alt="" class="w-100"></div>
            <div class="col-3" style="max-width:230px;"><img src="../assets/img/accessoires.png" alt="" class="w-100"></div>
            <div class="col-3" style="max-width:230px;"><img src="../assets/img/fetes.png" alt="" class="w-100"></div>
            <div class="col-3" style="max-width:230px;"><img src="../assets/img/promotions.png" alt="" class="w-100"></div>
        </div>
    </div>
</section>
<section class="b-black section-3">
    <div class="container b-red">
        <div class="b-green"></div>
        <div>
            <div class="row b-blue"></div>
            <div class="row b-blue"></div>
            <div class="row b-blue"></div>
            <div class="row b-blue"></div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<!-- JS  --> 
<?php ob_start(); ?>
<script src="../assets/js/slider.js"></script>
<script>
    // active link 
    let activeId = '#active-home'; 
</script>
<?php $script = ob_get_clean(); ?>

<?php require('layout/layoutMain.php'); ?>