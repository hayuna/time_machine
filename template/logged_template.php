<div class="jumbotron logged_jumbotron">
    <span class="logged_logged_as">Zalogowany jako: <?=$_SESSION['login'];?></span>
    <button class="btn btn-primary logout logged_logout_button">Wyloguj się</button>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-2">Czas rozpoczęcia</div>
            <div class="col-md-2">
                <select class="logged_start_work" id="start_work">
                    <?php for($i=0;$i<24;$i++){echo "<option value=".$i.">";if($i<10){$i="0$i";}echo "$i</option>";}?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Czas zakończenia</div>
            <div class="col-md-2">
                <select id="end_work" class="logged_end_work">
                    <?php for($i=0;$i<24;$i++){echo "<option value=".$i.">";if($i<10){$i="0$i";}echo "$i</option>";}?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Nazwa zadania</div>
            <div class="col-md-2"><input id="task" class="logged_task_name"></div>
        </div>
        <div class="row">
            <div class="col-md-2">Miesięczny czas pracy</div>
            <div class="col-md-2">
                <input disabled="disabled" id="monthly_work_time" class="logged_monthly_time">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <button id="task_accept" class="logged_button_ok">OK</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-append date" id="datepickersss">
            <p>Kalendarz</p>
            <input type="text" class="calendar-date logged_calendar_input">
            <span class="add-on">
                <i class="icon-th"></i>
            </span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        lista zadań 
        <div class="logged_task_list" disabled="disabled" id="tasks_list"></div>
    </div>
</div>
