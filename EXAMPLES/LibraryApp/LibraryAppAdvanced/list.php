<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<?php
include 'db.php';
include 'functions.php';


$result = mysqli_query($conn, "SELECT * FROM books");

menu();
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

</body>
</html>