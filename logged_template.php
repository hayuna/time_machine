<button class="btn btn-primary logout">logout</button>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://use.fontawesome.com/200aeae3e4.js"></script>
<style>.row{margin-left:15px;margin-right:15px;}</style>
<body>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-2">Start work</div>
            <div class="col-md-2"><select id="start_work" style="width:200px;margin-bottom:20px;"><?php for($i=0;$i<24;$i++){echo "<option value=".$i.">";if($i<10){$i="0$i";}echo "$i</option>";}?></select></div>
        </div>

        <div class="row">
            <div class="col-md-2">End work</div>
            <div class="col-md-2"><select id="end_work" style="width:200px;margin-bottom:20px;"><?php for($i=0;$i<24;$i++){echo "<option value=".$i.">";if($i<10){$i="0$i";}echo "$i</option>";}?></select></div>
        </div>

        <div class="row">
            <div class="col-md-2">Task</div>
            <div class="col-md-2"><input id="task" style="width:200px;margin-bottom:20px;"></div>
        </div>

        <div class="row">
            <div class="col-md-2">Monthly work time</div>
            <div class="col-md-2"><input id="monthly_work_time" style="width:200px;margin-bottom:20px;"></div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center"><button  style="width:306px;margin-bottom:20px;" id="task_accept">OK</button></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-append date" id="datepickersss">
            <input type="text" class="calendar-date"><span class="add-on"><i class="icon-th"></i></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        lista zadań <div disabled="disabled" id="tasks_list" style="width: 80%;height: 150px;overflow: scroll;"></div>
    </div>
</div>



<link rel="stylesheet" href="styles/datepicker.css">
<script src="scripts/calendar.js"></script>
<style>.row{margin-left:15px;margin-right:15px;}
.datepicker.datepicker-dropdown.dropdown-menu{position:fixed;}

</style>

<script>
$('#datepickersss').datepicker({
    maxViewMode: 2,
    language: "pl",
    keyboardNavigation: false,
    autoclose: true,
    todayHighlight: true,
    format: "yyyy-mm-dd"
});



</script>