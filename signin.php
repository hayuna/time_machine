<?php
include_once 'functions.php';
session_start();
if(isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    login($login, $password);
}
?>