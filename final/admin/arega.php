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
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../js/slide.js"></script>
<script type="text/javascript" src="../../js/contentslider.js"></script>
<script type="text/javascript" src="../../js/slides.min.jquery.js"></script>
<script type="text/javascript" src="../../js/custom.js"></script>
<!-- Slider START  -->
<link rel="stylesheet" href="../../css/nivo-slider.css" type="text/css" media="screen" />
<!-- Slider END -->

<link href="../../css/site.css" rel="stylesheet" type="text/css">
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
margin:10px 0 0 560px;
}
#error
{
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
color:#FF0000;
margin:10px 0 0 100px;
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
margin:80px 0 0 720px;
position:absolute;
height: 10px;
width:130px;
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
			<a id="logo" title="Homepage" href="./index1.php"><img src="../../images/logo.jpg" alt=" " width="350" height="60"/></a>
			<!--LOGO ENDS  -->

<fieldset id="lognm">
<small>Welcome T&P <font color="#3BB9FF"><?php echo $login_session; ?></font></small>
</fieldset>
						<div id="nav_menu" class="main-menu ">	<!--  MAIN  NAVIGATION--> 
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
<?php
$regno=$_SESSION['reg_no'];
$table=$_SESSION['table'];
$result = mysql_query("SELECT submit,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,agg,blogs,hob FROM ".$table." WHERE regno = '$regno'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
$submit=$row[0];
$sem1=$row[1];
$sem2=$row[2];
$sem3=$row[3];
$sem4=$row[4];
$sem5=$row[5];
$sem6=$row[6];
$sem7=$row[7];
$sem8=$row[8];
$agg=$row[9];
$blogs=$row[10];
$hob=$row[11];
$oo=NULL;
$ot=NULL;
$to=NULL;
$tt=NULL;
$tho=NULL;
$tht=NULL;
$fo=NULL;
$ft=NULL;
$ag=NULL;
$bl=NULL;
$hb=NULL;
$hs=NULL;
$hos=NULL;
if($hob=="Yes")
{
$hs="selected";
}
else if($hob=="No")
{
$hos="selected";
}
?>
<form action="" method="POST">
<fieldset>
<fieldset id="nm">
<small>Modify&nbsp;<font color="#3BB9FF"><?php echo $regno; ?></font></small>
</fieldset>
<div class="grid">
<div class="row">
<div class="span3">
<label>% in 1st Year-1st sem:</label></br><input type="text" name="sem1" id="sem1" value="<?php echo "$sem1";?>" <?php echo "$sem1";?>/></br>
<label>% in 1st Year-2nd Sem:</label></br><input type="text" name="sem2" id="sem2" value="<?php echo "$sem2";?>" <?php echo "$sem2";?>/></br>
<label>% in 2nd Year-1st Sem:</label></br><input type="text" name="sem3" id="sem3" value="<?php echo "$sem3";?>" <?php echo "$sem3";?>/></br>
<label>% in 2nd Year-2nd Sem:</label></br><input type="text" name="sem4" id="sem4" value="<?php echo "$sem4";?>" <?php echo "$sem4";?>/></br>
<label>% in 3rd Year-1st Sem:</label></br><input type="text" name="sem5" id="sem5" value="<?php echo "$sem5";?>" <?php echo "$sem5";?>/></br>
</div>
<div class="span3">
<label>% in 3rd Year-2nd Sem:</label></br><input type="text" name="sem6" id="sem6" value="<?php echo "$sem6";?>" <?php echo "$sem6";?>/></br>
<label>% in 4th Year-1st Sem:</label></br><input type="text" name="sem7" id="sem7" value="<?php echo "$sem7";?>" <?php echo "$sem7";?>/></br>
<label>% in 4th Year-2nd Sem:</label></br><input type="text" name="sem8" id="sem8" value="<?php echo "$sem8";?>" <?php echo "$sem8";?>/></br>
<label>Aggregate in BTech:</label></br><input type="text" name="agg" id="agg" value="<?php echo "$agg";?>" <?php echo "$agg";?>/></br>
<label>No.of Backlogs if any:</label></br><input type="text" name="blogs" id="blogs" value="<?php echo "$blogs";?>" <?php echo "$bl";?>/></br>
</div>
<div class="span3">
<label>History of Backlogs:</label>
<br><select name="hob" <?php echo "$hb";?>>
<option readonly>Select</option>
<option value="Yes" <?php echo "$hs";?>>Yes</option>
<option value="No" <?php echo "$hos";?>>No</option>
</select></br><br><br><br>

<input style="margin:50px 0 0 40px;" type="submit" name="store" value="Save" id='save'/>
<a style="margin:50px 0 0 25px;" href="adm.php" id='link'>Back</a>
</div>
</div>
</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$sem1=addslashes($_POST['sem1']);
$sem2=addslashes($_POST['sem2']);
$sem3=addslashes($_POST['sem3']);
$sem4=addslashes($_POST['sem4']); 
$sem5=addslashes($_POST['sem5']);
$sem6=addslashes($_POST['sem6']); 
$sem7=addslashes($_POST['sem7']);
$sem8=addslashes($_POST['sem8']);
$agg=addslashes($_POST['agg']); 
$blogs=addslashes($_POST['blogs']);
$hob=addslashes($_POST['hob']);

if($_POST['store']=='Save')
{
$sql="UPDATE ".$table." SET sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8',agg='$agg',blogs='$blogs',hob='$hob' WHERE regno='$regno'";
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
$sql="UPDATE itdb SET sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8',agg='$agg',blogs='$blogs',hob='$hob',submit='yes' WHERE regno='$regno'";
$result=mysql_query($sql);
if(!$result)
{
echo "Something gone wrong try agian";
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