<?php
require_once('Admin.Config.Inc.php');
require_once("FCKediter.php");

$newsID = 0;

if(isset($_GET["newsID"]))
{
	$newsID = $_GET["newsID"];
}

$sql = "select * from news where id=$newsID";

$rst = $conn->Execute($sql)or die("select error");
$smarty->assign("newsID",$rst->fields["id"]);
$smarty->assign("newsClass",$rst->fields["newsClass"]);
$smarty->assign("newsTitle",$rst->fields["title"]);
if($rst->fields["newsOrder"] == "")
{
	$smarty->assign("newsOrder","1");
}
else
{
	$smarty->assign("newsOrder",$rst->fields["newsOrder"]);
}
/*$smarty->assign("newsKeyWords",$rst->fields["newsKeyWords"]);
$smarty->assign("newsDescription",$rst->fields["newsDescription"]);*/
createEditer("newsContent",$rst->fields["newsContent"],800);

$sql = "select * from newsclass order by classOrder desc";
$rst = $conn->Execute($sql);
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);

$close=new Close($rst,$conn);
$smarty->display("Admin/AddNews.tpl");
?>