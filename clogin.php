
<?php
include("config.php");
session_start();
?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form 
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 
$myyear=addslashes($_POST['year']); 
$mycourse=addslashes($_POST['course']); 
if($myyear=="prefinal")
{ 
if($mycourse=="ug")
{
$tablename="preug";
}
else if($mycourse=="pg")
{
$tablename="prepg";
}
else if($mycourse=="mba")
{
$tablename="premba";
}
else if($mycourse=="mca")
{
$tablename="premca";
}
}
else if($myyear=="final")
{ 
if($mycourse=="ug")
{
$tablename="finalug";
}
else if($mycourse=="pg")
{
$tablename="finalpg";
}
else if($mycourse=="mba")
{
$tablename="finalmba";
}
else if($mycourse=="mca")
{
$tablename="finalmca";
}
}
$result=mysql_query("SELECT regno FROM ".$tablename." WHERE regno='$myusername' and password='$mypassword'");
$row=mysql_fetch_array($result);
$active=$row['0'];
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

$_SESSION['login_user']=$myusername;
$_SESSION['login_year']=$myyear;
$_SESSION['login_course']=$mycourse;
$_SESSION['table']=$tablename;

if($myusername=="ce"||$myusername=="cse"||$myusername=="ece"||$myusername=="eee"||$myusername=="eie"||$myusername=="it"||$myusername=="me")
{
if($myyear=="prefinal")
{
if($mycourse=="ug")
{
header("location: prefinal/ug/coord/index.php");
}
}
else if($myyear=="final")
{
if($mycourse=="ug")
{
header("location: final/ug/coord/index.php");
}
}
}
else if($myusername=="mcse"||$myusername=="mcst"||$myusername=="mse"||$myusername=="mcad"||$myusername=="mcsp"||$myusername=="mte"||$myusername=="mpse"||$myusername=="mth")
{
if($myyear=="prefinal")
{
if($mycourse=="pg")
{
header("location: prefinal/pg/coord/index.php");
}
}
else if($myyear=="final")
{
if($mycourse=="pg")
{
header("location: final/pg/coord/index.php");
}
}
}
else if($myusername=="mba"||$myusername=="mca")
{
if($myyear=="prefinal")
{
if($mycourse=="mba")
{
header("location: prefinal/mba/coord/index.php");
}
if($mycourse=="mca")
{
header("location: prefinal/mca/coord/index.php");
}
}
else if($myyear=="final")
{
if($mycourse=="mba")
{
header("location: final/mba/coord/index.php");
}
if($mycourse=="mca")
{
header("location: final/mca/coord/index.php");
}
}
}
else
{
header("location: main.php");
}
}
else 
{
echo "<center><div style='margin:220px 0 0 530px;position:absolute;z-index:100'><font size=2 color=red>Your Login Name or Password is invalid</font></div></center>";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="./css/style-ie.css" />
<![endif]-->

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="./js/slide.js"></script>
<script type="text/javascript" src="./js/contentslider.js"></script>
<script type="text/javascript" src="./js/slides.min.jquery.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js.js"></script>


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
$(function() 
{
$("ul li:first").show();

var ck_year = /^[A-Za-z0-9 .]{2,20}$/;

var ck_course = /^[A-Za-z0-9 .]{2,20}$/;

var ck_username = /^[A-Za-z0-9 .]{2,20}$/;

var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;

$('#year').change(function()
{
var year=$(this).val();

if (!ck_year.test(year)) 
{
 $(this).next().show().html("Ex: Pre-Final Year");
}
else
{
$(this).next().hide();
$("li").next("li.course").slideDown({duration: 'slow',easing: 'easeOutElastic'});
}
});

$('#course').change(function()
{
var course=$(this).val();

if (!ck_course.test(course)) 
{
 $(this).next().show().html("Ex: UG");
}
else
{
$(this).next().hide();
$("li").next("li.username").slideDown({duration: 'slow',easing: 'easeOutElastic'});
}
});

$('#username').keyup(function()
{
var username=$(this).val();

if (!ck_username.test(username)) 
{
 $(this).next().show().html("Ex: L10IT127");
}
else
{
$(this).next().hide();
$("li").next("li.password").slideDown({duration: 'slow',easing: 'easeOutElastic'});
}
});

$('#password').keyup(function()
{
var password=$(this).val();
if (!ck_password.test(password)) 
{
 $(this).next().show().html("Min 6 Chars");
}
else
{
$(this).next().hide();
$("li").next("li.submit").slideDown({duration: 'slow',easing: 'easeOutElastic'});
}
});

})
</script>

<link rel="stylesheet" href="./css/prettyphoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="./js/jquery.prettyphoto.js" type="text/javascript" charset="utf-8"></script>
<style>

ul
{
padding:0px;
margin:0px;
list-style:none;
}
li
{
padding:5px;
display:none;
}
label
{
font-size:14px;
font-weight:bold;
color:#463E41;

}

 
fieldset {    

border: 1px solid #42C0FB;
 } 

select
{
border:solid 2px #3BB9FF;
font-size:14px;
padding:4px;
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
width:192px;
-moz-box-shadow: 3px 3px 5px #C8BBBE;
-webkit-box-shadow: 3px 3px 5px #C8BBBE;
box-shadow: 3px 3px 5px #C8BBBE;

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
input[type="submit"]
{
border:solid 1px #3BB9FF;
background : url("images/whitearrow.png") #3BB9FF no-repeat center right;
color:#fff;
font-size:14px;
padding:4px;
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
#form
{
width:400px;
margin:120px auto;
}


</style>
</head>
<body>


<div id="main_container">
<div class="main_content">
			<!-- LOGO -->
			<a id="logo" title="Homepage" href="./index1.php"><img style="border-style:none;" src="./images/logo.jpg" alt=" " width="350" height="60"/></a>
			<!--LOGO ENDS  -->
	


	
        <div class="fullwidth_content">

	
<div id="form">
<form method="post" action="">
<ul>
<fieldset> </br><small>
<font color="#999" size="4">&nbsp;Sign in</font></br></br>
<li class="year">
<img src="images/year.png"/>
<div style="margin:-38px 0 0 60px;">
<select name="year" id="year">
<option value="">--Select Year--</option>
<option value="prefinal">Pre-Final Year</option>
<option value="final">Final Year</option>
</select>
<span class="error"></span></div>
</li>
<li class="course">
<img src="images/course.png"/>
<div style="margin:-38px 0 0 60px;">
<select name="course" id="course">
<option value="">--Select Course--</option>
<option value="ug">UG</option>
<option value="pg">PG</option>
<option value="mba">MBA</option>
<option value="mca">MCA</option>
</select>
<span class="error"></span></div>
</li>
<li class="course">

<li class="username">
<img src="images/user.png"/>
<div style="margin:-36px 0 0 60px;"><input type="text" name="username" id="username" />
<span class="placeholder-text" id="username-placeholder">username</span></div>
</li>
<li class="password">
<img src="images/pwd.png"/>
<div style="margin:-36px 0 0 60px;"><input type="password" name="password" id="password" />
<span class="placeholder-text" id="password-placeholder">password</span></div>
</li>

<li class="submit">
<center><input type="submit" value="Sign in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id='submit'/></center>
</li></small>
</ul>
</form>


</div>


</div>
</div><!--end of main_container--> 

        <div class="bottom_divider"></div>
	
<div style="width:900px; float:left; margin:10px 0px 0 15px;"><small>Copyright © 2014 T & P Cell - All Rights Reserved by <a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></small></div>
<div style="float:right; margin:-15px 10px 0 0px;"><small>This Website is best viewed in Firefox/Google Chrome</small></div>
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