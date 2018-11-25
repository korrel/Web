<?php
// Le fichier HEADER.PHP est inclus sur la page 
require_once(__DIR__.'/partials/header.php');
?>

        <!-- //////////////////////// SLIDE PRINCIPALE ////////////////////////// -->
        <div class="container-fluid position-relative slide_container px-0">
            
            
            <div id="carouselcontroller" class="carousel slide" data-ride="carousel">
                <!-- Les indicateurs de slide -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselcontroller" data-slide-to="0" class="active rounded-circle"></li>
                    <li data-target="#carouselcontroller" data-slide-to="1" class="rounded-circle"></li>
                    <li data-target="#carouselcontroller" data-slide-to="2" class="rounded-circle"></li>
                </ol>
                <!-- Les slides -->
                <div class="carousel-inner">

                    <!-- slide 01 -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="carousel-caption d-none d-md-block carousel_content">
                                <p class="title_slide">Développe un <span>style unique</span></p>
                                <h5>Porte un T-shirt <span class="slogan_slide d-block">Original</span></h5>
                                <!-- BTN Découvrir -->
                                <a href="#" class="btn-decouvrir rounded-0 mt-4 py-2 px-3">Découvrir ></a>
                            </div>
                            <!-- Shadow -->
                            <div class="container-fluid position-absolute h-100 w-100 shadow_content"></div>
                            <!-- Image du slide -->
                            <img class="d-block slide_visuel" src="assets/image/slide01.jpg" alt="première slide">
                        </div>
                    </div>
                    <!-- slide 02 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="carousel-caption d-none d-md-block carousel_content">
                                <p class="title_slide">Développe un <span>style unique</span></p>
                                <h5>Porte un T-shirt <span class="slogan_slide d-block">Original</span></h5>
                                <!-- BTN Découvrir -->
                                <a href="#" class="btn-decouvrir rounded-0 mt-4 py-2 px-3">Découvrir ></a>
                            </div>
                            <!-- Shadow -->
                            <div class="container-fluid position-absolute h-100 w-100 shadow_content"></div>
                            <!-- Image du slide -->
                            <img class="d-block slide_visuel" src="assets/image/slide01.jpg" alt="première slide">
                        </div>
                    </div>
                    <!-- slide 03 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="carousel-caption d-none d-md-block carousel_content">
                                <p class="title_slide">Développe un <span>style unique</span></p>
                                <h5>Porte un T-shirt <span class="slogan_slide d-block">Original</span></h5>
                                <!-- BTN Découvrir -->
                                <a href="#" class="btn-decouvrir rounded-0 mt-4 py-2 px-3">Découvrir ></a>
                            </div>
                            <!-- Shadow -->
                            <div class="container-fluid position-absolute h-100 w-100 shadow_content"></div>
                            <!-- Image du slide -->
                            <img class="d-block slide_visuel" src="assets/image/slide01.jpg" alt="première slide">
                        </div>
                    </div>
                    
                </div>
                <!-- Les controllers -->
                <a class="carousel-control-prev" href="#carouselcontroller" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <div id="triangle-right"></div>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselcontroller" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <div id="triangle-left"></div>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>

        </div>

        <!-- //////////////////////// SLOGAN ////////////////////////// -->
        <section class="container-fluid baseline_content">
            <div class="container text-center py-5">
                <h1 class="text-regular m-0">
                    Les motifs de demain sont <span class="text-bleu">développés</span> aujourd'hui !
                </h1>
                <p>
                    Démarquez-vous avec des t-shirts aux motifs innovants.
                <p>   
            </div>
        </section>

        <!-- //////////////////////// GALLERIE NOUVEAUTES PRODUITS ////////////////////////// -->
        <section class="container-fluid px-0 produit_gallery pb-3">
            <div class="container text-center pt-5 pb-2 position-relative">
                <div class="row">
                    <div class="col-12 pb-2">                   
                        <h2>
                            Les dernières <span class="text-bleu">nouveautés</span>
                        </h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="separator mx-auto"></div>
                    </div>
                </div>

                <!-- controllers -->
                <nav aria-label="controller-produit py-0">
                    <ul class="pagination d-flex justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Précédent</span>
                            </a>
                        </li>
                        <li>
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Suivant</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Gallerie -->
                <section class="row">
                    <!-- Produit 01 -->
                    <div class="card col-12 col-sm-6 col-md-4 col-lg-3 rounded-0 border-0">
                        <a href="pages/gallery.php" class="produit_link position-relative">
                            <!-- Visuel Produit -->
                            <img class="card-img-top rounded-0" src="assets/image/gamehover.png" alt="Image du motif gamehover">
                            <div class="overlay">
                                <img class="card-img-top rounded-0" src="assets/image/tshirt-gamehover.png" alt="Image du t-shirt gamehover" />
                            </div>
                        </a>
                        <!-- Infos produit -->
                        <div class="card-body">
                            <h3 class="title_produit_gallery">Game Hover</h3>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-back"></i>
                            </div>
                            <h5 class="price_gallery pt-2">25,00€</h5>
                        </div>
                    </div>

                    <!-- Produit 02 -->
                    <div class="card col-12 col-sm-6 col-md-4 col-lg-3 rounded-0 border-0">
                        <a href="pages/gallery.php" class="produit_link position-relative">
                            <!-- Visuel Produit -->
                            <img class="card-img-top rounded-0" src="assets/image/gamehover.png" alt="Image du motif gamehover">
                            <div class="overlay">
                                <img class="card-img-top rounded-0" src="assets/image/tshirt-gamehover.png" alt="Image du t-shirt gamehover" />
                            </div>
                        </a>
                        <!-- Infos produit -->
                        <div class="card-body">
                            <h3 class="title_produit_gallery">Game Hover</h3>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-back"></i>
                            </div>
                            <h5 class="price_gallery pt-2">25,00€</h5>
                        </div>
                    </div>

                    <!-- Produit 03 -->
                    <div class="card col-12 col-sm-6 col-md-4 col-lg-3 rounded-0 border-0">
                        <a href="pages/gallery.php" class="produit_link position-relative">
                            <!-- Visuel Produit -->
                            <img class="card-img-top rounded-0" src="assets/image/gamehover.png" alt="Image du motif gamehover">
                            <div class="overlay">
                                <img class="card-img-top rounded-0" src="assets/image/tshirt-gamehover.png" alt="Image du t-shirt gamehover" />
                            </div>
                        </a>
                        <!-- Infos produit -->
                        <div class="card-body">
                            <h3 class="title_produit_gallery">Game Hover</h3>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-back"></i>
                            </div>
                            <h5 class="price_gallery pt-2">25,00€</h5>
                        </div>
                    </div>

                    <!-- Produit 04 -->
                    <div class="card col-12 col-sm-6 d-md-none d-lg-flex col-lg-3 rounded-0 border-0">
                        <a href="pages/gallery.php" class="produit_link position-relative">
                            <!-- Visuel Produit -->
                            <img class="card-img-top rounded-0" src="assets/image/gamehover.png" alt="Image du motif gamehover">
                            <div class="overlay">
                                <img class="card-img-top rounded-0" src="assets/image/tshirt-gamehover.png" alt="Image du t-shirt gamehover" />
                            </div>
                        </a>
                        <!-- Infos produit -->
                        <div class="card-body">
                            <h3 class="title_produit_gallery">Game Hover</h3>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-back"></i>
                            </div>
                            <h5 class="price_gallery pt-2">25,00€</h5>
                        </div>
                    </div>

                    <!-- btn -->
                    <div class="row position-absolute btn_motifs d-block text-center">
                        <a href="pages/gallery.php" class="btn-decouvrir rounded-0 mt-4 py-2 px-3">Découvrir les motifs ></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- //////////////////////// SECTION CONCEPT ////////////////////////// -->

        <section class="container-fluid concept_content">
            <div class="container">
                
            </div>
        </section>

<?php
// Le fichier FOOTER.PHP est inclus sur la page 
require_once(__DIR__.'/partials/footer.php');
?>