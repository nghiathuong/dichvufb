<?php 
require_once 'database/function.php';
require_once 'database/config.php';

if(isset($_SESSION['email_user'])) {
    session_destroy();
    unset($_SESSION['email_user']);
    //remove cookie
    unset($_COOKIE['mxho.net']);
    setcookie('mxho.net', '', time() - 3600, '/');
    header('location: /');
}
?>