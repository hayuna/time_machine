<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time machine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>
    <link rel="stylesheet" href="modal/style.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>.modal-backdrop{z-index:0;}</style> 
 
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
            include 'not_logged_template.php';
        }else{
            include 'logged_template.php';
        }
        include 'modals_template.php';
    ?>
</body>
</html>