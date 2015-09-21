<{config_load file="web.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content="<{#keywords#}>" />
<meta http-equiv="description" content="<{#description#}>" />
<title><{#title#}></title>
<link media="screen" href="css/index.css" type="text/css" rel="stylesheet">
<script src="js/nav.js" type="text/javascript"></script>
<script src="js/Common.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">

function showSmallMenu(menu)
{
	document.getElementById(menu).style.display='block';
}

function hiddenSmallMenu(menu)
{
	document.getElementById(menu).style.display='none';
}

</script>
</head>

<body>
<{include file = "Common/Menu.html" name="menu"}>
<div class="main980 f_n"><img src="images/002.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>

<div class="main980 f_n">
	<div class="indexCenter">
		<div class="productTitle">
			<div class="productTitleLeft">案例展示</div>
			<div class="productTitleRight">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;案例展示</div>
		</div>
		
		<div style="float:left; width:980px;height:480px; overflow-Y: auto; overflow-x:hidden;">
			<div style="position:absolute; z-index:10;width:980px; overflow-Y: auto; overflow-x:hidden; padding-top:20px; padding-bottom:35px;">
				<div class="productProduct" id="product">
				<{section name=p1 loop = $productList}>
					<div class="bigBox" onmousemove="javascript:showSmallMenu('li<{$smarty.section.p1.index}>')"  onmouseout="javascript:hiddenSmallMenu('li<{$smarty.section.p1.index}>')" >	
						<div class="smallBox"><img src="upload/<{$productList[p1].detailPic}>" width="280" height="117" border="0" /></div>									
						<div style="position:relative;" onmousemove="javascript:showSmallMenu('li<{$smarty.section.p1.index}>')" onmouseout="javascript:hiddenSmallMenu('li<{$smarty.section.p1.index}>')" >
							<div class="bigBorder" style="position:absolute; display:none;z-index:1000; left:-40px; top:-15px;" id="li<{$smarty.section.p1.index}>">
								<a href="showexample.php?id=<{$productList[p1].id}>"><img src="upload/<{$productList[p1].detailPic}>" width="360" height="150" border="0"/></a>
							</div>										
						</div>								
					</div>
				<{/section}>
						
				</div>
			</div>
		</div>	
		
		<{if $totalPage > 0}>
			<div class="page"><span><{$currentPage}>/<{$totalPage}></span><{$page}></div>
		<{/if}>
		
	</div>
</div>
<{include file = "Common/Bottom.html" name="bottom"}>
</body>
</html>
