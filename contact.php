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

                
                <li class="nav-item active"><a class="nav-link" href="contact.php">Contactez-nous</a></li>
                </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>N'hésitez pas à </h4>
              <h2>nous-contactez</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>localisation sur maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.5495227287024!2d10.143693074699579!3d36.82931326605975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd33128de19257%3A0x41ba4002c8c7728!2sUniversit%C3%A9%20de%20Tunis%20-%20El%20Manar!5e0!3m2!1sfr!2stn!4v1711201560331!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>A propos de notre bureau</h4>
              <p>A propos de notre bureau WeTravel, nous sommes situés au cœur de la ville, offrant un espace moderne et convivial où notre équipe dévouée travaille pour rendre vos voyages aussi agréables et fluides que possible."</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Envoyez-nous un message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post" class="message">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="nomc" type="text" class="form-control" id="nomc" placeholder="Nom complet" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Adresse E-Mail" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="sujet" type="text" class="form-control" id="sujet" placeholder="Sujet" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="votre Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="sendMessageBtn" class="filled-button" onclick="sendMessage()">envoyer le message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/team_01.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">consultant </h5>
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
    <script>
            $(document).ready(function(){
            
                    $(".toTop").hide();

                    $("#sendMessageBtn").click(function(e){
                        
                        e.preventDefault();
                       
                     
                     if ($("#nomc").val() == ""  ) {
                        alert("Vous devez Ecrire Votre Nom!");
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
                  
                     
                  
                   if ( $("#sujet").val() == "") {
                        alert("Vous devez Remplisser le sujet");
                        return ;
                   }
                   
                   if ( $("#message").val() == "") {
                    alert("Vous devezecrire un message");
                    return ;
                   }

                   
                    $.post("message.php",
                     {
                      nomc: $("#nomc").val() ,
                       
                        email: $("#email").val() ,
                         sujet: $("#sujet").val(),
                          
                          message: $("#message").val()
                          }, function(result){
                           if (result == "done")  {
                            alert("Votre inscription est terminée ! ");
                            window.location.replace("contact.php");
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
       

  </body>

</html>
