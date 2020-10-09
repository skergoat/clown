<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <!-- fonts -->
        <link rel="stylesheet" href="../assets/fonts/fontello/css/fontello.css">
        <!-- stylesheet -->
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
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
                        <div class="connection"><a class="font-weight-bold link-black bold" href="#"> Se connecter</a> ou <a class="link-black font-weight-bold bold" href="#">S'inscrire</a></div>
                   </div>
               </div>
               <!-- menu -->
               <div class="nav__primary">
                    <div class="d-flex justify-content-between nav__wrapper">
                        <a href="#">
                            <img src="../assets/img/logo.png" class="logo d-md-block d-lg-block d-none pt-3 pb-3">
                            <img src="../assets/img/logo-responsive.png" class="logo d-md-none d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li id="active-home"><a href="#" class="d-flex align-items-center font-weight-bold link-black black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li id="active-shop" class="ml-4"><a href="http://localhost:8888/templates/product.php" class="d-flex align-items-center link-black black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li id="active-infos" class="ml-4"><a href="http://localhost:8888/templates/infos.php" class="d-flex align-items-center link-black black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
                            <li id="active-contact" class="ml-4"><a href="#" class="d-flex align-items-center link-black black pr-1">Contact</a><div class="border-bottom-menu"></div></li>
                            <li id="active-cart" class="ml-4"><a href="#" class="d-flex align-items-center link-black hover-no-change black pr-1"><i class="icon-basket"></i></a><div class="border-bottom-menu"></div></li>
                        </ul>
                        <!-- Navigation links (hidden by default) -->
                        <div class="d-xs-flex d-sm-flex d-md-flex d-lg-none d-flex">
                            <a href="#" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1 mr-3"><i class="icon-basket"></i></a>
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
                            <li><a href="http://localhost:8888/templates/product.php" class="font-weight-bold link-black hover d-block pl-4 p-1">Boutique</a></li>
                            <li><a href="http://localhost:8888/templates/infos.php" class="font-weight-bold link-black hover d-block pl-4 p-1">Infos Pratiques</a></li>
                            <li><a href="#about" class="font-weight-bold link-black hover d-block pl-4 p-1">Contact</a></li>
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
                        <a href="#">
                            <img src="../assets/img/logo.png" class="logo d-md-block d-lg-block d-none pt-3 pb-3">
                            <img src="../assets/img/logo-responsive.png" class="logo d-md-none d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li><a href="#" class="d-flex align-items-center font-weight-bold link-black black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="http://localhost:8888/templates/product.php" class="d-flex align-items-center link-black black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="http://localhost:8888/templates/infos.php" class="d-flex align-items-center link-black black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black black pr-1">Contact</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black hover-no-change black pr-1"><i class="icon-basket"></i></a><div class="border-bottom-menu"></div></li>
                        </ul>
                        <!-- Navigation links (hidden by default) -->
                        <div class="d-xs-flex d-sm-flex d-md-flex d-lg-none d-flex">
                            <a href="#" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1 mr-3"><i class="icon-basket"></i></a>
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
        <!-- content -->
       <?= $content ?>
       
       <!-- footer -->
       <footer class="footer transition mt-3">
           <!-- logo footer -->
           <div class="mx-auto footer-top pt-2 pb-4">
                <img src="../assets/img/logo-footer.png" class="transition footer-top__logo pt-2 pb-2">
           </div>
           <!-- menus -->
            <div class="">
                <div class="footer-top mx-auto footer-center-first flex-wrap d-flex pb-5 transition">     
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
           <div class="footer-center-second pb-3">
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
                        <img src="../assets/img/logo-lydia.png">
                        <img src="../assets/img/logo-paypal.png">
                        <img src="../assets/img/logo-visa.png">
                        <img src="../assets/img/logo-mastercard.png">
                        <img src="../assets/img/logo-americanexpress.png">
                        <img src="../assets/img/logo-colissimo.png" class="">
                        <img src="../assets/img/logo-chronopost.png" class="">
                    </div>            
                </div>
           </div>
           <!-- bottom -->
           <div class="footer-bottom p-3">
                Copyright © Clown Montmartre 2020. Tous droits réservés.
           </div>
        </footer>
        <!-- script -->
        <script src="../assets/js/menu-responsive.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../assets/js/parallax.js"></script>
        <?= $script ?>
        <script>
            // active link 
            $(activeId + ' a').addClass('activated');
            $(activeId + ' .border-bottom-menu').addClass('activated-border-bottom');
        </script>
    </body>
</html>