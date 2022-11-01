<?php

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

if($dados) {
    $sql = $pdo->prepare("select * from aluno where email = :email");
    $sql->bindValue(":email", $dados['email']);
    $sql->execute();

    if($sql->RowCount() === 0) {

        $senha_hash = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $sql = $pdo->prepare("insert into aluno (nome, email, senha, idade, contato, endereco) VALUES (:nome, :email, :senha, :idade, :contato, :endereco)");
        $sql->bindValue(":nome", $dados['nome']);
        $sql->bindValue(":email", $dados['email']);
        $sql->bindValue(":senha", $senha_hash);
        $sql->bindValue(":idade", $dados['idade']);
        $sql->bindValue(":contato", $dados['contato']);
        $sql->bindValue(":endereco", $dados['endereco']);
        $sql->execute();
        header("Location: loginAluno.php");
        exit;
    }
} else {
    header("Location: cadastroAluno.php");
    exit;
}