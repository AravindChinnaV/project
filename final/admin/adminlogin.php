
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

$sql="SELECT name FROM itdb WHERE regno='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['0'];
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

$_SESSION['login_user']=$myusername;
if($myusername=="admin")
{
header("location: admin.php");
}
else if($myusername=="it"||$myusername=="cse"||$myusername=="ece")
{
header("location: coord.php");
}
else
{
header("location: index.php");
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
<link href="css/site.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="./js/slide.js"></script>
<script type="text/javascript" src="./js/contentslider.js"></script>
<script type="text/javascript" src="./js/slides.min.jquery.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js.js"></script>

<!-- Cufon START  -->
<script type="text/javascript" src="./js/cufon-yui.js"></script>
<script src="./js/familian_son_400.font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.logo h1', { fontFamily: 'Familian Son' });
Cufon.replace('.slogan', { fontFamily: 'Familian Son' });
Cufon.replace('ul.menu_list', { fontFamily: 'Familian Son' });
Cufon.replace('.tab_head', { fontFamily: 'Familian Son' });
Cufon.replace('.pg_description h2', { fontFamily: 'Familian Son' });
Cufon.replace('a.read_more', { fontFamily: 'Familian Son' });
Cufon.replace('h1', { fontFamily: 'Familian Son' });
Cufon.replace('h2', { fontFamily: 'Familian Son' });
Cufon.replace('h3', { fontFamily: 'Familian Son' });
Cufon.replace('h4', { fontFamily: 'Familian Son' });
Cufon.replace('.left_section_more a', { fontFamily: 'Familian Son' });
Cufon.replace('.right_section_more a', { fontFamily: 'Familian Son' });
Cufon.replace('.sidebar_more a', { fontFamily: 'Familian Son' });
Cufon.replace('.navigation', { fontFamily: 'Familian Son' });
</script>    
<!-- Cufon END  -->
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
			<a id="logo" title="Homepage" href="./index.html"><img style="border-style:none;" src="./images/logo.jpg" alt=" " width="350" height="60"/></a>
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

<li class="username">
<img src="images/user.png"/>
<div style="margin:-36px 0 0 60px;"><input type="text" name="username" id="username" />
<span class="error"></span></div>
</li>
<li class="password">
<img src="images/pwd.png"/>
<div style="margin:-36px 0 0 60px;"><input type="password" name="password" id="password" />
<span class="error"></span></div>
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
	
<div style="width:900px; float:left; margin:10px 0px 0 15px;"><small>Copyright © 2012 T & P Cell - All Rights Reserved by <a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></small></div>
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