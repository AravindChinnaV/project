<?php
session_start();
?>
<?php
include('../../../config.php');

if(isset($_SESSION['login_user']))
{
$user_check=$_SESSION['login_user'];
$table=$_SESSION['table'];
$ses_sql=mysql_query("select regno from ".$table." where regno='$user_check'");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['regno'];

if(!isset($login_session))
{
header("Location: ../../../index.php");
}
}
else
{
header("Location: ../../../index.php");
}
?>