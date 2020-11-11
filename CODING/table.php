<!-- Δημιουργία πίνακα html συνδιάζοντας html και php. -->

<html>
<head>
	<title>Table in HTML</title>
</head>
<body>

<table border="1">

<?php
for ( $i = 1; $i <= 25; ++$i ) 
{ 
  echo "<tr><td>" . $i . ". Hello, world! </td></tr> \n"; 
} 
?>
</table>

</body>
</html>
