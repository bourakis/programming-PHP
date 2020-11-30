<?php
// Δημιουργία session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

  <?php
  if ($_POST['un']==="bourakis" && $_POST['pw']==="1234")
  {
    $_SESSION["un"] = "bourakis";
    $_SESSION["email"] = "bourakis@gmail.com";
    
    echo "Check credentials <a href='sessionvars.php'>here</a>";
  }
  else 
  {
    echo "wrong credentials! Click <a href='login.html'>HERE</a> to retry";    
  }

  ?>

</body>
</html>
