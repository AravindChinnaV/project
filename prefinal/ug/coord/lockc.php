<?php
include('../../../config.php');
session_start();
$user_check=$_SESSION['login_user'];
$table=$_SESSION['table'];
$ses_sql=mysql_query("select regno from ".$table." where regno='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['regno'];
if($login_session!="ce"&&$login_session!="cse"&&$login_session!="ece"&&$login_session!="eee"&&$login_session!="eie"&&$login_session!="it"&&$login_session!="me")
{
header("Location: logout.php");
}

if(!isset($login_session))
{
header("Location: ../../../index.php");
}
?>