<?php

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT); //filtra as informações enviadas pelo formulário em um array.

if ($dados) { // verifica se o array existe, ou seja verifica se existe as informações.

    $sql = $pdo->prepare("select * from usuario where email = :email"); //lê todos os dados da coluna aonde o email for igual ao "link".
    $sql->bindValue(":email", $dados['email']); //troca o valor do "link" pelo email enviado pelo formulario.
    $sql->execute();

    if ($sql->rowCount() === 0) {  // Verifica se a quantidade de linhas da pesquisa for igual a 0.

        $senha_hash = password_hash($dados['senha'], PASSWORD_DEFAULT); //Criptografa a senha

        $sql = $pdo->prepare("insert into usuario (nome, email, senha) VALUES (:nome, :email, :senha)"); //envia os dados
        $sql->bindValue(":nome", $dados['nome']);
        $sql->bindValue(":email", $dados['email']); //troca o valor do "link" pelo email enviado pelo formulario.
        $sql->bindValue(":senha", $senha_hash);
        $sql->execute();


        header("Location: login.php");  //se estiver tudo correto ele redireciona para login.php
        exit;
    }
} else {
    header("Location: cadastro.php"); //se não existir o array ele redireciona para cadastro.php
    exit;
}