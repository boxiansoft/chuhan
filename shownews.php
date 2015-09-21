<?php
require_once('Config.Inc.php');
require_once('Common/left.php');

$newsID = $_GET["newsID"];

$sql="select n.title,c.className,n.addTime,n.newsclass,n.newsContent from news n left join newsclass c on n.newsclass=c.id where n.id=$newsID";

$rst=$conn->Execute($sql) or die("select shownews error");

$smarty->assign("classID",$rst->fields["newsclass"]);
$smarty->assign("className",$rst->fields["className"]);
$smarty->assign("newsTitle",$rst->fields["title"]);
$smarty->assign("newsAddTime",$rst->fields["addTime"]);
$smarty->assign("newDetail",$rst->fields["newsContent"]);

$close = new Close($rst,$conn);
$smarty->display("shownews.tpl");
?>