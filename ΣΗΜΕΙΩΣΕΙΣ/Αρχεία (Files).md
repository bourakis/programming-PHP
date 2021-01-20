# Αρχεία (Files)
Σε αυτό το κεφάλαιο θα δούμε συναρτήσεις σχετικά με τα αρχεία. Συγκεκριμένα θα δούμε πως:

* Ανοίγουμε ένα αρχείο
* Διαβάζουμε ένα αρχείο
* Γράφουμε σε ένα αρχείο
* Κλείνουμε ένα αρχείο

## Άνοιγμα και κλείσιμο αρχείων
Για να ανοίξουμε ένα αρχείο στην php χρησιμοποιούμε την συνάρτηση `fopen()`. Για να την χρησιμοποιήσουμε δηλώνουμε δύο παραμέτρους, στην πρώτη δηλώνουμε το όνονμα αρχείου που θέλουμε να ανοίξουμε και στην δεύτερη παράμετρο δηλώνουμε τον σκοπό (mode) που ανοίγουμε το αρχείο.

Τα modes είναι τα: **r, r+, w, w+, a, a+**

Το κάθε mode έχει έναν σκοπό. Συγκεκριμένα:

**r:** Μόνο για ανάγνωση. Τοποθετεί τον δείκτη στην αρχή του αρχείου.

**r+:** Ανοίγει το αρχείο για διάβασμα και εγγραφή. Τοποθετεί τον δείκτη στην αρχή του αρχείου.

**w:** Ανοίγει το αρχείο μόνο για γράψιμο. Τοποθετεί τον δείκτη στην αρχή του αρχείου. Σε περίπτωση που δεν υπάρχει το αρχείο, τότε το δημιουργεί.

**w+:** Ανοίγει το αρχείο για διάβασμα και γράψιμο. Τοποθετεί τον δείκτη στην αρχή του αρχείου. Σε περίπτωση που δεν υπάρχει το αρχείο, τότε το δημιουργεί.

**a:** Ανοίγει το αρχείο μόνο για γράψιμο. Τοποθετεί τον δείκτη στο τέλος του αρχείου. Σε περίπτωση που δεν υπάρχει το αρχείο, τότε το δημιουργεί.

**a+:** Ανοίγει το αρχείο για διάβασμα και γράψιμο. Τοποθετεί τον δείκτη στο τέλος του αρχείου. Σε περίπτωση που δεν υπάρχει το αρχείο, τότε το δημιουργεί.

Σε περίπτωση που αποτύχει να ανοίξει ένα αρχείο η `fopen()`, τότε επιστρέφει FALSE, διαφορετικά εαν το ανοίξει επιτυχώς, τότε επιστρέφει τον δείκτη του αρχείου για περεταίρω διάβασμα ή γράψιμο. 

Όταν ολοκληρώσουμε την επεξεργασία του αρχείου μας, τότε πρέπει να το κλείσουμε με την συνάρτηση `fclose()`. Σε περίπτωση που κλείσει επιτυχώς επιστρέφει TRUE, διαφορετικά επιστρέφει FALSE.

## Διάβασμα αρχείου

Once a file is opened using fopen() function it can be read with a function called fread(). This function requires two arguments. These must be the file pointer and the length of the file expressed in bytes.

The files length can be found using the filesize() function which takes the file name as its argument and returns the size of the file expressed in bytes.

So here are the steps required to read a file with PHP.

* Open a file using fopen() function.
* Get the file's length using filesize() function.
* Read the file's content using fread() function.
* Close the file with fclose() function.

The following example assigns the content of a text file to a variable then displays those contents on the web page.

```php
<html>

   <head>
      <title>Reading a file using PHP</title>
   </head>
   
   <body>
      
      <?php
         $filename = "tmp.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) 
         {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>
      
   </body>
</html>
```

## Γράψιμο αρχείου
A new file can be written or text can be appended to an existing file using the PHP fwrite() function. This function requires two arguments specifying a file pointer and the string of data that is to be written. Optionally a third integer argument can be included to specify the length of the data to write. If the third argument is included, writing would will stop after the specified length has been reached.

The following example creates a new text file then writes a short text heading inside it. After closing this file its existence is confirmed using file_exist() function which takes file name as an argument

```php 
<?php
   $filename = "/home/user/guest/newfile.txt";
   $file = fopen( $filename, "w" );
   
   if( $file == false ) 
   {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, "This is  a simple test\n" );
   fclose( $file );
?>

<html>
   
   <head>
      <title>Writing a file using PHP</title>
   </head>
   
   <body>
      
      <?php
         $filename = "newfile.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) 
         {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "$filetext" );
         echo("file name: $filename");
      ?>
      
   </body>
</html>
```

PHP filesystem functions: https://www.tutorialspoint.com/php/php_file_system_functions.htm
