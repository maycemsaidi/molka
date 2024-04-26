<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .navbar-brand img {
            max-width: 40px;
            margin-right: 10px;
        }
        /* Style pour la section de confirmation de suppression */
.confirmation-section {
    margin: 20px; /* Marge extérieure */
    padding: 20px; /* Espacement intérieur */
    border: 1px solid #ccc; /* Bordure */
    border-radius: 5px; /* Coins arrondis */
    background-color: #f8f9fa; /* Couleur de fond */
}

/* Style pour le paragraphe de confirmation */
.confirmation-section p {
    font-size: 16px; /* Taille de la police */
    margin-bottom: 10px; /* Marge en bas */
}

/* Style pour le bouton de confirmation */
.confirmation-section button {
    padding: 10px 20px; /* Espacement interne */
    border: none; /* Pas de bordure */
    background-color: #3e5287; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    border-radius: 4px; /* Coins arrondis */
    cursor: pointer; /* Curseur au survol */
}

/* Style pour le bouton de confirmation au survol */
.confirmation-section button:hover {
    background-color: #C5D8E1; /* Couleur de fond au survol */
}

    </style>
    <title>Supprimer la réservation</title>
</head>

<body>
<header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand" href="index.html"><h2>WeTravel  <span class="ag">Agency</span></h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="admin_pannel.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_voyage.php">Voyage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_hotel.php">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_res.php">Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_messages.php">Messages</a>
                        </li>
                        <li class="nav-item">
                            <form action="logout.php" method="post">
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agence_de_voyage";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
// Vérification si le paramètre 'cin' est passé dans l'URL
if (isset($_GET['cin'])) {
    $cin = $_GET['cin'];
    $sql = "SELECT * FROM reservation_voyage WHERE cin = $cin";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Affichage des informations de la réservation à supprimer
?>
      <div class="confirmation-section">  <p>Êtes-vous sûr de vouloir supprimer la réservation suivante :</p>
        <p>Prenom : <?php echo $row['prenom']; ?></p>
        <p>Cin : <?php echo $row['cin']; ?></p>
        <p>Email : <?php echo $row['email']; ?></p>
        <p>Telephone : <?php echo $row['tel']; ?></p>
        <p>Prix : <?php echo $row['prix']; ?></p>
        <p>Note : <?php echo $row['note']; ?></p>
        <!-- Affichage des autres informations de la réservation -->

        <form id="deleteForm" method="post" action="supprimer_resa.php">
            <input type="hidden" name="cin" value="<?php echo $row['cin']; ?>">
            <button type="button" onclick="confirmDelete()">Confirmer la suppression</button>
        </form>
</div>
        <script>
        function confirmDelete() {
            if (confirm("Êtes-vous sûr de vouloir supprimer cette réservation ?")) {
                // Soumettre le formulaire de suppression
                document.getElementById("deleteForm").submit();
             
                
            } else {
                // Redirection vers admin_res.php si l'utilisateur annule la suppression
                window.location.href = "admin_res.php";
            }
            
        }
        
        </script>
<?php
    
} else {
        echo "Réservation introuvable.";
    }
} else {
    echo "CIN de réservation non spécifié.";
}

mysqli_close($conn);
?>

   
</body>
</html>
