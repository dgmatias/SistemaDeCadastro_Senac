<?php

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT); //filtra os valores enviados pelo formulário em um array.

   
if($dados) {  // verifica se o array existe, ou seja verifica se existe as informações.
    
    $sql = $pdo->prepare("UPDATE aluno SET nome =:nome, email = :email, idade = :idade, contato = :contato, endereco = :endereco WHERE email= :email"); //atualiza a tabela aluno

    $sql->bindValue(':nome', $dados['nome']);                
    $sql->bindValue(':email', $dados['email']);              
    $sql->bindValue(':idade', $dados['idade']);              //troca os valores dos "Links"
    $sql->bindValue(':contato', $dados['contato']);          
    $sql->bindValue(':endereco', $dados['endereco']);        
    $sql->execute();

    header("Location: index.php"); //redireciona para index.php
    exit;

} else {
    header("Location: editar.php"); //redireciona para editar.php
    exit;
}

?>