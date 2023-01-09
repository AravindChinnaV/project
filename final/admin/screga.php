<?php
include('locka.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<<head>
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="../../style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="../../css/style-ie.css" />
<![endif]-->
<script type="text/javascript" src="../../../js/jquery.min.js"></script>
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
#error
{
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
color:#FF0000;
margin:10px 0 0 100px;
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
$result = mysql_query("SELECT submit,comone,comtwo,numcom FROM itdb WHERE regno = '$regno'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
$submit=$row[0];
$comone=$row[1];
$comtwo=$row[2];
$numcom=$row[3];

$co=NULL;
$ct=NULL;
$nc=NULL;
?>
<form action="" method="POST">
<fieldset>
<fieldset id="nm">
<small>Modify&nbsp;<font color="#3BB9FF"><?php echo $regno; ?></font></small>
</fieldset>
<div class="grid">
<div class="row">
<div class="span4">
<label>Company 1:</label></br><input type="text" name="comone" id="comone" value="<?php echo "$comone";?>" <?php echo "$co";?>/></br>
<label>Company 2:</label></br><input type="text" name="comtwo" id="comtwo" value="<?php echo "$comtwo";?>" <?php echo "$ct";?>/></br>
<label>No.of Companies Select:</label></br><input type="text" name="numcom" id="numcom" value="<?php echo "$numcom";?>" <?php echo "$nc";?>/></br>

<input style="margin:25px 0 0 0px;" type="submit" name="store" value="Save" id='submit'/>
<a style="margin:50px 0 0 25px;" href="adm.php" id='link'>Back</a>
</div>
</div>
</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$comone=addslashes($_POST['comone']); 
$comtwo=addslashes($_POST['comtwo']);
$numcom=addslashes($_POST['numcom']); 


if($_POST['store']=='Save')
{
$sql="UPDATE itdb SET comone='$comone',comtwo='$comtwo',numcom='$numcom' WHERE regno='$regno'";
$result=mysql_query($sql);
if(!$result)
{
echo "<div id=error>Something gone wrong try agian</div>";
}
else
{
echo "<div id=msg>Saved successfully</div>";
}
}
else
{
$sql="UPDATE itdb SET focc='$focc',address='$address',pab='$pab',height='$height',weight='$weight',sight='$sight',religion='$religion',category='$category',subcat='$subcat',fname='$fname',mname='$mname',submit='yes' WHERE regno='$regno'";
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