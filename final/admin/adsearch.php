<?php
include('locka.php');
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$regno=addslashes($_POST['regno']);
$course=addslashes($_POST['course']);
if($course=="ug")
{
$result = mysql_query("SELECT dept FROM finalug WHERE regno = '$regno'");
$table="finalug";
}
else if($course=="pg")
{
$result = mysql_query("SELECT dept FROM finalpg WHERE regno = '$regno'");
$table="finalpg";
}
else if($course=="mba")
{
$result = mysql_query("SELECT dept FROM finalmba WHERE regno = '$regno'");
$table="finalmba";
}
else if($course=="mca")
{
$result = mysql_query("SELECT dept FROM finalmca WHERE regno = '$regno'");
$table="finalmca";
}
$row=mysql_fetch_array($result);
$active=$row['0'];
if ($active) {
session_start();

$_SESSION['reg_no']=$regno;
$_SESSION['table']=$table;
header("location: adm.php");
}
else
{
echo "<div id=error>Number Not Exists</div>";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="../../style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="../../css/style-ie.css" />
<![endif]-->
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../js/slide.js"></script>
<script type="text/javascript" src="../../js/contentslider.js"></script>
<script type="text/javascript" src="../../js/slides.min.jquery.js"></script>
<script type="text/javascript" src="../../js/custom.js"></script>
<script type="text/javascript" src="../../js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../../js/jquery.easing.1.3.js.js"></script>


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

<script type="text/javascript">
var ck_regno = /^[A-Za-z0-9 .]{7,20}$/;
function newVal() {
var s1 = document.getElementById('new').value;

if (!ck_regno.test(s1)) 
{
document.getElementById("news").innerHTML="&nbsp;&nbsp;Min 6 Chars";
}
else
{
document.getElementById("news").innerHTML=" ";
snew=s1;
}
   } 

</script>

<link rel="stylesheet" href="./css/prettyphoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="./js/jquery.prettyphoto.js" type="text/javascript" charset="utf-8"></script>
<style>
select
{
border:solid 2px #3BB9FF;
font-size:14px;
padding:4px;
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
width:192px;

}

textarea
{
border:solid 2px #3BB9FF;
font-size:14px;
padding:4px;
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
-moz-box-shadow: 3px 3px 5px #C8BBBE;
-webkit-box-shadow: 3px 3px 5px #C8BBBE;
box-shadow: 3px 3px 5px #C8BBBE;
}


input[type="text"], input[type="password"]
{
  

font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
border:solid 2px #3BB9FF;
font-size:14px;
padding:4px;
color:#151B54;
width:180px;
}
input[type="submit"],input[type="reset"]
{
border:solid 1px #3BB9FF;
background-color:#3BB9FF;
color:#fff;
font-size:14px;
padding:4px;
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
-moz-box-shadow: 2px 2px 2px #C8BBBE;
-webkit-box-shadow: 2px 2px 2px #C8BBBE;
box-shadow: 2px 2px 2px #C8BBBE;

}
#link
{
border:solid 1px #3BB9FF;
background-color:#3BB9FF;
color:#fff;
font-size:14px;
padding:5px;
text-decoration: none;
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
-moz-box-shadow: 2px 2px 2px #C8BBBE;
-webkit-box-shadow: 2px 2px 2px #C8BBBE;
box-shadow: 2px 2px 2px #C8BBBE;

}
.error
{
font-size:11px;
color:#cc0000;
padding:4px;
}
label
{

font-size:14px;

font-weight:bold;
color:#000000;

}
#msg
{
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
color:#42C0FB;
margin:10px 0 0 80px;
}
#error
{
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
color:#FF0000;
margin:500px 0 0 550px;
position:absolute;
z-index:50;
}
#news
{
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
color:#42C0FB;
font-size:12px;
}
#cnews
{
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
color:#42C0FB;
font-size:12px;
}
fieldset {    
margin:20px 0 10px 220px;
height: 350px;
width:400px;
border: 1px solid #42C0FB;
 } 
#lognm {    
border: 1px solid #42C0FB;
padding: 0.35em 0.625em 0.75em; 
margin:80px 0 0 720px;
position:absolute;
height: 10px;
width:120px;
} 


</style>
</head>
<body>


<div id="main_container">
<div class="main_content">
			<!-- LOGO -->
			<a id="logo" title="Homepage" href="./index.html"><img src="../../images/logo.jpg" alt=" " width="350" height="60"/></a>
			<!--LOGO ENDS  -->
<fieldset id="lognm">
<small>Welcome T&P <font color="#3BB9FF"><?php echo $login_session; ?></font></small>
</fieldset>
<div id="nav_menu" class="main-menu">	<!--  MAIN  NAVIGATION--> 
				<ul> 
					<li><a class="transition" href="./index.php" title="Home" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Home</a></li> 
					<li><a class="transition" href="./messages.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Messages</a></li>					
					<li><a class="transition" href="./adadds.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Add Student</a></li> 
					<li><a class="current" href="./adsearch.php" style="text-decoration: none; border-bottom: 5px solid #42C0FB">Modify Profile</a></li>
					<li><a class="transition" href="./adexport.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Reports</a></li> 
					<li><a class="transition" href="./adchpwd.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Change Password</a></li>
					<li><a class="transition" href="./logout.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Logout</a></li> 
				</ul>
			
</div>



<div class="fullwidth_content">

<form action="" method="POST" name="frm">
<fieldset>
<div class="grid">
<div class="row">
<div class="span4">
<small><font style="margin:0 0 0 0px;" color="#999" size="4">Search Student</font></small></br></br>

<label>Course:</label><br>
<select name="course">
<option value="">--Select Course--</option>
<option value="ug">UG</option>
<option value="pg">PG</option>
<option value="mba">MBA</option>
<option value="mca">MCA</option>
</select><br>
<label>Reg No:</label></br><input type="text" name="regno" onKeyUp="newVal()" id="new" /><span id="news"></span></br>

<input style="margin:15px 0 0 70px;" type="submit" name="store" value="Search" id='submit'/>

</div>
</div>
</div>
</form>
</div>
</div><!--end of main_container--> 

        <div class="bottom_divider"></div>
	
<small><div style="width:900px; float:left; margin:10px 0px 0 15px;">Copyright © 2014 T & P Cell - All Rights Reserved by <a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></div>
<div style="float:right; margin:-15px 10px 0 0px;">This Website is best viewed in Firefox/Google Chrome</div></small>
<!-- Slider START  -->
    <script type="text/javascript" src="../../js/jquery.nivo.slider.pack.js"></script>
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