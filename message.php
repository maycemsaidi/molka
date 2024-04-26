<?php

header('Access-Control-Allow-Origin: *');
include "functions.php";




$nomc=$_POST['nomc'];
$email=$_POST['email'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];

ajout_msg($nomc,$email,$sujet,$message);



?>
