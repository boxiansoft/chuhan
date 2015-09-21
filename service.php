<?php
require_once('Config.Inc.php');
require_once('Common/left.php');

$close=new Close($rst,$conn);
$smarty->display("service.tpl");
?>