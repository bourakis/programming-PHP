# Σύνδεση της PHP με τον MySQL Server
> Σημείωση: Για να συνεχίσετε σε αυτό το κεφάλαιο, θα πρέπει πρώτα να έχετε διαβάσει τις σημειώσεις "Εισαγωγή στην MySQL". 

Στο παρακάτω παράδειγμα βλέπουμε πώς μπορούμε να συνδεθούμε στον τοπικό mysql server που τρέχει στο μηχάνημά μας. Ανοίξτε τον αγαπημένο σας editor π.χ. notepad++ και ξεκινήστε να γράφετε κώδικα :) 

*ΠΡΟΣΟΧΗ:*
Οι κώδικες που γράφουμε στην php για να τους εκτελέσουμε πρέπει να τους αποθηκεύσουμε σε συγκεκριμένο directory για να τους "δει" ο web server και να τους εκτελέσει. Στον XAMPP εξ ορισμού αυτό το directory βρίσκεται στο `C:\XAMPP\htdocs\`. Αν αποθηκεύσουμε εκεί το αρχείο του παρακάτω κώδικα `mysql_connect.php` στο directory `C:\XAMPP\htdocs\`, για να το εκτελέσουμε απο τον web browser πληκτρολογούμε την διεύθυνση: *http://localhost/mysql_connect.php*

`Όνομα αρχείου: mysql_connect.php`
```php 
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

Στη συνέχεια, ελέγχουμε αν η σύνδεσή μας στην mysql είναι επιτυχής μέσω της $conn. Εαν είναι επιτυχής, εμφανίζεται το μήνυμα “Connected successfully”, διαφορετικά εμφανίζεται το μήνυμα “Connection failed: ”. Η function `mysqli_connect_error()` επιστρέφει το μήνυμα λάθους που επέστρεψε η mysql σε περίπτωση που η απόπειρα σύνδεσης ήταν αποτυχημένη.

## Δημιουργία της Βάσης Δεδομένων
Στις σημειώσεις "Εισαγωγή στην MySQL", περιγράφονται αναλυτικά οι τρόποι δημιουργίας Βάσεων Δεδομένων και πινάκων είτε χρησιμοποιώντας το phpMyAdmin, είτε απευθείας την κονσόλα του MySQL Server. Ενδεικτικά ο κώδικας δημιουργίας της Βάσης Δεδομένων μας School και του πίνακα students πραγματοποιείται με το παρακάτω sql query.


```mysql
-- Δημιουργία Βάσης Δεδομένων
CREATE DATABASE School;

-- Δημιουργία πίνακα
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

```


## Εισάγοντας δεδομένα στην Βάση Δεδομένων
Εφόσον δημιουργήσαμε την βάση δεδομένων με όνομα **School** και το table **students** με τα πεδία `id`, `firstname` και `lastname`, θα δούμε το sql query που εισάγουμε δεδομένα στον πίνακα χρησιμοποιώντας την `INSERT`. Συγκεκριμένα, θα εισάγουμε την εγγραφή Peter Parker στα πεδία `firstname` και `lastname` αντίστοιχα. 

```mysql
INSERT INTO students (firstname, lastname) 
VALUES ('Peter', 'Parker');
```

Σε περίπτωση όμως που θέλουμε να εισάγουμε πολλαπλά δεδομένα με ένα query, τότε η `INSERT` μπορεί να συνταχθεί και έτσι:

```mysql
INSERT INTO students (firstname, lastname) 
VALUES ('John', 'Rambo'),
       ('Clark', 'Kent'),
       ('John', 'Carter'),
       ('Harry', 'Potter');
```

Στην PHP, η εισαγωγή μιας εγγραφής πραγματοποιείται με τον παρακάτω κώδικα:

```php
<?php
/* Προσπάθεια σύνδεσης στον MySQL Server. Υποθέτουμε οτι
Τα default settings είναι (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "School");
 
// Έλεγχος σύνδεσης
if($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Το sql query που θα εισάγει την νέα εγγραφή.
$sql = "INSERT INTO students (firstname, lastname) 
        VALUES ('Peter', 'Parker')";

// Εκτέλεση του sql query. 
if(mysqli_query($conn, $sql))
{
    echo "Records inserted successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Κλείσιμο σύνδεσης 
mysqli_close($conn);
?>
```

## Θέτοντας ένα SQL ερώτημα με την SELECT

Στο προηγούμενο παράδειγμα εισάγαμε κάποια δεδομένα στην βάση μας. Στο παρακάτω παράδειγμα θα θέσουμε ένα sql ερώτημα με σκοπό να εμφανίσουμε τα δεδομένα που έχουμε εισάγει στην βάση μας. 

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";


