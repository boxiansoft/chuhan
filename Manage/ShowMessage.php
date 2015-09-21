<?php
if(isset($_GET["messageID"]))
{
	require_once("Admin.Config.Inc.php");
	require_once("FCKediter.php");
	$messageID = $_GET["messageID"];
	$sql = "select * from message where messageID = $messageID";		
	$rst = $conn->Execute($sql);
	$smarty->assign("messageUserName",$rst->fields["messageUserName"]);
	$smarty->assign("messageTel",$rst->fields["messageTel"]);
	$smarty->assign("messageEmail",$rst->fields["messageEmail"]);
	$smarty->assign("messageEmail",$rst->fields["messageEmail"]);
	createEditer("messageDemo",$rst->fields["messageDemo"],800);
	$smarty->assign("messageDemo",$rst->fields["messageDemo"]);
	
	$close = new Close($rst,$conn);
	
	$smarty->display("Admin/ShowMessage.tpl");
}
else
{
	echo "<script language='javascript'>alert('请选择留言信息！');</script>";
}
?>