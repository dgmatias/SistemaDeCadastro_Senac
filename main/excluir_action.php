<?php 

    require 'config.php';

    $email = filter_input(INPUT_POST, 'email'); //filtra os valores de email enviados pelo formuário.

    if ($email) {  //verfica se o eemail existe
        $sql= $pdo->prepare("DELETE FROM aluno WHERE email = :email");  //deleta os dados aonde o email for igual ao "Link" 
        $sql-> bindValue(':email', $email);   //troca o valor do link
        $sql->execute ();   
    }
    
    header ('Location: index.php'); //redireciona para index.php
    exit;
?>