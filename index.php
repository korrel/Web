<?php
// Le fichier HEADER.PHP est inclus sur la page 
require_once(__DIR__.'/partials/header.php');
?>

        <!-- //////////////////////// SLIDE PRINCIPALE ////////////////////////// -->
        <div class="container-fluid slide_container px-0">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rounded-circle"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-circle"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded-circle"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                <img class="d-block w-100" src="assets/image/slide01.jpg" alt="première slide">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>
                <img class="d-block w-100" src="assets/image/slide01.jpg" alt="seconde slide">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                <img class="d-block w-100" src="assets/image/slide01.jpg" alt="troisième slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <div id="triangle-right"></div>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <div id="triangle-left"></div>
                <span class="sr-only">Next</span>
            </a>
            </div>

        </div>


<?php
// Le fichier FOOTER.PHP est inclus sur la page 
require_once(__DIR__.'/partials/footer.php');
?>