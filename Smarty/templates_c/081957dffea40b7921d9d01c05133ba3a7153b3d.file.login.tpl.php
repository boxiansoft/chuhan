<?php /* Smarty version Smarty-3.1.9, created on 2013-03-12 12:03:32
         compiled from "C:\wamp\www\chuhan\Smarty\templates\Admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2613513f19558f7fe9-93224569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081957dffea40b7921d9d01c05133ba3a7153b3d' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\Admin\\login.tpl',
      1 => 1363089811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2613513f19558f7fe9-93224569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_513f1955998787_50636586',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f1955998787_50636586')) {function content_513f1955998787_50636586($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title>
<style type="text/css">
<!--
body {
	background-image: url(images/log_bj.png);
	
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>

<body>
<div style=" margin-top:160px;">
<table width="745" height="344" border="0" align="center" background="images/log.png" cellpadding="0" cellspacing="0">
  <tr>
    <td height="307" align="center" valign="middle"><table width="745" height="100" border="0" cellpadding="0" cellspacing="0">
    <form  name="login" method="post" action="passlogin.php">
      <tr>
        <td width="305">&nbsp;</td>
        <td width="156" height="25">
        <input name="adName" type="text" id="adName" size="19" maxlength="20" style="height:18px; margin-top:8px;"/>       
        </td>
        <td width="284">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="25"><input name="adPwd" type="password" id="adPwd" size="20" maxlength="20" style=" height:18px; margin-top:5px;" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="25" valign="bottom"><input name="picCode" type="text" size="7" style=" height:18px; margin-top:5px;" /> <img src="picCode.php?" onClick="this.src+=Math.random()" alt="图片看不清？点击重新得到验证码" style="cursor:hand;" height="20" width="70" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="2">
			  <input type="submit" name="button"  value="提交" style="margin-top:3px;" /> &nbsp;
			  <input type="reset" name="button2"  value="清空" style="margin-top:3px;" />
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left">    
        </div></td>
        <td>&nbsp;</td>
      </tr>
      </form>
    </table></td>

  </tr>
</table></div>
</body>
</html>
<?php }} ?>