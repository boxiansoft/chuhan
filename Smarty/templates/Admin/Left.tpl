<{config_load file ="Admin.conf"}>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript">
function diss(menu)
{
	if(document.getElementById(menu).style.display=="block")
	{
		document.getElementById(menu).style.display='none';
	}
	else if(document.getElementById(menu).style.display=="none")
	{
		document.getElementById(menu).style.display='block';
	}
}
</script>
</head>

<body>
<div class="menu">
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="../" target="_blank"><b>进入网站首页</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="right.php" target='right'><b>返回后台首页</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="AdminManage.php" target="right"><b>管理员管理</b></a></div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss1')"><b>系统信息管理</b></a></div>
		<div id="muss1" class="leftmenutd" style="display:block;">	
			<{foreach key=key item=item from=$aboutMenuList}>
			<div><a href="ContactUs.php?contactID=<{$item.id}>" target="right"><{$item.cnTitle}></a></div>
			<{/foreach}>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss2')"><b>案例管理</b></a></div>
		<div id="muss2" class="leftmenutd" style="display:none;">
			<!--<div><a href="FirstClass.php" target="right">类别管理</a></div>-->
			<div><a href="AddProduct.php" target="right">案例添加</a></div>
			<div><a href="ManageProducts.php" target="right">案例管理</a></div>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss3')"><b>新闻管理</b></a></div>
		<div id="muss3" class="leftmenutd" style="display:none;">
			<div><a href="AddNews.php" target="right">新闻添加</a></div>
			<div><a href="ManageNews.php" target="right">新闻管理</a></div>
		</div>
	</div>
	<!--
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss4')"><b>留言管理</b></a></div>
		<div id="muss4" class="leftmenutd" style="display:none;">
			<div><a href="Message.php" target="right">留言管理</a></div>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss6')"><b>FLASH管理</b></a></div>
		<div id="muss6" class="leftmenutd" style="display:none;">
			<div><a href="add_adv.php" target="right">FLASH添加</a></div>
			<div><a href="adv_manage.php" target="right">FLASH管理</a></div>
		</div>
	</div>-->
		
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="loginout.php" ><b>退出</b></a></div>
	</div>
</div>

</body>
</html>
