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

// Vérification si le formulaire de suppression a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cin = $_POST['cin'];

    // Requête SQL pour supprimer la réservation
    $sql = "DELETE FROM reservation_voyage WHERE cin=$cin";

    if (mysqli_query($conn, $sql)) {
        echo "Réservation supprimée avec succès.";
    } else {
        echo "Erreur lors de la suppression de la réservation : " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
