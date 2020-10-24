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
                        <div class="connection"><a class="font-weight-bold link-black bold" href="#" id="link-modal" data-toggle="modal" data-target="#connection"> Se connecter</a> ou <a class="link-black font-weight-bold bold" href="http://localhost:8888/templates/signin.php">S'inscrire</a></div>
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
                            <li id="active-cart" class="ml-4"><a href="#" class="d-flex align-items-center link-black hover-no-change black pr-1"><span class="badge badge-danger bold">2</span><i id="cart-popup-btn" class="icon-basket pointer"></i></a><div class="border-bottom-menu"></div></li>
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
                            <li><a href="localhost:8888/templates/home.php" class="font-weight-bold link-black hover d-block pl-4 p-2">Accueil</a></li>
                            <li><a href="localhost:8888/templates/shop.php" class="font-weight-bold link-black hover d-block pl-4 p-2">Boutique</a></li>
                            <li><a href="localhost:8888/templates/infos.php" class="font-weight-bold link-black hover d-block pl-4 p-2">Infos Pratiques</a></li>
                            <li><a href="localhost:8888/templates/contact.php"  class="font-weight-bold link-black hover d-block pl-4 p-2">Contact</a></li>
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
                        <div class="connection"><a class="font-weight-bold link-black bold" href="#" id="link-modal" data-toggle="modal" data-target="#connection"> Se connecter</a> ou <a class="link-black font-weight-bold bold" href="http://localhost:8888/templates/signin.php">S'inscrire</a></div>
                   </div>
               </div>
               <!-- menu -->
               <div class="nav__primary">
                    <div class="d-flex justify-content-between nav__wrapper">
                        <a href="http://localhost:8888//templates/home.php">
                            <img src="../assets/img/logo.png" class="logo d-md-block d-lg-block d-none pt-3 pb-3">
                            <img src="../assets/img/logo-responsive.png" class="logo d-md-none d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li><a href="http://localhost:8888/templates/home.php" class="d-flex align-items-center font-weight-bold link-black black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="http://localhost:8888/templates/product.php" class="d-flex align-items-center link-black black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="http://localhost:8888/templates/infos.php" class="d-flex align-items-center link-black black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black black pr-1">Contact</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center link-black hover-no-change black pr-1"><i class="icon-basket pointer" id="icon-basket-btn"></i></a><div class="border-bottom-menu"></div></li>
                        </ul>
                        <!-- Navigation links (hidden by default) -->
                        <div class="d-xs-flex d-sm-flex d-md-flex d-lg-none d-flex">
                            <a href="#" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1 mr-3"><i class="icon-basket pointer" id="icon-basket-btn"></i></a>
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
                    <div id="cart-popup"><span class="badge badge-danger bold">2</span><i class="icon-basket pointer"></i></div>
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

        <div class="row container-shop m-0 p-0 justify-content-end">
            <!-- search -->
            <aside class="col-2 m-0 p-0 d-xs-none d-sm-none d-lg-block">
                <div class="themes-box">
                    <div id="theme-cat" class="theme-btn d-flex pointer" data-url="cat">
                        <div class="border-fun border-fun-green mr-2"></div>
                        <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                            <div><img src="../assets/img/icone-categories.png" alt="" class="mr-2"/> </div>
                            <div class="d-flex align-items-center"><span class="d-block black font-14">Catégories</span></div>
                        </div>
                    </div>
                    <div id="themes-open-cat" class="search-clik-open active d-flex">
                        <div class="d-flex" style="height: 100%!important;">
                            <div class="border-fun border-fun__cat mr-2"></div>
                            <ul class="sup-menu" id="sup-menu-cat">
                                <li class="selected font-14 bold pointer d-flex" data-url="accessoires-1"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                    <ul class="sub-menu sub-menu-cat selectioned" id="li-accessoires-1" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex" data-url="barbe-1"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <ul class="sub-menu sub-menu-cat" id="li-barbe-1" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                            </ul>
                        </div>
                    </div>
                    <div id="theme-theme" class="theme-btn d-flex pointer" data-url="themes">
                        <div class="border-fun border-fun-orange mr-2"></div>
                        <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                            <div><img src="../assets/img/icone-themes.png" alt="" class="mr-2"/> </div>
                            <div class="d-flex align-items-center"><span class="d-block black font-14">Thèmes</span></div>
                        </div>
                    </div>
                    <div id="themes-open-themes" class="search-clik-open d-flex">
                        <div class="d-flex" style="height: 100%!important;">
                            <div class="border-fun border-fun__themes mr-2"></div>
                            <ul class="sup-menu" id="sup-menu-theme">
                                <li class="selected font-14 bold pointer d-flex" data-url="accessoires-2"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                    <ul class="sub-menu sub-menu-themes selectioned" id="li-accessoires-2" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex" data-url="barbe-2"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <ul class="sub-menu sub-menu-themes" id="li-barbe-2" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                            </ul>
                        </div>
                    </div>
                    <div id="theme-location" class="theme-btn d-flex pointer" data-url="location">
                        <div class="border-fun border-fun-purple mr-2"></div>
                        <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                            <div><img src="../assets/img/icone-location.png" alt="" class="mr-2"/> </div>
                            <div class="d-flex align-items-center"><span class="d-block black font-14">Location</span></div>
                        </div>
                    </div>
                    <div id="themes-open-location" class="search-clik-open d-flex">
                        <div class="d-flex" style="height: 100%!important;">
                            <div class="border-fun border-fun__location mr-2"></div>
                            <ul class="sup-menu" id="sup-menu-location">
                                <li class="selected font-14 bold pointer d-flex" data-url="accessoires-3"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                    <ul class="sub-menu sub-menu-location selectioned" id="li-accessoires-3" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex" data-url="barbe-3"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <ul class="sub-menu sub-menu-location" id="li-barbe-3" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                            </ul>
                        </div>
                    </div>
                    <div id="theme-event" class="theme-btn d-flex pointer" data-url="event">
                        <div class="border-fun border-fun-red mr-2"></div>
                        <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                            <div><img src="../assets/img/icone-evenements.png" alt="" class="mr-2"/> </div>
                            <div class="d-flex align-items-center"><span class="d-block black font-14">Événements</span></div>
                        </div>
                    </div>
                    <div id="themes-open-event" class="search-clik-open d-flex">
                        <div class="d-flex" style="height: 100%!important;">
                            <div class="border-fun border-fun__event mr-2"></div>
                            <ul class="sup-menu" id="sup-menu-event">
                                <li class="selected font-14 bold pointer d-flex" data-url="accessoires-4"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                    <ul class="sub-menu sub-menu-event selectioned" id="li-accessoires-4" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex" data-url="barbe-4"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <ul class="sub-menu sub-menu-event" id="li-barbe-4" style="">
                                        <li class="font-14 selection">+ Ailes</li>
                                        <li class="font-14">+ Armes et autres</li>
                                        <li class="font-14">+ Bijoux et ceintures</li>
                                        <li class="font-14">+ Boa et plumes</li>
                                        <li class="font-14">+ Chaussures et surbottes</li>
                                        <li class="font-14">+ Cigarettes et autres</li>
                                        <li class="font-14">+ Collants et jarretieres</li>
                                    </ul>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="b-shadow-right">
                    <div class="search-box">
                        <form class="pt-4 pr-3 pl-3 pb-4">
                            <div class="form-row">
                                <label class="black font-14">Rechercher</label>
                                <div class="input-group mb-4">
                                    <input class="form-control font-13" type="text" placeholder="Entrez votre recherche..." aria-label="Search" id="search-input1">
                                    <div class="input-group-append">
                                        <span class="input-group-text bgd-transparent" id="basic-text1"><i class="icon-search text-grey"></i></span>
                                    </div>
                                </div>
                                <div class="filters-container">
                                    <label class="black font-14">Filtres</label>
                                    <!-- Filtres -->
                                    <div class="form-group custom-selects mb-2 filters">
                                        <select name="filtre-1" id="filtre-1">
                                            <option value="">Taille</option>
                                            <option value="cheap">M</option>
                                            <option value="famous">L</option>
                                            <option value="cool">XL</option>
                                        </select>
                                    </div>
                                    <div class="form-group custom-selects mb-2 filters">
                                        <select name="filtre-2" id="filtre-2">
                                            <option value="">Couleur</option>
                                            <option value="cheap">Blanc</option>
                                            <option value="famous">Orange</option>
                                            <option value="cool">Rose</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <span class="btn stickers regular d-block font-12 mr-2">XL<i class="icon-cancel ml-1"></i></span>
                                        <span class="btn stickers regular d-block font-12 mr-2">Rouge<i class="icon-cancel ml-1"></i></span>
                                    </div>
                                    <div class="d-flex flex-column mt-4">
                                        <div class="form-check mb-1 p-0">
                                            <label class="form-check-label font-14 checkbox-container mb-1" for="news1">
                                                <span>Nouveautés</span>
                                                <input class="form-check-input" type="checkbox" id="news1">
                                                <span class="checkboxmark custom news"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-1 p-0">
                                            <label class="form-check-label font-14 checkbox-container mb-1" for="promos2">
                                                <span>Promotions</span>
                                                <input class="form-check-input" type="checkbox" id="promos2">
                                                <span class="checkboxmark custom promos"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-1 p-0">
                                            <label class="form-check-label font-14 checkbox-container mb-1" for="borrow1">
                                                <span>Location</span>
                                                <input class="form-check-input" type="checkbox" id="borrow1">
                                                <span class="checkboxmark custom borrows"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mb-1 p-0">
                                            <label class="form-check-label font-14 checkbox-container mb-1" for="occasion2">
                                                <span>Occasions</span>
                                                <input class="form-check-input" type="checkbox" id="occasion2">
                                                <span class="checkboxmark custom occasion"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>
            <!-- content -->
            <div class="row col-xs-12 col-lg-10 m-0 p-0 b-pink">
                <div class="col-12 m-0 p-0">
                    <div class="background">
                        <div id="parallax-image">
                            <img src="../assets/img/background.jpg" id="parallax-image__img" />        
                        </div>
                        <!-- main section -->
                        <section class="main-content" id="main-content-id"> 
                            <!-- link top --> 
                            <div class="previous pl-sm-3 pl-md-5 pt-4 ml-2 pb-3 mt-2 mb-2" id="main-title-1"><a class='black link-black' href='#'><a class='black link-black' href='#'><span class='mr-2 black chevron'><</span>Accessoires et déguisements</a></a></div>
                            <!-- main title --> 
                            <div class="title mb-xs-4 mb-sm-5 pb-4 mt-4" id="main-title-2">
                                <h2 class='text-center black main-title-sm mb-3'>Ailes</h2>
                                <h5 class='text-center light sub-title-sm lh-xs-17 font-18'>Ailes d’ange, de fée, de démon, d’insecte</h5>
                            </div>
                            <!-- primary content --> 
                            <div class="content mb-5 mt-xs-none mt-sm-5">
                                <div class="row pr-xs-none pl-xs-none pr-sm-3 pl-sm-3 pr-lg-5 pl-lg-5 pb-0 m-0">
                                    <div class="bgd-transparent chevron chevron-left d-flex align-items-center font-23">
                                        <i class="icon-left-open pointer left-0"></i>
                                    </div>
                                    <div class="col-xs-10 col-sm-10 col-md-11 mx-mille mx-auto">
                                    <!-- title -->
                                    <div class="mb-4">
                                        <h5 class="black text-xs-center">Ne manquez pas nos promotions du moment !</h5>
                                    </div>
                                        <div class="row justify-content-between p-0 m-0">
                                            <div class="p-3 mr-1 bs-red br-10 card-product first-child bgd-white">
                                                <img class="card-badge" src="../assets/img/badge-promo.png" alt="Card image cap">
                                                <img class="card-img-top" src="../assets/img/witch.png" alt="Card image cap">
                                                <p class="bold text-center mb-2">Collier halloween</p>
                                                <p class="black text-center mb-3">Dès 3,95€</p>
                                                <!-- <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                                <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="margin-top:20px;">Voir le produit</a>
                                            </div>
                                            <div class="p-3 mr-1 bs-red br-10 card-product bgd-white">
                                                <img class="card-badge" src="../assets/img/badge-promo.png" alt="Card image cap">
                                                <img class="card-img-top" src="../assets/img/collant-blanc.png" alt="Card image cap">
                                                <p class="bold text-center mb-2">Collants sorcière enfant</p>
                                                <p class="black text-center mb-3">Des <span class="text-line-through black">6,95€</span> <span class="black font-20 strong-pink">3,95€</span></p>
                                                <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                                            </div>
                                            <div class="p-3 mr-1 bs-red br-10 card-product bgd-white">
                                                <img class="card-badge" src="../assets/img/badge-promo.png" alt="Card image cap">
                                                <img class="card-img-top" src="../assets/img/collant-rose.png" alt="Card image cap">
                                                <p class="bold text-center mb-2">Collants sorcière enfant</p>
                                                <p class="black text-center mb-3">Des <span class="text-line-through black">6,95€</span> <span class="black font-20 strong-pink">3,95€</span></p>
                                                <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                                            </div>
                                            <div class="p-3 mr-1 bs-red br-10 card-product bgd-white">
                                                <img class="card-badge" src="../assets/img/badge-promo.png" alt="Card image cap">
                                                <img class="card-img-top" src="../assets/img/collant-orange.png" alt="Card image cap">
                                                <p class="bold text-center mb-2">Collants sorcière enfant</p>
                                                <p class="black text-center mb-3">Des <span class="text-line-through black">6,95€</span> <span class="black font-20 strong-pink">3,95€</span></p>
                                                <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bgd-transparent chevron d-flex align-items-center chevron-right font-23">
                                        <i class="icon-right-open pointer left-0"></i>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- secondary section -->
                    <section class="secondary-content bgd-white pb-5">
                        <div class="container-width mx-auto pb-xs-none pr-xs-none pl-xs-none pr-sm-3 pl-sm-3 pr-lg-5 pl-l-5">
                            <div class="col-12 pb-lg-3 pt-5">
                                <!-- title -->
                                <h5 class="black pb-4 text-xs-center">Tous les produits</h5>
                                <div class="d-flex flex-xs-column align-items-center-xs justify-content-sm-between mb-xs-4 mb-sm-0">
                                    <div class="text-uppercase bold font-13">affichage des 128 produits</div>
                                    <div class="form-row m-0" style="width:180px;">
                                        <!-- Filtres -->
                                        <label for="find-select" class="font-13 bold mb-2 mt-1">Trier par</label>
                                        <div class="form-group custom-selects mb-2">
                                            <select name="find" id="find-select" class="font-13 bold">
                                                <option value="">Prix croissants</option>
                                                <option value="cheap">Le moins cher</option>
                                                <option value="famous">Populaire</option>
                                                <option value="cool">Le plus cool</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0"> 
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent" style="position:relative;">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="1">
                                            <img class="card-badge" src="../assets/img/badge-nouveaute.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/witch.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collier halloween</p>
                                            <p class="black text-center mb-3">Dès 3,95€</p>
                                            <div class="info-plus" id="info-plus-1">
                                                <div class="mb-1">
                                                    <p class="black font-12 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-12 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div> 
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent" style="position:relative;">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="2">
                                            <img class="card-img-top" src="../assets/img/collant-blanc.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-2">
                                                <div class="mb-1">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="3">
                                            <img class="card-badge" src="../assets/img/badge-promo.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/collant-rose.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                                            <p class="bold text-center mb-2"><span class="text-line-through black">6,95€</span> <span class="black font-20 strong-pink">3,95€</span></p>
                                            <div class="info-plus" id="info-plus-3">
                                                <div class="mb-1">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="4">
                                            <img class="card-img-top" src="../assets/img/collant-orange.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-4">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="5">
                                            <img class="card-img-top" src="../assets/img/noeud-pape.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Noeud papillon France</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-5">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="6">
                                            <img class="card-badge" src="../assets/img/badge-occasion.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/lunettes.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Lunettes disco avec boule argent</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-6">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="7">
                                            <img class="card-badge" src="../assets/img/badge-nouveaute.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/img-ailes.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Ailes d’ange en plumes blanches</p>
                                            <p class="black text-center mb-3">Dès 3,95€</p>
                                            <div class="info-plus" id="info-plus-7">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div> 
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="8">
                                            <img class="card-img-top" src="../assets/img/collier-or.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Bracelet danseuse de ventre</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-8">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="9">
                                            <img class="card-badge" src="../assets/img/badge-promo.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/crecelle.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Crecelle en bois double</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-9">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="10">
                                            <img class="card-badge" src="../assets/img/badge-nouveaute.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/truc.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collier halloween</p>
                                            <p class="black text-center mb-3">Dès 3,95€</p>
                                            <div class="info-plus" id="info-plus-10">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div> 
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="11">
                                            <img class="card-img-top" src="../assets/img/vampire.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-11">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://localhost:8888/templates/product.php" class="btn button-orange button-orange-cards d-block mx-auto bold font-16" style="max-width:200px;">Voir le produit</a>
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="12">
                                            <img class="card-img-top" src="../assets/img/rose.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                                            <p class="bold text-center mb-2"><span class="text-line-through black">6,95€</span> <span class="black font-20 strong-pink">3,95€</span></p>
                                            <div class="info-plus" id="info-plus-12">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn button-orange btn-cart bold mx-auto d-block mt-3 font-13" id="to-cart">Voir le panier</button> 
                                            <!-- <button type="submit" class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button> -->
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="13">
                                            <img class="card-badge" src="../assets/img/badge-nouveaute.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/pirate.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collier halloween</p>
                                            <p class="black text-center mb-3">Dès 3,95€</p>
                                            <div class="info-plus" id="info-plus-13">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                                        </div> 
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="14">
                                            <img class="card-img-top" src="../assets/img/lilith.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                                            <p class="black text-center mb-3">Dès 6,95€</p>
                                            <div class="info-plus" id="info-plus-14">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                                        </div>
                                    </div>
                                    <div class="card-box col-sm-12 col-md-6 col-lg-4 p-0 mb-xs-4 mb-sm-4 bgd-transparent">
                                        <div class="card-hover br-10 bs-red pr-4 pb-4 pl-4 pt-3 mr-1 ml-1" data-url="15">
                                            <img class="card-badge" src="../assets/img/badge-occasion.png" alt="Card image cap">
                                            <img class="card-img-top" src="../assets/img/leggin.png" alt="Card image cap">
                                            <p class="bold text-center mb-2">Collants sorcière enfant fluo</p>
                                            <p class="bold text-center mb-2"><span class="black text-line-through">6,95€</span> <span class="black font-20 strong-pink">3,95€</span></p>
                                            <div class="info-plus" id="info-plus-15">
                                                <div class="mb-0">
                                                    <p class="black font-14 mb-0">Description</p>
                                                    <p class="font-11 line-height">Une magicienne maléfique est née avec ces collants sorcière enfant 6/10 ans fuschias et noirs.</p>
                                                </div>
                                                <div class="">
                                                    <p class="black font-14 mb-0">Disponibilité</p>
                                                    <div class="d-flex">
                                                        <ul class="p-0 pr-5" style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Achat</li>
                                                            <li class="font-11"><i class="icon-cancel"></i>Location</li>
                                                        </ul>
                                                        <ul style="list-style-type:none;">
                                                            <li class="font-11"><i class="icon-check"></i>Boutique</li>
                                                            <li class="font-11"><i class="icon-check"></i>En ligne</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn button-orange button-orange-cards d-block mx-auto bold font-16">Voir le produit</button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-cards-pink btn-shop bold font-15 d-block pt-xs-none mt-sm-4 mb-xs-none mb-sm-0 mx-auto">Charger plus de produits</button>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- search -->
                <aside id="aside-responsive" class="col-12 m-0 p-0 d-xs-block d-sm-block d-lg-none bgd-white">
                    <div class="themes-box">
                        <div id="theme-cat" class="theme-btn d-flex pointer" data-url="cat-res">
                            <div class="border-fun border-fun-green mr-2"></div>
                            <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                                <div><img src="../assets/img/icone-categories.png" alt="" class="mr-2"/></div>
                                <div class="d-flex align-items-center"><span class="d-block black font-14">Catégories</span></div>
                            </div>
                        </div>
                        <div id="themes-open-cat-res" class="search-clik-open active d-flex">
                            <div class="d-flex" style="height: 100%!important;">
                                <div class="border-fun border-fun__cat mr-2"></div>
                                <ul class="sup-menu" id="sup-menu-cat">
                                    <li class="selected font-14 bold pointer d-flex" data-url="accessoires-1-res"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                        <ul class="sub-menu sub-menu-cat selectioned" id="li-accessoires-1-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex" data-url="barbe-1-res"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                        <ul class="sub-menu sub-menu-cat" id="li-barbe-1-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                </ul>
                            </div>
                        </div>
                        <div id="theme-theme" class="theme-btn d-flex pointer" data-url="themes-res">
                            <div class="border-fun border-fun-orange mr-2"></div>
                            <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                                <div><img src="../assets/img/icone-themes.png" alt="" class="mr-2"/></div> 
                                <div class="d-flex align-items-center"><span class="d-block black font-14">Thèmes</span></div>
                            </div>
                        </div>
                        <div id="themes-open-themes-res" class="search-clik-open d-flex">
                            <div class="d-flex" style="height: 100%!important;">
                                <div class="border-fun border-fun__themes mr-2"></div>
                                <ul class="sup-menu" id="sup-menu-theme">
                                    <li class="selected font-14 bold pointer d-flex" data-url="accessoires-2-res"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                        <ul class="sub-menu sub-menu-themes selectioned" id="li-accessoires-2-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex" data-url="barbe-2-res"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                        <ul class="sub-menu sub-menu-themes" id="li-barbe-2-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                </ul>
                            </div>
                        </div>
                        <div id="theme-location" class="theme-btn d-flex pointer" data-url="location-res">
                            <div class="border-fun border-fun-purple mr-2"></div>
                            <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                                <div><img src="../assets/img/icone-location.png" alt="" class="mr-2"/></div>
                                <div class="d-flex align-items-center"><span class="d-block black font-14">Location</span></div>
                            </div>
                        </div>
                        <div id="themes-open-location-res" class="search-clik-open d-flex">
                            <div class="d-flex" style="height: 100%!important;">
                                <div class="border-fun border-fun__location mr-2"></div>
                                <ul class="sup-menu" id="sup-menu-location">
                                    <li class="selected font-14 bold pointer d-flex" data-url="accessoires-3-res"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                        <ul class="sub-menu sub-menu-location selectioned" id="li-accessoires-3-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex" data-url="barbe-3-res"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                        <ul class="sub-menu sub-menu-location" id="li-barbe-3-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                </ul>
                            </div>
                        </div>
                        <div id="theme-event" class="theme-btn d-flex pointer" data-url="event-res">
                            <div class="border-fun border-fun-red mr-2"></div>
                            <div class="pl-0 pr-1 pb-2 pt-2 d-flex">
                                <div><img src="../assets/img/icone-evenements.png" alt="" class="mr-2"/></div>
                                <div class="d-flex align-items-center"><span class="d-block black font-14">Événements</span></div>
                            </div>
                        </div>
                        <div id="themes-open-event-res" class="search-clik-open d-flex">
                            <div class="d-flex" style="height: 100%!important;">
                                <div class="border-fun border-fun__event mr-2"></div>
                                <ul class="sup-menu" id="sup-menu-event">
                                    <li class="selected font-14 bold pointer d-flex" data-url="accessoires-4-res"><span class="arrow-0 mr-1">></span> Accessoires et deguisements</li>
                                        <ul class="sub-menu sub-menu-event selectioned" id="li-accessoires-4-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex" data-url="barbe-4-res"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                        <ul class="sub-menu sub-menu-event" id="li-barbe-4-res" style="">
                                            <li class="font-14 selection">+ Ailes</li>
                                            <li class="font-14">+ Armes et autres</li>
                                            <li class="font-14">+ Bijoux et ceintures</li>
                                            <li class="font-14">+ Boa et plumes</li>
                                            <li class="font-14">+ Chaussures et surbottes</li>
                                            <li class="font-14">+ Cigarettes et autres</li>
                                            <li class="font-14">+ Collants et jarretieres</li>
                                        </ul>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span>Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Accessoires deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Barbes moustaches</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Chapeau et coiffes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Cotillons</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Decorations</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Deguisements</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Farces et attrapes</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Feux d'artifices</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Jouets - Gadgets</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Location</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Loups (demi-masques)</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Maquillages</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Masques</li>
                                    <li class="font-14 bold pointer d-flex"><span class="arrow-0 mr-1">></span> Perruques</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="b-shadow-right">
                        <div class="search-box">
                            <form class="pt-4 pr-3 pl-3 pb-4">
                                <div class="form-row">
                                    <label class="black font-14">Rechercher</label>
                                    <div class="input-group mb-4">
                                        <input class="form-control font-13" type="text" placeholder="Entrez votre recherche..." aria-label="Search" id="search-input2">
                                        <div class="input-group-append">
                                            <span class="input-group-text bgd-transparent" id="basic-text1"><i class="icon-search text-grey"></i></span>
                                        </div>
                                    </div>
                                    <div class="filters-container">
                                        <label class="black font-14">Filtres</label>
                                        <!-- Filtres -->
                                        <div class="form-group custom-selects mb-2 filters">
                                            <select name="filtre-1" id="filtres-1">
                                                <option value="">Taille</option>
                                                <option value="cheap">M</option>
                                                <option value="famous">L</option>
                                                <option value="cool">XL</option>
                                            </select>
                                        </div>
                                        <div class="form-group custom-selects mb-2 filters">
                                            <select name="filtre-2" id="filtres-2">
                                                <option value="">Couleur</option>
                                                <option value="cheap">Blanc</option>
                                                <option value="famous">Orange</option>
                                                <option value="cool">Rose</option>
                                            </select>
                                        </div>
                                        <div class="d-flex">
                                            <span class="btn stickers regular d-block font-12 mr-2">XL<i class="icon-cancel ml-1"></i></span>
                                            <span class="btn stickers regular d-block font-12 mr-2">Rouge<i class="icon-cancel ml-1"></i></span>
                                        </div>
                                        <div class="d-flex flex-column mt-4">
                                            <div class="form-check mb-1 p-0">
                                                <label class="form-check-label font-14 checkbox-container mb-1" for="news2">
                                                    <span>Nouveautés</span>
                                                    <input class="form-check-input" type="checkbox" id="news2">
                                                    <span class="checkboxmark custom news"></span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-1 p-0">
                                                <label class="form-check-label font-14 checkbox-container mb-1" for="promos1">
                                                    <span>Promotions</span>
                                                    <input class="form-check-input" type="checkbox" id="promos1">
                                                    <span class="checkboxmark custom promos"></span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-1 p-0">
                                                <label class="form-check-label font-14 checkbox-container mb-1" for="borrow2">
                                                    <span>Location</span>
                                                    <input class="form-check-input" type="checkbox" id="borrow2">
                                                    <span class="checkboxmark custom borrows"></span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-1 p-0">
                                                <label class="form-check-label font-14 checkbox-container mb-1" for="occasion1">
                                                    <span>Occasions</span>
                                                    <input class="form-check-input" type="checkbox" id="occasion1">
                                                    <span class="checkboxmark custom occasion"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
                <!-- footer -->
                <footer class="footer col-12 p-0 transition bgd-white">
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
                                                    <span class="font-13 forgotten-password"><a href="http://localhost:8888/templates/forgotPassword.php" class="sbold">Mot de passe oublié ?</a></span>
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
            </div>
        </div>
        <!-- end modal -->
        <!-- script -->
        <script src="../assets/js/menu-responsive.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="../assets/js/parallax.js"></script>
        <script>
            // activate link 
            let activeId = '#active-shop';
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
        <script>
            // select
            $class="find-by";
            $class2="find-by-items";
            let $val = "shipping";
        </script>
        <script src="../assets/js/custom-select.js"></script>
        <script src="../assets/js/cart.js"></script>
        <script src="../assets/js/themes.js"></script>
        <script src="../assets/js/cookie.js"></script>
        <script src="../assets/js/card-click.js"></script>
    </body>
</html>

