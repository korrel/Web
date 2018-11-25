<?php
// Le fichier HEADER.PHP est inclus sur la page 
require_once(__DIR__.'../../partials/header2.php');
?>

    <!-- //////////////////////// CONTENU DE LA PAGE ////////////////////////// -->
    <section class="container-fluid px-0 produit_gallery pb-3">
            <div class="container text-center pt-5 pb-2 position-relative">
                <div class="row d-flex justify-content-between">
                    <div class="col-8">
                        <div class="col-12 pb-2 text-left">                   
                            <h2>
                                 T-shirts <span class="text-bleu">Homme</span>
                            </h2>
                        </div>
                        <div class="col-12">                                    
                            <div class="separator_gallery mx-auto"></div>
                        </div>
                    </div>

                    <div class="col-4">   
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
                    </div>
                    
                </div>

                <!-- Gallerie -->
                <section class="row">
                    <!-- Produit 01 -->
                    <div class="card col-12 col-sm-6 col-md-4 col-lg-3 rounded-0 border-0">
                        <a href="gallery.php" class="produit_link position-relative">
                            <!-- Visuel Produit -->
                            <img class="card-img-top rounded-0" src="../assets/image/gamehover.png" alt="Image du motif gamehover">
                            <div class="overlay">
                                <img class="card-img-top rounded-0" src="../assets/image/tshirt-gamehover.png" alt="Image du t-shirt gamehover" />
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
                        <a href="gallery.php" class="produit_link position-relative">
                            <!-- Visuel Produit -->
                            <img class="card-img-top rounded-0" src="../assets/image/gamehover.png" alt="Image du motif gamehover">
                            <div class="overlay">
                                <img class="card-img-top rounded-0" src="../assets/image/tshirt-gamehover.png" alt="Image du t-shirt gamehover" />
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

<?php
// Le fichier FOOTER.PHP est inclus sur la page 
require_once(__DIR__.'../../partials/footer.php');
?>