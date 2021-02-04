<?php

session_start();

if (empty($_POST)) {
    $_SESSION['error'] = "Method not allowed, you must post to the login script";
    header('Location: http://localsite.test/basic-auth-php/login.php');
    exit;
}

var_dump($_POST);
// do the login
