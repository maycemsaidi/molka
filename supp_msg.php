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
    $id = $_POST['id'];

    
    $sql = "DELETE FROM commentaire  WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "message supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de message  : " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
