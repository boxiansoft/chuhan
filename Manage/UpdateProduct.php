<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editFirstClass")
{
	$classID = 0;
	$getClassID  = $_GET["classID"];
	
	if($getClassID > 0)
	{
		$classID = $getClassID;
	}
	
	$sql = "select * from productClass where id=$classID";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["classOrder"] = $_POST["classOrder"];
	$record["cnClassName"] = $_POST["className"];
	
	if($getClassID == 0)
	{
		$update = $conn->getInsertSQL($rst,$record,true,true);
	}
	else
	{
		$update = $conn->getUpdateSQL($rst,$record,true,true);
	}
	
	if($conn->Execute($update))
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='FirstClass.php';</script>";
	}

}
 
if($_GET['action']=="deleteFirstClass")
{
	$classID=$_GET['classID'];
	$sql="delete from productClass where id=$classID";
	$rst = $conn->Execute($sql)or die("delete error");
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='FirstClass.php';</script>";
	}
}

if($_GET["action"] == "editProduct")
{
	$productID = 0;
	$getProductID  = $_GET["productID"];
	
	if($getProductID > 0)
	{
		$productID = $getProductID;
	}
	
	$sql = "select * from product where id=$productID";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["productUrl"]=$_POST["productUrl"];
	$record["title"]=$_POST["productTitle"];
	$record["paixu"] = $_POST["productOrder"];
	//$record["productClass"] = $_POST["classID"];
	$record["productPic"] = $_POST["productPic"];
	$record["detailPic"] = $_POST["detailPic"];
	/*$record["new"]=$_POST["npID"];
	$record["hdp"] = $_POST["tuijianID"];*/
	
	if($getProductID == 0)
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
		$close = new close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='ManageProducts.php';</script>";
	}

}

if($_GET['action']=="deleteProduct")
{
	$productID=$_GET['productID'];
	$where=" from product where id=$productID";
	$sql="select productPic ".$where;
	$rst=$conn->Execute($sql);
	$fileName=$rst->fields["productPic"];
	$fileName="../".$fileName;
	if(file_exists($fileName))
	{
		if(unlink($fileName));
	}
	
	$sql="delete ".$where;
	$rst = $conn->Execute($sql)or die("delete error");
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='ManageProducts.php';</script>";
	}
}

?>