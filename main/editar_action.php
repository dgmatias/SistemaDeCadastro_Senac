<?php

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

if($dados['nome'] || $dados['email'] || $dados['idade'] || $dados['contato'] || $dados['endereco']) {
    $sql = $pdo->prepare("UPDATE aluno SET nome =:nome, email = :email, idade = :idade, contato = :contado, endereco = :endereco WHERE id = :id");
        $sql->bindValue(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindValue(":idade", $idade);
        $sql->bindValue(":contato", $contato);
        $sql->bindValue(":endereco", $endereco);
        $sql->execute ();

        header('Location: indexUsuario.php');
        exit;
} else {
    header('Location: editar.php');
    exit;
}