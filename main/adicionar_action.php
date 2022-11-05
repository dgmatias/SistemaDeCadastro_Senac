<?php

require 'config.php';


$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT); //filtra os valores enviados pelo formulário em um array

if($dados) { //verifica se o array dados existe, ou seja verifica se todos os dados existem
    $sql = $pdo->prepare("select * from aluno where email = :email"); 
    $sql->bindValue(":email", $dados['email']);
    $sql->execute();

    if($sql->RowCount() === 0) { //verifica se o núimero de senhas da busca é igual a 0

        $senha_hash = password_hash($dados['senha'], PASSWORD_DEFAULT); //criptografa a senha.

        $sql = $pdo->prepare("insert into aluno (nome, email, senha, idade, contato, endereco) VALUES (:nome, :email, :senha, :idade, :contato, :endereco)"); //envia os dados para a tabela aluno
        $sql->bindValue(":nome", $dados['nome']);
        $sql->bindValue(":email", $dados['email']);
        $sql->bindValue(":senha", $senha_hash);            //troca os valores dos "links".
        $sql->bindValue(":idade", $dados['idade']);
        $sql->bindValue(":contato", $dados['contato']);
        $sql->bindValue(":endereco", $dados['endereco']);
        $sql->execute();
        
        header("Location: adicionar.php"); //redireciona para adicionar.php
        exit;
    }
} else {
    header("Location: adicionar.php"); //redireciona para adicionar.php
    exit;
}