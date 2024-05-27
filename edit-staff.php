
<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM STAFF WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);


    if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telepon"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form edit staff</h1>

    <!--REQUEST: GET, POST, PUT, PATCH -->
<form action="" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input value="<?php echo $staff['nama'] ?>" type="text" class="form-control" id="nama" name = "nama" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="telepon" class="form-label">Telepon</label>
    <input value="<?php echo $staff['telp'] ?>" type="text" class="form-control" id="telepon" name="telepon">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input value="<?php echo $staff['email'] ?>" type="text" class="form-control" id="email" name="email">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>