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
<style type="text/css">
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
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
border:solid 2px #3BB9FF;
font-size:14px;
padding:4px;
color:#151B54;
width:180px;
height:120px;

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
margin:10px 0 0 550px;
}
fieldset {    
margin:20px 0 0 20px;
height: 350px;
width:800px;
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
#nm {    
border: 1px solid #42C0FB;
padding: 0.35em 0.625em 0.75em; 
margin:10px 0 0 20px;
position:absolute;
height: 10px;
width:100px;
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
					<li><a class="transition" href="./index.php" title="Home" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Home</a></li> 
					<li><a class="transition" href="./messages.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Messages</a></li>
					<li><a class="transition" href="./adds.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Add Student</a></li> 
					<li><a class="current" href="./search.php" style="text-decoration: none; border-bottom: 5px solid #42C0FB">Modify Profile</a></li>
					<li><a class="transition" href="./export.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Reports</a></li> 
					<li><a class="transition" href="./chpwdc.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Change Password</a></li>
					<li><a class="transition" href="./logout.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Logout</a></li> 
				</ul>  
			
</div>



        <div class="fullwidth_content">
<?php
$regno=$_SESSION['reg_no'];
$result = mysql_query("SELECT submit,focc,address,pab,height,weight,sight,fname,mname FROM finalmba WHERE regno = '$regno'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
$submit=$row[0];
$focc=$row[1];
$address=$row[2];
$pab=$row[3];
$height=$row[4];
$weight=$row[5];
$sight=$row[6];
$fname=$row[7];
$mname=$row[8];
$fo=NULL;
$ad=NULL;
$pb=NULL;
$ht=NULL;
$wt=NULL;
$st=NULL;
$fn=NULL;
$mn=NULL;

?>
<form action="" method="POST">
<fieldset>
<fieldset id="nm">
<small>Modify&nbsp;<font color="#3BB9FF"><?php echo $regno; ?></font></small>
</fieldset>
<div class="grid">
<div class="row">
<div class="span3">
<label>Father Occupation:</label></br><input type="text" name="focc" id="focc" value="<?php echo "$focc";?>" <?php echo "$fo";?>/></br>
<label>Permanent Address:</label></br><textarea name="address" id="address" <?php echo "$ad";?>><?php echo "$address";?></textarea></br>
</div>
<div class="span3">
<label>Preference after BTech:</label></br><input type="text" name="pab" id="pab" value="<?php echo "$pab";?>" <?php echo "$pb";?>/></br>
<label>Height in cms:</label></br><input type="text" name="height" id="height" value="<?php echo "$height";?>" <?php echo "$ht";?>/></br>
<label>Weight:</label></br><input type="text" name="weight" id="weight" value="<?php echo "$weight";?>" <?php echo "$wt";?>/></br>
<label>Eye Sight:</label></br><input type="text" name="sight" id="sight" value="<?php echo "$sight";?>" <?php echo "$st";?>/></br>
</div>
<div class="span3">
<label>Father Name:</label></br><input type="text" name="fname" id="fname" value="<?php echo "$fname";?>" <?php echo "$fn";?>/></br>
<label>Mother Name:</label></br><input type="text" name="mname" id="mname" value="<?php echo "$mname";?>" <?php echo "$mn";?>/></br>

<input style="margin:20px 0 0 30px;" type="submit" name="store" value="Save" id='submit'/>
<a style="margin:50px 0 0 25px;" href="coordm.php" id='link'>Back</a>
</div>
</div>
</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$focc=addslashes($_POST['focc']); 
$address=addslashes($_POST['address']);
$pab=addslashes($_POST['pab']); 
$height=addslashes($_POST['height']);
$weight=addslashes($_POST['weight']); 
$sight=addslashes($_POST['sight']);
$fname=addslashes($_POST['fname']);
$mname=addslashes($_POST['mname']);

if($_POST['store']=='Save')
{
$sql="UPDATE finalmba SET focc='$focc',address='$address',pab='$pab',height='$height',weight='$weight',sight='$sight',fname='$fname',mname='$mname' WHERE regno='$regno'";
$result=mysql_query($sql);
if(!$result)
{
echo "Something gone wrong try agian";
}
else
{
echo "<div id=msg>Saved successfully</div>";
}
}
else
{
$sql="UPDATE prepg SET focc='$focc',address='$address',pab='$pab',height='$height',weight='$weight',sight='$sight',fname='$fname',mname='$mname' WHERE regno='$regno'";
$result=mysql_query($sql);
if(!$result)
{
echo "<div id=error>Something gone wrong try agian</div>";
}
else
{
echo "<div id=msg>Submitted successfully</div>";
}
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