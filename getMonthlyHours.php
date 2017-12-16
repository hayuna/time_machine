<?php
include_once 'functions.php';
session_start();
if(isset($_POST['month'])){
    $month = $_POST['month'];
    $exmonth = explode("-", $month);
    $m = $exmonth[1];
    $user = $_SESSION['login'];
    $mysqli = db();
    $query = "SELECT sum((End_task-Start_task)/10000) as hours  FROM `tasks` WHERE user ='".$user."' and (right(left(Start_task, 7),2) = ".$m." OR right(left(End_task, 7),2) = ".$m.")";
    if ($result = $mysqli->query($query)) {
        while ($r = $result->fetch_assoc()) {
            echo floor($r["hours"]);
        }
    }
}


?>