<?php

require 'config.php';

session_start();

ob_start();

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

if ($dados['email'] && $dados['senha']) {
    $sql = $pdo->prepare("select * from usuario where email = :email");
    $sql->bindValue(":email", $dados['email']);
    $sql->execute();

    if( $sql->rowCount() === 1) {
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);

        if(password_verify($dados['senha'], $resultado['senha'])) {
            $_SESSION['id'];
            header('Location: indexUsuario.php');
             exit;
        } else {
            header('Location: loginUsuario.php');
            exit;
        }
    } else {
        header('Location: loginUsuario.php');
        exit;
    }

} else {
    header('Location: loginUsuario.php');
    exit;
}