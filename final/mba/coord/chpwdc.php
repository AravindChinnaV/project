<?php
include('lockc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="../../../style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="../../../css/style-ie.css" />
<![endif]-->
<link href="../../../css/site.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../../js/slide.js"></script>
<script type="text/javascript" src="../../../js/contentslider.js"></script>
<script type="text/javascript" src="../../../js/slides.min.jquery.js"></script>
<script type="text/javascript" src="../../../js/custom.js"></script>
<!-- Slider START  -->
<link rel="stylesheet" href="../../../css/nivo-slider.css" type="text/css" media="screen" />
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
	
<script type="text/javascript" language="JavaScript">
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var snew;
function newVal() {
var s1 = document.getElementById('new').value;

if (!ck_password.test(s1)) 
{
document.getElementById("news").innerHTML="&nbsp;&nbsp;Min 6 Chars";
}
else
{
document.getElementById("news").innerHTML=" ";
snew=s1;
}
   } 
   function cnewVal() {
  var s1 = document.getElementById('new').value;
  var s2 = document.getElementById('cnew').value;
  

if (s1==s2) 
{

document.getElementById("cnews").innerHTML=" ";
}
else
{

document.getElementById("cnews").innerHTML="&nbsp;&nbsp;Not Matched";
}

   } 

</script>
<style type="text/css">
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
margin:10px 0 0 100px;
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
color:#FF0000;
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
margin:80px 0 0 710px;
position:absolute;
height: 10px;
width:150px;
} 

</style>

<link rel="stylesheet" href="./css/prettyphoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="./js/jquery.prettyphoto.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>


<div id="main_container">
<div class="main_content">
			<!-- LOGO -->
			<a id="logo" title="Homepage" href="./index.html"><img src="../../../images/logo.jpg" alt=" " width="350" height="60"/></a>
			<!--LOGO ENDS  -->
<fieldset id="lognm">
<small>Welcome&nbsp;&nbsp;<font color="#3BB9FF"><?php echo $login_session; ?></font>&nbsp;Coordinator</small>
</fieldset>
						<div id="nav_menu" class="main-menu ">	<!--  MAIN  NAVIGATION--> 
				
				<ul> 
					<li><a class="transition" href="./coord.php" title="Home" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Home</a></li>
					<li><a class="transition" href="./messages.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Messages</a></li>					
					<li><a class="transition" href="./adds.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Add Student</a></li> 
					<li><a class="transition" href="./search.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Modify Profile</a></li>
					<li><a class="transition" href="./export.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Reports</a></li> 
					<li><a class="current" href="./chpwdc.php" style="text-decoration: none; border-bottom: 5px solid #42C0FB">Change Password</a></li>
					<li><a class="transition" href="./logout.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Logout</a></li> 
				</ul> 
				
</div>



        <div class="fullwidth_content">

<form action="" method="POST" id="PwdForm">
<fieldset>
<div class="grid">
<div class="row">
<div class="span4">
<small><font style="margin:0 0 0 0px;" color="#999" size="4">Change Password</font></small></br></br>
<label>Old Password:</label></br><input type="password" name="old" id="old"/></br>
<label>New Password:</label></br><input type="password" name="new" onKeyUp="newVal()" id="new" /><span id="news"></span></br>
<label>Confirm New Password:</label></br><input type="password" name="cnew" onKeyUp="cnewVal()" id="cnew"/><span id="cnews"></span></br>

<input style="margin:25px 0 0 0px;" type="submit" name="store" value="Change Password" id='submit'/>
<input style="margin:0px 0 0 25px;" type="reset" name="store" value="Reset" id='submit'/>
</div>
</div>
</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["old"]) && !empty($_POST["new"]) && !empty($_POST["cnew"]))
{
$old=addslashes($_POST['old']); 
$new=addslashes($_POST['new']);
$cnew=addslashes($_POST['cnew']); 
$us=$_SESSION['login_user'];
$result = mysql_query("SELECT regno FROM `finalmba` WHERE regno='$us' and password='$old'");
$row = mysql_fetch_row($result);
$count=mysql_num_rows($result);

if($count==1 && $new==$cnew)
{
$sql="UPDATE finalmba SET password='$new' WHERE regno='$login_session'";
$result=mysql_query($sql);
if(!$result)
{
echo "Something gone wrong try agian";
}
else
{
echo "<div id=msg>Changed successfully</div>";
}
}
else
{
echo "<div id=msg>Incorrect old password</div>";
}
}
?>

</div>
</div><!--end of main_container--> 

        <div class="bottom_divider"></div>
	
<small><div style="width:900px; float:left; margin:10px 0px 0 15px;">Copyright © 2012 T & P Cell - All Rights Reserved by <a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></div>
<div style="float:right; margin:-15px 10px 0 0px;">This Website is best viewed in Firefox/Google Chrome</div></small>
	

<!-- Slider START  -->
    <script type="text/javascript" src="../../../js/jquery.nivo.slider.pack.js"></script>
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