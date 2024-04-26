<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
     <style> 
     .navbar-brand img {
            max-width: 40px;
            margin-right: 10px;
        }
        /* Style du tableau */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
    color: #fff; /* Couleur du texte */
}
        th {
            background-color: #3e5287;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
            
        }

     
        /* Style des liens de modification et suppression */
        .action-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #3e5287;
        }

        .action-links a:hover {
            text-decoration: underline;
            .btn {
            display: inline-block;
            padding: 8px 12px;
            margin: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: 1px solid #007bff;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        }
    </style>
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
                            <a class="nav-link" href="admin_reservation.php">Reservations</a>
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

<br><br><br>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>CIN</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Prix</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
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

        $sql = "SELECT * FROM reservation_voyage";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['prenom'] . "</td>";
                echo "<td>" . $row['cin'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['tel'] . "</td>";
                echo "<td>" . $row['prix'] . "</td>";
                echo "<td>" . $row['note'] . "</td>";
                echo "<td><a href='dashboar_modifier.php?cin=" . $row['cin'] . " ' ' class='btn' style='background-color: #C5D8E1; border-color: ;'>Modifier</a> 
                | <a href='dashboar_supprimer.php?cin=" . $row['cin'] . "' ' class='btn' style='background-color: #C5D8E1; border-color: ;'>Supprimer</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Aucune réservation trouvée.";
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
