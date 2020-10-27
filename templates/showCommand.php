<!-- titles -->
<?php $title = "récapitulatif" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Commande n.675055</h2>" ?>
<?php $subTitle = "<h5 class='text-center light sub-title-sm lh-xs-17 font-18 bold'>Du 10/03/2020</h5>" ?>
<?php ob_start(); ?>
    <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2 d-flex" id="main-title-1">
        <a class='black link-black' href='http://localhost:8888/templates/account.php'><span class='mr-2 black chevron'><</span>Mon Compte</a>
    </div>
<?php $previous = ob_get_clean(); ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="content__product container-width mx-auto">
    <!-- contact form -->
    <form class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-4 pl-4 pb-5 signin">
        <?php include('includes/confirmation.php'); ?>
    </form>
</div>
<?php $primaryContent = ob_get_clean(); ?>

<!-- secondary content -->
<?php ob_start(); ?>
<?php $secondaryContent = ob_get_clean(); ?>

<?php ob_start(); ?>
    <script>
        // active link 
        let activeId = '#active-cart';
        // radio 
        $class="select-selected-large";
        $class2="select-items-large";
        let $val = "shipping";
        // space-between position top
        $('#space-between').css('top', '29%');       
        $('.secondary-content').css('display', 'none'); 
    </script>
    <script src="../assets/js/custom-select.js"></script>
    <script src="../assets/js/cart.js"></script>
     <!-- map -->
     <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script>
            var map = L.map('maps').setView([48.86298, 2.34319], 17);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([48.86298, 2.34319]).addTo(map)
                .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                .openPopup();
        </script>
<?php $script = ob_get_clean(); ?>
<!-- include -->
<?php require('layout/layoutSecond.php'); ?>