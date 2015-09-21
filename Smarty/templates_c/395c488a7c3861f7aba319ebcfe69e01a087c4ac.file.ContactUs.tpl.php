<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 07:45:14
         compiled from "C:\wamp\www\Smarty\templates\Admin\ContactUs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56950f018f9ca9c24-52358506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395c488a7c3861f7aba319ebcfe69e01a087c4ac' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Admin\\ContactUs.tpl',
      1 => 1357976692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56950f018f9ca9c24-52358506',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f018f9d66453_71780653',
  'variables' => 
  array (
    'aboutTitle' => 0,
    'contactID' => 0,
    'aboutPic' => 0,
    'editor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f018f9d66453_71780653')) {function content_50f018f9d66453_71780653($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>

<table width="95%" border="1" cellspacing="0" cellpadding="0" bgcolor="#666666" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px;font-size:16px; font-weight:bold; color:#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['aboutTitle']->value;?>
</div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><form id="addFriend" name="addFriend" action="UpdateSystem.php?action=contactUs&contactID=<?php echo $_smarty_tpl->tpl_vars['contactID']->value;?>
" method="post"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><td colspan="2" height="10"></td></tr>
	  <?php if ($_GET['contactID']<5){?>
	  <tr><td align="right" width="12%">图片：</td><td><input name="productPic" type="text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['aboutPic']->value;?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;<label style="cursor:hand" onClick="window.open('uploadadv/upimg.htm','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td></tr>
	  <?php }?>
	  <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['aboutTitle']->value;?>
：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['editor']->value;?>
</td><input type="hidden" name="FCKediter" value="{$FCKediterValue}"> 
      </tr>
	  <tr><td colspan="2" height="20"></td></tr>
	  <tr>
        <td></td>
        <td class="siteName">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit"  value="立即提交"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset"  value="重新填写"/></td>
      </tr>
    </table></form></td>
  </tr>
</table>

</body>
</html>
<?php }} ?>