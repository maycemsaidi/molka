<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    <!--box icon link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        .navbar-brand img {
            max-width: 40px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="main ">
<header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
           <h2>WeTravel  <span class="ag">Agency</span></h2>
            </div></nav></header>

        <video autoplay loop muted plays-inline class="video">
            <source src="img/arriereplan.mp4" type="video/mp4" >
        </video>
        
    <section class="form-container">
        <form name="form" action="login.php" onsubmit="return invalid()"  method="post">
            <h1>login now </h1>
            
<?php

include 'connection.php';

if(isset($_POST['submit-btn'])) { 
    // Sanitize and escape user inputs
    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = mysqli_real_escape_string($conn, filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    // Query to fetch user details based on email
    $select_user = mysqli_query($conn, "SELECT `email`, `password` FROM `admin` WHERE email='$email'") or die('Query failed');

    if(mysqli_num_rows($select_user) > 0){
        $row = mysqli_fetch_assoc($select_user);
        if ($password == $row['password']) {
            // Authentication successful
            session_start();
            $_SESSION['email'] = $row['email'];
            header('location: admin_pannel.php');
            exit(); 
        } else {
            // Incorrect password
            echo "<div class='incorrect'>Mot de passe incorrect.</div>";
        }
    } else {
        // User not found
        echo "<div class='incorrect'>Utilisateur non trouvé.</div>";
    }
} 
?>

            <div class="input-field">
            <label name="email"></label>  
            <input type="email" name="email" placeholder="enter your email" required>
            </div>

            <div class="input-field">
            <label name="password"> </label>
            <input type="password" name="password" placeholder="enter your password" required>
            </div>

            <div class="input-field">
            <button type="submit" name="submit-btn" class="btn btn-secondary btn-lg">login</button>
            </div>
          
    </form>

</body>
</html>