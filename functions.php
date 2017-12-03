<?php
function login($login, $password) {
    include('config.php');
    $mysqli = db();
    $query = "SELECT login, pass FROM users WHERE login = '".$login."' and pass = '".$password."' LIMIT 1";
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
?>