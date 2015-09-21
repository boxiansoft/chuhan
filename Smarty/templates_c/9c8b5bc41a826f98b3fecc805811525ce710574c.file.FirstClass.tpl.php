<?php /* Smarty version Smarty-3.1.9, created on 2013-03-12 12:09:52
         compiled from "C:\wamp\www\chuhan\Smarty\templates\Admin\FirstClass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6430513f1b1040a333-59950045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c8b5bc41a826f98b3fecc805811525ce710574c' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\Admin\\FirstClass.tpl',
      1 => 1363089905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6430513f1b1040a333-59950045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classID' => 0,
    'classOrder' => 0,
    'cnClassName' => 0,
    'classList' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_513f1b104cd4f2_48398648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f1b104cd4f2_48398648')) {function content_513f1b104cd4f2_48398648($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<div style="margin-top:10px">
	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
	<form action="UpdateProduct.php?action=editFirstClass&classID=<?php echo $_smarty_tpl->tpl_vars['classID']->value;?>
" method="post" name="add">
	  <tr>
		<td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">编辑类别</div></td>
	  </tr>
	  <tr>
		<td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
		  <tr bgcolor="#FFFFFF" >
			<td class="td">
			序号:<input type="text" name="classOrder" size="10" value="<?php echo $_smarty_tpl->tpl_vars['classOrder']->value;?>
"/>
			类名:<input type="text" name="className" size="30" value="<?php echo $_smarty_tpl->tpl_vars['cnClassName']->value;?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="Submit" value=" 保 存 ">
			</td>
		  </tr>
		</table></td>
	  </tr></form>
	</table>
</div>
<div style="margin-top:10px">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666" class="c_c">
  <tr>
    <td height="30" background="images/bg_list.gif"><div style="padding-left:10px;font-weight:bold;color:#FFFFFF">管理类别</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" width="100%"><table width="50%" border="0" align="left" cellpadding="5" cellspacing="0" >
      <tr bgcolor="#FFFFFF" ><td class="td" align="center">序号</td><td class="td">类名</td><td class="td" align="center">操作</td></tr>
	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['classList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	  <tr bgcolor="#FFFFFF" onMouseOver="style.backgroundColor='#EEEEEE'" onMouseOut="style.backgroundColor='#ffffff'" >
	  <td class="td" align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['classOrder'];?>
</td>
	  <td class="td"><?php echo $_smarty_tpl->tpl_vars['item']->value['cnClassName'];?>
</td>
	  <td class="td" align="center">
	  <a href="firstclass.php?action=updateClass&classID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">修改</a> | 
	  <a href="UpdateProduct.php?action=deleteFirstClass&classID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</a></td></tr>	
	  <?php } ?> 
    </table></td>
  </tr>
</table>
</div>
</body>
</html>
<?php }} ?>