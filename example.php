<?php
require_once('Config.Inc.php');
require_once("Manage/page.php");

$productClassName = "";
$classID = 0;
$sqlCount = "select count(*) as sumCount from product p left join productclass c on p.productclass =  c.id where 1 = 1 ";
$sql = "select p.id,p.detailPic,c.className,p.productUrl from product p left join productclass c on p.productclass =  c.id where 1 = 1 ";
$pageSize = 9;
$currentPage = 1;
$getPage = $_GET["page"];
$pageUrl='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 	

if(isset($_GET["classID"]))
{
	$classID=$_GET["classID"];
	$sql = $sql." and p.productclass=$classID ";
	$sqlCount = $sqlCount." and p.productclass=$classID ";
	/*$sqlClass = "select className from productClass where id=$classID";
	$rst = $conn->Execute($sqlClass) or die ("selectClassName error");
	$productClassName = $rst->fields["className"];
	$smarty->assign("productClassName"," >> ".$productClassName);*/
}

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$rst = $conn->Execute($sqlCount) or die ("selectClass error");
$recordTotal = $rst->fields["sumCount"];

$totalPage = ceil($recordTotal / $pageSize);
$smarty->assign("currentPage",$currentPage);
$smarty->assign("totalPage",$totalPage);
$sql = $sql." order by paixu desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$productsList = $rst->GetArray();
$smarty->assign("productList",$productsList);
$smarty->assign("page",page($pageUrl,$currentPage,$totalPage));


$close = new Close($rst,$conn);

$smarty->display("example.tpl");
?>