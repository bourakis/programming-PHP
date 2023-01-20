<?php
require 'Db.class.php'; 
$db = new Db();
?>

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