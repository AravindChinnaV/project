<?php
include('../../config.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select regno from users where regno='$user_check'");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['regno'];
if($login_session!="admin")
{
header("Location: logout.php");
}

if(!isset($login_session))
{
header("Location: ../../index.php");
}
?>