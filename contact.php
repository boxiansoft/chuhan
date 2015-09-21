<?php
require_once('Config.Inc.php');

$sql="select cnContent from about where id=4";
$rst=$conn->Execute($sql) or die("select contact error");
$smarty->assign("contact",$rst->fields["cnContent"]);

$close=new Close($rst,$conn);
$smarty->display("contact.tpl");
?>