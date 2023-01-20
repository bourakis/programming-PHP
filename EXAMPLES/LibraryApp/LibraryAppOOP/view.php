<?php

require("Db.class.php");
require("Form.class.php");

$id = $_REQUEST['BookID'];



$db = new Db();

$row = $db->get_book_details($id);

$title = $row['Title'];
$author = $row['Author'];					
$publisher = $row['PublisherName'];
$year = $row['CopyrightYear'];


if(isset($_POST['submit']))
{	
    $title_save = $_POST['title'];
    $author_save = $_POST['author'];
    $publisher_save = $_POST['publisher'];
    $copy_save = $_POST['year'];

    $db->update($id, $title_save, $author_save, $publisher_save, $copy_save);

    header("Location: index.php");			
}

$db->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>phpLibrary</title>
</head>

<body>

<?php

$form = new Form();

$form->create('POST', 'view.php');
$form->text('ID:', 'BookID', $id);
$form->text('Title:','title', $title);
$form->text('Author:','author', $author);
$form->text('Publisher:','publisher', $publisher);
$form->text('Copyright year:','year', $year);
$form->button('ΑΠΟΘΗΚΕΥΣΗ');
$form->close();

?>


</body>
</html>