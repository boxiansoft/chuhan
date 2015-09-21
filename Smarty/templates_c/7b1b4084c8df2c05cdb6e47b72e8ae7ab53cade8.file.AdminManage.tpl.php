<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 07:50:32
         compiled from "C:\wamp\www\Smarty\templates\Admin\AdminManage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2400250f115c8f10944-47316014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b1b4084c8df2c05cdb6e47b72e8ae7ab53cade8' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Admin\\AdminManage.tpl',
      1 => 1357824776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2400250f115c8f10944-47316014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AdminArr' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f115c90e2ac8_33542487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f115c90e2ac8_33542487')) {function content_50f115c90e2ac8_33542487($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title>
<style type="text/css">
<!--
 a{ text-decoration:none;
 color:#000000;}
 a:hover{ text-decoration:underline;}
-->
</style>
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#666666">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">管理员管理</div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>管理员ID</td><td>管理员名称</td><td>最后一次登录时间</td><td>操作</td>
      </tr>	  
	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AdminArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
      <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'" height="30" style="font-size:16px;">
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['admin'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['datatime'];?>
</td>
        <td><a href="AddAdmin.php?AdminID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">修改</a><!--&nbsp;|&nbsp;<a href="UpdateAdmin.php?action=deleteAdmin&adminID={$item.adminID}">删除</a>--></td>
      </tr>	 
	 <?php } ?>
    </table></td>
  </tr>
</table>

</body>
</html>
<?php }} ?>