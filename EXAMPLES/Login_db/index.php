<?php 
session_start();

include 'db.php'; 
include 'login_functions.php';
?>

<html>
<head>
	<title>Login Page</title>
</head>
<body>

<h1>Welcome to my homepage!</h1>

<?php

// Αρχικοποιούμε τις $username & $password.
// Αν δεν το κάνουμε αυτό, επειδή παρακάτω
// χρησιμοποιούμε αυτές τις μεταβλητές, θα
// μας επιστρέφει error η php.
 
if(isset($_POST['username']) && $_POST['username'] != "")
{
	$username = $_POST['username']; 
	$password = $_POST['password'];


	// Εδώ γίνεται το authentication.
	if(auth($username, $password, $conn))
	{
		$_SESSION['username'] = $username;
		
		header('Location: admin.php');  //redirect στο admin.php
	}
}

if(isset($_SESSION['username']))
{
	echo 'You are connected as: ' . $_SESSION['username'];
}
else
{
	include "form.php";
}

?>

<br><br><br>

<a href="admin.php">Admin Page</a> <br>
<a href="logout.php">Logout</a> <br>

</body>
</html>