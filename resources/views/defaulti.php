

<?php 

session_start();
include('my_task_params_history.php');
include('taskDetailes_history.php');
if (!isset($_SESSION["username"]) || empty($_SESSION["username"])) { header('Location:http://79.127.124.85:8000/login');  exit(); }?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fa">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Aroosha OSS | انتخاب بازه تاریخ</title>

	<link type="text/css" href="styles/jquery-ui-1.8.14.css" rel="stylesheet" />

    <script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.ui.core.js"></script>
    <script type="text/javascript" src="scripts/jquery.ui.datepicker-cc.js"></script>
    <script type="text/javascript" src="scripts/calendar.js"></script>
    <script type="text/javascript" src="scripts/jquery.ui.datepicker-cc-ar.js"></script>
    <script type="text/javascript" src="scripts/jquery.ui.datepicker-cc-fa.js"></script>

    <script type="text/javascript">
	    $(function() {
	        // حالت پیشفرض
	        $('#datepicker0').datepicker();
	        //-----------------------------------
	        // نمایش شماره هفته
	        $('#datepicker1').datepicker({
	            showWeek: true
	        });
	        //-----------------------------------
	        // پرکردن فیلد اضافی
	        $("#datepicker2").datepicker({
	            dateFormat: 'dd/mm/yy',
	            altField: '#alternate2',
	            altFormat: 'DD، d MM yy'
	        });
	        //-----------------------------------
	        // نمایش دکمه ها
	        $('#datepicker3').datepicker({
	            showButtonPanel: true
	        });
	        //-----------------------------------
	        // تغییر قالب نمایش تاریخ و تغییر سایز خودکار فیلد
	        $("#datepicker4").datepicker({
	            dateFormat: 'dd/mm/yy',
	            autoSize: true
	        });
	        $("#format4").change(function() {
	            $('#datepicker4').datepicker('option', { dateFormat: $(this).val() });
	        });
	        //-----------------------------------
	        // استفاده از dropdown
	        $('#datepicker5').datepicker({
	            changeMonth: true,
	            changeYear: true
	        });
	        //-----------------------------------
	        // انتخاب با کلیک بر روی عکس
	        $("#datepicker6").datepicker({
	            showOn: 'button',
	            buttonImage: 'styles/images/calendar.png',
	            buttonImageOnly: true
	        });
	        //-----------------------------------
	        // نمایش inline
	        $('#datepicker7').datepicker();
	        //-----------------------------------
	        // نمایش چند ماه
	        $('#datepicker8').datepicker({
	            numberOfMonths: 3,
	            showButtonPanel: true
	        });
	        //-----------------------------------
	        // غیرفعال کردن روزها
	        $('#datepicker9').datepicker({
	            beforeShowDay: function(date) {
	                if (date.getDay() == 5)
	                    return [false, '', 'تعطیلات آخر هفته'];
	                return [true];
	            }
	        });
	        //-----------------------------------
	        // تاریخ پیشفرض
	        $('#datepicker10').datepicker({
	            defaultDate: new JalaliDate(1361, 4, 10)	//this means "1361/05/10"
	        });
	        //-----------------------------------
	        // تنظیم حداقل و حداکثر
	        $('#datepicker11').datepicker({
	            minDate: '-3d',
	            maxDate: '+1w +2d'
	        });
	        //-----------------------------------
	        // تنظیم حداقل بصورت پویا
	        $('#datepicker12from').datepicker({
	            onSelect: function(dateText, inst) {
	                $('#datepicker12to').datepicker('option', 'minDate', new JalaliDate(inst['selectedYear'], inst['selectedMonth'], inst['selectedDay']));
	            }
	        });
	        $('#datepicker12to').datepicker();
	        //-----------------------------------
	        // استفاده همزمان از تقویم میلادی
	        $('#datepicker13').datepicker({
	            regional: ''
	        });
	        //-----------------------------------
	        // استفاده همزمان از تقویم هجری قمری
	        $('#datepicker14').datepicker({
	            regional: 'ar'
	        });
	    });
    </script>

    <style type="text/css">
        *
        {
            font-family: Tahoma !important;
			padding:0;
			margin:0;
			border:0;
        }
        body
        {
			background-color:gray ;
            direction: rtl;
            font-size: 80%;
        }
        p
        {
            padding: 25px;
            margin: 25px auto;
            width: 450px;
        }
		p.ui-state-hover
		{
			font-weight: normal;
		}
        p.ui-widget-header
        {  width:20%; 
            text-align: center;
            font-weight: normal;
        }
        strong.ui-state-error
        {
            display: block;
            padding: 3px;
            text-align: center;
        }
    </style>
</head>

<body>

	
    <div>
 <form action="my_tasks_history" method="GET">
        <p class='ui-widget-content'>
            <strong class='ui-state-error'>انتخاب تاریخ</strong><br />
            از تاریخ:
            <input  style="width:30%;  text-align: center;" type="text" name="datepickerFrom" id="datepicker12from" required>
			
            تا تاریخ:
            <input  style="width:30%;  text-align: center;" type="text" name="datepickerTo" id="datepicker12to"  required>
        </p>
		<span align="center" style="display:block; "><button  style="direction: rtl; text-align='center' font-size:15px; direction: rtl; font-family: BNAZANIN; font-weight: bold;" type="submit" class="btn btn-inverse">&emsp;&emsp;جست و جو&emsp;&emsp;</button> </span>
													
       </form>
    </div>
</body>
</html>
