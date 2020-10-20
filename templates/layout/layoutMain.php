<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <!-- fonts -->
        <link rel="stylesheet" href="../assets/fonts/fontello/css/fontello.css">
        <!-- stylesheet -->
        <link type="text/css" rel="stylesheet" href="../../vendor/lightslider/src/css/lightslider.css" />                  
        <link rel="stylesheet" href="../assets/css/style.css">
        <!-- leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />        
    </head>
    <body>
        <div class="cookies font-13 p-2 pr-4 bgd-white">Ce site web utilise les cookies. En navigant sur notre site, vous acceptez notre <a href="#" class="link-black bold font-13">politique de confidentialité</a>.<i class="icon-cancel ml-1 pointer" id="close-cookie" style="color:black!important"></i></div>
        <!-- header -->
       <header>
           <div class="mx-auto navs">
               <!-- reseaux -->
               <div class="nav__secondary">
                   <div class="d-flex justify-content-between nav__wrapper">
                       <div class="d-flex align-items-center pt-1 pb-1">
                            <p class="d-none d-md-block m-0">Suivez-nous sur les reseaux sociaux !</p>
                            <ul class="d-flex m-0 pl-3 list">
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-facebook"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-twitter"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="connection"><a class="font-weight-bold link-black bold" href="" id="link-modal" data-toggle="modal" data-target="#connection"> Se connecter</a> ou <a class="link-black font-weight-bold bold" href="http://localhost:8888/templates/signin.php">S'inscrire</a></div>
                   </div>
               </div>
               <!-- menu -->
               <div class="nav__primary">
                    <div class="d-flex justify-content-between nav__wrapper">
                        <a href="http://localhost:8888/templates/home.php">
                            <img src="../assets/img/logo.png" class="logo d-md-block d-lg-block d-none pt-3 pb-3">
                            <img src="../assets/img/logo-responsive.png" class="logo d-md-none d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li id="active-home"><a href="http://localhost:8888/templates/home.php" class="d-flex align-items-center font-weight-bold link-black black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li id="active-shop" class="ml-4"><a href="http://localhost:8888/templates/shop.php" class="d-flex align-items-center link-black black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li id="active-infos" class="ml-4"><a href="http://localhost:8888/templates/infos.php" class="d-flex align-items-center link-black black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
                            <li id="active-contact" class="ml-4"><a href="http://localhost:8888/templates/contact.php"  class="d-flex align-items-center link-black black pr-1">Contact</a><div class="border-bottom-menu"></div></li>
                            <li id="active-cart" class="ml-4"><a class="d-flex align-items-center link-black hover-no-change black pr-1"><span class="badge badge-danger bold">2</span><i id="cart-popup-btn" class="icon-basket pointer"></i></a><div class="border-bottom-menu"></div></li>
                        </ul>
                        <!-- Navigation links (hidden by default) -->
                        <div class="d-xs-flex d-sm-flex d-md-flex d-lg-none d-flex">
                            <a href="#" id="active-cart" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1" style="position:relative;"><span class="badge badge-danger bold">2</span><i id="cart-popup-btn" class="icon-basket pointer"></i></a>
                            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                            <div class="hamburger">
                                <div class="icon hamburger__link" id="open-menu">
                                    <i class="icon-menu link-orange"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu-responsive" class="inactive">
                        <ul class="mb-0 p-0 list" id="menu-responsive__ul">
                            <li><a href="http://localhost:8888/templates/home.php" class="font-weight-bold link-black hover d-block pl-4 p-2">Accueil</a></li>
                            <li><a href="http://localhost:8888/templates/shop.php" class="font-weight-bold link-black hover d-block pl-4 p-2">Boutique</a></li>
                            <li><a href="http://localhost:8888/templates/infos.php" class="font-weight-bold link-black hover d-block pl-4 p-2">Infos Pratiques</a></li>
                            <li><a href="http://localhost:8888/templates/contact.php"  class="font-weight-bold link-black hover d-block pl-4 p-2">Contact</a></li>
                        </ul>
                    </div>
               </div>
            </div>
       </header>

       <!-- header transparent -->
       <header id="header-transparent">
           <div class="mx-auto">
               <!-- reseaux -->
               <div class="nav__secondary">
                   <div class="d-flex justify-content-between nav__wrapper">
                       <div class="d-flex align-items-center pt-1 pb-1">
                            <p class="d-none d-md-block m-0">Suivez-nous sur les reseaux sociaux !</p>
                            <ul class="d-flex m-0 pl-3 list">
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-facebook"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-twitter"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="connection"><a class="font-weight-bold link-black bold" href="#"> Se connecter</a> ou <a class="link-black font-weight-bold bold" href="#">S'inscrire</a></div>
                   </div>
               </div>
               <!-- menu -->
               <div class="nav__primary">
                    <div class="d-flex justify-content-between nav__wrapper">
                        <a href="http://localhost:8888/templates/home.php">
                            <img src="../assets/img/logo.png" class="logo d-md-block d-lg-block d-none pt-3 pb-3">
                            <img src="../assets/img/logo-responsive.png" class="logo d-md-none d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li><a href="http://localhost:8888/templates/home.php" class="d-flex align-items-center font-weight-bold link-black black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="http://localhost:8888/templates/product.php" class="d-flex align-items-center link-black black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="http://localhost:8888/templates/infos.php" class="d-flex align-items-center link-black black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black black pr-1">Contact</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black hover-no-change black pr-1"><i class="icon-basket icon-basket"></i></a><div class="border-bottom-menu"></div></li>
                        </ul>
                        <!-- Navigation links (hidden by default) -->
                        <div class="d-xs-flex d-sm-flex d-md-flex d-lg-none d-flex">
                            <a href="#" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1 mr-3"><i class="icon-basket icon-basket"></i></a>
                            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                            <div class="hamburger">
                                <div class="icon hamburger__link" id="open-menu">
                                    <i class="icon-menu link-orange"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu-responsive" class="inactive">
                        <ul class="mb-0 p-0 list" id="menu-responsive__ul">
                            <li><a href="#news" class="font-weight-bold link-black hover d-block pl-4 p-1">Accueil</a></li>
                            <li><a href="#contact" class="font-weight-bold link-black hover d-block pl-4 p-1">Boutique</a></li>
                            <li><a href="#about" class="font-weight-bold link-black hover d-block pl-4 p-1">Infos Pratiques</a></li>
                            <li><a href="#about" class="font-weight-bold link-black hover d-block pl-4 p-1">Contact</a></li>
                        </ul>
                    </div>
               </div>
            </div>
       </header>
       <div id="cart-popup-window" class="cart-pop bgd-white p-2">
            <div class="cart-pop__arrow mx-auto"></div>
            <div class="">
                <div class="cart-pop__head d-flex justify-content-between p-1">
                    <div id="cart-popup"><span class="badge badge-danger bold">2</span><i class="icon-basket icon-basket"></i></div>
                    <div class="font-13 black">Total : <span class="black" style="color:#FD9644;">10,90€</span></div>
                </div>
                <div class="cart-pop__body pb-2 pt-2 pr-1 pl-1">
                    <div class="cart-items-inside">
                        <div class="d-flex">
                            <div><img src="../assets/img/collant-blanc.png" class="d-block" alt="Card image cap"></div>
                            <div>
                                <span class="font-11 regular">Collant sorciere enfant...</span>
                                <div class="d-flex justify-content-between">
                                    <span class="d-block black font-11">6,95€</span>
                                    <span class="d-block font-11">Quantité : 1</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div><img src="../assets/img/noeud-pape.png" class="d-block" alt="Card image cap"></div>
                            <div>
                                <span class="font-11 regular">Noeud papillon France</span>
                                <div class="d-flex justify-content-between">
                                    <span class="d-block black font-11">3,95€</span>
                                    <span class="d-block font-11">Quantité : 1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn button-orange btn-cart bold mx-auto d-block mt-3 font-13" id="to-cart">Voir le panier</button> 
                </div>
            </div>
        </div>
        
        <!-- content -->
       <?= $content ?>
       
       <!-- footer -->
       <footer class="footer transition bgd-white">
           <!-- logo footer -->
           <div class="mx-auto footer-top pt-2 pb-4">
                <img src="../assets/img/logo-footer.png" class="transition footer-top__logo pt-2 pb-2">
           </div>
           <!-- menus -->
            <div class="bgd-white">
                <div class="footer-top mx-auto footer-center-first flex-wrap d-flex pb-5 transition bgd-white">     
                    <ul class="p-0 m-0 transition">
                        <li class="font-weight-bold pb-2">Plan du site</li>
                        <li><a href="" class="link-black">Accueil</a></li>
                        <li><a href="" class="link-black">Boutique</a></li>
                        <li><a href="" class="link-black">Location</a></li>
                        <li><a href="" class="link-black">Infos Pratiques</a></li>
                        <li><a href="" class="link-black">Contact</a></li>
                    </ul> 
                    <ul class="p-0 m-0">
                        <li class="font-weight-bold pb-2">Categories</li>
                        <li><a href="" class="link-black">Accessoires & déguisements</a></li>
                        <li><a href="" class="link-black">Barbes & moustaches</a></li>
                        <li><a href="" class="link-black">Chapeaux & coiffes</a></li>
                        <li><a href="" class="link-black">Cotillons</a></li>
                        <li><a href="" class="link-black">Décorations</a></li>
                        <li><a href="" class="link-black">Déguisements</a></li>
                        <li><a href="" class="link-black">Farces et attrapes</a></li>
                        <li><a href="" class="link-black">Feux d’artifices</a></li>
                        <li><a href="" class="link-black">Jouets & gadgets</a></li>
                        <li><a href="" class="link-black">Loups (demi-masques)</a></li>
                        <li><a href="" class="link-black">Maquillage</a></li>
                        <li><a href="" class="link-black">Masques</a></li>
                        <li><a href="" class="link-black">Perruques</a></li>
                    </ul> 
                    <ul class="p-0 m-0 mt-sm-4 mt-md-4">
                        <li class="font-weight-bold pb-2">Evenements</li>
                        <li><a href="" class="link-black">Coupe du monde</a></li>
                        <li><a href="" class="link-black">Halloween</a></li>
                        <li><a href="" class="link-black">Jour de l’an</a></li>
                        <li><a href="" class="link-black">Mardi Gras</a></li>
                        <li><a href="" class="link-black">Nöel</a></li>
                        <li><a href="" class="link-black">Pourim</a></li>
                        <li><a href="" class="link-black">St Valentin</a></li>
                    </ul> 
                    <ul class="p-0 m-0 mt-sm-4 mt-md-4">
                        <li class="font-weight-bold pb-2">Thèmes</li>
                        <li><a href="" class="link-black">Super-héros</a></li>
                        <li><a href="" class="link-black">Cow-boys & indiens</a></li>
                        <li><a href="" class="link-black">Disco</a></li>
                        <li><a href="" class="link-black">Hippie</a></li>
                        <li><a href="" class="link-black">Années 80</a></li>
                        <li><a href="" class="link-black">Star Wars</a></li>
                        <li><a href="" class="link-black">Séries</a></li>
                    </ul>
                </div>
           </div>
           <!-- pictures -->
           <div class="footer-center-second pb-3 bgd-white">
                <div class="container transition">
                    <div class="p-3 mb-3">
                        <p class="help__p1 m-2 black orange">Besoin d'aide ?</p>
                        <p class="help__p2 m-2 light-grey">Lundi - Samedi : 9h30 - 19h</p>
                        <p class="help__p3 m-2 black">01 47 70 05 93</p>
                    </div>
                    <div class="partner-1 m-1">
                        <img src="../assets/img/trustpilot.png" class="d-md-block d-lg-block d-none mx-auto pt-4 pb-2">
                        <img src="../assets/img/trustpilot-responsive.png" class="d-md-none d-lg-none mx-auto pt-5 pb-4">
                    </div>
                    <div class="partner-2 pt-2 pb-4 d-flex flex-wrap justify-content-lg-between justify-content-xs-start">
                        <span class="d-block"><img src="../assets/img/logo-lydia.png" style="width:100%"></span>
                        <span class="d-block"><img src="../assets/img/logo-paypal.png" style="width:100%"></span>
                        <span class="d-block"><img src="../assets/img/logo-visa.png" style="width:100%"></span>
                        <span class="d-block"><img src="../assets/img/logo-mastercard.png" style="width:100%"></span>
                        <span class="d-block"><img src="../assets/img/logo-americanexpress.png" style="width:100%"></span>
                        <span class="d-block"><img src="../assets/img/logo-colissimo.png" style="width:100%"></span>
                        <span class="d-block"><img src="../assets/img/logo-chronopost.png" style="width:100%"></span>
                    </div>            
                </div>
           </div>
           <!-- bottom -->
           <div class="footer-bottom p-3 bgd-white">
                Copyright © Clown Montmartre 2020. Tous droits réservés.
           </div>
        </footer>
        <!-- Bootstrap Modal -->
        <div class="modal fade" id="connection" role="dialog">
            <div class="modal-dialog modal-connect modal-lg">
                    <!-- content -->
                <div class="modal-content">
                    <!-- header -->
                    <div class="modal-header p-0">
                        <div class="row mr-0 ml-0">
                            <div class="col-6"></div>
                            <div class="col-6">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                    </div>
                    <!-- body -->
                    <div class="modal-body p-0">
                        <div class="row pr-0 pl-0 mr-0 ml-0">
                            <!-- left -->
                            <div class="col-12 pl-5 pr-5 modal-left">
                                <h5 class="font-18 bold mb-3 text-center">Se Connecter</h5>
                                <form action="#" method="post">
                                    <!-- login -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="font-14 sbold">Identifiant</label>
                                        <input type="text" class="form-control form-large font-13 is-invalid" name="login" id="login">
                                        <!-- error message -->
                                        <div class="invalid-feedback">
                                            identifiant invalide
                                        </div>
                                    </div>
                                    <!-- mdp -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="font-14 sbold">Mot de passe</label>
                                        <input type="password" class="form-control form-large font-13" name="password" id="password">
                                        <!-- error message -->
                                        <div class="invalid-feedback">
                                            Mot de passe invalide
                                        </div>
                                        <div class="pull-left mt-2">
                                            <span class="font-13 forgotten-password"><a href="#" class="sbold">Mot de passe oublié ?</a></span>
                                        </div>
                                    </div>
                                    <!-- submit -->
                                    <div class="form-submit mt-4">
                                        <!-- btn de demonstration -->
                                        <a href="http://localhost:8888/templates/account.php" class="btn button-orange btn-white-outlined black" id="button-modal-2">Connexion</a> 
                                        <!-- btn definitif -->
                                        <!-- <button type="submit" class="btn button-orange btn-white-outlined black" id="button-modal" data-toggle="modal" data-target="#validate">Connexion</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
        <!-- script -->
        <script src="../assets/js/menu-responsive.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- slider -->
        <script src="../../vendor/lightslider/src/js/lightslider.js"></script>
        <script type="text/javascript">
        $('#lightSlider').lightSlider({
            // gallery: true,
            item: 1,
            loop:true,
            slideMargin: 0,
            // thumbItem: 9
            speed: 400, //ms'
            auto: true,
            loop: true,
            pause: 5000,
        });
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?= $script ?>
        <script src="../assets/js/parallax.js"></script>
        <script src="../assets/js/quantity-field.js"></script>
        <script>
            // menu active link 
            $(activeId + ' .border-bottom-menu').addClass('activated-border-bottom');
            // orange color not for cart link 
            if(activeId != "#active-cart") {
                $(activeId + ' a').addClass('activated');
            }
            // temporary cart button 
            $('#to-cart').on('click', function(e) {
                e.preventDefault();
                window.location.href = "http://localhost:8888/templates/cart.php";
            });
        </script>
        <script src="../assets/js/cart.js"></script>
        <script src="../assets/js/cookie.js"></script>
    </body>
</html>