<?php
require_once("Admin.Config.Inc.php");
require_once("page.php");

if($_GET["action"] == "allDel")
{
	foreach($_REQUEST['selectid'] as $value)
	{
		$where=" from product where id=$value";	
		$sql="select productPic ".$where;
		$rst=$conn->Execute($sql);
		$fileName=$rst->fields["productPic"];
		$fileName="../".$fileName;
		
		if(file_exists($fileName))
		{
			unlink($fileName);
		}
		
		$sql="delete ".$where;		
		$rst = $conn->Execute($sql) or die("delete all error");
	}
}

$sql="select id,cnClassName from productclass";
$rst = $conn->SelectLimit($sql) or die("select error");
$classList = $rst->GetArray();

$currentPage = 1;
$pageSize = 16;
$getPage = $_GET["page"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$sql = "select count(*) as sumCount from product";
$rst = $conn->Execute($sql);
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);

$sql = "select product.id,productUrl,detailPic,cnClassName,paixu,(case when new=0 then '否' else '是' end) new,(case when hdp=0 then '未推荐' else '已推荐' end) tuijian,date_format(addTime,'%Y-%m-%d') addTime from product left join productclass on product.productClass=productClass.id where 1=1 ";
$classID=$_GET["classID"];

if(isset($classID))
{	
	$sql=$sql." and product.hdp <> 1 and product.productClass=$classID";
}

if(isset($_GET["hdp"]))
{
	$sql=$sql." and product.hdp=1";
}

$sql=$sql." order by className,paixu desc";

$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1)*$pageSize) or die("SelectLimit ERROR");
$productList = $rst->GetArray();
$smarty->assign("productList",$productList);
$smarty->assign("classList",$classList);
$smarty->assign("page",page("ManageProducts.php",$currentPage,$totalPage));

$close = new Close($rst,$conn);

$smarty->display("Admin/ManageProducts.tpl");
?>