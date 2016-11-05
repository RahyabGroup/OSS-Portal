<!DOCTYPE html>
<html lang="en">
<head>



 
			<link rel="stylesheet" href="css/persian.datepicker.css"/>
			<script src="js/jquery.js"></script>
			<script src="js/persian.date.js"></script>
			<script src="js/persian.datepicker.js"></script>
 

	
	
	
	
<?php

session_start();
?>
<link rel="stylesheet" href="css.min.css">
<link rel="stylesheet" href="mcss.min.css">
<script src="jq.min.js"></script>
</head>

<body>

		<script type="text/javascript">
			$(document).ready(function() {
		            $(".example1").pDatepicker();
            		});
		</script>
		<input type="text" class="example1" />
	
	
<div class="container">
<div class="tabel-responsive" id="pagination_data">

</div>
</div>

<script>
$(document).ready(function(){
	load_data();
	function load_data(page)
	{
		 $.ajax({
			 url:"paginationx",
			 method:"GET",
			 data:{page:page},
			 success:function(data){
				 $('#pagination_data').html(data);
				 
			 }
		 })
	}
	
	$(document).on('click','.pagination_link',function(){
		var page=$(this).attr("id");
		load_data(page); 
	});
});

</script>
</body>
</html>
