


<!DOCTYPE html>
<html>
<head>
    <title>Modifier la réservation</title>
    <style>
        body {
            
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.container {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
h1 {
    text-align: center;
}
.form-group {
    margin-bottom: 15px;
}
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
input[type="text"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button {
    padding: 10px 20px;
    border: none;
    background-color: #3e5287;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    margin: 0 auto;
}
button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agence_de_voyage";

    // Créer une connexion
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Vérifier si l'identifiant de réservation 'cin' est passé en paramètre
    if (isset($_GET['cin'])) {
        $cin = mysqli_real_escape_string($conn, $_GET['cin']);
        
        // Requête SQL pour récupérer les données de la réservation en utilisant l'identifiant 'cin'
        $sql = "SELECT * FROM reservation_voyage WHERE cin = '$cin'";
        
        // Exécution de la requête
        $result = mysqli_query($conn, $sql);

        // Vérifier si la réservation existe
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
    ?>
            <form action="modifier_resa.php" method="post">
                <input type="hidden" name="cin" value="<?php echo $row['cin']; ?>">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" value="<?php echo $row['nom']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" value="<?php echo $row['prenom']; ?>" class="form-control">
                </div>
                <div class="form-group">
        <label for="cin">cin :</label>
        <input type="cin" id="cin" name="cin" value="<?php echo $row['cin']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">email :</label>
        <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="tel">Telephone :</label>
        <input type="text" id="tel" name="tel" value="<?php echo $row['tel']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="prix">Prix:</label>
        <input type="text" id="prix" name="prix" value="<?php echo $row['prix']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="note">Note :</label>
        <input type="text" id="note" name="note" value="<?php echo $row['note']; ?>" class="form-control">
    </div>
                <!-- Ajoutez d'autres champs de formulaire à modifier ici avec la même structure -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
    <?php
        } else {
            echo "Réservation introuvable.";
        }
    } else {
        echo "CIN de réservation non spécifié.";
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
    ?>
</body>
</html>










