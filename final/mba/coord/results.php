<?php
include('lockc.php');
?>
<?php
if($_POST['result']=='Export')
{
$xth=(!empty($_POST['xth']) ? mysql_real_escape_string($_POST['xth']) : false);
$inter=(!empty($_POST['inter']) ? mysql_real_escape_string($_POST['inter']) : false);
$agg=(!empty($_POST['agg']) ? mysql_real_escape_string($_POST['agg']) : false);
$gender=(!empty($_POST['gender']) ? mysql_real_escape_string($_POST['gender']) : false);
$placed=(!empty($_POST['placed']) ? mysql_real_escape_string($_POST['placed']) : false);
$comp=(!empty($_POST['comp']) ? mysql_real_escape_string($_POST['comp']) : false);  
$query="SELECT regno,name,gender,mail,mobile,land,dob,xth,xthyop,inter,interyop,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,agg,blogs,hob,focc,address,height,weight,sight,fname,mname,dept,comone,comtwo,numcom FROM finalmba WHERE dept='$login_session'";
if($xth){
$query.=" AND xth >= '$xth'";
}
if($inter){
$query.=" AND inter >= '$inter'";
}
if($agg){
$query.="AND agg >= '$agg'";
}
if($gender){
$query.="AND gender='$gender'";
}
if($placed)
{
if($placed=='res')
{
$query.="AND numcom='0'";
}
else
{
$query.="AND (numcom='0' OR numcom='1' OR numcom='2')";
}
}
if($comp){
$query.=" AND (comone='$comp' OR comtwo='$comp')";
}
require 'exportcsv.inc.php';
exportMysqlToCsv($query);
}
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
<script type="text/javascript" src="../../../js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../../../js/jquery.easing.1.3.js.js"></script>

<link href="../../../css/site.css" rel="stylesheet" type="text/css">
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
select
{
border:solid 1px #3BB9FF;
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
border:solid 1px #3BB9FF;
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
margin:450px 0 0 540px;
position: absolute;
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
height: 450px;
width:400px;
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

table {
	width:60%;
	border-top:1px solid #e5eff8;
	border-right:1px solid #e5eff8;
	margin:1em auto;
	border-collapse:collapse;
	}
caption {
	color: #9ba9b4;
	font-size:.94em;
		letter-spacing:.1em;
		margin:1em 0 0 0;
		padding:0;
		caption-side:top;
		text-align:center;
	}	
tr.odd td	{

	background:#BDEDFF;
	}
tr.odd .column1	{
	background:#f4f9fe;
	}	
.column1	{
	background:#f9fcfe;
	}
td {
	color:#2B1B17;
	border-bottom:1px solid #e5eff8;
	border-left:1px solid #e5eff8;
        font-family:'Segoe UI Semibold', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;

	padding:.3em 1em;
	
	}				
th {
	background:#3BB9FF;
	text-align:center;
	font-family:'Segoe UI Semibold', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
	color:#544E4F
	}	
	
tfoot th strong {
	font-family:'Segoe UI Semibold', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
	margin:.5em .5em .5em 0;
	color:#66a3d3;
		}		
tfoot th em {
	color:#f03b58;
	font-weight: bold;
	font-size: 1.1em;
	font-style: normal;
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
					<li><a class="transition" href="./search.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Modify Profile</a></li>
					<li><a class="current" href="./export.php" style="text-decoration: none; border-bottom: 5px solid #42C0FB">Reports</a></li> 
					<li><a class="transition" href="./chpwdc.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Change Password</a></li>
					<li><a class="transition" href="./logout.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Logout</a></li> 
				</ul>
			
</div>


	
        <div class="fullwidth_content">
<?php
if($_POST['result']=='Search')
{
$xth= (!empty($_POST['xth']) ? mysql_real_escape_string($_POST['xth']) : false);
$inter= (!empty($_POST['inter']) ? mysql_real_escape_string($_POST['inter']) : false);
$agg= (!empty($_POST['agg']) ? mysql_real_escape_string($_POST['agg']) : false);
$gender= (!empty($_POST['gender']) ? mysql_real_escape_string($_POST['gender']) : false);
$placed= (!empty($_POST['placed']) ? mysql_real_escape_string($_POST['placed']) : false);
$comp= (!empty($_POST['comp']) ? mysql_real_escape_string($_POST['comp']) : false);  
$query="SELECT regno,name,gender,agg,mobile,land,mail FROM finalmba WHERE dept='$login_session'";
if($xth){
$query.=" AND xth >= '$xth'";
}
if($inter){
$query.=" AND inter >= '$inter'";
}
if($agg){
$query.="AND agg >= '$agg'";
}
if($gender){
$query.="AND gender='$gender'";
}
if($placed)
{
if($placed=='res')
{
$query.="AND numcom='0'";
}
else
{
$query.="AND (numcom='0' OR numcom='1')";
}
}
if($comp){
$query.=" AND (comone='$comp' OR comtwo='$comp')";
}
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;
?>
<table border=1>
<tr>
<th scope="col"><small>Regno</small></th>
<th><small>Name</small></th>
<th><small>Gender</small></th>
<th><small>Percentage</small></th>
<th><small>Phone 1</small></th>
<th><small>Phone 2</small></th>
<th><small>e-Mail</small></th>
</tr>
<?php
while ($i < $num) {
$row = mysql_fetch_row($result);
?>
<td><small><?php echo $row[0];?></small></td>
<td><small><?php echo $row[1];?></small></td>
<td><small><?php echo $row[2];?></small></td>
<td><small><?php echo $row[3];?></small></td>
<td><small><?php echo $row[4];?></small></td>
<td><small><?php echo $row[5];?></small></td>
<td><small><?php echo $row[6];?></small></td>
</tr>
<?php
$i++;
}
?>
</table>
<INPUT style="margin:auto 0 0 380px;" id="link" TYPE="button" value="Print" onClick="window.print()">
<a style="margin:auto 0 0 25px;" href="export.php" id='link'>Back</a>
<?php
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