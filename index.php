<?php
require_once('Config.Inc.php');

$sqlAbout = "select cnContent from about where id=2";
$rst=$conn->Execute($sqlAbout) or die("select about error");
$about = $rst->fields["cnContent"];
$about=str_replace("<p>","",$about);
$about=str_replace("</p>","",$about);
$smarty->assign("about",$about);

$sqlNews = "select id,title,addTime from news order by newsOrder desc,addTime desc";
$rst=$conn->Execute($sqlNews) or die ("select index news error");
$newsList = $rst->GetArray();

$smarty->assign("newsList",$newsList);

$sql = "select id,title,detailPic from product order by addTime desc limit 0,10";
$rst = $conn->Execute($sql) or die("select index product error");
$productList = $rst->GetArray();
$smarty->assign("productList",$productList);

$close=new Close($rst,$conn);
$smarty->display("index.tpl");
?>