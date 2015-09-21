<?php
require_once('Config.Inc.php');
require_once('Common/left.php');

$sql = "select cnContent from about where id=2";
$rst=$conn->Execute($sql) or die("select about error");
$smarty->assign("aboutContent",$rst->fields["cnContent"]);



$close=new Close($rst,$conn);
$smarty->display("about.tpl");
?>