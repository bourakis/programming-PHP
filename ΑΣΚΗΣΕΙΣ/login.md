# Login page
Να δημιουργηθεί μια login page (login.php) στην οποία θα υπάρχει μια φόρμα με τα πεδία username και password. Ο χρήστης θα δηλώνει τα στοιχεία και η επαλήθευση θα γίνεται στην σελίδα page.php. Εαν ο χρήστης είναι ο admin με password: 1234 τότε θα του εμφανίζει στην page.php το μήνυμα "Hello Admin!" διαφορετικά θα εμφανίζεται το μήνυμα "Please login!". Για να λειτουργήσει σωστά θα πρέπει να χρησιμοποιήσετε cookies ή sessions. Επίσης, να υπάρχει ένα link για logout από την σελίδα.

**Hints:** Μπορείτε να χρησιμοποιήσετε sessions (`session_start()`, `session_destroy()`)

Καλή επιτυχία! 

<!--
-----------------------------------
login.php
-----------------------------------
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

-----------------------------------
page.php
-----------------------------------
<?php
session_start();
?>

<html>
<head>
    <title>Login page v1</title>
</head>
<body>

    <?php

    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
    }

    echo "<center>";
    if (($_SESSION['username'] == "admin") && ($_SESSION['password'] == "1234"))
    {
        echo "Hello admin!";
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

-----------------------------------
logout.php
-----------------------------------
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
