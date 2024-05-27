

<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES(
        NULL, '$nama', '$isbn', '$unit'
    )");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>FORM TAMBAH BUKU</title>

</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form tambah data buku</h1>

    <!--REQUEST: GET, POST, PUT, PATCH -->
    
<form action="" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="isbn" class="form-label">ISBN</label>
    <input type="text" class="form-control" id="isbn" name="isbn">
  </div>
  <div class="mb-3">
    <label for="unit" class="form-label">Unit</label>
    <input type="number" class="form-control" id="unit" name="unit">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>