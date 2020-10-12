<?php ob_start(); ?>

<section class="b-black" id="slider"></section>
<section class="pb-3 pt-0">
    <div class="container">
        <div class="row p-0 pt-5 pb-5 d-flex flex-row justify-content-between mx-mille mx-auto">
            <div class="col-3" style="max-width:210px;"><img src="../assets/img/deguisement.png" alt="" class="w-100"></div>
            <div class="col-3" style="max-width:210px;"><img src="../assets/img/accessoires.png" alt="" class="w-100"></div>
            <div class="col-3" style="max-width:210px;"><img src="../assets/img/fetes.png" alt="" class="w-100"></div>
            <div class="col-3" style="max-width:210px;"><img src="../assets/img/promotions.png" alt="" class="w-100"></div>
        </div>
    </div>
</section>
<section class="section-3 bgd-yellow pb-5">
    <div class="container bgd-yellow pt-5">
        <div class="row content__product container-width mx-auto mt-4 p-5 mb-5 mx-mille">
            <div class="col-md-6 pr-5">
                <h5 class="black pb-2">Clown Montmartre</h5>
                <span class="border-bottom-orange mb-4"></span>
                <p class="line-height pb-3 font-14">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
                </p>
                <button class="btn btn-pink bold font-15 pl-4 pr-4">En savoir plus</button>
            </div>
            <div class="col-md-6">
                <img src="../assets/img/placeholder.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <div class="bgd-yellow">
            <h6 class="black pb-2 bgd-yellow m-0 pb-3 mx-mille mx-auto">Découvrez nos produits</h6>
            <div class="row mb-5 bgd-yellow">
                <div class="b-red bgd-yellow chevron chevron-left"><</div>
                <div class="col-11 b-green mx-mille mx-auto">
                    <div class="row">
                        <div class="col-3 p-0 pr-2 bgd-yellow"><img src="../assets/img/promos-card.png" class="img-fluid card-clown bs-red br-10"></div>
                        <div class="b-purple col-3 bgd-yellow card-product">2</div>
                        <div class="b-purple col-3 bgd-yellow card-product">3</div>
                        <div class="b-purple col-3 bgd-yellow card-product">4</div>
                    </div>
                </div>
                <div class="b-red bgd-yellow chevron chevron-right">></div>
            </div>
            <div class="row mb-5 bgd-yellow">
            <div class="b-red bgd-yellow chevron chevron-left"><</div>
                    <div class="col-11 b-green mx-mille mx-auto">
                    <div class="row">
                        <div class="col-3 p-0 pr-2 bgd-yellow"><img src="../assets/img/deguisements-card.png" class="img-fluid bs-red br-10" alt="Responsive image"></div>
                        <div class="b-purple col-3 bgd-yellow card-product">2</div>
                        <div class="b-purple col-3 bgd-yellow card-product">3</div>
                        <div class="b-purple col-3 bgd-yellow card-product">4</div>
                    </div>
                </div>
                <div class="b-red bgd-yellow chevron chevron-right">></div>
            </div>
            <div class="row mb-5 bgd-yellow">
                <div class="b-red bgd-yellow chevron chevron-left"><</div>
                <div class="col-11 b-green mx-mille mx-auto">
                    <div class="row">
                        <div class="col-3 p-0 pr-2 bgd-yellow"><img src="../assets/img/fete-card.png" class="img-fluid bs-red br-10" alt="Responsive image"></div>
                        <div class="b-purple col-3 bgd-yellow card-product">2</div>
                        <div class="b-purple col-3 bgd-yellow card-product">3</div>
                        <div class="b-purple col-3 bgd-yellow card-product">4</div>
                    </div>
                </div>
                <div class="b-red bgd-yellow chevron chevron-right">></div>
            </div>
            <div class="row bgd-yellow">
                <div class="b-red bgd-yellow chevron chevron-left"><</div>
                <div class="col-11 b-green mx-mille mx-auto">
                    <div class="row">
                        <div class="col-3 p-0 pr-2 bgd-yellow"><img src="../assets/img/accessoires-card.png" class="img-fluid bs-red br-10" alt="Responsive image"></div>
                        <div class="b-purple col-3 bgd-yellow card-product">2</div>
                        <div class="b-purple col-3 bgd-yellow card-product">3</div>
                        <div class="b-purple col-3 bgd-yellow card-product">4</div>
                    </div>
                </div>
                <div class="b-red bgd-yellow chevron chevron-right">></div>
            </div>
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