// Δημιουργία νέας σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Έλεγχος σύνδεσης
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, firstname, lastname FROM students";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) 
{
  // Εξαγωγή δεδομένων για κάθε εγγραφή
  while($row = mysqli_fetch_assoc($result))   
  {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} 
else 
{
  echo "0 results";
}


mysqli_close($conn);
?>
```

## Εισαγωγή δεδομένων απο μια HTML form
Στο προηγούμενο παράδειγμα είδαμε πως εισάγουμε δεδομένα στην βάση μας απευθείας απο την php χρησιμοποιώντας την `INSERT`. Σε αυτό το παράδειγμα, θα δούμε πώς μπορούμε να εισάγουμε δεδομένα από μια φόρμα HTML, δηλαδή μέσα απο την ιστοσελίδα μας.

### Βήμα 1
Χρησιμοποιώντας HTML δημιουργούμε την ιστοσελίδα και την φόρμα που θα δηλωθούν τα δεδομένα.

`Όνομα αρχείου: form.php`
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Record Form</title>
</head>
<body>
  <form action="insert.php" method="post">
    
    <p>
    <label for="firstName">First Name:</label>
    <input type="text" name="first_name" id="firstName">
    </p>
    
    <p>
    <label for="lastName">Last Name:</label>
    <input type="text" name="last_name" id="lastName">
    </p>

    <input type="submit" value="Submit">

  </form>
</body>
</html>
```

Δηλώνουμε την φόρμα μας χρησιμοποιώντας την ετικέτα `<form>`. Στην `action` δηλώνουμε  το αρχείο προορισμού που θα αποσταλλούν τα δεδομένα της φόρμας μας. Στην συγκεκριμένη περίπτωση, μόλις ο χρήστης πατήσει το κουμπί `submit` της φόρμας, τότε τα δεδομένα θα σταλούν στην **insert.php**. Στην `method` δηλώνουμε τον τρόπο που θα αποσταλούν τα δεδομένα είτε με την `GET` είτε με την `POST`.

Χρησιμοποιώντας την ετικέτα `<input>` δημιουργούμε τα πεδία της φόρμας που θα εισαχθούν τα δεδομένα. Στο `type` δηλώνουμε τον τύπο της `input` που στην συγκεκριμένη περίπτωση είναι `text`. Θα μπορούσε να είναι `checkbox`, `radio`, `button` κλπ. Η παράμετρος `name` είναι πολύ σημαντική καθώς κατά την αποστολή των δεδομένων της φόρμας θα τα λάβει η php δηλώνοντας την `name`. Θα δούμε στο βήμα 2 ακριβώς πώς γίνεται.


### Βήμα 2
Ο παρακάτω κώδικας είναι η insert.php. Η insert.php  λαμβάνει τα δεδομένα από την φόρμα της HTML (form.php), συνδέεται στην βάση δεδομένων και αποθηκεύει τα δεδομένα της φόρμας.

`Όνομα αρχείου: insert.php`
```php
<?php
/* Δημιουργία νέας σύνδεσης */
$conn = mysqli_connect("localhost", "root", "", "School");

// Έλεγχος σύνδεσης
if($conn === false)
{
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Έλεγχος εισόδου δεδομένων για ασφάλεια.
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name  = mysqli_real_escape_string($link, $_REQUEST['last_name']);


// Δήλωση sql query για εισαγωγή δεδομένων.
$sql = "INSERT INTO students (firstname, lastname) 
        VALUES ('$first_name', '$last_name')";

// Έλεγχος εαν το query εκτελέσθηκε επιτυχώς.
if(mysqli_query($conn, $sql))
{
  echo "Records added successfully.";
} 
else
{
  echo "ERROR: Could not able to execute $sql. ";
  mysqli_error($conn);
}

// Κλείσιμο σύνδεσης
mysqli_close($conn);
?>
```

Η εντολή `mysqli_real_escape_string()` χρησιμοποιείται για να ελέγχει και να απορρίπτει ειδικούς χαρακτήρες που ενδέχεται να δημιουργήσουν πρόβλημα ασφάλειας στο πρόγραμμά μας τύπου sql injection.  

Την `$_REQUEST` την χρησιμοποιούμε για να λάβουμε τα δεδομένα από την φόρμα. Στην συγκεκριμένη περίπτωση για να λάβουμε το περιεχόμενο του πεδίου της φόρμας μας με όνομα `first_name`, δηλώνουμε στην PHP `$_REQUEST['first_name']` και αποθηκεύουμε το περιεχόμενο στην μεταβλητή `$first_name`.

## Πηγές
https://www.tutorialrepublic.com/php-tutorial
