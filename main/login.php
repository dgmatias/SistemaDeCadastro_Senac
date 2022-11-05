<?php 

session_start(); //
                // inicia a sessão
ob_start();     //

require 'config.php';

include 'head.php';

if(isset($_SESSION['id'])){   
    header('Location: index.php'); //verifica se a $_SESSION ['id'] existe, se sim redireciona para index.php
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1> Login </h1>
    
    <div>
        
        <form method="post" action="login_action.php">
    
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
    
    <div> <a href="cadastro.php"> Ainda não tem uma conta ? </a> </div>

</body>
</html>