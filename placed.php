
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="./css/style-ie.css" />
<![endif]-->


<link rel="stylesheet" type="text/css" href="./css/stylet.css" media="screen" />
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="./js/slide.js"></script>
<script type="text/javascript" src="./js/contentslider.js"></script>
<script type="text/javascript" src="./js/slides.min.jquery.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>
<!-- Slider START  -->
<link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen" />
<!-- Slider END -->

<script type="text/javascript">
var $ = jQuery.noConflict();  
$(document).ready(function(){  

setInterval(
			function()
			{
			$("#logo img").fadeTo(1000,0.2).fadeTo(3000,2); 
			}, 30);
			

$("#secondpane li.menu_head").mouseover(function()
{
$(this).next("li.menu_body").slideDown(500).siblings("li.menu_body").slideUp("slow");
});  
});
</script>
    <script type="text/javascript">
    $(function() { 
    $('.main_content, .main_navi').hide(); 
    $(window).load( function() {  
    $('#loader').fadeOut();
    $('.main_content, .main_navi').fadeIn(2000); 
    } );
    } );
                        
    $(document).ready(function() {
    $("body").css("display", "none");

    $("body").fadeIn(2000);

	$("a.transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(1000, redirectPage);
	});

	function redirectPage() {
		window.location = linkLocation;
	}
    });
    </script>
<style>
fieldset {   
border: 1px solid #42C0FB;
padding: 0.35em 0.625em 0.75em; 
margin:80px 0 0 750px;
position:absolute;
height: 10px;
width:105px;
} 
</style>
</head>
<body>


<div id="main_container">
<div class="main_content">
			<!-- LOGO -->
			<a id="logo" title="Homepage" href="./index1.php"><img src="./images/logo.jpg" alt=" " width="350" height="60"/></a>
<!--LOGO ENDS  -->


						


		<a onclick="jQuery('html, body').animate( { scrollTop: 0 }, 'slow' );" style="margin:10px 0 0 10px;" href="" class="bookmark" title="Bookmark"><img src="./images/top.gif" alt="" title="" border="0" /></a>

        <div class="fullwidth_content">
<ul>
<li><a href="2013-14.php">Internship details for the year 2013-14</a></li>
<li><span style="color: #99ccff;"><a href="2012-13.php">List of Final Year Students Selected in Campus Selections during Year 2012-13 as of now</a></span></li>
<li><a href="2011-12.php">List of Final Year Students Selected in Campus Selections during Year 2011-12</a></li>
<li><span style="color: #0000ff;"><a title="Placements 2009-10" href="2010-11.php" target="_self">List of Final Year Students Selected in Campus Selections during Year 2010-11<br /></a></span></li>
<li><a title="Placements 2009-10" href="2009-10.php" target="_self">List of Final Year Students Selected in Campus Selections during Year 2009-10</a></li>
<li><a href="http://vrsiddhartha.ac.in/placements/placements08-09.html" target="_blank">List of Final Year Students Selected in Campus Selections during Year 2008-09</a></li>
<li><a href="http://vrsiddhartha.ac.in/placements/placements07-08.html" target="_blank">List of Students Selected in Campus Selections during Year 2007-08</a></li>
<li><a href="http://vrsiddhartha.ac.in/placements/placements06-07.html" target="_blank">List of Students Selected in Campus Selections during Year 2006-07</a></li>
<li><a href="http://vrsiddhartha.ac.in/placements/Selected-2005-06.htm" target="_blank">List of Students Selected in Campus Selections during Year 2005-06</a> </li>
</ul>	

</div>
</div><!--end of main_container--> 

        <div class="bottom_divider"></div>
	
<small><div style="width:900px; float:left; margin:10px 0px 0 15px;">Copyright © 2014 T & P Cell - All Rights Reserved by <a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></div>
<div style="float:right; margin:-15px 10px 0 0px;">This Website is best viewed in Firefox/Google Chrome</div></small>
	

<!-- Slider START  -->
    <script type="text/javascript" src="./js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!-- Slider END -->


<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_rounded',slideshow:2000, autoplay_slideshow: false});
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'fast',slideshow:10000});
});
</script>
</div>
</body>
</html>