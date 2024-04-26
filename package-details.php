<?php
include 'connection.php';

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection or other attacks
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch details of the item with this ID from the database
    $query = "SELECT * FROM `voyage` WHERE voyage_id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if the item exists
        if (mysqli_num_rows($result) > 0) {
            // Fetch the details into an associative array
            $voyage_details = mysqli_fetch_assoc($result);
            // Now $voyage_details contains all fields of the item
        } else {
            echo "Error: Item not found.";
        }
    } else {
        echo "Error: Query failed.";
    }
} else {
    // If ID is not set in the URL, handle the error accordingly
    header("Location: index.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="packages.php">voyage organisé</a></li>

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

    <?php
// Définition des données dynamiques
$titre = "Bienvenue sur Mon Site Dynamique";
$h1="A PARTIR DE 1680 DT";
$paragraphe1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ";
$paragraphe2 = "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.";
$imageSrc = "chemin/vers/image.jpg";
?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><?php echo $h1; ?></h4>

              <h2><?php echo $voyage_details['destination'] ?>: UNE EXPÉRIENCE INOUBLIABLE</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div>
              <img width="100%" height="260px"  src="img/<?php echo $voyage_details['image']; ?>" alt="" class="img-fluid wc-image">
            </div>
            
          </div>

          <div class="col-md-6">
              <p class="lead" style="font-size: larger;">
                   <i class="fa fa-calendar"></i> Available: <?php echo $voyage_details['available']; ?> &nbsp;&nbsp; <i class="fa fa-cube"></i> <?php echo $voyage_details['duration']; ?> 
                    nights &nbsp;&nbsp; <i class="fa fa-plane"></i>
                     <?php if($voyage_details['flight']== 1){
                      echo"Flight included";
                     }else{
                      echo"Flight not included";
                     }; ?> 
                    
              </p>

              <br>

              <p><i class="fa fa-map-marker"></i>  <strong><?php echo $voyage_details['description']; ?></strong></p>

              <br>
              <!--- hedhi affichage mtaa el descrition --->
              <p><?php echo $voyage_details['description']; ?></p>
             
              
          </div>
        </div>
      </div>
    </div>

   

    <div class="section">
      <div class="container">
        <div class="section-heading" style="border: 0">
          <h2>Info</h2>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p class="pjVpProductPolicyTitle">
                              <strong>Check-in</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
                         <p>
                              Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                         </p>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Check-out</strong>
                         </p>
                    </div>

                    <div class="col-md-10 col-sm-9">
                         <p>
                              Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                         </p>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Pets</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
                         <p>
                              Not allowed
                         </p>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Policies</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
                         <div>
                              <p>
                                   Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                    Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                              </p>
                         </div>
                    </div>
               </div>
          </li>
          
          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Fees</strong>
                         </p>
                    </div>

                    <div class="col-md-10 col-sm-9">
                         <div>
                              <p>
                                   Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                    Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                              </p>
                         </div>
                    </div>
               </div>
          </li>
     </ul>


      </div>
    </div>

 

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="section-heading">
              <h2 id="target">Enquiry</h2>
            </div>

            <div class="contact-form">
              <form id="contact" action="" method="post" class="details_pack" novalidate="">
                <div class="row">
                  <div class="col-sm-6">
                    <fieldset>
                      <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom" required="" data-validation-required-message="S'il vous plaît entrez votre nom.">
                    </fieldset>
                  </div>
                  <div class="col-sm-6">
                    <fieldset>
                      <input name="Prenom" type="text" class="form-control" id="prenom" placeholder="Prenom" required="">
                    </fieldset>
                  </div>
                  <div class="col-sm-6">
                    <fieldset>
                      <input name="cin" type="text" class="form-control" id="cin" placeholder="num CIN/Passeport" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id="tel" placeholder="Telephone" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-3">
                    <fieldset>
                      <label for="date1"> Date d'Arrivée</label>
                      <input name="date1" type="date" class="form-control" id="date1" placeholder="From 28.03.2024" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-3">
                    <fieldset> <label for="date1"> Date de Départ</label>
                      <input name="date2" type="date" class="form-control" id="date2" placeholder="To 29.03.2024" required="">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="note" rows="6" class="form-control" id="note" placeholder="Notes" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                  <button onclick="calculerTarif()">Calculer le tarif</button>

<div id="tarifVoyage">
    Tarif du voyage : <span id="montantTarif"></span></fieldset>
                  
</div>


                  <div class="col-lg-12">
                    <fieldset>
                      
                      <button type="submit" id="sendMessageBtn" class="filled-button" onclick="sendMessage()">Passer à l'agence </button>
                     
                    </fieldset>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>















          
          <div class="col-md-3">
            <div class="section-heading">
              <h2>Booking terms</h2>
            </div>

            <p>Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. Mauris tincidunt sollicitudin mi eu congue. Suspendisse tincidunt cursus porttitor. Fusce pharetra lorem vel dolor imperdiet malesuada. Ut porttitor gravida quam, eu alique.</p>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">
                  <input type="text" class="form-control" placeholder="Enter full name" required="">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script>
            $(document).ready(function(){
            
                    $(".toTop").hide();

                    $("#sendMessageBtn").click(function(e){
                        
                        e.preventDefault();
                        //calculer tarif
                        function calculerTarif() {

            // Calcul du nombre de jours entre la date d'arrivée et la date de départ
            var differenceJours = (($("#date2").val()) - ($("#date1").val())) *300;

            // Exemple de calcul du tarif : 100 euros par jour
            var tarifJournalier = 100;
            var tarifTotal = differenceJours * tarifJournalier;

            document.getElementById("montantTarif").innerText = tarifTotal + " €";
        }

                        function estAlphabetique(chaine) {
    // Expression régulière pour vérifier si la chaîne est entièrement alphabétique
    var i = 0;
    var b = true;

    while (i < chaine.length) {
        if ((chaine[i] >= 'a' && chaine[i] <= 'z') ||( chaine[i]==' ' ) || (chaine[i] >= 'A' && chaine[i] <= 'Z')) {
            b = true;
            i++;
        } else {
            b = false;
            break; 
        }
    }

    return b;
}
function estnum(x) {
    // Expression régulière pour vérifier si la chaîne est entièrement alphabétique
    var i = 0;
    var b = true;
    chaine = x.toString();

    while (i < chaine.length) {
        if ((chaine[i] >= '0' && chaine[i] <= '9') ||( chaine[i]==' ' ) ) {
            b = true;
            i++;
        } else {
            b = false;
            break; 
        }
    }

    return b;
}


                     if ((estAlphabetique($("#nom").val()))==false  ) {
                        alert("La chaîne ne doit contenir que des lettres alphabétiques!");
                        return ;
                     }
                     if ($("#nom").val() == ""  ) {
                        alert("Vous devez Ecrire Votre Nom!");
                        return ;
                     }
                     

                     if ((estAlphabetique($("#prenom").val()))==false  ) {
                        alert("La chaîne ne doit contenir que des lettres alphabétiques!");
                        return ;
                     }
                     if ($("#prenom").val() == ""  ) {
                        alert("Vous devez Remplisser Votre Prénom");
                        return ;
                     }
                     if ( (estnum($("#cin").val()))==false) {
                        alert("Le numéro CIN ou de passeport doit être composé uniquement de chiffres!");
                        return ;
                   }
                   if ( $("#cin").val() == "") {
                        alert("Vous devez Remplisser Votre numero CIN ou numero de passeport!");
                        return ;
                   }
                     function verifierEmail(email) {
  // Expression régulière pour vérifier le format de l'e-mail
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}
                   if ($("#email").val() == ""  ) {
                        alert("Vous devez Remplisser Votre Email");
                        return ;
                   }
                   if ( verifierEmail($("#email").val())==false  ) {
                        alert("Votre adresse e-mail doit avoir une structure régulière conforme à une adresse e-mail valide!");
                        return ;
                   }
                   if ((estnum($("#tel").val()))==false  ) {
                        alert("Le numéro de téléphone doit être composé uniquement de chiffres!");
                        return ;
                     }
                     
                  
                   if ( $("#tel").val() == "") {
                        alert("Vous devez Remplisser Votre Numero De Tel");
                        return ;
                   }
                   
                   if ( $("#date1").val() == "") {
                    alert("Vous devez Remplisser date d'arrivée ");
                    return ;
                   }

                   if ( $("#date2").val() == "") {
                    alert("Vous devez Remplisser date de depart");
                    return ;
                    }
                
                    $.post("details_pack.php",
                     {
                      nom: $("#nom").val() ,
                       prenom: $("#prenom").val() ,
                       cin: $("#cin").val(),
                        email: $("#email").val() ,
                         tel: $("#tel").val(),
                          date1: $("#date1").val(), 
                          date2: $("#date2").val(),
                          note: $("#note").val()
                          }, function(result){
                           if (result == "done")  {
                            alert("Votre inscription est terminée ! ");
                            window.location.replace("package-details.php");
                           }
                              
                           else {
                            alert(result);
                            
                           }
                       
                        });

                    }); 
            
                    $(function () {
                        $(window).scroll(function () {
                            if ($(this).scrollTop() > 200) {
                                $('.toTop').fadeIn();
                            } else {
                                $('.toTop').fadeOut();
                            }
                        });        
                    });        
                });
            
            var easing, e, pos;
                $(function(){
                  $(".toTop").on("click", function(){
                    pos= $(window).scrollTop();
                    $("body").css({
                      "margin-top": -pos+"px",
                      "overflow-y": "scroll", 
                    });
                    $(window).scrollTop(0);
                    $("body").css("transition", "all 1s ease");
                    $("body").css("margin-top", "0");
                    $("body").on("webkitTransitionEnd transitionend msTransitionEnd oTransitionEnd", function(){
                      $("body").css("transition", "none");
                    });
                  });
                });


            
        </script>
       

<!--
    <script>
            $(document).ready(function(){
            
                    $(".toTop").hide();

                    $("#sendMessageBtn").click(function(){
                        
                   

                     
                if ($("#nom").val() == "") {
                
                    alert("Vous devez écrire votre nom");
                    return;}
                     
                     if ($("#prenom").val() == ""  ) {
                        alert("Vous devez Remplisser Votre Prénom");
                         return;
                     }
                   
                   if ($("#email").val() == ""  ) {
                        alert("Vous devez Remplisser Votre Email");
                         return;
                   }
                  
                   if ( $("#tel").val() == "") {
                    
                        alert("Vous devez Remplisser Votre Numero De Tel");
                         return;
                   }
                   
                   if ( $("#date1").val() == "") {
                    alert("Vous devez selectionner la date d'arrivée");
                         return;
                   }
                   if ( $("#date2").val() == "") {
                    alert("Vous devez selectionner la Date de Départ");
                         return;
                   }

                  
                
                    $.post("package-details.php", 
                    {  nom: $("#nom").val() ,
                       prenom: $("#prenom").val() ,
                        email: $("#email").val() , tel: $("#tel").val(),
                        date1: $("#date1").val(),
                        date2: $("#date2").val(),
                          note: $("#note").val()}
                       ,function(result){
                           if (result == "Done!")  {
                            alert("Votre inscription est terminée ! ♥");
                               window.location.replace("index.php");
                           }
                              
                        else 
                            alert(result);
                            
                           
                        });

                    }); 
            
                    $(function () {
                        $(window).scroll(function () {
                            if ($(this).scrollTop() > 200) {
                                $('.toTop').fadeIn();
                            } else {
                                $('.toTop').fadeOut();
                            }
                        });        
                    });        
                });
            
            var easing, e, pos;
                $(function(){
                  $(".toTop").on("click", function(){
                    pos= $(window).scrollTop();
                    $("body").css({
                      "margin-top": -pos+"px",
                      "overflow-y": "scroll", 
                    });
                    $(window).scrollTop(0);
                    $("body").css("transition", "all 1s ease");
                    $("body").css("margin-top", "0");
                    $("body").on("webkitTransitionEnd transitionend msTransitionEnd oTransitionEnd", function(){
                      $("body").css("transition", "none");
                    });
                  });
                });


            
        </script>
              -->

    <!-- Theme JavaScript -->
    <!--<script src="js/agency.min.js"></script> -->
        <!-- TESSSSSSSSST -->
       
        <!--floating bar -->
        <!--<script>
            $(document).ready(function(){
            
                    $(".toTop").hide();
            
    $("#sendMessageBtn").click(function(e) {



 e.preventDefault();
            $.post("details_pack.php",
                                {nom: $("#nom").val() ,
                                 prenom: $("#prenom").val() ,
                                email: $("#email").val() ,
                                tel: $("#tel").val(),
                                date1: $("#date1").val(),
                                date2: $("#date2").val(),
                                note: $("#note").val(),
                                    }, function(result){
                                    if (result == "done")  {
                                        alert("Votre reservation est effectuée! ♥");
                                      
                                    }
                                        
                                    else {
                                        alert(result);
                                        
                                    }
                                
                                    });

                                }); 

        
    });
                 







                    $(function () {
                        $(window).scroll(function () {
                            if ($(this).scrollTop() > 200) {
                                $('.toTop').fadeIn();
                            } else {
                                $('.toTop').fadeOut();
                            }
                        });        
                    });        
             
            
            var easing, e, pos;
                $(function(){
                  $(".toTop").on("click", function(){
                    pos= $(window).scrollTop();
                    $("body").css({
                      "margin-top": -pos+"px",
                      "overflow-y": "scroll", 
                    });
                    $(window).scrollTop(0);
                    $("body").css("transition", "all 1s ease");
                    $("body").css("margin-top", "0");
                    $("body").on("webkitTransitionEnd transitionend msTransitionEnd oTransitionEnd", function(){
                      $("body").css("transition", "none");
                    });
                  });
                });
        </script>
       


<script>
    function sendMessage() {
        $("html, body").animate({ scrollTop: $(document).height() }, 2000);
    }
</script>

  -->

  </body>

</html>
