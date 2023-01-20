<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

<body>

<?php
include 'functions.php';

menu();
?>


<form method="GET" action="save.php">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control form-control-sm" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Author:</label>
    <input type="text" class="form-control form-control-sm" name="author">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Publisher</label>
    <input type="text" class="form-control form-control-sm" name="publisher">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" name="copy">Year</label>
    <input type="text" class="form-control form-control-sm">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>