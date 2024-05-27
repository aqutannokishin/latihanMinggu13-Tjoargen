<?php
session_start();

if(isset($_SESSION["email"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <h2>Register</h2>

    <form method="POST" action="./register_proccess.php">
        <label for="email">Email:   </label>
        <input type="text" id="email" name="email">
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <br>

        

        <input type="submit" value="register">SUBMIT</input>
</form>

</body>
    </html>