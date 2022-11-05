<?php

session_start(); //
                // inicia a sessão.
ob_start();     //

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT); //filtra as informações enviadas pelo formulário em um array.

if ($dados) { // verifica se o array existe, ou seja verifica se existe as informações.
    $sql = $pdo->prepare("select * from usuario where email = :email"); //lê todos os dados da coluna aonde o email for igual ao "link".
    $sql->bindValue(":email", $dados['email']); //troca o valor do "link" pelo email enviado pelo formulario.
    $sql->execute();

    if( $sql->rowCount() === 1) {
        $resultado = $sql->fetch(PDO::FETCH_ASSOC); //se a quantidade de linhas da pesquisa for igual a 1 ele envia o resultado da pesquisa para uma array chamada resultado.

        if(password_verify($dados['senha'], $resultado['senha'])) { //verifica se a senha está correta.
            
            $_SESSION['id'] = $resultado['id']; // se a verificação for aceita a super global ($_SESSION['id]) recebe o valor do array resultado['id].

            header('Location: index.php'); //redireciona pra index.php se a verificação completa estiver correta.
             exit;
        } else {
            header('Location: login.php'); //redireciona para login.php se a senha não for verificada corretamente.
            exit;
        }
    } else {
        header('Location: login.php'); //redireciona pra index.php se a quantidade de linhas da pesquisa for diferente de 1.
        exit;
    }

} else {
    header('Location: login.php'); //redireciona para login.php se o array não existir.
    exit;
}