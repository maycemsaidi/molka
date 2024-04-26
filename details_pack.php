<?php
header('Access-Control-Allow-Origin: *');
include "functions.php";


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$cin= $_POST['cin'];
$email= $_POST['email'];
$tel= $_POST['tel'];
$date1= $_POST['date1'];
$date2= $_POST['date2'];
$note= $_POST['note'];
ajout_res($nom,$prenom,$cin,$email,$tel,$date1,$date2,$note);



?>