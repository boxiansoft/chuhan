<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 07:50:35
         compiled from "C:\wamp\www\Smarty\templates\Admin\AddAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2139950f115cb586fc9-79246946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9733124e30e7cb2b19e603991619a04d0f72df' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Admin\\AddAdmin.tpl',
      1 => 1357824721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2139950f115cb586fc9-79246946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminID' => 0,
    'adminName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f115cb6373b5_14465069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f115cb6373b5_14465069')) {function content_50f115cb6373b5_14465069($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
<form action="UpdateAdmin.php?action=editer&adminID=<?php echo $_smarty_tpl->tpl_vars['adminID']->value;?>
" method="post" name="updateAdmin">
  <tr>
	<td height="30" background="images/bg_list.gif"><div  style="padding-left:10px; font-weight:bold; color:#FFFFFF">管理员管理</div></td>
  </tr>
  <tr>
	<td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
	  <tr onMouseOut="style.backgroundColor='#ffffff'" bgcolor="#FFFFFF" >
		<td height="25" width="34%" class="td">管理员帐号</td>
		<td width="66%"  class="td"><input name="adminName" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['adminName']->value;?>
"/> 
		* (请勿使用中文!)</td>
	  </tr>
	  <tr onMouseOver="style.backgroundColor='#EEEEEE'" onMouseOut="style.backgroundColor='#ffffff'" bgcolor="#FFFFFF">
		<td width="34%" height="13" class="td">登录密码</td>
		<td class="td"><input name="adminPwd" type="text" size="30"  />
		  *</td>
	  </tr>
	  <tr onMouseOver="style.backgroundColor='#EEEEEE'" onMouseOut="style.backgroundColor='#ffffff'" bgcolor="#FFFFFF">
		<td width="34%" height="12" class="td">确认密码</td>
		<td class="td"><input name="adminPwd2" type="text" size="30"  />
		  * </td>
	  </tr>
	  <tr onMouseOver="style.backgroundColor='#EEEEEE'" onMouseOut="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
		<td height="25" class="td">&nbsp;</td>
		<td class="td"><input type="submit" name="button" id="button" value="提交数据"  class="btn"/></td>
	  </tr>
	</table></td>
  </tr></form>
</table>
</body>
</html>
<?php }} ?>