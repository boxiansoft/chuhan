<?php
require_once('Admin.Config.Inc.php');

$sql="select id,cnTitle from about order by id asc";
$aboutMenuList=$conn->GetArray($sql);
$smarty->assign("aboutMenuList",$aboutMenuList);
$smarty->display("Admin/Left.tpl");
?>