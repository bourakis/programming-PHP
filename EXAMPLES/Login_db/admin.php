<?php session_start(); 

// Ελέγχει αν έχει τιμή το session 
// δηλ. αν ΔΕΝ είναι empty τότε εμφάνισε την σελίδα.
if(isset($_SESSION['username']) && !empty($_SESSION['username'])): 
?>

<html>
<head>
	<title>Admin Page</title>
</head>
<body>

	<h1>Hello <?php echo $_SESSION['username']; ?></h1>
	
	<a href="index.php">Back to homepage</a> <br>
	<a href="logout.php">Logout</a>

</body>
</html>

<?php 

else: 
	header('Location: index.php'); // redirect πίσω στην index.php
endif 
?>