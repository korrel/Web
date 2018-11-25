<?php
// Le fichier HEADER.PHP est inclus sur la page 
require_once(__DIR__.'/partials/header.php');
?>

        <!-- //////////////////////// SLIDE PRINCIPALE ////////////////////////// -->
        <div class="container-fluid position-relative slide_container px-0">
            
            <div class="container-fluid position-absolute h-100 w-100 shadow_content">
            </div>

            <div id="carouselcontroller" class="carousel slide" data-ride="carousel">
                <!-- Les indicateurs de slide -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselcontroller" data-slide-to="0" class="active rounded-circle"></li>
                    <li data-target="#carouselcontroller" data-slide-to="1" class="rounded-circle"></li>
                    <li data-target="#carouselcontroller" data-slide-to="2" class="rounded-circle"></li>
                </ol>
                <!-- Les slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active d-flex justify-content-center">
                        <div class="carousel-caption d-none d-md-block carousel_content">
                            <p>Développe un style unique</p>
                            <h5 class="slogan_slide">Porte un T-shirt Original</h5>
                            <button type="button" class="btn btn-primary">Découvrir ></button>
                        </div>
                    <img class="d-block slide_visuel" src="assets/image/slide01.jpg" alt="première slide">
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
        <section class="container-fluid px-0">
            <div class="container text-center py-5">
                <h2>
                    Les dernières nouveautés
                </h2>
            </div>
        </section>

        <!-- //////////////////////// SECTION IDEE MOTIF ////////////////////////// -->


<?php
// Le fichier FOOTER.PHP est inclus sur la page 
require_once(__DIR__.'/partials/footer.php');
?>