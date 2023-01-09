<html>
<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<link href="css/modern.css" rel="stylesheet">
<link href="css/modern-responsive.css" rel="stylesheet">

<link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
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
margin:0 0 20px 38px;
padding: 0.35em 0.625em 0.75em;
width:230px;
height:100px;
float:left;
}
button
{
-moz-box-shadow: 2px 2px 2px #C8BBBE;
-webkit-box-shadow: 2px 2px 2px #C8BBBE;
box-shadow: 2px 2px 2px #C8BBBE;
}
</style>
</head>
<body>
<div id="main_container">
<div class="main_content">
<!-- LOGO -->
<a id="logo" title="Homepage" href="./index.php"><img src="./images/logo.jpg" alt=" " width="350" height="60"/></a>
<!--LOGO ENDS  -->
<div class="fullwidth_content">
<!-- SLIDESHOW STARTS-->
<div id="slider-wrapper">
<div id="slider" class="nivoSlider">
<img src="images/slideshow/slide-01.jpg" alt="" title="" />
<img src="images/slideshow/slide-02.jpg" alt="" title="" />
<img src="images/slideshow/slide-03.jpg" alt="" title="" />
<img src="images/slideshow/slide-04.jpg" alt="" title="" />
</div>
</div>
<!-- SLIDESHOW ENDS-->
<fieldset>
<img src="images/admin.png"/>
<a class="transition" style="position:absolute;margin:35px 0 0 5px;" href="alogin.php"><button>TPO Login</button></a>
</fieldset>
<fieldset>
<img src="images/coord.png"/>
<a class="transition" style="position:absolute;margin:35px 0 0 5px;" href="clogin.php"><button style="text-align:left;">Coordinator Login</button></a>
</fieldset>
<fieldset>
<img src="images/student.png"/>
<a class="transition" style="position:absolute;margin:35px 0 0 5px;" href="slogin.php"><button>Student Login</button></a>
</fieldset>
</div>
</div><!--end of main_container--> 
<div class="bottom_divider"></div>
<div style="width:900px; float:left; margin:10px 0px 0 15px;"><small>Copyright © 2014 T & P Cell - All Rights Reserved by </small><a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></div>
<div style="float:right; margin:-15px 10px 0 0px;"><small>This Website is best viewed in Firefox/Google Chrome</small></div>
<!-- Slider START  -->
<script type="text/javascript" src="./js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/assets/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/modern/buttonset.js"></script>
<script type="text/javascript" src="js/modern/input-control.js"></script>
<script type="text/javascript" src="js/modern/pagecontrol.js"></script>
<script type="text/javascript">
$(window).load(function() {
$('#slider').nivoSlider();
});
</script>
<!-- Slider END -->
</div>
</body>
</html>