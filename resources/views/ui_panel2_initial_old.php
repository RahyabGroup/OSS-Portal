<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css.min.css">
<link rel="stylesheet" href="mcss.min.css">
<script src="jq.min.js"></script>
<link href="pagination.css" rel="stylesheet" type="text/css">

<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<!-- Title-->
<title>Aroosha OSS - Tickets</title>
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap-themes.css" />
<link type="text/css" rel="stylesheet" href="assets/css/style.css" />

<!-- Styleswitch if  you don't chang theme , you can delete -->
<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="assets/css/styleTheme1.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="assets/css/styleTheme2.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="assets/css/styleTheme3.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="assets/css/styleTheme4.css" />

</head>


<body  onresize="myFunctionx(),myFunctionxx(),myFunctiony()" onload="myFunctionx(),myFunctionxx(),myFunctiony()">
<div>
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     HEADER  CONTENT     ///////////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="header">
		
				<div class="logo-area clearfix">
						<a href="#" class="logo"></a>
				</div>
				<!-- //logo-area-->
			
				<!-- //tools-bar-->
				
		</div>
		<!-- //header-->
		

		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     MAIN SHOW CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="main">
		
		
				<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">UI</a></li>
						<li class="active">Panel</li>
				</ol>
				<!-- //breadcrumb-->
				
				<div id="content">
				
						<div class="row">
						
 <div class="col-lg-6">
								
 <div id="on_javascript_rise">



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
	
	$(document).on('click','.pagination',function(){
		var page=$(this).attr("id");
		load_data(page); 
	});
});

</script>

                                     <section style="position: absolute; padding:10px;" class="panel corner-flip">
												<header class="panel-heading">
														<h4 style="text-align:right;  font-size:15px; direction: rtl; font-family: BNAZANIN;">&emsp;تعداد<?php include('variables.php'); echo $total_rec; ?>رکورد یافت شد </h4>
														
	
											</header>
											<div id="wrapperx">
 <p>  
 
<div class="container" style="padding:0px;">
     <div  style="padding-left:-150px; padding-right:20px;" class="tabel-responsive" id="pagination_data">

     </div>
</div>
	</p>											<footer class="panel-footer">
														<div id="pagination_controls"> &emsp;&emsp;&emsp;&emsp;  </div>
												</footer>
										</section>  
										<!-- //panel default-->
								
						 
									</br></br>	
	 </div>
	  </div>
								<!-- //content > row > col-lg-6 -->
								
								
						</div>
						<!-- //content > row-->
						
				</div>
				<!-- //content-->
				
				
		</div>
		<!-- //main-->
		
		
		
		
		

		
		
	
		
		
		
</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
		
<!-- Jquery Library -->


<!-- Library Themes Customize-->
</body>
</html>