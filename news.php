<?php
require_once("Config.Inc.php");
require_once("Manage/page.php");
require_once('Common/left.php');

$sqlCount = "select count(*) as sumCount from news ";
$sql = "select n.id,n.title,n.newsClass,c.className,n.addTime from news n left join newsclass c on n.newsClass=c.id ";
$pageUrl='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 

$pageSize = 15;
$currentPage = 1;
$classID = 1;
$getPage = $_GET["page"];
$getClassID = $_GET["newsclass"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

if(isset($getClassID))
{
	$classID = $getClassID;
	$sql=$sql." where newsClass=$classID";
	$sqlCount=$sqlCount." where newsClass=$classID";
}

$sql=$sql." order by newsOrder desc";
$rst = $conn->Execute($sqlCount) or die ("selectClass error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);

$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$newsList = $rst->GetArray();
$smarty->assign("newsList",$newsList);
$smarty->assign("page",page($pageUrl,$currentPage,$totalPage));
$smarty->assign("currentPage",$currentPage);
$smarty->assign("totalPage",$totalPage);

$close = new Close($rst,$conn);

$smarty->display("news.tpl");
?>