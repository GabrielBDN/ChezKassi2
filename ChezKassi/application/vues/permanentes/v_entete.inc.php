<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>ChezKassi</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="public/images/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="public/js/wow.min.js" type="text/javascript"></script>
        <script src="public/js/easing.min.js" type="text/javascript"></script>
        <script src="public/js/waypoints.min.js" type="text/javascript"></script>
        <script src="public/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="public/js/moment.min.js" type="text/javascript"></script>
        <script src="public/js/moment-timezone.min.js" type="text/javascript"></script>
        <script src="public/js/tempusdominus-bootstrap-4.min.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>

        <!-- Libraries Stylesheet -->
        <!-- Template Stylesheet -->
        <link href="<?php echo Chemins::STYLES . 'style.css'; ?> " rel="stylesheet">
        <link href="<?php echo Chemins::STYLES . 'min.css'; ?> " rel="stylesheet">
        <link href="<?php echo Chemins::STYLES . 'owl.carousel.min.css'; ?> " rel="stylesheet">
        <link href="<?php echo Chemins::STYLES . 'tempusdominus-bootstrap-4.min.css'; ?> " rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo Chemins::STYLES . 'bootstrap.min.css'; ?> " rel="stylesheet">


    </head>





    <body>
        <!-- Spinner Start -->
        <div id="spinner"
             class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>61 Avenue de l'Albigeois,
                            81320 Murat-sur-Vèbre, France</small>
                        <small class="me-3 text-light"><a href="tel:0662400082"><i class="fa fa-phone-alt me-2"></a></i>+33 6 72 65 73 99</small>
                        <small class="text-light"><i class="fa fa-envelope-open me-2"></i>contactchezkassi@gmail.com</small>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                           href="https://www.facebook.com/"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                           href="https://youtu.be/1BMJ2co3glI?feature=shared"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="public/images/logo.png"></i></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Accueil</a>
                        <a href="index.php?controleur=Actualite&action=afficher" class="nav-item nav-link">Actualité</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu m-0">
                                <a href="index.php?controleur=Carte&action=afficher" class="dropdown-item">Carte</a>
                                <a href="index.php?controleur=Partenaire&action=afficher" class="dropdown-item">Partenaire</a>
                            </div>
                        </div>
                        <a href="index.php?controleur=contact&action=afficher" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="index.php?controleur=RDV&action=afficher" class="btn btn-primary rounded-pill py-2 px-4 active">Réserver maintenant !</a>
                </div>
            </nav>

            <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>