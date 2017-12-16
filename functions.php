<?php

function db(){
    return new mysqli('localhost', 'root', '', 'projekt');
}

function login($login, $password) {
    $mysqli = db();
    $query = "SELECT Login, Password FROM users WHERE Login = '".$login."' and Password = '".$password."' LIMIT 1";
    if ($result = $mysqli->query($query)) {
        $num_rows = mysqli_num_rows ( $result );
        if($num_rows == 1){
            $_SESSION['login'] = $login;
            echo 1;        
        }
    }else{
        echo 0;
    }
}

function logout(){
    session_start();
    session_destroy();
}

function hourToDateTime($hour){
    return date("Y-m-d $hour:00:00");
}

function hourToDateTimeNextDay($endWork, $newStartWork){
    $stop_date = $newStartWork;
    $stop_date = date('Y-m-d H:i:s', strtotime(date("Y-m-d $endWork:00:00") . ' +1 day'));
    return $stop_date;
}
?>