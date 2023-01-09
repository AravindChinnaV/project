<?php
session_start();
?>
<?php
include('config.php');

if(isset($_SESSION['login_user']))
{
$user_check=$_SESSION['login_user'];
$year_check=$_SESSION['login_year'];
$course_check=$_SESSION['login_course'];
if($year_check=="prefinal")
{ 
if($course_check=="ug")
{
$tablename="preug";
}
else if($course_check=="pg")
{
$tablename="prepg";
}
else if($course_check=="mba")
{
$tablename="premba";
}
else if($course_check=="mca")
{
$tablename="premca";
}
}
else if($year_check=="final")
{ 
if($course_check=="ug")
{
$tablename="finalug";
}
else if($course_check=="pg")
{
$tablename="finalpg";
}
else if($course_check=="mba")
{
$tablename="finalmba";
}
else if($course_check=="mca")
{
$tablename="finalmca";
}
}
$ses_sql=mysql_query("select regno from ".$tablename." where regno='$user_check'");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['regno'];

if($login_session=="admin")
{
if($year_check=="prefinal")
{
header("location: prefinal/admin/index.php");
}
else if($year_check=="final")
{
header("location: final/admin/index.php");
}
}
else if($login_session=="ce"||$login_session=="cse"||$login_session=="ece"||$login_session=="eee"||$login_session=="eie"||$login_session=="it"||$login_session=="me")
{

if($year_check=="prefinal")
{
if($course_check=="ug")
{
header("location: prefinal/ug/coord/index.php");
}
}
else if($year_check=="final")
{
if($course_check=="ug")
{
header("location: final/ug/coord/index.php");
}
}
}
else if($login_session=="mcse"||$login_session=="mcst"||$login_session=="mse"||$login_session=="mcad"||$login_session=="mcsp"||$login_session=="mte"||$login_session=="mpse"||$login_session=="mth")
{
if($year_check=="prefinal")
{
if($course_check=="pg")
{
header("location: prefinal/pg/coord/index.php");
}
}
else if($year_check=="final")
{
if($course_check=="pg")
{
header("location: final/pg/coord/index.php");
}
}
}
else if($login_session=="mba"||$login_session=="mca")
{
if($year_check=="prefinal")
{
if($course_check=="mba")
{
header("location: prefinal/mba/coord/index.php");
}
if($course_check=="mca")
{
header("location: prefinal/mca/coord/index.php");
}
}
else if($year_check=="final")
{
if($course_check=="mba")
{
header("location: final/mba/coord/index.php");
}
if($course_check=="mca")
{
header("location: final/mca/coord/index.php");
}
}
}
else
{
if($year_check=="prefinal")
{
if($course_check=="ug")
{
header("location: prefinal/ug/student/index.php");
}
if($course_check=="pg")
{
header("location: prefinal/pg/student/index.php");
}
if($course_check=="mba")
{
header("location: prefinal/mba/student/index.php");
}
if($course_check=="mca")
{
header("location: prefinal/mca/student/index.php");
}
}
if($year_check=="final")
{
if($course_check=="ug")
{
header("location: final/ug/student/index.php");
}
if($course_check=="pg")
{
header("location: final/pg/student/index.php");
}
if($course_check=="mba")
{
header("location: final/mba/student/index.php");
}
if($course_check=="mca")
{
header("location: final/mca/student/index.php");
}
}
}
if(!isset($login_session))
{
header("Location: main.php");
}
}
else
{
header("Location: main.php");
}
?>