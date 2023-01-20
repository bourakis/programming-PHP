<?php 

require 'Db.class.php'; 
require 'Form.class.php';

$db = new Db();


if (isset($_POST['submit']))
{      
    $title      = $_POST['title'];
    $author     = $_POST['author'];                 
    $publisher  = $_POST['publisher'];
    $year       = $_POST['copy'];

    $db->insert("$title", "$author", "$publisher", "$year");
}


if(isset($_GET['del']))
{
    $book_id = $_GET['BookID'];
    $db->delete($book_id);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>phpLibrary OOP</title>
</head>

<body>

<h1>phpLibrary v2.0 - OOP</h1>

<?php

$form = new Form();

$form->create('POST', 'index.php');
$form->text('Title:','title', '');
$form->text('Author:','author', '');
$form->text('Publisher:','publisher', '');
$form->text('Copyright year:','copy', '');
$form->button('ΑΠΟΘΗΚΕΥΣΗ');
$form->close();

?>

<br /><br />

<table border="1">

    <?php

    $result = $db->get_books_list();

    while($row = mysqli_fetch_array($result))
    {
        $id = $row['BookID'];	

        echo '<tr align=\'center\'>';	
        echo '<td>' . $row['BookID'] . '</td>';
        echo '<td>' . $row['Title'] . '</td>';
        echo '<td>' . $row['Author'] . '</td>';
        echo '<td>' . $row['PublisherName'] . '</td>';
        echo '<td>' . $row['CopyrightYear'] . '</td>';	

        echo "<td> <a href ='view.php?BookID=$id'>Edit</a>";
        echo "<td> <a href ='index.php?BookID=$id&del=1'><center>Delete</center></a>";
        echo "</tr>";
    }

    ?>
</table>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php $db->close(); ?>