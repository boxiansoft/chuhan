<?php
require_once("Admin.Config.Inc.php");
require_once("FCKediter.php");

$productID = 0;

if(isset($_GET["productID"]))
{
	$productID = $_GET["productID"];
}

$sql = "select * from product where id=$productID";

$rst = $conn->Execute($sql)or die("select error");

if(isset($rst->fields["productUrl"]))
{
	$smarty->assign("productUrl",$rst->fields["productUrl"]);
}
else
{
	$smarty->assign("productUrl","http://");
}
$smarty->assign("productID",$rst->fields["id"]);
/*$smarty->assign('newProduct',array(1=> '是',0=> '否'));
$smarty->assign("npID",$rst->fields["new"]);
$smarty->assign("tuijian",array(1=>'是',0=>'否'));
$smarty->assign("tjID",$rst->fields["hdp"]);
$smarty->assign("classID",$rst->fields["productClass"]);*/
$smarty->assign("productTitle",$rst->fields["title"]);
$smarty->assign("productPic",$rst->fields["productPic"]);
$smarty->assign("detailPic",$rst->fields["detailPic"]);

if($rst->fields["paixu"] == "")
{
	$smarty->assign("productOrder","1");
}
else
{
	$smarty->assign("productOrder",$rst->fields["paixu"]);
}


/*$sql = "select id,cnClassName from productclass order by classOrder desc";
$rst = $conn->Execute($sql);
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);*/

$close=new Close($rst,$conn);

$smarty->display("Admin/AddProduct.tpl");
?>