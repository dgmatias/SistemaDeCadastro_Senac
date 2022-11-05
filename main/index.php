<?php 

 session_start(); //inicia a sessão

 ob_start(); 

require 'config.php';

include 'head.php';

$resultado = [];

$sql=$pdo->prepare('SELECT * FROM aluno'); //lê todos os dados da tabela aluno
$sql->execute();

if($sql->rowCount() > 0) {   //verifica se a quantidade de tamanho de linhas da pesquisa foi maior que 0
    $resultado = $sql->fetchall(PDO::FETCH_ASSOC);  //envia os dados para o array $resultado
}


if(!isset($_SESSION['id'])) {
    header("Location: login.php"); //verifica se a sessão ['id'] não existe, se não existir redireciona para login.php
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    


    <button> <a href="adicionar.php"> Adicionar </a> </button>
    <button> <a href="editar.php"> Editar </a> </button>
    <button> <a href="excluir.php"> Excluir </a> </button> <br> <br>

    <div>
    
    <table>
    
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Idade</th>
            <th>Contato</th>
            <th>Endereço</th>

        </tr>

        <?php foreach($resultado as $dados): ?>
            <tr>
                <td> <?php echo $dados['id']; ?> </td>
                <td> <?php echo $dados['nome']; ?> </td>
                <td> <?php echo $dados['email']; ?> </td>
                <td> <?php echo $dados['idade']; ?> </td>
                <td> <?php echo $dados['contato']; ?> </td>
                <td> <?php echo $dados['endereco']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>

    <a href="logout.php"> Logout</a>


</body>
</html>