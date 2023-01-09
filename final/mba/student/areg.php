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

}

textarea
{
border:solid 2px #3BB9FF;
font-size:14px;
padding:4px;
font-family: 'Segoe UI', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;

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
			<a id="logo" title="Homepage" href="./index.html"><img src="../../../images/logo.jpg" alt=" " width="350" height="60"/></a>
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
$result = mysql_query("SELECT submit,degree,degreeyop,icet,sem1,sem2,sem3,sem4,agg,blogs,hob FROM finalmba WHERE regno = '$login_session'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);
$submit=$row[0];
$degree=$row[1];
$degreeyop=$row[2];
$icet=$row[3];
$sem1=$row[4];
$sem2=$row[5];
$sem3=$row[6];
$sem4=$row[7];

$agg=$row[8];
$blogs=$row[9];
$hob=$row[10];
$dg=NULL;
$dgyop=NULL;
$ic=NULL;
$s1=NULL;
$s2=NULL;
$s3=NULL;
$s4=NULL;
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
if($submit=="yes")
{
if($degree!="")
{
$dg="readonly";
}
if($degreeyop!="")
{
$dgyop="readonly";
}
if($icet!="")
{
$ic="readonly";
}
if($sem1!="")
{
$s1="readonly";
}
if($sem2!="")
{
$s2="readonly";
}
if($sem3!="")
{
$s3="readonly";
}
if($sem4!="")
{
$s4="readonly";
}

if($agg!="")
{
$ag="readonly";
}
if($blogs!="")
{
$bl="readonly";
}
if($hob!="")
{
$hb="readonly";
}
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<fieldset>
<div class="grid">
<div class="row">
<div class="span3">
<label>% in Degree:</label></br><input type="text" name="degree" id="degree" value="<?php echo "$degree";?>" <?php echo "$dg";?>/></br>
<label>Degree Year of Pass:</label></br><input type="text" name="degreeyop" id="degreeyop" value="<?php echo "$degreeyop";?>" <?php echo "$dgyop";?>/></br>
<label>ICET Rank:</label></br><input type="text" name="icet" id="icet" value="<?php echo "$icet";?>" <?php echo "$ic";?>/></br>
<label>% in Semester-1:</label></br><input type="text" name="sem1" id="sem1" value="<?php echo "$sem1";?>" <?php echo "$s1";?>/></br>
</div>
<div class="span3">
<label>% in Semester-2:</label></br><input type="text" name="sem2" id="sem2" value="<?php echo "$sem2";?>" <?php echo "$s2";?>/></br>
<label>% in Semester-3:</label></br><input type="text" name="sem3" id="sem3" value="<?php echo "$sem3";?>" <?php echo "$s3";?>/></br>
<label>% in Semester-4:</label></br><input type="text" name="sem4" id="sem4" value="<?php echo "$sem4";?>" <?php echo "$s4";?>/></br>
<label>Aggregate in MTech:</label></br><input type="text" name="agg" id="agg" value="<?php echo "$agg";?>" <?php echo "$ag";?>/></br>
</div>
<div class="span3">
<label>No.of Backlogs if any:</label></br><input type="text" name="blogs" id="blogs" value="<?php echo "$blogs";?>" <?php echo "$bl";?>/></br>
<label>History of Backlogs:</label>
<br><select name="hob" <?php echo "$hb";?>>
<option readonly>Select</option>
<option value="Yes" <?php echo "$hs";?>>Yes</option>
<option value="No" <?php echo "$hos";?>>No</option>
</select></br>
<label for="file">Upload Your Certificates</label>
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
<td width="246">
<input type="file" name="file" id="file" class="box"><br>
</td>

</tr>
</table>

<input name="upload" type="submit" class="box" value=" Upload ">

<input style="margin:20px 0 0 40px;" type="submit" name="store" value="Save" id='save'/>
<a style="margin:20px 0 0 25px;" href="updp.php" id='link'>Back</a>
</div>
</div>
</div>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST" )
{

if(isset($_POST['upload']))
{
$allowedExts = array("gif", "jpeg", "jpg", "png","bmp");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/bmp"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo " Image Upload Successfully" . "<br>";


    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      }
    }
  }
else
  {
  echo "Invalid file";
  }
 }
 }

?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$degree=addslashes($_POST['degree']);
$degreeyop=addslashes($_POST['degreeyop']);
$icet=addslashes($_POST['icet']);
$sem1=addslashes($_POST['sem1']);
$sem2=addslashes($_POST['sem2']);
$sem3=addslashes($_POST['sem3']);
$sem4=addslashes($_POST['sem4']);

$agg=addslashes($_POST['agg']); 
$blogs=addslashes($_POST['blogs']);
$hob=addslashes($_POST['hob']);

if(isset($_POST['store']))
{
if($_POST['store']=='Save')
{
$sql="UPDATE finalmba SET degree='$degree',degreeyop='$degreeyop',icet='$icet',sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',agg='$agg',blogs='$blogs',hob='$hob' WHERE regno='$login_session'";
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
$sql="UPDATE finalmba SET degree='$degree',degreeyop='$degreeyop',icet='$icet',sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',agg='$agg',blogs='$blogs',hob='$hob' WHERE regno='$login_session'";
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
}
?>
</form>
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