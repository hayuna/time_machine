<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
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
    <script src="https://use.fontawesome.com/200aeae3e4.js"></script>
 
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
            include 'template/not_logged_template.php';
        }else{
            include 'template/logged_template.php';
        }
        include 'template/modals_template.php';
    ?>
    <link rel="stylesheet" href="styles/datepicker.css">
    <link rel="stylesheet" href="styles/logged.css">
    <script src="scripts/calendar.js"></script>
    <script>$('#datepickersss').datepicker({maxViewMode: 2,language: "pl",keyboardNavigation: false,autoclose: true,todayHighlight: true,format: "yyyy-mm-dd"});</script>
</body>
</html>