<a href="index.php">HOME</a> <br>
<?php
$conn = mysqli_connect('localhost','root','','library');

if(!$conn)
{
    die('Could not connect: ' . mysqli_error());
}

$bookid = $_GET['bookid'];


mysqli_query($conn, "DELETE FROM books WHERE BookID = '$bookid'");

mysqli_close($conn);

header("Location: list.php");
?>