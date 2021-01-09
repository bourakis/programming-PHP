# Εισαγωγή δεδομένων από HTML φόρμα σε Βάση Δεδομένων
Για αυτή την εβδομάδα θα δημιουργήσετε μια φόρμα εισαγωγής δεδομένων στην database.  Θα δουλέψετε στην βάση δεδομένων "School" που δημιουργήσατε από τις σημειώσεις με τίτλο "Σύνδεση της PHP με τον MySQL Server". Θα δημιουργήσετε 2 αρχεία (form.php & save.php).

Στο form.php θα κατασκευάσετε μία φόρμα που θα έχει 2 πεδία (firstname & lastname).
Όταν κάνετε κλικ στο κουμπί submit, τα δεδομένα με την GET θα μεταφέρονται στην σελίδα save.php και θα αποθηκεύσετε αυτά τα 2 πεδία (firstname & lastname) στην Βάση Δεδομένων School στον πίνακα students.

Σημείωση: Θα πρέπει να έχετε δημιουργήσει την Βάση Δεδομένων σας με όνομα School και πίνακα students. Στον πίνακα students θα έχετε δημιουργήσει 2 πεδία με όνομα: fname και lname.

Καλή τύχη! 👽

<!--
-----------------
form.php
-----------------

<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Form</title>
</head>
<body>
<p>Insert Data:</p>
<form action="save.php" method="GET">									
Firstname: <input type="text" name="fname" placeholder="First Name"> <br>
Lastname: <input type="text" name="lname" placeholder="Last Name"> <br>
<input type="submit">
</form>

</body>
</html>

-----------------
save.php
-----------------
<!DOCTYPE html>
<html>
<head>
	<title>Save Data</title>
</head>
<body>

<?php
	$servername = "localhost";	//database login credentials
	$username = "root";
	$password = "";
	$dbname = "school";

	$firstname = $_GET['fname'];    
	$lastname  = $_GET['lname'];


	$conn = mysqli_connect($servername, $username, $password, $dbname);	//connection token

	if ($conn)  //checking for connection status	
	{
	  echo "Connected successfully";
	}
	else
	{
	  die("ERROR: Could not connect. " . mysqli_connect_error());
	}


	echo "<br>";

	$query = "INSERT INTO students(fname,lname) VALUES ('$firstname', '$lastname')";  //sql query 

	if(mysqli_query($conn, $query))	 //checking if the data was stored successfully
	{
	    echo "Records inserted successfully.";
	} 
	else
	{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}

	mysqli_close($conn);	
?>
</body>
</html>
-->
