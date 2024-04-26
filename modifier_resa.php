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

// Vérification si le formulaire de modification a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $prix = $_POST['prix'];
    // Ajoutez d'autres champs de formulaire ici

    // Requête SQL pour mettre à jour les données dans la base de données
    $sql = "UPDATE reservation_voyage SET nom='$nom', prenom='$prenom', email='$email', tel='$tel', prix='$prix' WHERE cin='$cin'";

    if (mysqli_query($conn, $sql)) {
        echo "Modification effectuée avec succès.";
    } else {
        echo "Erreur lors de la modification : " . mysqli_error($conn);
    }
} else {
    echo "Aucune donnée reçue du formulaire.";
}

mysqli_close($conn);
?>



<!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $prix = $_POST['prix'];
    $note= $_POST['note'];
   

    // Requête SQL pour mettre à jour la réservation
    $sql = "UPDATE reservation_voyage SET nom='$nom',`prenom`='$prenom',`cin`='$cin',`email`='$email',`tel`='$tel',`prix`='$prix',`note`='$note' WHERE cin=$cin";

    if (mysqli_query($conn, $sql)) {
        echo "Réservation mise à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour de la réservation : " . mysqli_error($conn);
    }
} -->
