<?php
include('locka.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="../../style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="../../css/style-ie.css" />
<![endif]-->
<script type="text/javascript" src="../../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../js/slide.js"></script>
<script type="text/javascript" src="../../js/contentslider.js"></script>
<script type="text/javascript" src="../../js/slides.min.jquery.js"></script>
<script type="text/javascript" src="../../js/custom.js"></script>
<!-- Slider START  -->
<link rel="stylesheet" href="../../css/nivo-slider.css" type="text/css" media="screen" />
<!-- Slider END -->

<style type="text/css">
body{
background:#fff;
}
/* Some stylesheet reset */
#cssmenu > ul{
	list-style: none;
	margin: 0;
	padding: 0;
	vertical-align: baseline;
	line-height: 1;
}

/* The container */
#cssmenu > ul {
	display: block;
	position: relative;
	width: 110px;
}

	/* The list elements which contain the links */
	#cssmenu > ul li {
		display: block;
		position: relative;
		margin: 0;
		padding: 0;
		width: 110px;	
	}

		/* General link styling */
		#cssmenu > ul li a {
			/* Layout */
			display: block;
			position: relative;
			margin: 0;
			border-top: 1px dotted #fff;
			border-bottom: 1px solid #42C0FB;
			padding: 6px 10px;
			width: 110px;

			/* Typography */
	color: #3dafea;
			text-decoration: none;
		
			text-shadow: 0 1px 0 #fff;
			font-size: 13px;
			font-weight: 300;

			/* Background & effects */
			background: #fff;
		}



		/* The hover state of the menu/submenu links */
		#cssmenu > ul li>a:hover, #cssmenu > ul li:hover>a {
			color: #fff;
			text-shadow: 0 1px 0 rgba(0, 0, 0, .3);
			background: #42C0FB;
			background: -webkit-linear-gradient(bottom, #42C0FB, #74d7f3);
			background: -ms-linear-gradient(bottom, #42C0FB, #74d7f3); 
			background: -moz-linear-gradient(bottom, #42C0FB, #74d7f3);
			background: -o-linear-gradient(bottom, #42C0FB, #74d7f3);
			border-color: transparent;
		}

		/* The arrow indicating a submenu */
		#cssmenu > ul .has-sub>a::after {
			content: '';
			position: absolute;
			top: 16px;
			right: 10px;
			width: 0px;
			height: 0px;

			/* Creating the arrow using borders */
			border: 4px solid transparent;
			border-left: 4px solid #3dafea; 
		}

		/* The same arrow, but with a darker color, to create the shadow effect */
		#cssmenu > ul .has-sub>a::before {
			content: '';
			position: absolute;
			top: 17px;
			right: 10px;
			width: 0px;
			height: 0px;

			/* Creating the arrow using borders */
			border: 4px solid transparent;
			border-left: 4px solid #fff;
		}

		/* Changing the color of the arrow on hover */
		#cssmenu > ul li>a:hover::after, #cssmenu > ul li:hover>a::after {
			border-left: 4px solid #fff;
		}

		#cssmenu > ul li>a:hover::before, #cssmenu > ul li:hover>a::before {
			border-left: 4px solid rgba(0, 0, 0, .25);
		}

	
		/* THE SUBMENUS */
		#cssmenu > ul ul {
			position: absolute;
			left: 150px;
			top: -9999px;
			padding-left: 5px;
			opacity: 0;
			/* The fade effect, created using an opacity transition */
			-webkit-transition: opacity .3s ease-in;
			-moz-transition: opacity .3s ease-in;
			-o-transition: opacity .3s ease-in;
			-ms-transition: opacity .3s ease-in;
		}

		/* Showing the submenu when the user is hovering the parent link */
		#cssmenu > ul li:hover>ul {
			top: 0px;
			opacity: 1;
		}
</style>

<link rel="stylesheet" href="./css/prettyphoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="./js/jquery.prettyphoto.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<div id='cssmenu'>
<ul>
<small>
   <li><a href='new_pm.php' target="viewframe">Compose</a></li>
   <li><a href='list_pm.php' target="viewframe">Inbox</a></li>
   <li><a href='#'>Sent</a></li>
   <li><a href='group_pm.php' target="viewframe">Group Mailing</a></li>
</small>
</ul>
</div>

</body>
</html>