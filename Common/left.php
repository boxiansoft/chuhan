<?php
$sqlNews = "select id,title from news order by clickNum desc limit 0,6";
$rst=$conn->Execute($sqlNews) or die("select Left sql news error");
$newsLeft = $rst->GetArray();
$smarty->assign("newsLeft",$newsLeft);
?>