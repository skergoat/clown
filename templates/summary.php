<!-- titles -->
<?php $title = "récapitulatif" ?>
<?php $mainTitle = "<h2 class='text-center black main-title-sm mb-3'>Récapitulatif de ma commande</h2>" ?>
<?php $previous = "<a class='black link-black' href='http://localhost:8888/templates/cart.php'><span class='mr-2 black chevron'><</span>Panier</a>" ?>

<!-- primary content  -->
<?php ob_start(); ?>
<div class="sticky-shipping bg-white p-xs-1 p-3">
    <p class="black text-center mb-1 font-18" style="color:#FD6044">Montant Total</p>
    <p class="font-13 text-center">(Commande + Livraison)</p>
    <!-- address -->
    <table class="table table-confirm mb-0">
        <tbody>
            <tr>
                <td class="regular p-xs-2">Commande</td>
                <td class="bold font-14 pt-2 p-xs-2">30,50€</td>
            </tr>
            <tr class="td-total">
                <td class="regular p-xs-2">Livraison</td>
                <td class="bold font-14 pt-2 p-xs-2">0,50€</td>
            </tr>
            <tr>
                <td><span class="black p-xs-2"> TOTAL</span></td>
                <td class="strong-pink black font-15 pt-2 p-xs-2">31€</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="content__product container-width mx-auto">
    <!-- contact form -->
    <form class="row border-radius-10 m-0 pt-5 pr-xs-3 pr-sm-4 pl-4 pb-5 signin">
        <?php include('includes/summaryForm.php'); ?>
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
        // $class="select-selected-large";
        // $class2="select-items-large";
        let $val = "shipping";
        // space-between position top
        $('#space-between').css('top', '29%');       
        $('.secondary-content').css('display', 'none'); 
    </script>
    <script src="../assets/js/custom-select.js"></script>
    <script src="../assets/js/radio-choice.js"></script>
     <!-- map -->
     <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script>
            var map = L.map('map').setView([48.86298, 2.34319], 17);
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