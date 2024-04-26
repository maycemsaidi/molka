<?php
// Assurez-vous que le fichier de connexion est inclus
include 'connection.php';

if(isset($_POST['update_voyage'])){
    // Récupérez les données du formulaire
    $voyage_id = $_POST['voyage_id'];
    $destination = $_POST['destination'];
    $price = $_POST['price'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    
    // Vérifiez s'il y a une nouvelle image
    if($_FILES['image']['name']){
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'img/' . $image;

        // Déplacez la nouvelle image vers le dossier des images
        move_uploaded_file($image_tmp_name, $image_folder);
    } else {
        // Si aucune nouvelle image n'est téléchargée, conservez l'ancienne
        $select_image = mysqli_query($conn, "SELECT image FROM `voyage` WHERE voyage_id='$voyage_id'") or die('query failed');
        $fetch_image = mysqli_fetch_assoc($select_image);
        $image = $fetch_image['image'];
    }

    // Effectuez la mise à jour des données du voyage dans la base de données
    $update_query = mysqli_query($conn, "UPDATE `voyage` SET destination='$destination', price='$price', description='$description', image='$image' WHERE voyage_id='$voyage_id'") or die('update query failed');

    // Redirigez l'utilisateur vers la page admin_voyage.php après la mise à jour
    header('Location: admin_voyage.php');
    exit();
}
?>
