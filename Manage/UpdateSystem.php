<?php 
require_once("Admin.Config.Inc.php");

if($_GET['action']=='updateSystem')
{
	$systemID = $_GET['systemID'];
	$webName = $_POST['webName'];
	$webKeyWords = $_POST['keyWord'];
	$webDescription = $_POST['description'];
	$sql = "select * from system where systemID=$systemID";
	$rst = $conn->Execute($sql) or die ("select error");
	$record = array();
	$record["webName"] = $webName;
	$record["webKeyWords"] = $webKeyWords;
	$record["webDescription"] = $webDescription;
	$update = $conn->getUpdateSQL($rst,$record,true,true);
	
	if($conn->Execute($update) > 0)
	{
		echo "<script language='javascript'>alert('OK');window.location.href='SetSite.php';</script>";
	}
}


if($_GET['action']=='contactUs')
{
	$contactContent = $_POST['contactContent'];	
	$contactID = $_GET["contactID"];
	$image=$_POST["productPic"];
	$sql = "select * from about where id=$contactID";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["cnContent"] = $contactContent;
	$record["image"]=$image;
	$update = $conn->getUpdateSQL($rst,$record,true,true);	
	
	if($conn->Execute($update) > 0)
	{
		echo "<script language='javascript'>alert('OK');window.location.href='".urldecode($_SERVER['HTTP_REFERER'])."';</script>";
	}
}


?>

