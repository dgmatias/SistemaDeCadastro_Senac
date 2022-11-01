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
    <title>Cadastro de usuários</title>
</head>
<body>
    
    <h1> Cadastro de alunos </h1>

    <div>
        
        <form method="post" action="cadastroAluno_action.php">

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


            <input type="submit" value="adicionar">
        </form>

    </div>
    <a href="home.html">Home</a> <br>
    <a href="loginAluno.php"> Login de aluno</a>

</body>
</html>