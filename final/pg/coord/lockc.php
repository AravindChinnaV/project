<?php
include('../../../config.php');
session_start();
$user_check=$_SESSION['login_user'];
$table=$_SESSION['table'];
$ses_sql=mysql_query("select regno from ".$table." where regno='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['regno'];
if($login_session!="mcse"&&$login_session!="mcst"&&$login_session!="mse"&&$login_session!="mcad"&&$login_session!="mcsp"&&$login_session!="mte"&&$login_session!="mpse"&&$login_session!="mth")
{
header("Location: logout.php");
}

if(!isset($login_session))
{
header("Location: ../../../index.php");
}
?>