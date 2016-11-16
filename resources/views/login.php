<?php session_start();
$_SESSION['secure']=rand(10000,99999);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>LOGIN |  Aroosha OSS</title>
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
<body class="full-lg">
<div id="wrapper">

<div id="loading-top">
		<div id="canvas_loading"></div>
		<span>Checking...</span>
</div>

<div id="main">
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
						
								<div class="account-wall">
										<section class="align-lg-center">
										<div class="site-logo"></div>
										<h1 class="login-title"><span>خوش</span>آمدید <small> </small></h1>
										</section>
										<form id="form-signin" class="form-signin"  action="checkLogin" method="POST">
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                          								
												<section>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-user"></i></div>
																<input  type="text" class="form-control" name="username" placeholder="Username" required>
														</div>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-key"></i></div>
																<input type="password" class="form-control"  name="password" placeholder="Password" required>
														</div>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-key"></i></div>
																<input type="text" class="form-control"  name="secure" placeholder="Captcha" required>
														</div>
														<br>
													&emsp;&emsp;&emsp;	<img src="generate" />
													     <br><br> 
	                             <?php  if (!isset($_SESSION["x"]) || empty($_SESSION["x"])) {  } else { ?> <h4 class="loginFont"><?php echo $_SESSION['x'];?></h4> <?php } ?>
													
														<button class="btn btn-lg btn-theme-inverse btn-block" type="submit" id="sign-in">ورود</button>
												</section>
												<section class="clearfix">
														<div class="iCheck pull-left"  data-color="red">
														<input type="checkbox" checked>
														<label>رمز مرا به یاد داشته باش</label>
														</div>
														<a href="#" class="pull-right help">پسورد را فراموش کرده اید؟ </a>
												</section>		
												
										</form>
										
										<a href="#" class="footer-link"></a>
								</div>	
								<!-- //account-wall-->
								
						</div>
						<!-- //col-sm-6 col-md-4 col-md-offset-4-->
				</div>
				<!-- //row-->
		</div>
		<!-- //container-->
		
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
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/mmenu/jquery.mmenu.js"></script>
<script type="text/javascript" src="assets/js/styleswitch.js"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="assets/plugins/form/form.js"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="assets/plugins/datetime/datetime.js"></script>
<!-- Library Chart-->
<script type="text/javascript" src="assets/plugins/chart/chart.js"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="assets/plugins/pluginsForBS/pluginsForBS.js"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="assets/plugins/miscellaneous/miscellaneous.js"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="assets/js/caplet.custom.js"></script>

</body>
</html>