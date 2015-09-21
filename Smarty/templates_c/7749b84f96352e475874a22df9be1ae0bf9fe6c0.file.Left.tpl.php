<?php /* Smarty version Smarty-3.1.9, created on 2013-01-11 13:39:30
         compiled from "C:\wamp\www\Smarty\templates\Admin\Left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3045150f01612c65542-90879791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7749b84f96352e475874a22df9be1ae0bf9fe6c0' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Admin\\Left.tpl',
      1 => 1357831810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3045150f01612c65542-90879791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aboutMenuList' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f01612d90b41_11651389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f01612d90b41_11651389')) {function content_50f01612d90b41_11651389($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript">
			function diss(menu){
			if(document.getElementById(menu).style.display=="block"){
			document.getElementById(menu).style.display='none';
			}
			else if(document.getElementById(menu).style.display=="none"){
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
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aboutMenuList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<div><a href="ContactUs.php?contactID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="right"><?php echo $_smarty_tpl->tpl_vars['item']->value['cnTitle'];?>
</a></div>
			<?php } ?>
		</div>
	</div>
	
	<div class="leftmenulist">
		<div class="leftmenutext"><a href="#" onClick="diss('muss2')"><b>产品管理</b></a></div>
		<div id="muss2" class="leftmenutd" style="display:none;">
			<div><a href="FirstClass.php" target="right">类别管理</a></div>
			<div><a href="AddProduct.php" target="right">产品添加</a></div>
			<div><a href="ManageProducts.php" target="right">产品管理</a></div>
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
<?php }} ?>