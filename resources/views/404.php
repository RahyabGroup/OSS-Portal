<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>CAPLET |  Admin HTML Themes</title>
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="canonical" href="http://www.20script.ir" />
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
<body>
<div id="wrapper" class="wrapper-shadow" style="background-color:#e5e9ec;">

		<canvas id="world"></canvas>
		<div class="real-boxs">
				<div class="real-search">
						<form>
								<div class="input-group"> 
										<input type="text" class="form-control">
										<span class="input-group-btn">
												<button class="btn btn-theme" type="submit">SEARCH</button>
										</span>	
								</div>
						</form>
				</div>
				<div class="row align-lg-center">
						<div class="col-md-12">
								<div class="error-template">
										<h1> ERROR <strong>404</strong> – :) </h1>
										<h2>Oops! That page can’t be found.</h2>
										<div class="error-details"> Sorry, an error has occured, Requested page not found! </div>
										<div class="error-actions">
										<a href="#menu" class="btn btn-theme btn-lg"><span class="fa fa-bars"></span></a>
										<a href="#" class="btn btn-theme-inverse btn-lg"><span class="fa fa-envelope-o"></span> Contact Support </a>
										</div>
										<div class="error-details"> Copyright &copy; 2013 Ziceinclude</div>
								</div>
						</div>
				</div>
		</div>
		

		
		<!--
		//////////////////////////////////////////////////////////////
		//////////     LEFT NAV MENU     //////////
		///////////////////////////////////////////////////////////
		-->
		<nav id="menu">
				<ul>
						<li><span><i class="icon  fa fa-laptop"></i> Dashboard</span>
								<ul>
										<li><a href="dashboard.html"><i class="icon  fa fa-rocket"></i> First Design </a></li>
										<li><a href="dashboard2.html"><i class="icon  fa fa-th"></i> Dashboard New </a></li>
								</ul>
						</li>
						<li><a href="front/index.html"><i class="icon  fa fa-rocket"></i> Front End </a></li>
						<li><span><i class="icon  fa fa-th-list"></i> Layout</span>
								<ul>
										<li class="Label label-lg">Main Layout</li>
										<li><a href="alwayMenu.html"> Alway Left  Menu </a></li>
										<li><a href="hideUserPanel.html"> Hide User Panel </a></li>
										<li><a href="hideUserPanelIn.html"> Show & Hide</a></li>
										<li class="Label label-lg">Other Layout</li>
										<li><a href="topMenu.html"> Top Menu</a></li>
										<li><a href="footerShow.html"> Footer Show</a></li>
										<li><a href="footerMenu.html"> Footer with menu</a></li>
								</ul>
						</li>
						<li><a href="mailBox.html"><i class="icon  fa fa-inbox"></i> Mail</a></li>
						<li><span><i class="icon  fa fa-briefcase"></i> UI Element</span>
								<ul>
										<li><a href="ui.html"> UI </a></li>
										<li><a href="ui_button.html"> Button </a></li>
										<li><a href="ui_icon.html"> Fonts Icon</a></li>
										<li><a href="ui_slide.html"> Slide</a></li>
										<li><a href="ui_modal.html"> Modal</a></li>
										<li><a href="ui_panel.html"> Panel</a></li>
										<li><a href="ui_alert.html"> Alert</a></li>
										<li><a href="ui_typography.html"> Typography</a></li>
										<li><a href="ui_nestable.html"> Nestable</a></li>
								</ul>
						</li>
						<li><span><i class="icon  fa fa-bar-chart-o"></i> Chart </span>
								<ul>
										<li><a href="chartFlot.html"> Flot Chart</a></li>
										<li><a href="chartMorris.html"> Morris Chart</a></li>
										<li><a href="chartOther.html"> Other Chart</a></li>
								</ul>
						</li>
						<li><a href="calendar.html"><i class="icon  fa fa-calendar-o"></i> Calendar </a></li>
						<li><span><i class="icon  fa fa-align-right"></i>Off  Canvas  Menu</span>
								<ul>
										<li><a href="menu.html"> Position </a></li>
										<li><a href="menuOpen.html"> Touch to open</a></li>
										<li><a href="menuVertical.html"> Vertical Level</a></li>
										<li><span> Unlimited Level </span>
												<ul>
														<li><a href="#"> Level 3 </a></li>
														<li><a href="#"> Level 3 </a></li>
														<li><span> Level 4</span>
																<ul>
																		<li><a href="#"> Level 4 </a></li>
																		<li><a href="#"> Level 4 </a></li>
																</ul>
														</li>
												</ul>
										</li>
								</ul>
						</li>
						<li><span><i class="icon  fa fa-clipboard"></i> From</span>
								<ul>
										<li><a href="form.html">Form Basic</a></li>
										<li><a href="formComponents.html">Form Components</a></li>
										<li><a href="formValidate.html">Form Validate</a></li>
										<li><a href="formWizard.html">Form Wizard</a></li>
										<li><a href="formMutiselect.html">Form Mutiseletion</a></li>
										<li><a href="form_x_edit.html">Form x-edit</a></li>
										<li><a href="drop_upload.html">Drop Upload</a></li>
								</ul>
						</li>
						<li><a href="fileManager.html"><i class="icon  fa fa-file-text"></i> File Manager </a></li>
						<li><span><i class="icon  fa fa-fire"></i> Table</span>
								<ul>
										<li><a href="table.html">Table Basic</a></li>
										<li><a href="tableResponsive.html">Table Responsive</a></li>
										<li><a href="tableDynamic.html">Data Table</a></li>
								</ul>
						</li>
						<li><span><i class="icon  fa fa-folder-open-o"></i> Other Page</span>
								<ul>
										<li><a href="login.html"> login </a></li>
										<li><a href="lockscreen.html"> Lockscreen </a></li>
										<li><a href="images_manager.html"> Images Manager</a></li>
										<li><a href="gallery.html"> Gallery</a></li>
										<li><a href="timeline.html"> Timeline</a></li>
										<li><a href="profile.html"> Profile</a></li>
										<li><a href="blankPage.html"> Blank Page</a></li>
										<li><a href="page_invoice.html"> Invoice</a></li>
										<li><a href="page_search.html"> Search result</a></li>
										<li><a href="pages_pricing.html"> Pricing Table</a></li>
										<li><a href="register.html"> Register</a></li>
										<li><a href="page_chat.html"> Full Chat</a></li>
								</ul>
						</li>
						<li><a href="map.html"><i class="icon  fa fa-map-marker"></i> Maps</a></li>
						<li><a href="404.html"><i class="icon  fa fa-exclamation-triangle"></i> Error Pages</a></li>
						<li><a href="siteMap.html"><i class="icon  fa fa-sitemap"></i>Site Map</a></li>
				</ul>
		</nav>
		<!-- //nav left menu-->

		
		
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
<script type="text/javascript">
(function() {
  var COLORS, Confetti, NUM_CONFETTI, PI_2, canvas, confetti, context, drawCircle, i, range, resizeWindow, xpos;
  NUM_CONFETTI = 100;
  COLORS = [[85, 71, 106], [174, 61, 99], [219, 56, 83], [244, 92, 68], [248, 182, 70], [26, 188, 155], [212, 223, 90]];
  PI_2 = 2 * Math.PI;
  canvas = document.getElementById("world");
  context = canvas.getContext("2d");
  window.w = 0;
  window.h = 0;
  resizeWindow = function() {
    window.w = canvas.width = window.innerWidth;
    return window.h = canvas.height = window.innerHeight;
  };
  window.addEventListener('resize', resizeWindow, false);
  window.onload = function() {
    return setTimeout(resizeWindow, 0);
  };
  range = function(a, b) {
    return (b - a) * Math.random() + a;
  };
  drawCircle = function(x, y, r, style) {
    context.beginPath();
    context.arc(x, y, r, 0, PI_2, false);
    context.fillStyle = style;
    return context.fill();
  };
  xpos = 0.5;
  document.onmousemove = function(e) {
    return xpos = e.pageX / w;
  };
  window.requestAnimationFrame = (function() {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
      return window.setTimeout(callback, 1000 / 60);
    };
  })();
  Confetti = (function() {
    function Confetti() {
      this.style = COLORS[~~range(0, 5)];
      this.rgb = "rgba(" + this.style[0] + "," + this.style[1] + "," + this.style[2];
      this.r = ~~range(2, 6);
      this.r2 = 2 * this.r;
      this.replace();
    }
    Confetti.prototype.replace = function() {
      this.opacity = 0;
      this.dop = 0.03 * range(1, 4);
      this.x = range(-this.r2, w - this.r2);
      this.y = range(-20, h - this.r2);
      this.xmax = w - this.r;
      this.ymax = h - this.r;
      this.vx = range(0, 2) + 8 * xpos - 5;
      return this.vy = 0.7 * this.r + range(-1, 1);
    };

    Confetti.prototype.draw = function() {
      var _ref;
      this.x += this.vx;
      this.y += this.vy;
      this.opacity += this.dop;
      if (this.opacity > 1) {
        this.opacity = 1;
        this.dop *= -1;
      }
      if (this.opacity < 0 || this.y > this.ymax) {
        this.replace();
      }
      if (!((0 < (_ref = this.x) && _ref < this.xmax))) {
        this.x = (this.x + this.xmax) % this.xmax;
      }
      return drawCircle(~~this.x, ~~this.y, this.r, "" + this.rgb + "," + this.opacity + ")");
    };

    return Confetti;

  })();

  confetti = (function() {
    var _i, _results;
    _results = [];
    for (i = _i = 1; 1 <= NUM_CONFETTI ? _i <= NUM_CONFETTI : _i >= NUM_CONFETTI; i = 1 <= NUM_CONFETTI ? ++_i : --_i) {
      _results.push(new Confetti);
    }
    return _results;
  })();

  window.step = function() {
    var c, _i, _len, _results;
    requestAnimationFrame(step);
    context.clearRect(0, 0, w, h);
    _results = [];
    for (_i = 0, _len = confetti.length; _i < _len; _i++) {
      c = confetti[_i];
      _results.push(c.draw());
    }
    return _results;
  };

  step();

}).call(this);

</script>
</body>
</html>