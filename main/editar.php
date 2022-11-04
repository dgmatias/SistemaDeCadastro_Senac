<?php 

require 'head.html'

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> Editar usuário </h1>

<form method="post" action="editar_action.php">

    <label for="">
        Nome: <br/>
        <input type="text" name="nome">
        <br>
    </label> <br/>

    <label for="">
        E-mail: <br/>
        <input type="email" name="email">
        <br>
    </label> <br/>

    <label for="">
        Idade: <br/>
        <input type="idade" name="idade">
    </label> <br/>

    <label for="">
        Contato: <br/>
        <input type="contato" name="contato">
    </label> <br/>

    <label for="">
        Endereço: <br>
        <input type="endereco" name="endereco">
    </label> <br>

    <input type="submit" value="salvar">

</body>
</html>