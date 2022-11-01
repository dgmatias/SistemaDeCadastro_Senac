<?php

require 'config.php';

session_start();

ob_start();

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

if($dados['email'] && $dados['senha']) {
    $sql = $pdo->prepare("select * from aluno where email = :email");
    $sql->bindValue(":email", $dados['email']);
    $sql->execute();

    if ($sql->RowCount() != 0) {
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);

        if(password_verify($dados['senha'], $resultado['senha'])) {
            $_SESSION['id'];
            $_SESSION['nome'];
            header("Location: indexAluno.php");
            exit;
        } else {
            header("Location: loginAluno.php");
            exit;
        }
    } else {
        header("Location: loginAluno.php");
        exit;
    }
} else {
    header("Location: loginAluno.php");
    exit;
}