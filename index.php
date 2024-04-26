<?php
    include 'connection.php';     
    ?>
    

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/log.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> WeTravel Agency Website </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>WeTravel  <span class="ag">Agency</span></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item "><a class="nav-link" href="packages.php">voyage organisé</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Hotels Tunisie</a></li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">plus</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">À propos de nous</a>
                      <a class="dropdown-item" href="testimonials.php">Témoignages</a>
                      <a class="dropdown-item" href="terms.php">Conditions</a>
                    </div>
                </li>

                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contactez-nous</a></li>
            
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4></h4>
            <h2>
              Vacances à la mer : détente, plaisir, évasion. </h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            
            <h2>Les vacances : un souffle d'aventure et de liberté.  </h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            
            <h2>Perdez-vous dans l'ambiance insulaire lors de vos vacances </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
<!--about us-->
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>voyage organisé</h2>
              <a href="packages.php">Voir plus <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <!-- debut de packages -->
<div class="products">
  <div class="container">
    <div class="row">
      <!-- show cart-->
    <?php
        
        $select_voyage = mysqli_query($conn, "SELECT * FROM `voyage`") or die('Query failed');
        if (mysqli_num_rows($select_voyage) > 0) {
            while ($fetch_voyage = mysqli_fetch_assoc($select_voyage)) {
        ?>
               
            


                <div class="col-md-4">
                <div class="product-item">
                  <a href="package-details.php?id=<?php echo $fetch_voyage['voyage_id']; ?>"><img width="100%" height="260px" src="img/<?php echo $fetch_voyage['image']; ?>" alt=""></a>
                  <div class="down-content">
                    <a href="package-details.php?id=<?php echo $fetch_voyage['voyage_id']; ?>"><h4><?php echo $fetch_voyage['destination'];?></h4></a>

                    <h6>A PARTIR DE  <?php echo $fetch_voyage['price']; ?> DT </h6>

                    <p><?php echo $fetch_voyage['description']; ?></p>
              <br>
              <div class="d-grid gap-2" >

    <a   
    href="package-details.php?id=<?php echo $fetch_voyage['voyage_id']; ?>#target"
    type="button" class="btn btn-primary" style="width:100%">Reservation
            </a>

              </div>
              <br>
              
                    <small>
                        <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Nights"><i class="fa fa-cube"></i> 20 nuitées</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Flight included"><i class="fa fa-plane"></i> vol inclus</strong>
                    </small>
                  </div>
                </div>
              </div>
        
        <?php
            }
        } else {
            echo '
            <div class="empty">
            <p>0 voyages added</p>
            </div>
            ';
        }
        ?>

          <div class="col-md-4">
            <div class="product-item">
              <a href="package-details.php"><img src="assets/images/autriche.jfif" alt=""></a>
              <div class="down-content">
                <a href="package-details.php"><h4>Autriche</h4></a>

                <h6>A PARTIR DE 4300 DT </h6>

                <p>Découvrez la majesté des Alpes autrichiennes et l'élégance de Vienne lors de notre voyage exclusif en Autriche. Plongez dans un monde de charme culturel, de paysages pittoresques et d'une richesse historique captivante.</p>
<br><br><br>
                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 20 nuitées</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> vol inclus</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="package-details.php"><img src="assets/images/pays bas.jpg" alt=""></a>
              <div class="down-content">
                <a href="package-details.php"><h4>Pays-bas </h4></a>

                <h6>A PARTIR DE 3000 DT</h6>

                <p>Explorez les Pays-Bas avec notre voyage unique, entre villes historiques, marchés animés et paysages pittoresques. Dégustez la cuisine locale et plongez dans la culture néerlandaise. Réservez dès maintenant votre aventure aux Pays-Bas !</p>
<br><br>
                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> hiver</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 7 nuitées</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> vol inclus</strong>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>À PROPOS DE NOUS</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>À <a href="#">WeTravel Agency</a>, notre passion est de créer des expériences de voyage inoubliables qui transportent nos clients vers des destinations fascinantes à travers le monde. Nous croyons fermement que chaque <a href="packages.php">voyage </a>devrait être une aventure enrichissante, pleine de découvertes, de moments mémorables et d'émerveillement.  </p>
              <ul class="featured-list">
                <li><a href="#">Explorer le monde et les trésors locaux avec expertise.</a></li>
                <li><a href="#">Des itinéraires personnalisés pour découvrir les richesses nationales.</a></li>
                <li><a href="#">Promouvoir le tourisme interne avec passion et dévouement.</a></li>
                <li><a href="#">Découvrir les joyaux cachés à portée de main avec WeTravel Agency.</a></li>
              </ul>
              <a href="about-us.php" class="filled-button">Lire la suite</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
