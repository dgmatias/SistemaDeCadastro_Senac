<?php 

session_start();

ob_start();

if (!isset($_SESSION['id'])) {
    header ("Location: loginUsuario.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo usuario</h1>

    <a href="logout.php"> Logout</a>
</body>
</html>