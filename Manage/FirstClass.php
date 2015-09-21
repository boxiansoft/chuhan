<?php
require_once("Admin.Config.Inc.php");

$classID = 0;

if(isset($_GET["classID"]))
{
	$classID = $_GET["classID"];
}

$sql = "select * from productClass where id=$classID";
$rst = $conn->Execute($sql);
$smarty->assign("classID",$rst->fields["id"]);
$smarty->assign("classOrder",$rst->fields["classOrder"]);
$smarty->assign("cnClassName",$rst->fields["cnClassName"]);

$sql = "select * from productClass order by classOrder desc";
$rst = $conn->SelectLimit($sql) or die("select error");
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);
$close=new Close($rst,$conn);
$smarty->display("Admin/FirstClass.tpl");
?>