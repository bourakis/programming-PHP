<a href="index.php">HOME</a>
<?php
include 'db.php';

$bookid = $_GET['bookid'];


mysqli_query($conn, "DELETE FROM books WHERE BookID = '$bookid'");

mysqli_close($conn);

header("Location: list.php");
?>