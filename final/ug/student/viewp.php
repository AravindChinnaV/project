<?php
include('lock.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="../../../style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="../../../css/style-ie.css" />
<![endif]-->


<link rel="stylesheet" type="text/css" href="../../../css/stylet.css" media="screen" />
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
			<a id="logo" title="Homepage" href="./index.php"><img src="../../../images/logo.jpg" alt=" " width="350" height="60"/></a>
<!--LOGO ENDS  -->
<fieldset>
<small>Welcome&nbsp;&nbsp;<font color="#3BB9FF"><?php echo $login_session; ?></font></small>
</fieldset>

						<div id="nav_menu" class="main-menu ">	<!--  MAIN  NAVIGATION--> 
				<ul><small> 
					<li><a class="transition" href="./index.php" title="Home" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Home</a></li> 
					<li><a class="transition" href="./messages.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Messages</a></li>
					<li><a class="current" href="./viewp.php" style="text-decoration: none; border-bottom: 5px solid #42C0FB">View Profile</a></li> 
					<li><a class="transition" href="./updp.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Modify Profile</a></li>
					<li><a class="transition" href="./chpwd.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Change Password</a></li> 
					<li><a class="transition" href="./logout.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Logout</a></li> </small>
				</ul> 
			
</div>


		<a onclick="jQuery('html, body').animate( { scrollTop: 0 }, 'slow' );" style="margin:10px 0 0 10px;" href="" class="bookmark" title="Bookmark"><img src="../../../images/top.gif" alt="" title="" border="0" /></a>

        <div class="fullwidth_content">
<?php
$result = mysql_query("SELECT name,regno,gender,mail,mobile,dob,xth,xthyop,inter,interyop,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,agg,blogs,hob,focc,address,pab,height,weight,sight,fname,mname,dept FROM finalug WHERE regno = '$login_session'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
?>
<small><table border=1>
<tr>
<th scope="col"><strong>Field</strong></th>
<th>Value</th>
</tr>
<tr>
<td><font color="#808080">Name</font></td>
<td><b><?php echo $row[0];?></b></h5>
</tr>
<tr  class="odd">
<td><font color="#808080">Reg No</font></td>
<td><b><?php echo $row[1];?></b></td>
</tr>
<tr>
<td><font color="#808080">Gender</font></td>
<td><b><?php echo $row[2];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">Mail-id</font></td>
<td><b><?php echo $row[3];?></b></td>
</tr>
<tr>
<td><font color="#808080">Mobile No</font></td>
<td><b><?php echo $row[4];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">Date of Birth</font></td>
<td><b><?php echo $row[5];?></b></td>
</tr>
<tr>
<td><font color="#808080">% in 10th</font></td>
<td><b><?php echo $row[6];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">10th Year of Pass</font></td>
<td><b><?php echo $row[7];?></b></td>
</tr>
<tr>
<td><font color="#808080">% in Inter/Diploma</font></td>
<td><b><?php echo $row[8];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">Inter/Diploma Year of Pass</font></td>
<td><b><?php echo $row[9];?></b></td>
</tr>
<tr>
<td><font color="#808080">% in Semester 1</font></td>
<td><b><?php echo $row[10];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">% in Semester 2</font></td>
<td><b><?php echo $row[11];?></b></td>
</tr>
<tr>
<td><font color="#808080">% in Semester 3</font></td>
<td><b><?php echo $row[12];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">% in Semester 4</font></td>
<td><b><?php echo $row[13];?></b></td>
</tr>
<tr>
<td><font color="#808080">% in Semester 5</font></td>
<td><b><?php echo $row[14];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">% in Semester 6</font></td>
<td><b><?php echo $row[15];?></b></td>
</tr>
<tr>
<td><font color="#808080">% in Semester 7</font></td>
<td><b><?php echo $row[16];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">% in Semester 8</font></td>
<td><b><?php echo $row[17];?></b></td>
</tr>
<tr>
<td><font color="#808080">Aggregate in Btech</font></td>
<td><b><?php echo $row[18];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">No.of Backlogs</font></td>
<td><b><?php echo $row[19];?></b></td>
</tr>
<tr>
<td><font color="#808080">History of Backlogs</font></td>
<td><b><?php echo $row[20];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">Father Occupation</font></td>
<td><b><?php echo $row[21];?></b></td>
</tr>
<tr>
<td><font color="#808080">Address</font></td>
<td><b><?php echo $row[22];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">Preference after Btech</font></td>
<td><b><?php echo $row[23];?></b></td>
</tr>
<tr>
<td><font color="#808080">Height in cms</font></td>
<td><b><?php echo $row[24];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">Weight in kgs</font></td>
<td><b><?php echo $row[25];?></b></td>
</tr>
<tr>
<td><font color="#808080">Eye Sight</font></td>
<td><b><?php echo $row[26];?></b></td>
</tr>

<tr class="odd">
<td><font color="#808080">Father Name</font></td>
<td><b><?php echo $row[27];?></b></td>
</tr>

<tr>
<td><font color="#808080">Mother Name</font></td>
<td><b><?php echo $row[28];?></b></td>
</tr>
<tr class="odd">
<td><font color="#808080">Department</font></td>
<td><b><?php echo $row[29];?></b></td>
</tr>
</table></small>
</div>
</div><!--end of main_container--> 

        <div class="bottom_divider"></div>
	
<small><div style="width:900px; float:left; margin:10px 0px 0 15px;">Copyright © 2014 T & P Cell - All Rights Reserved by <a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></div>
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