<?php

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

if ($dados['nome'] && $dados['email'] && $dados['senha']) {

    $sql = $pdo->prepare("select * from usuario where email = :email");
    $sql->bindValue(":email", $dados['email']);
    $sql->execute();

    if ($sql->rowCount() === 0) {

        $senha_hash = password_hash($dados['senha'], PASSWORD_DEFAULT);
        $sql = $pdo->prepare("insert into usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        $sql->bindValue(":nome", $dados['nome']);
        $sql->bindValue(":email", $dados['email']);
        $sql->bindValue(":senha", $senha_hash);
        $sql->execute();
        header("Location: loginUsuario.php");
        exit;
    }
} else {
    header("Location: cadastrarUsuario.php");
    exit;
}