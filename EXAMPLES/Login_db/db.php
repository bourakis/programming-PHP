<?php
$conn = mysqli_connect("localhost", "root", "", "shop");
 
// Έλεγχος σύνδεσης
if($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>