<!--Hotels Tunisie-->






    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Hotels Tunisie </h2>

              <a href="blog.php">Lire la suite <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/dar.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Dar Ismail</a></h4>
                <div class="entete_produit">
                  <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">
                  </div>
                 
                 
                 
                  <div style="width: 100%; margin-left: 2%;">
                 
                    
                    <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -50px" style="margin-left: -200px;">
                    
                  </div>
                  <div style="text-align: center ;">
                  
                    <span class="adresse_hotel" style="float: left;margin-left:35%;margin-right:35%;margin-top: -4%;font-size:12px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 5%;float: left;" src="https://tn.tunisiebooking.com/images/localisation.svg"><div style="margin-top:-0.2%;margin-left:0.6%;margin-right:1%;position:absolute;">Tabarka</div></span>
                  </div>
                 
                        <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
                        <span class="apartirde">à partir de *</span><div style="margin-top:-21%;padding-top:3px;;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;margin-left: 65%;">130<sup style="top:-0.8em !important; font-weight:500;font-size:15px"; class="devise">DT</sup></div>
                        </div>
                        <div class="date_prix" style="padding-top:3px;top: -92.5%;margin-left:35%;margin-right:35%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 21/03/24</div>
                  </div>
              </div>
 
            </div>
          </div>


          
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/iber.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Iberostar Kuriat Palace  </a></h4>
                <div class="entete_produit">
                  <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">
                  </div>
                 
                 
                 
                  <div style="width: 100%; margin-left: 2%;">
                 
                    
                    <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -50px" style="margin-left: -200px;">
                    
                  </div>
                  <div style="text-align: center ;">
                  
                    <span class="adresse_hotel" style="float: left;margin-left:35%;margin-right:35%;margin-top: -4%;font-size:12px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 5%;float: left;" src="https://tn.tunisiebooking.com/images/localisation.svg"><div style="margin-top:-0.2%;margin-left:0.6%;margin-right:1%;position:absolute;">&nbsp;Hammamet</div></span>
                  </div>
                 
                        <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
                        <span class="apartirde">à partir de *</span><div style="margin-top:-21%;padding-top:3px;;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;margin-left: 65%;">155<sup style="top:-0.8em !important; font-weight:500;font-size:15px"; class="devise">DT</sup></div>
                        </div>
                        <div class="date_prix" style="padding-top:3px;top: -92.5%;margin-left:35%;margin-right:35%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 21/03/24</div>
                  </div>
              </div>
 
            </div>
          </div>
         
         
         
         
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/Laico.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Laico hammamet</a></h4>
                <div class="entete_produit">
                  <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">
                  </div>
                 
                 
                 
                  <div style="width: 100%; margin-left: 2%;">
                 
                    
                    <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -50px" style="margin-left: -200px;">
                    
                  </div>
                  <div style="text-align: center ;">
                  
                    <span class="adresse_hotel" style="float: left;margin-left:35%;margin-right:35%;margin-top: -4%;font-size:12px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 5%;float: left;" src="https://tn.tunisiebooking.com/images/localisation.svg"><div style="margin-top:-0.2%;margin-left:0.6%;margin-right:1%;position:absolute;">&nbsp;Hammamet</div></span>
                  </div>
                 
                        <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
                        <span class="apartirde">à partir de *</span><div style="margin-top:-21%;padding-top:3px;;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;margin-left: 65%;">104<sup style="top:-0.8em !important; font-weight:500;font-size:15px"; class="devise">DT</sup></div>
                        </div>
                        <div class="date_prix" style="padding-top:3px;top: -92.5%;margin-left:35%;margin-right:35%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 21/03/24</div>
                  </div>
              </div>
 
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/thapu.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">El mouradi Djerba Menzel</a></h4>
                <div class="entete_produit">
                  <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">
                  </div>
                 
                 
                 
                  <div style="width: 100%; margin-left: 2%;">
                 
                                       <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -50px" style="margin-left: -200px;">
                    
                  </div>
                  <div style="text-align: center ;">
                  
                    <span class="adresse_hotel" style="float: left;margin-left:35%;margin-right:35%;margin-top: -4%;font-size:12px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 5%;float: left;" src="https://tn.tunisiebooking.com/images/localisation.svg"><div style="margin-top:-0.2%;margin-left:0.6%;margin-right:1%;position:absolute;">&nbsp;Djerba</div></span>
                  </div>
                 
                        <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
                        <span class="apartirde">à partir de *</span><div style="margin-top:-21%;padding-top:3px;;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;margin-left: 65%;">90<sup style="top:-0.8em !important; font-weight:500;font-size:15px"; class="devise">DT</sup></div>
                        </div>
                        <div class="date_prix" style="padding-top:3px;top: -92.5%;margin-left:35%;margin-right:35%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 21/03/24</div>
                  </div>
              </div>
 
            </div>
          </div>
         
          
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/houda.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Houda Yasmine Hammamet </a></h4>
                <div class="entete_produit">
                  <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">
                  </div>
                 
                 
                 
                  <div style="width: 100%; margin-left: 2%;">
                 
                    
                    <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -50px" style="margin-left: -200px;">
                    
                  </div>
                  <div style="text-align: center ;">
                  
                    <span class="adresse_hotel" style="float: left;margin-left:35%;margin-right:35%;margin-top: -4%;font-size:12px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 5%;float: left;" src="https://tn.tunisiebooking.com/images/localisation.svg"><div style="margin-top:-0.2%;margin-left:0.6%;margin-right:1%;position:absolute;">&nbsp;Hammamet</div></span>
                  </div>
                 
                        <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
                        <span class="apartirde">à partir de *</span><div style="margin-top:-21%;padding-top:3px;;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;margin-left: 65%;">60<sup style="top:-0.8em !important; font-weight:500;font-size:15px"; class="devise">DT</sup></div>
                        </div>
                        <div class="date_prix" style="padding-top:3px;top: -92.5%;margin-left:35%;margin-right:35%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 21/03/24</div>
                  </div>
              </div>
 
            </div>
          </div>
         
         
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/riadh.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Riadh Palms</a></h4>
                <div class="entete_produit">
                  <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">
                  </div>
                 
                 
                 
                  <div style="width: 100%; margin-left: 2%;">
                 
                    
                    <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -50px" style="margin-left: -200px;">
                    
                  </div>
                  <div style="text-align: center ;">
                  
                    <span class="adresse_hotel" style="float: left;margin-left:35%;margin-right:35%;margin-top: -4%;font-size:12px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 5%;float: left;" src="https://tn.tunisiebooking.com/images/localisation.svg"><div style="margin-top:-0.2%;margin-left:0.6%;margin-right:1%;position:absolute;">&nbsp;Sousse</div></span>
                  </div>
                 
                        <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
                        <span class="apartirde">à partir de *</span><div style="margin-top:-21%;padding-top:3px;;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;margin-left: 65%;">79<sup style="top:-0.8em !important; font-weight:500;font-size:15px"; class="devise">DT</sup></div>
                        </div>
                        <div class="date_prix" style="padding-top:3px;top: -92.5%;margin-left:35%;margin-right:35%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 21/03/24</div>
                  </div>
              </div>
 
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Avis clients</h2>

              <a href="testimonials.php">Lire la suite<i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Nous vous remercions d'avoir organisé notre voyage de façon si parfaite"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Nous avons apprécié la nourriture, généreuse, parfois un peu trop pour nos appétits, mais toujours bien présentée, décorée, saine."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"L’agence est particulièrement à recommander pour u. Programme personnalisé, beaucoup d’échanges avant. Nous avons un couplé d’amis qui d’ailleurs étaient partis en juillet pleinement satisfaits eux aussi</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John mil</h4>
                  <p class="n-m"><em>"L’agence est particulièrement à recommander pour u. Programme personnalisé, beaucoup d’échanges avant. Nous avons un couplé d’amis qui d’ailleurs étaient partis en juillet pleinement satisfaits eux aussi</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"De plus c’était très bien de commencer avec un rythme plus soutenu et terminer par la croisière sur le Mékong et le séjour à Phu Quoc, nous avons savouré …"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Pour plus de détails ou pour toute question supplémentaire, n'hésitez pas à nous contacter..</h4>
                  </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Contactez-nous</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2024</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>