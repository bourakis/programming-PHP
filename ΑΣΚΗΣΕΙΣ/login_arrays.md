# Login Form με Arrays

Ας κάνουμε τον κώδικα της προηγούμενης εργασίας εξυπνότερο! Αντί να έχουμε μόνο έναν user, σε αυτή την εργασία θα έχουμε πολλούς χρήστες.

Για να επιτευχθεί αυτό, θα χρησιμοποιήσουμε arrays, και οχι απλώς arrays, αλλά associative arrays! Συγκεκριμένα θα δημιουργήσουμε ένα array με όνομα `$accounts` και θα δηλώσουμε για username & password τα `accounts['username']` και `$accounts['password']` αντίστοιχα.

Σε αυτά τα arrays θα δηλώσετε 3 λογαριασμούς:

    username: admin, password: admin123
    username: bill,  password: bill123
    username: steve, password: steve123

Κάθε φορά που θα δηλώνεται ένα username & password στην φόρμα, θα γίνεται έλεγχος σε όλους τους λογαριασμούς για να γίνει το authentication. Σε περίπτωση που ισχύει το username & password που δήλωσε ο χρήστης, τότε θα φορτώνει η σελίδα του admin (admin.php)

**Θα χρειαστείτε:** HTML forms, POST, isset(), header(), session_start(), session_destroy(), if statements, arrays, foreach, και υπομονή :smile:


Καλή διασκέδαση!  

<!--

-------------------
login.php
-------------------

<html>
<head>
    <title>Login page v1</title>
</head>
<body>

<div>
Login to your account
<br><br>
<form action="page.php" method="POST">
    Username: <input type="text" name="username"> <br>
    Password: <input type="text" name="password"> <br>
    <br>
    <input type="submit" value="Σύνδεση">
</form>
</div>

</body>
</html>

-------------------
page.php
-------------------

<?php
session_start();

$_SESSION['auth'] = FALSE;
?>

<html>
<head>
    <title>Login page v1</title>
</head>
<body>

    <?php

    // Δημιουργούμε τον πίνακα με τους λογαριασμούς.
    $accounts = array(
        array('username' => 'bill', 'password' => '123'),
        array('username' => 'steve', 'password' => '456'),
        array('username' => 'linus', 'password' => '789')
    );


    // Ελέγχουμε εαν οι POST είναι ενεργοποιημένες δηλ. αν
    // η φόρμα έχει στείλει δεδομένα στην σελίδα μας.
    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
    }

    // Έλεγχος αν αντιστοιχούν τα usernames & passwords
    // με κάποια απο τις εγγραφές του πίνακα $accounts.
    foreach($accounts as $acc)
    {
        if($acc['username'] == $_SESSION['username'] && 
           $acc['password'] == $_SESSION['password']) {

                $_SESSION['auth'] = TRUE;  // Flag αν ο χρήστης υπάρχει.
        }
       
    }

    echo "<center>";
    if ($_SESSION['auth'] == TRUE)
    {
        echo "Hello $_SESSION[username]!";
        echo "<br><br>";
        echo '<a href="logout.php">Logout</a>';
    }
    else 
    {
        echo "Wrong username or password!";
        echo "<br><br>";
        echo '<a href="login.php">Please try again</a>';
    }
    echo "</center>"; 
        
    ?>

</body>
</html>


-------------------
logout.php
-------------------

<?php
session_start();
session_destroy();
?>

<html>
<head>
    <title>Login page v1</title>
</head>
<body>

	<center>
	<h1>Αποσυνδεθήκατε!</h1>
	<br><br>
	<a href="login.php">Επιστροφή στην αρχική</a>
	</center>

</body>
</html>

-->
