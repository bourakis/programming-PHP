# Web Page Counter 

Να δημιουργηθεί php script με όνομα counter.php το οποίο θα διαβάζει την τιμή από το αρχείο counter.txt και θα την αυξάνει κατά μια μονάδα. Στην σελίδα θα εμφανίζεται το μήνυμα:

```
"Είστε ο 4 χρήστης που επισκέπτεται την υπέροχη σελίδα μας!"
```
Βήματα:

1. Δημιουργία αρχείου counter.txt και αποθήκευση της τιμής 0.
2. Άνοιγμα του αρχείου counter.txt και διάβασμα της τιμής
3. Αύξηση κατά μία μονάδα
4. Εγγραφή της τιμής στο counter.php
5. Εμφάνιση του μηνύματος στον web browser.

<!--
<html>
<body>

<?php
$filename = "counter.txt";
$file = fopen($filename, "r");

if($file == FALSE)
{
    die ("Error opening the file");
}

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );

fclose($file);

$filename = "counter.txt";
$file = fopen($filename, "w");

if($file == FALSE)
{
    die ("Error opening the file");
}

fwrite( $file, $filetext+1);
fclose($file);

echo ("Έχουν πραγματοποιηθεί " . $filetext . " επισκέψεις");

?>

</body>
</html>

-->
