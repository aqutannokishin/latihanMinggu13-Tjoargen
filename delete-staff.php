<?php
    include_once("./connect.php");

    $id = $_GET["id"];
    $query = mysqli_query($db, "DELETE FROM STAFF WHERE id=$id");

    header("Location: staff.php");
    ?>