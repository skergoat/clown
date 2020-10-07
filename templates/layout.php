<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <!-- fonts -->
        <!-- <script src="https://kit.fontawesome.com/1596c4b58a.js" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="../assets/fontello/css/fontello.css">
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Nunito+Sans">
        <!-- stylesheet -->
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <!-- header -->
       <header>
           <div class="mx-auto navs">
               <!-- reseaux -->
               <div class="navs__secondary">
                   <div class="d-flex justify-content-between navs__wrapper">
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
               <div class="navs__primary">
                    <div class="d-flex justify-content-between navs__wrapper">
                        <a href="#">
                            <img src="../assets/img/logo.png" class="logo d-xs-none d-sm-none d-md-none d-lg-block d-none pt-2 pb-2">
                            <img src="../assets/img/logo-responsive.png" class="logo d-xs-block d-sm-block d-md-block d-lg-none pt-2 pb-2">
                        </a>
                        <ul class="d-none d-lg-flex mb-0 list menu">
                            <li><a href="#" class="d-flex align-items-center font-weight-bold link-black">Accueil</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black">Boutique</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black">Infos Pratiques</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black pr-1">Contact</a><div class="border-bottom-menu"></div></li>
                            <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1"><i class="icon-basket"></i></a><div class="border-bottom-menu"></div></li>
                        </ul>
                        <!-- Navigation links (hidden by default) -->
                        <div class="d-xs-block d-sm-block d-md-block d-lg-none">
                            <!-- <li class="ml-4"><a href="#" class="d-flex align-items-center font-weight-bold link-black hover-no-change pr-1"><i class="icon-basket"></i></a><div class="border-bottom-menu"></div></li> -->
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
        
       <?= $content ?>
       
       <!-- footer -->
       <footer class="footer">
           <div class="footer-top"></div>
           <div class="footer-center-first"></div>
           <div class="footer-center-second"></div>
           <div class="footer-bottom"></div>
       </footer>
       <!-- script -->
       <script src="../assets/js/menu-responsive.js"></script>
    </body>
</html>