$(document).ready(() => {
    $('#button_start').on('click', () => {
        $('#modal_nr_3').modal();
    });

    $('#modal_nr_1_option1').on('click', () => {
        $('#modal_nr_2').modal();
    });

    $('#modal_nr_2_option1').on('click', () => {
        $('#modal_nr_3').modal();
    });

    $('#modal_nr_3_close').on('click', () => {
        $('#modal_nr_1').modal();
    });

    $('.form_login_send').on('click', () => {
        const login = $('.form_login_login').val();
        const pass = $('.form_login_password').val();
        $.ajax({
            method: 'POST',
            url: 'signin.php',
            data: { login, password: pass }
        })
        .done(msg => {
            if (msg){
                $('#modal_nr_4').modal();
            } else {
                $('#modal_nr_5').modal();
            }
        });
    });

    $('#modal_nr_4_option1').on('click', () => {
        location.reload();
    });

    $('.logout').on('click', () => {
        $('#modal_nr_6').modal();
    });

    $('#modal_nr_6_option1').on('click', () => {
        $.ajax({
            method: 'POST',
            url: 'logout.php'
        });
        location.reload();
    });

    $('#modal_nr_6_option2').on('click', () => {
        $('#modal_nr_7').modal();
    });

    $('#task_accept').on('click', () => {
        const startWork = $('#start_work').val();
        const endWork = $('#end_work').val();
        const task = $('#task').val();
        $.ajax({
            method: 'GET',
            url: 'addTask.php',
            data: { startWork, endWork, task }
        })
        .done(msg => {
            switch(msg){
                case "0" : 
                    //nieznany błąd
                    $('#modal_nr_9').modal();
                break;
                case "1" : 
                    //dodano zadanie
                    $('#modal_nr_8').modal();
                break;
                case "2": 
                    //pusta nazwa zadania
                    $('#modal_nr_11').modal();
                break;
                case "3": 
                    //problem z bazą danych
                    $('#modal_nr_10').modal();
                break;
            }
        });
    });

});
