<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Daftar Buku</h1>
    <table class="table table-striped">

        <thead>
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>ACTION</td>
        </tr>
</thead>
<tbody>
<?php foreach($query as $buku){ ?>
    <tr>
        <td><?php echo $buku["nama"] ?></td>
        <td><?php echo $buku["isbn"] ?></td>
        <td><?php echo $buku["unit"] ?></td>
        <td><a href=<?php echo "edit-buku.php?id=" . $buku["id"]?> class="btn btn-primary">EDIT</a>
        <td><a href=<?php echo "delete-buku.php?id=" . $buku["id"]?> class="btn btn-success">HAPUS</a>
    </tr>
<?php } ?>
</tbody>
    <table border="1">
        

</table>
</table>
<br>
<a class="btn btn-primary" href="./tambah-buku.php">Tambah data buku </a>
<a class="btn btn-warning" href="./index.php"> Kembali ke halaman utama </a>
</div>
</body>

    </html>