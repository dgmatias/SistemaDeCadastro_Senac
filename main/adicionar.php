<?php 

session_start();  // iniciei a sessão.

ob_start(); // Tirei os cookies, basicamente otimizei a página.

require 'config.php';

include 'head.php';

if(!isset($_SESSION['id'])) {
    header("Location: login.php");  //Se a sessão não foi iniciada a página será redirecionada para login.php.
    exit;
}

?>

<!-- formulário -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div> <h1> Adicionar alunos </h1> </div>

    <div>

        <form method="post" action="adicionar_action.php">
            <label for="">
                Nome: <br>
                <input type="text" name="nome" required >
            </label> <br>

            <label for="">
                Email: <br>
                <input type="email" name="email" required>
            </label> <br>

            <label for="">
                Senha: <br>
                <input type="password" name="senha" required>
            </label> <br>

            <label for="">
                Idade: <br>
                <input type="number" name="idade" required>
            </label> <br>

            <label for="">
                Contato: <br>
                <input type="number" name="contato" required>
            </label> <br>

            <label for="">
                Endereço: <br>
                <input type="text" name="endereco" required>
            </label> <br>


            <input type="submit" value="adicionar"> <br> <br>
            
            
        </form>
        
    </div>
    
    <div> <a href="index.php"> Voltar </a> </div>
</body>
</html>