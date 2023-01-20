<?php

class Db
{
	protected $conn;

	function __construct()
	{
		require 'config.php';

		$this->new_conn($config);
	}


	function new_conn($config)
	{
		$host     = $config['host'];
		$username = $config['username'];
		$password = $config['password'];
		$db       = $config['db'];

		$this->conn = mysqli_connect($host, $username, $password, $db);

		if(!$this->conn)
		{
			die('Could not connect: ' . mysqli_error());
		}
		else
		{
			return $this->conn;
		}
	}


	function get_conn()   // just in cases (currently never used!)
	{
		return $this->conn;
	}


	function get_book_details($id)
	{
		$result = mysqli_query($this->conn, "SELECT * FROM books WHERE BookID  = '$id'");
		$row    = mysqli_fetch_array($result);

		if (!$result) 
		{
		    die("Error: Data not found..");
		}

		return $row;
	}


	function get_books_list()
	{
		return mysqli_query($this->conn, "SELECT * FROM books");
	}


	function insert($title, $author, $name, $copy)
	{
	    mysqli_query($this->conn, "INSERT INTO `books`(Title, Author, PublisherName, CopyrightYear) 
	                               VALUES ('$title', '$author', '$name', '$copy')"); 
	}


	function delete($id)
	{
		// sending query
		mysqli_query($this->conn, "DELETE FROM books WHERE BookID = '$id'")
		             or die(mysql_error());  	

		return TRUE;
	}


	function update($id, $title, $author, $publisher, $year)
	{
	    mysqli_query($this->conn, "UPDATE books SET Title ='$title', 
	                                                Author ='$author',
	                                                PublisherName ='$publisher',
	                                                CopyrightYear ='$year' 
	                         WHERE BookID = '$id'")
	    or die(mysql_error()); 

	    return TRUE;
	}


	function close()
	{
		mysqli_close($this->conn);
	}
}


?>