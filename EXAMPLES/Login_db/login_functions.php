<?php

function auth($username, $password, $conn)
{	
	$sql = "SELECT username, password FROM accounts";
	$result = mysqli_query($conn, $sql);

	$uname = "";
	$pass  = "";

	// Εξαγωγή δεδομένων για κάθε εγγραφή
	while($row = mysqli_fetch_assoc($result))
	{
		if($username == $row['username'])
		{
			$uname = $row['username'];
			$pass  = $row['password'];
		}
	}

	// Έλεγχος εαν το username και το password είναι
	// σωστά.
	if($uname == $username && $pass == $password)
	{
		$ret = 1;
	}
	else
	{
		$ret = 0;
	}



	return $ret;
}

?>