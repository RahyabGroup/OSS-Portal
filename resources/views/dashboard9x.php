<?php include('fetch.php'); ?>
<!DOCTYPE html>
<html>
<head>
<script src="jq.min.js"></script>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
   <link rel="stylesheet" href="bootstrap.min.css">
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









