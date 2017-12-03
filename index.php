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
    <style>.form_password{-webkit-text-security: disc;  }.alert {padding: 20px;background-color: #f44336; color: white;margin-bottom: 15px;}.flex-container{padding: 0;margin: 0;display: flex;align-items: center;justify-content: center;position: absolute;z-index: 15;top: 50%;left: 50%;}</style>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
            //include not loged in site
            include('not_logged_template.php');
            
        }else{
            //include logged in site
            include('logged_template.php');
        }
    ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $('.form_signin button').on('click', (e) => {
            e.preventDefault();
            const login = $('.form_login').val();
            const pass = $('.form_password').val();
            $.ajax({
                method: "POST",
                url: "signin.php",
                data: { 
                    login: login,
                    password: pass
                }
		    })
            .done(function( msg ) {
                console.log(msg);
                if(msg == 1){
                    location.reload();
                }else{
                    $('.form_container').css({display: 'none'});
                    $('body').append(`<div class="flex-container"><div class="alert">error</div></div>`)
                    setTimeout(() => {
                        $('.form_container').css({display: 'block'});
                        $('.alert').remove();
                    },2000);
                }
            });
        });

        $('.logout').on('click', (e) => {
            e.preventDefault();
            $.ajax({
                method: "GET",
                url: "logout.php",
		    })
        });
    </script>
</body>
</html>