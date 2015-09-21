<?php
require_once('Admin.Config.Inc.php');
$sql = "select * from admin where id<>3";
$rst = $conn->SelectLimit($sql);
$AdminArr = $rst->GetArray();
$smarty->assign('AdminArr',$AdminArr);
$rst->close();
$conn->close();
$smarty->display('Admin/AdminManage.tpl');
?>