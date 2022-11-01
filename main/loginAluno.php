<?php 

require 'head.html';

session_start();

if(isset($_SESSION['id'])) {
    header ("location: indexAluno.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Login do aluno</h1>

    <div>
    
        <form method="post" action="loginAluno_action.php">

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


    <div> <a href="cadastroAluno.php"> Cadastro</a></div>

</body>
</html>