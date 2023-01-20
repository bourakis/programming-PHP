<a href="index.php">HOME</a> <br>

<?php

$conn = mysqli_connect('localhost','root','','library');

if(!$conn)
{
    die('Could not connect: ' . mysqli_error());
}


$result = mysqli_query($conn, "SELECT * FROM books");

?>

<table border="1">
<tr><td>
        BookID
    </td>
    <td>
        Title
    </td>
    <td>
        Author
    </td>
    <td>
        PublisherName
    </td>
    <td>
        CopyrightYear
    </td>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
    echo '<tr>';
    echo '<td>' . $row['BookID'] . '</td>';
    echo '<td>' . $row['Title'] . '</td>';
    echo '<td>' . $row['Author'] . '</td>';
    echo '<td>' . $row['PublisherName'] . '</td>';
    echo '<td>' . $row['CopyrightYear'] . '</td>';
    echo '<td><a href="delete.php?bookid=' . $row['BookID'] . '">Delete</a></td>';
    echo '</tr>';
}
?>
</table>

<?php
mysqli_close($conn);
?>