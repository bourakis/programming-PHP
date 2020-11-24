# Forms 

Μία απλή HTML φόρμα ορίζεται όπως το παρακάτω παράδειγμα με το tag `<form>`. 

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
Μέσα στην `<form>` χρησιμοποιώντας το tag `<input>` ορίζουμε την εισαγωγή δεδομένων στην φόρμα μας.
Στην `<input>` δηλώνουμε ορισμένες παραμέτρους. Κάθε `<input>` έχει διαφορετικό τύπο ο οποίος ορίζεται στην παράμετρο `type`. Στην type επιλέγουμε τον τύπο της εισαγωγής δεδομένων π.χ. αν θα είναι ένα απλό πεδίο, checkbox, radiobutton κλπ. 
