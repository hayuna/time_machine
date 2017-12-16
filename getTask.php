<?php
include_once 'functions.php';
session_start();
if(isset($_POST['date'])){
    $date = $_POST['date'];
    $user = $_SESSION['login'];
    $mysqli = db();
    $query = "SELECT * FROM tasks WHERE Start_task <= '$date' and End_task >= '$date' and user = '".$user."'";
    
    if ($result = $mysqli->query($query)) {
        while ($r = $result->fetch_assoc()) {
            echo $r["Start_task"]." - ".$r["End_task"]." | ".$r["Name_of_task"]."<br>";
        }
    }
}


?>