<?php

session_start();
ob_start();
unset($_SESSION['id']);

header("Location: home.html");
exit;