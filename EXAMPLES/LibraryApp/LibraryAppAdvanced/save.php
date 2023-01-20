<?php
include 'db.php';

$title = $_GET['title'];
$author = $_GET['author'];
$publisher = $_GET['publisher'];
$copy = $_GET['copy'];

mysqli_query($conn, "INSERT INTO books(Title, Author, PublisherName, CopyrightYear) 
                     VALUES ('$title','$author','$publisher','$copy')");

mysqli_close($conn);

header("Location: list.php");
?>