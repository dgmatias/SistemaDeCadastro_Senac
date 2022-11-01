<?php 

require 'head.html';

session_start();

if(isset($_SESSION['id'])) {
    header ("location: indexUsuario.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    
    <h1> Cadastro de usuários </h1>

    <div>
        
        <form method="post" action="cadastroUsuario_action.php">

            <label for="">
                Nome: <br>
                <input type="text" name="nome">
            </label> <br>

            <label for="">
                Email: <br>
                <input type="email" name="email">
            </label> <br>

            <label for="">
                Senha: <br>
                <input type="password" name="senha">
            </label> <br>

            <input type="submit" value="adicionar">
        </form>

    </div>

    <a href="home.html">Home</a> <br>
    <a href="loginUsuario.php"> Login de Usuario</a>
</body>
</html>