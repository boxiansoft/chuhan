<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editerNews")
{
	$newsID = 0;
	$getNewsID  = $_GET["newsID"];
	
	if($getNewsID > 0)
	{
		$newsID = $getNewsID;
	}
	
	$sql = "select * from news where id=$newsID";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["title"] = $_POST["newsTitle"];
	$record["newsclass"]=$_POST["newsClass"];
	$record["newsOrder"] = $_POST["newsOrder"];
	/*$record["newsKeyWords"] = $_POST["newsKeyWords"];
	$record["newsDescription"] = $_POST["newsDescription"];*/
	$record["newsContent"] = $_POST["newsContent"];
	
	if($getNewsID == 0)
	{
		$record["addTime"] = date('Y-m-d H:i:s',time());
		$update = $conn->getInsertSQL($rst,$record,true,true);
	}
	else
	{
		$update = $conn->getUpdateSQL($rst,$record,true,true);
	}
	
	if($conn->Execute($update))
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='ManageNews.php';</script>";//
	}

}
 


if($_GET['action']=="deleteNews")
{
	$newsID=$_GET['newsID'];
	$sql="delete from news where id=$newsID";
	$rst = $conn->Execute($sql)or die("delete error");
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='ManageNews.php';</script>";
	}
}
?>