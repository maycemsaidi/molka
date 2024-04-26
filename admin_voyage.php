<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <?php
    include 'connection.php';
   
     //adding voyage to db
     if(isset($_POST['add_voyage'])){

      /*$voyage_id=mysqli_real_escape_string($conn,$_POST['voyage_id']);*/
      $destination=mysqli_real_escape_string($conn,$_POST['destination']);
      $price=mysqli_real_escape_string($conn,$_POST['price']);
      $description=mysqli_real_escape_string($conn,$_POST['description']);
      $adresse=mysqli_real_escape_string($conn,$_POST['adresse']);
      $duration=mysqli_real_escape_string($conn,$_POST['duration']);
      $available = mysqli_real_escape_string($conn, $_POST['available']);
      $flight=mysqli_real_escape_string($conn,$_POST['flight']);
      $image=$_FILES['image']['name']; // Correct variable assignment
      $image_size=$_FILES['image']['size']; // Define $image_size to store the size of the uploaded image
      $image_tmp_name=$_FILES['image']['tmp_name'];
      $image_folder='img/' .$image;



      $select_destination=mysqli_query($conn,"SELECT destination FROM `voyage` WHERE destination= '$destination' ") or die ('query failer');
      if(mysqli_num_rows($select_destination)>0){
        $message[]='product already exist';
      }else{
        $insert_voyage=mysqli_query($conn,"INSERT INTO `voyage` (`destination`, `price`, `description`, `image`, `adresse`, `available`, `duration`, `flight`) 
        VALUES ('$destination', '$price', '$description', '$image', '$adresse', '$available', '$duration', '$flight')") or die ('query failed');
          if($insert_voyage){
            if($image_size>2000000){
                $message[]='image size is too large';
            }else{
              move_uploaded_file($image_tmp_name,$image_folder); 
              $message[]='voyage added successfully';
            }
        }

      }

     }

    //delete voyage from db
    if(isset($_GET['delete'])) {
        $delete_id = mysqli_real_escape_string($conn, $_GET['delete']);
       
    

    $select_delete_img = mysqli_query($conn, "SELECT image FROM `voyage` WHERE voyage_id='$delete_id'") or die('query failed');



        $fetch_delete_img=mysqli_fetch_assoc($select_delete_img);
        unlink('img/'.$fetch_delete_img['image']);

        mysqli_query($conn,"DELETE FROM `voyage` WHERE voyage_id='$delete_id'")or die('query failed');
      
        header('location:admin_voyage.php');
          
    }
    ?>
    


    
    
<style>
   .add-voyage{
    background-color:#3e5287;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    justify-content: center;  
    align-items: center; 
    margin: 0 auto; /* Center the container horizontally */
    margin-top: 50px; /* Adjust the top margin as needed */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 1); /* Add a subtle shadow */
}
 
.add-voyage .open{
    display: block;
}
.add-voyage-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    font-size: 80px; /* Adjust icon size */
    z-index: 999; /* Ensure the icon is above other content */
    cursor: pointer;
    color: #3e5287;
}
.radios {
    display: flex;
    gap: 50px;
}

.radios label {
    display: flex;
    align-items: center; /* Align label and radio button vertically */
}

.radios input[type="radio"] {
    margin-right: 5px;
}




</style>


</head>
<body>
    <?php include 'admin_header.php';
    ?>
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo ' 
            <div class="message">
            <span> ' .$message.' </span>
            <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
            </div>
            ';

        }
    }
    
    ?>
 <div class="line2"></div>
    <!-- Button to toggle the form -->
    
    <i id="toggleFormBtn" href="#form" class="bi bi-patch-plus-fill add-voyage-icon"></i>

    

    <!-- Adding voyage form -->
    <section id="addVoyageForm" class="add-voyage form container">
        <form method="POST" id="from" action="" enctype="multipart/form-data">
            <div class="input-field">
                
                <input type="text" name="destination" placeholder="Destination"required>
            </div>
            <div class="input-field">
                <input type="text" name="price" placeholder="Price"required>
            </div>
            <div class="input-field">
                <textarea name="description" placeholder="Description" required></textarea>
            </div>
            <div class="input-field">
                
                <textarea name="adresse" placeholder="Adresse" required></textarea>
            </div>
            
            <div class="input-field">
                <textarea name="duration"placeholder="Duration" required></textarea>
            </div>
            <div class="input-field">
               
                <textarea name="flight" placeholder="Flight" required></textarea>
            </div>
            <div class="input-field">
                <input type="file" name="image" accept="image/jpg, image/jpeg, image/webp " required>
            </div><br>

            <div class="input-group">
    <label><h6>Available</h6></label><br><br><br> <!-- Ajout d'un saut de ligne après le texte "Available" -->
    <div class="radios">
        <label><input type="radio" name="available" value="1" required> <h6>Yes</h6></label>
        <label><input type="radio" name="available" value="0" required> <h6>No</h6></label>
    </div>
</div><br>




            <input type="submit" name="add_voyage" value="Add Voyage" class="btn btn-dark">
        </form>
    </section><br><br><br><br>

<section class="show_voyage">
    <div class="container">
        <div class="row">
        <?php
        $select_voyage = mysqli_query($conn, "SELECT * FROM `voyage`") or die('Query failed');
        if (mysqli_num_rows($select_voyage) > 0) {
            while ($fetch_voyage = mysqli_fetch_assoc($select_voyage)) {
        ?>
               
                <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" >
                    <div style="height: 400px; overflow: hidden;">
                    <img src="img/<?php echo $fetch_voyage['image']; ?>" class="card-img-top" >
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $fetch_voyage['destination'];?></h5>
                        <p class="card-text"><?php echo $fetch_voyage['description'];?></p>
                   </div>
                   <ul class="list-group list-group-flush">
                         <li class="list-group-item">A partir de <?php echo $fetch_voyage['price']; ?></li>
                   </ul>
                   <div class="card-body">
                          <a href="admin_edit_voyage.php?edit=<?php echo $fetch_voyage['voyage_id'];?>" class="btn btn-dark">Edit</a>
                          <a href="admin_voyage.php?delete=<?php echo $fetch_voyage['voyage_id'];?>"  class="btn btn-dark" onclick="return confirm('want to delete this voyage');" >delete</a>
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
    </div>
    </div>
</section>
<script>
    // JavaScript to toggle the visibility of the form
    document.getElementById('toggleFormBtn').addEventListener('click', function() {
    var form = document.getElementById('addVoyageForm');
    form.classList.toggle('open');
});
    </script>

<script type ="text/javascript" src="script.js"></script>
</body>
</html>
