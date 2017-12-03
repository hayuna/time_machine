<?php
session_start();
if(isset($_POST['login']) && isset($_POST['password'])){
    //include_once 'config.php';
    include_once 'functions.php';
    
    $login = $_POST['login'];
    $password = $_POST['password'];
    login($login, $password);
    // check in DB
}
?>