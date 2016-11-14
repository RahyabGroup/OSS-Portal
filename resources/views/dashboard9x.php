<?php include('fetch.php'); ?>
<!DOCTYPE html>
<html>
<head>
<script src="jq.min.js"></script>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
   <link rel="stylesheet" href="bootstrap.min.css">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>تست پلاگین انتخاب تاریخ</title>

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

</head>
<body>
<div class="container">
      <br />
      <h2 align="center"> search</h2>
  <div class="form-group">
    <div class="input-group">
	<span class="input-group-addon">search</span>
      <input type="text" name="search_text" id="search_text" placeholder="search by customer" class="form-control" />
	  </div>
	  </div>
	  <div id="result"></div>

</body>
</html>

<script>
$(document).ready(function(){
	$('#search_text').keyup(function(){
	var txt=$(this).val();
	if(txt !='')
	{
		
	}
	else
	{
		$('#result').html('');
		$.ajax({
			url:'fetch',
			method:'GET',
			data:{'search':txt},
			dataType:"text",
			success:function(data)
			{
				$('#result').html(data);
				alert("h");
			}
			});
	}
   });
});
</script>









