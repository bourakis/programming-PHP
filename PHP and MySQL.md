# Σύνδεση της php με τον MySQL Server
Στο παρακάτω παράδειγμα βλέπουμε πώς μπορούμε να συνδεθούμε στον τοπικό mysql server που τρέχει στο μηχάνημά μας.

```php {.line-numbers}
<?php
$servername = "localhost";
$username = "username";
$password = "password";


// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password);


// Έλεγχος σύνδεσης
if ($conn) 
{
  echo "Connected successfully";
}
else
{
  echo "Connection failed: " . mysqli_connect_error();
}
?>
```

Στο παραπάνω παράδειγμα, θέτουμε στις μεταβλητές  `$servername`, `$username`, `$password` με τις αντίστοιχες τιμές ώστε 
να τις χρησιμοποιήσουμε στον κώδικά μας εντός της `mysqli_connect()`.Χρησιμοποιώντας την function της php `mysqli_connect` και δηλώνοντας τα στοιχεία σύνδεσης μέσω των μεταβλητών `$servername`, `$username`, `$password`, συνδεόμαστε στην mysql. Το αποτέλεσμα της σύνδεσης αποθηκεύεται στην μεταβλητή $conn που έχουμε ορίσει.

Συγκεκριμένα, η `mysqli_connect()` επιχειρεί να συνδεθεί στον mysql server. Εαν είναι επιτυχημένη η σύνδεση, 
τότε επιστρέφει ένα object στην `$conn` με τα στοιχεία της σύνδεσης. Διαφορετικά, αν αποτύχει να συνδεθεί, τότε επιστρέφει 
την τιμή `FALSE`.
