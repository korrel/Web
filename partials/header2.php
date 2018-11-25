<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DEV my Shirts | Développeurs de style</title>

    <meta name="descripion" content="Boutique e-commerce en ligne de t-shirts originaux basés sur les langages de programmation et de développement">
    <meta name="author" content="DEV my Shirts">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="#">

    <!-- Liens vers les .CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/style/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/style/style.min.css" />
</head>

<body>

    <div class="container-fluid px-0">

        <!-- //////////////////////// HEADER DE LA PAGE ////////////////////////// -->
        <header>

            <!-- //////////////////////// LOGO + PANIER + CONNEXION ////////////////////////// -->
            <div class="container d-none d-lg-block">
                <div class="row py-3 px-3">
                    
                    <div class="col-md-4 d-flex align-items-center">
                        <div>
                            <a href="../index.php">
                                <img src="../assets/image/logo.svg" class="logo_icone" alt=" Logo de l'entreprise Dev my Shirts">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 text-center d-flex align-items-center justify-content-center">
                        <span class="dev_style">Développeurs de style</span>
                    </div>

                    <div class="col-md-4">
                        <div class="row align-items-center user_elements">
                            <!-- Connexion -->
                            <div class="col-md-8 h-100 d-flex justify-content-end align-items-center">
                                <a href="#" class="text-midium-metal-upper">Connexion</a>       
                            </div>
                            <!-- Panier -->
                            <div class="col-md-4 h-100">
                                <div class="row h-100">                            
                                    <div class="col-md-8 h-100 d-flex justify-content-end align-items-center">
                                        <a href="#" class="text-midium-metal-upper">Panier</a> 
                                    </div>
                                    <div class="col-md-4 h-75 p-0">
                                        <span class="counter">0</span>
                                        <img src="../assets/image/panier.svg" class="h-100" alt="Icone de panier d'achat">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- //////////////////////// NAVBAR DU SITE ////////////////////////// -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-ocean flex-row-reverse flex-md-row p-lg-0 p-1 p-lg-0 border-bottom-primary">
                <!-- Navbar Brand -->
                <div class="navbar-brand d-flex d-flex  px-sm-3 d-lg-none">
                    <a class="text-ciel" href="../index.php">DEV <span class="light-text">my Shirts</span></a>
                    <div class="h-25 px-2 position-relative">
                        <span class="counter">0</span>
                        <img src="../assets/image/panier.svg" class="h-100 panier_mobile" alt="Icone de panier d'achat">
                    </div>
                </div>
                <!-- Bouton Toggle -->
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar_links" aria-controls="navbar_links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Liens -->
                <div class="container mx">
                         
                    <div class="collapse navbar-collapse text-navbar justify-content-between" id="navbar_links">
                        <!-- Menu principal -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link py-3 px-3 active" href="gallery.php">Homme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3 px-3" href="gallery.php">Femme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3 px-3" href="designers.php">Nos Designers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link promo py-3 px-3" href="promo.php">Promo de Noël</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3 px-3" href="contact.php">Contact</a>
                            </li>
                        </ul>

                        <!-- Icones des réseaux sociaux -->
                        <div class="row ml-3 my-2 my-lg-0 pb-2 pb-lg-0 ml-lg-0 mr-lg-0 gr_sociaux">
                            <div class="col-1 col-lg-6 px-1">
                                <a href="#">
                                    <img class="h-100" src="../assets/image/facebook.svg" alt="Icone SVG Facebook">
                                </a>
                            </div>
                            <div class="col-1 col-lg-6 px-1">
                                <a href="#">
                                    <img class="h-100" src="../assets/image/instagram.svg" alt="Icone SVG Instagram">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>

        </header>