<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Set session variables
    $_SESSION["favcolor"] = "blue";
    $_SESSION["favanimal"] = "cat";

    echo "Session variables are set.";
?>
