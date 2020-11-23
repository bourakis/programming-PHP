# Forms 

Μία απλή HTML φόρμα ορίζεται όπως το παρακάτω παράδειγμα με το tag `<form>`. Μέσα στην form χρησιμοποιώντας το tag <input> ορίζουμε την εισαγωγή δεδομένων στην φόρμα μας.

```html
<html>
<body>

<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html> 
``
