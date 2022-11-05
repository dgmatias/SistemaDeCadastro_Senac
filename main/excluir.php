<?php 

session_start();  //inicia a sessão

ob_start(); //tira os cookies e otimiza a página

require 'config.php';
include 'head.php';

if(!isset($_SESSION['id'])){   
    header('Location: index.php'); //verifica se não foi iniciada a $_SESSION['id'], se não redireciona para index.php
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    
    <div> <h1> Excluir</h1> </div>

    <div>

        <form action="excluir_action.php" method="post">

            <label for="">
                Email:
                <input type="email" name="email">
            </label>

            <input type="submit" value="enviar">
        </form>

    </div>

    <div> <a href="index.php"> voltar </a> </div>
</body>
</html>