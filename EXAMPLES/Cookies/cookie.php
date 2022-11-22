<?php
    $expire = time() + 60 * 60 *24 *7;
    setcookie('visited', 'true', $expire, '/');

    if ( isset($_COOKIE[ 'visited'])) 
    {
       echo 'Welcome back!';
    }
    else 
    {
      echo 'Hello , Stranger';
    }

 ?>
