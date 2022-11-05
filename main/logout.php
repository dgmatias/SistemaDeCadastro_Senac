<?php

session_start(); //inicia a sessão.
ob_start();

unset($_SESSION['id']); //destroi a sessão.

header("Location: login.php"); //redireciona para login.php .
exit;