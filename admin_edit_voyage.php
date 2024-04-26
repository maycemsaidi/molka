

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Voyage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  
    <style>
        .add-voyage {
            background-color: #3e5287;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto; /* Center the container horizontally */
            margin-top: 50px; /* Adjust the top margin as needed */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 1); /* Add a subtle shadow */
        }

        .add-voyage form {
            color: white; /* Change text color to white */
        }

        .add-voyage .input-field {
            margin-bottom: 20px; /* Add space between input fields */
        }

        .add-voyage input[type="text"],
        .add-voyage textarea,
        .add-voyage input[type="file"] {
            background-color: transparent; /* Make input fields transparent */
            border: none; /* Remove borders */
            border-bottom: 1px solid white; /* Add bottom border */
            color: white; /* Change text color to white */
            width: 100%; /* Full width */
            padding: 5px; /* Add padding */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        .add-voyage input[type="submit"],
        .add-voyage input[type="reset"] {
            background-color: transparent; /* Make buttons transparent */
            border: 1px solid white; /* Add border */
            color: white; /* Change text color to white */
            padding: 10px 20px; /* Add padding */
            cursor: pointer; /* Add pointer cursor */
            transition: background-color 0.3s, color 0.3s; /* Add transition */
            margin-right: 10px; /* Add margin between buttons */
        }

        .add-voyage input[type="submit"]:hover,
        .add-voyage input[type="reset"]:hover {
            background-color: white; /* Change background color on hover */
            color: #3e5287; /* Change text color on hover */
        }
    </style>




</head>
<body>
<section class="add-voyage">
    <div class="container">
        <h2>Edit Voyage</h2>
        <form method="POST" action="process_edit_voyage.php" enctype="multipart/form-data">
            <?php
            // Assurez-vous que le fichier de connexion est inclus
            include 'connection.php';

            // Vérifiez si l'identifiant du voyage à éditer est passé dans l'URL
            if(isset($_GET['edit'])){
                // Récupérer l'identifiant du voyage à éditer depuis l'URL
                $edit_id = $_GET['edit'];

                // Récupérer les données du voyage à éditer depuis la base de données
                $edit_query = mysqli_query($conn, "SELECT * FROM `voyage` WHERE voyage_id='$edit_id'") or die ('query failed');
                if(mysqli_num_rows($edit_query) > 0){
                    $fetch_edit = mysqli_fetch_assoc($edit_query);
                    // Récupérer les données du voyage à afficher dans le formulaire
                    $destination = $fetch_edit['destination'];
                    $price = $fetch_edit['price'];
                    $description = $fetch_edit['description'];
                    
                    
                    

                   
                }
            }
            ?>


            <input type="hidden" name="voyage_id" value="<?php echo $edit_id; ?>">
            <div class="input-field">
                <label>Destination</label>
                <input type="text" name="destination" value="<?php echo isset($destination) ? $destination : ''; ?>">
            </div>
            <div class="input-field">
                <label>Price</label>
                <input type="text" name="price" min="0" value="<?php echo isset($price) ? $price : ''; ?>">
            </div>
            <div class="input-field">
                <label>Description</label>
                <textarea name="description"><?php echo isset($description) ? $description : ''; ?></textarea>
            </div>
            <div class="input-field">
                <label>Image</label>
                <input type="file" name="image" accept="image/jpg, image/jpeg, image/webp" >
            </div>
            <input type="submit" name="update_voyage" value="Confirm" class="btn btn-outline-success">
            <input type="reset" value="Cancel" class="btn btn-outline-danger">

        </form>
       
   
 
</section>

</body>
</html>









