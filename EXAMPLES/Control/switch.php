<html>
<body>

<?php
  $temperature = 20;

  switch($temperature)
  {
    case ($temperature < 15):
      echo "Πρέπει να πάρεις μπουφάν.";
    break;

    case ($temperature > 15 && $temperature < 22):
      echo "Πρέπει να πάρεις ζακέτα.";
    break;

    case ($temperature >= 22):
      echo "Δεν χρειάζεται να πάρεις μπουφάν.";
    break;

    default:
      echo "Δεν εισήχθηκε θερμοκρασία.";
  }

?>

</body>
</html>
