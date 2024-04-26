<?php
function ajout_res($nom , $prenom ,  $email , $tel, $date1, $date2,$note ) {
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "agencedevoyage_db";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO reservation_voyage VALUES('$nom' , '$prenom' , '$email' , '$tel' , '$date1', '$date2', '$note' )";

	if (mysqli_query($conn, $sql)) {
		echo "done";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
function ajout_msg($nomc , $email ,$sujet, $message ) {
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "agencedevoyage_db";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO commentaire VALUES('$nomc' ,'$email' ,'$sujet', '$message' )";

	if (mysqli_query($conn, $sql)) {
		echo "done";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


}




?>