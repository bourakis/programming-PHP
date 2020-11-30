<?php
// Δημιουργία session
session_start();

if(!isset($_SESSION['un']))
{
  header('Location: login.html');
}
?>

<!DOCTYPE html>
<html>
<body>

  <?php
    echo "ONOMA XPHSTH:" . $_SESSION["un"];
    echo "EMAIL:" . $_SESSION["email"];
  ?>
  
  <?php
    session_destroy();
  ?>
  
</body>
</html>
