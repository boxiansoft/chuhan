<?php
require_once('Config.Inc.php');
require_once("Manage/page.php");

$productID = $_GET["id"];

$sql = "select title,productPic,productUrl from product where id=$productID";
$rst=$conn->Execute($sql) or die("select example error");
$smarty->assign("exampleName",$rst->fields["title"]);
$smarty->assign("productPic",$rst->fields["productPic"]);


$close = new Close($rst,$conn);

$smarty->display("showexample.tpl");
?>