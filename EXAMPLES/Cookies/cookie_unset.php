<?php

if(isset($_COOKIE['visited']))
{
  unset($_COOKIE['visited']);
  setcookie('visited', 'true', time()-3600, '/');
  echo "unset!!!!";
}

?>
