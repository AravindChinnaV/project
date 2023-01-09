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
margin:-90px 0 0 550px;
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
margin:80px 0 0 750px;
position:absolute;
height: 10px;
width:105px;
} 

</style>
<link rel="stylesheet" href="./css/prettyphoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="./js/jquery.prettyphoto.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>


<div id="main_container">
<div class="main_content">
			<!-- LOGO -->
			<a id="logo" title="Homepage" href="./index.php"><img src="../../../images/logo.jpg" alt=" " width="350" height="60"/></a>

<!--LOGO ENDS  -->
<fieldset id="lognm">
<small>Welcome&nbsp;&nbsp;<font color="#3BB9FF"><?php echo $login_session; ?></font></small>
</fieldset>
						<div id="nav_menu" class="main-menu ">	<!--  MAIN  NAVIGATION--> 
				<ul> 
					<li><a class="transition" href="./index.php" title="Home" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Home</a></li> 
					<li><a class="transition" href="./messages.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Messages</a></li>
					<li><a class="transition" href="./viewp.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">View Profile</a></li> 
					<li><a class="current" href="./updp.php" style="text-decoration: none; border-bottom: 5px solid #42C0FB">Modify Profile</a></li>
					<li><a class="transition" href="./chpwd.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Change Password</a></li> 
					<li><a class="transition" href="./logout.php" style="text-decoration: none; border-bottom: 1px solid #42C0FB">Logout</a></li> 
				</ul> 
			
</div>



        <div class="fullwidth_content">
<?php
$result = mysql_query("SELECT submit,name,regno,gender,mail,mobile,dob,xth,xthyop,inter,interyop,dept,rank,land FROM preug WHERE regno = '$login_session'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
$submit=$row[0];
$name=$row[1];
$regno=$row[2];
$gender=$row[3];
$mail=$row[4];
$mobile=$row[5];
$dob=$row[6];
$xth=$row[7];
$xthyop=$row[8];
$inter=$row[9];
$interyop=$row[10];
$dept=$row[11];
$rank=$row[12];
$land=$row[13];
$genm=NULL;
$genf=NULL;
$nm=NULL;
$rgn=NULL;
$gen=NULL;
$eml=NULL;
$mob=NULL;
$br=NULL;
$rnk=NULL;
$date=NULL;
$xt=NULL;
$xty=NULL;
$int=NULL;
$inty=NULL;
$ldno=NULL;
if($gender=="male")
{
$genm="checked";
}
else if($gender=="female")
{
$genf="checked";
}
if($submit=="yes")
{
if($name!="")
{
$nm="readonly";
}
if($regno!="")
{
$rgn="readonly";
}
if($dept!="")
{
$br="readonly";
}
if($gender!="")
{
$gen="readonly";
}
if($rank!="")
{
$rnk="readonly";
}
if($mail!="")
{
$eml="readonly";
}
if($mobile!="")
{
$mob="readonly";
}
if($land!="")
{
$ldno="readonly";
}
if($dob!="")
{
$date="readonly";
}
if($xth!="")
{
$xt="readonly";
}
if($xthyop!="")
{
$xty="readonly";
}
if($inter!="")
{
$int="readonly";
}
if($interyop!="")
{
$inty="readonly";
}
}
?>
<form action="" method="POST">
<fieldset>
<div class="grid">
<div class="row">
<div class="span3">
<label>Name:</label></br><input type="text" name="name" id="name" value="<?php echo "$name";?>" <?php echo "$nm";?>/></br>
<label>Regno:</label></br><input type="text" name="regno" id="regno" value="<?php echo "$regno";?>" <?php echo "$rgn";?>/></br>
<label>Branch:</label></br><input type="text" name="dept" id="dept" value="<?php echo "$dept";?>" <?php echo "$br";?>/></br>
<label>Gender:</label></br>
<label>Male:</label><input type="radio" name="gender" id="gender" value="male" <?php echo "$rgn";?> <?php echo "$genm";?>>&nbsp;<label>Female:</label><input type="radio" name="gender" value="female" id="gender" <?php echo "$rgn";?> <?php echo "$genf";?>></br>
<label>Eamcet/Ecet Rank:</label></br><input type="text" name="rank" id="rank" value="<?php echo "$rank";?>" <?php echo "$rnk";?>/></br>
</div>
<div class="span3">
<label>Mail-id:</label></br><input type="text" name="mail" id="mail" value="<?php echo "$mail";?>" <?php echo "$eml";?>/></br>
<label>Mobile:</label></br><input type="text" name="mobile" id="mobile" value="<?php echo "$mobile";?>" <?php echo "$mob";?>/></br>
<label>Land Line:</label></br><input type="text" name="land" id="land" value="<?php echo "$land";?>" <?php echo "$ldno";?>/></br>
<label>Date of Birth:</label></br><input type="text" name="dob" id="dob" value="<?php echo "$dob";?>" <?php echo "$date";?>/></br>
<label>% in X class:</label></br><input type="text" name="xth" id="xth" value="<?php echo "$xth";?>" <?php echo "$xt";?>/></br>
</div>
<div style="span3">
<label>X class Year of Pass:</label></br><input type="text" name="xthyop" id="xthyop" value="<?php echo "$xthyop";?>" <?php echo "$xty";?>/></br>
<label>% in Inter/Diploma:</label></br><input type="text" name="inter" id="inter" value="<?php echo "$inter";?>" <?php echo "$int";?>/></br>
<label>Inter/Diploma Year of Pass:</label></br><input type="text" name="interyop" id="interyop" value="<?php echo "$interyop";?>" <?php echo "$inty";?>/></br>
<input style="margin:50px 0 0 35px;" type="submit" name="store" value="Save" id='submit'/>
<a style="margin:50px 0 0 25px;" href="updp.php" id='link'>Back</a>
</div>
</div>
</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['name']; 
$regno=addslashes($_POST['regno']);
$dept=addslashes($_POST['dept']); 
$gender=addslashes($_POST['gender']);
$rank=addslashes($_POST['rank']); 
$mail=addslashes($_POST['mail']);
$mobile=addslashes($_POST['mobile']); 
$land=addslashes($_POST['land']);
$dob=addslashes($_POST['dob']); 
$xth=addslashes($_POST['xth']);
$xthyop=addslashes($_POST['xthyop']); 
$inter=addslashes($_POST['inter']);
$interyop=addslashes($_POST['interyop']); 

if($_POST['store']=='Save')
{
$sql="UPDATE preug SET name='$name',dept='$dept',gender='$gender',rank='$rank',mail='$mail',mobile='$mobile',land='$land',dob='$dob',xth='$xth',xthyop='$xthyop',inter='$inter',interyop='$interyop' WHERE regno='$login_session'";
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
$sql="UPDATE preug SET name='$name',dept='$dept',gender='$gender',rank='$rank',mail='$mail',mobile='$mobile',land='$land',dob='$dob',xth='$xth',xthyop='$xthyop',inter='$inter',interyop='$interyop',submit='yes' WHERE regno='$login_session'";
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
	
<small><div style="width:900px; float:left; margin:10px 0px 0 15px;">Copyright � 2014 T & P Cell - All Rights Reserved by <a href="http://www.vrsiddhartha.ac.in">Vrsiddhartha.ac.in</a></div>
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