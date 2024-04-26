<?php
// Establish database connection (replace 'localhost', 'username', 'password', and 'database_name' with your actual database credentials)
include 'connection.php';
// Set parameters
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$arrivalDate = $_POST['arrivalDate'];
$departureDate = $_POST['departureDate'];

// Prepare and bind the insert statement
$stmt = $conn->prepare("INSERT INTO user (name, email, phone, `depart-date`, `arrival-date`) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $fullName, $email, $phone, $arrivalDate, $departureDate);

// Execute
$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();

// Redirect to confirmation page
header("Location: reservation.html");
exit();
?>
