<?php
include_once 'functions.php';
session_start();
if(isset($_GET['startWork']) && isset($_GET['endWork']) && isset($_GET['task'])){
    $startWork = $_GET['startWork'];
    $endWork = $_GET['endWork'];
    $task = $_GET['task'];
    $user = $_SESSION['login'];
    $newStartWork = hourToDateTime($startWork);
    if($startWork >= $endWork){
        $newEndWork = hourToDateTimeNextDay($endWork, $newStartWork);
    }else{
        $newEndWork = hourToDateTime($endWork);
    }
    
    if(strlen(trim($tasks))>0){
        $mysqli = db();
        $query = "INSERT INTO tasks VALUES(NULL, '".$task."', '".$newStartWork."', '".$newEndWork."', '".$user."')";
        if ($result = $mysqli->query($query)) {
            if($result == 1){
                echo 1;        
            }else{
                echo 3;
            }
        }
    }else{
        echo 2;
    }
}
?>