<?php 

session_start(); //inicia a sessão.

ob_start(); //tira os cookies, basicamente otimiza a página.

require 'config.php';

include 'head.php';

if(isset($_SESSION['id'])){   
    header('Location: index.php'); //verifica se a sessão['id] foi iniciada.
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
    <div> <h1> Cadastro </h1> </div>

    <div>

        <form method="post" action="cadastro_action.php">

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

</body>
</html>