<?php
include('config.php');
include('lock.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Training & Placements</title>
<link rel="stylesheet" type="text/css" href="../../../style.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="../../../css/style-ie.css" />
<![endif]-->
<link href="../../../css/site.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../../css/inbox.css" media="screen" />
<style type="text/css">
body{
background:#fff;
}
.message
{
color:red;
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

</style>
</head>
    <body>
   
        <div class="content">
<?php
//We check if the user is logged
if(isset($_SESSION['login_user']))
{
//We list his messages in a table
//Two queries are executes, one for the unread messages and another for read messages
$req1 = mysql_query('select m1.id, m1.title, m1.timestamp, count(m2.id) as reps, users.id as userid, users.regno from pm as m1, pm as m2,users where ((m1.user1="1" and m1.user1read="no" and users.id=m1.user2) or (m1.user2="1" and m1.user2read="no" and users.id=m1.user1)) and m1.id2="1" and m2.id=m1.id group by m1.id order by m1.id desc');
$req2 = mysql_query('select m1.id, m1.title, m1.timestamp, count(m2.id) as reps, users.id as userid, users.regno from pm as m1, pm as m2,users where ((m1.user1="1" and m1.user1read="yes" and users.id=m1.user2) or (m1.user2="2" and m1.user2read="yes" and users.id=m1.user1)) and m1.id2="1" and m2.id=m1.id group by m1.id order by m1.id desc');
?>


<h3><font color="#42C0FB">Inbox(<?php echo intval(mysql_num_rows($req2)); ?>)</font></h3>
<table>
	<tr>
    	<th class="title_cell"><small>Title</small></th>
        <th><small>Nb. Replies</small></th>
        <th><small>Participant</small></th>
        <th><small>Date</small></th>
    </tr>
<?php
//We display the list of unread messages
while($dn1 = mysql_fetch_array($req2))
{
?>
	<tr>
    	<td class="left"><small><a href="read_pm.php?id=<?php echo $dn1['id']; ?>"><?php echo htmlentities($dn1['title'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td><small><?php echo $dn1['reps']-1; ?></small></td>
    	<td><small><a href="profile.php?id=<?php echo $dn1['userid']; ?>"><?php echo htmlentities($dn1['regno'], ENT_QUOTES, 'UTF-8'); ?></a></small></td>
    	<td><small><?php echo date('Y/m/d H:i:s' ,$dn1['timestamp']); ?></small></td>
    </tr>
<?php
}
//If there is no unread message we notice it
if(intval(mysql_num_rows($req1))==0)
{
?>
	
<?php
}
?>
</table>
<br />

<?php
}
else
{
	echo 'You must be logged to access this page.';
}
?>
		</div>
		
	</body>
</html>