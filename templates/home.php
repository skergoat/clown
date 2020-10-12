<?php ob_start(); ?>

<section class="b-black"></section>
<section class="b-black">
    <div class="container b-red">

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
<script>
    // active link 
    let activeId = '#active-home'; 
</script>
<?php $script = ob_get_clean(); ?>

<?php require('layout/layoutMain.php'); ?>