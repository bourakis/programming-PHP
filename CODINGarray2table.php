<html>
<body>

<?php

$rows = array(
 0 => array(
     'firstname' => 'Bill', 
     'lastname' => 'Gates', 
     'age' => 14,
     'email' => 'bill@microsoft.com'),
 1 => array(
     'firstname' => 'Steve', 
     'lastname' => 'Jobs', 
     'age' => 34,
     'email' => 'steve@microsoft.com'
 ),
 2 => array(
     'firstname' => 'Linus', 
     'lastname' => 'Torvalds', 
     'age' => 24,
     'email' => 'linus@microsoft.com'
 ),
 3 => array(
     'firstname' => 'Andreas', 
     'lastname' => 'Bourakis', 
     'age' => 40,
     'email' => 'add@microsoft.com'
 )
);

echo "<table border=1>
      <tr><td>
            Firstname afdasdas
          </td>
          <td>
            Lastname dfdsf
          </td>
          <td>
            Age
          </td>
          <td>
            Email
          </td>
      </tr>";

foreach ($rows as $row)
{
 echo "<tr>";
 echo "<td>" . $row['firstname'] . "</td>";
 echo "<td>" . $row['lastname'] . "</td>";
 echo "<td>" . $row['age'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
