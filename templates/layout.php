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
                       <div class="d-flex">
                            <p class="d-none d-md-block m-0">Suivez-nous sur les reseaux sociaux !</p>
                            <ul class="d-flex m-0 pl-3 list">
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-facebook"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-twitter"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="pr-1"><a class="font-weight-bold link-black bold" href="#"> Se connecter</a> ou <a class="link-black font-weight-bold bold" href="#">S'inscrire</a></div>
                   </div>
               </div>
               <!-- menu -->
               <div class="nav__primary">
                    <div class="d-flex justify-content-between nav__wrapper">
                        <a href="#">
                            <img src="../assets/img/logo.png" class="logo d-md-block d-lg-block d-none pt-2 pb-2">
                            <img src="../assets/img/logo-responsive.png" class="logo d-md-none d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li><a href="#" class="d-flex align-items-center font-weight-bold link-black black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
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

       <!-- header transparent -->
       <header>
           <div>
               <!-- reseaux -->
               <div class="nav__secondary">
                   <div class="d-flex justify-content-between nav__wrapper">
                       <div class="d-flex">
                            <p class="d-none d-md-block m-0">Suivez-nous sur les reseaux sociaux !</p>
                            <ul class="d-flex m-0 pl-3 list">
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-facebook"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-twitter"></i></a></li>
                                <li class="mr-2"><a href="#" class="link-black"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="pr-1"><a class="font-weight-bold link-black" href="#"> Se connecter</a> ou <a class="link-black font-weight-bold" href="#">S'inscrire</a></div>
                   </div>
               </div>
               <!-- menu -->
               <div class="nav__primary">
                    <div class="d-flex justify-content-between nav__wrapper">
                        <a href="#">
                            <img src="../assets/img/logo.png" class="logo d-md-block d-lg-block d-none pt-2 pb-2">
                            <img src="../assets/img/logo-responsive.png" class="logo d-md-none d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li><a href="#" class="d-flex align-items-center font-weight-bold link-black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black pr-1">Contact</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1"><i class="icon-basket"></i></a><div class="border-bottom-menu"></div></li>
                        </ul>
                    </div>
               </div>
            </div>
       </header>
        <!-- content -->
       <?= $content ?>
       
       <!-- footer -->
       <footer class="footer">
           <!-- logo footer -->
           <div class="mx-auto footer-top pt-1 pb-1">
                <img src="../assets/img/logo-footer.png" class="footer-top__logo pt-2 pb-2">
           </div>
           <div class="mx-auto footer-top footer-center-first pt-1 pb-3 d-flex">
                <ul class="p-0">
                    <li class="font-weight-bold">Plan du site</li>
                    <li>Accueil</li>
                    <li>Boutique</li>
                    <li>Location</li>
                    <li>Infos Pratiques</li>
                    <li>Contact</li>
                </ul> 
                <ul class="p-0">
                    <li class="font-weight-bold">Categories</li>
                    <li>Accessoires & déguisements</li>
                    <li>Barbes & moustaches</li>
                    <li>Chapeaux & coiffes</li>
                    <li>Cotillons</li>
                    <li>Décorations</li>
                    <li>Déguisements</li>
                    <li>Farces et attrapes</li>
                    <li>Feux d’artifices</li>
                    <li>Jouets & gadgets</li>
                    <li>Loups (demi-masques)</li>
                    <li>Maquillage</li>
                    <li>Masques</li>
                    <li>Perruques</li>
                </ul> 
                <ul class="p-0">
                    <li class="font-weight-bold">Evenements</li>
                    <li>Coupe du monde</li>
                    <li>Halloween</li>
                    <li>Jour de l’an</li>
                    <li>Mardi Gras</li>
                    <li>Nöel</li>
                    <li>Pourim</li>
                    <li>St Valentin</li>
                </ul> 
                <ul class="p-0">
                    <li class="font-weight-bold">Thèmes</li>
                    <li>Super-héros</li>
                    <li>Cow-boys & indiens</li>
                    <li>Disco</li>
                    <li>Hippie</li>
                    <li>Années 80</li>
                    <li>Star Wars</li>
                    <li>Séries</li>
                </ul>
           </div>
           <div class="footer-center-second mt-3">
                <div class="container" style="border:2px solid green;">
                    <div class="help"></div>
                    <div class="logo-footer-1"></div>
                    <div class="logo-footer-2"></div>            
                </div>
           </div>
           <div class="footer-bottom p-3 mt-3" style="text-align:center;font-family:'Nunito Sans Light';font-size:13px;box-shadow: 2px -1px 5px 2px rgba(234,237,244,1);">
                Copyright © Clown Montmartre 2020. Tous droits réservés.
           </div>
       </footer>
       <!-- script -->
       <script src="../assets/js/menu-responsive.js"></script>
    </body>
</html>