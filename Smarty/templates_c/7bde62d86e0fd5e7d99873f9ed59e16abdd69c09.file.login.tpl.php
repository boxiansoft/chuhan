<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 00:53:52
         compiled from "C:\wamp\www\Smarty\templates\Admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3268750f0b42026b615-42839925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bde62d86e0fd5e7d99873f9ed59e16abdd69c09' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Admin\\login.tpl',
      1 => 1357824702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3268750f0b42026b615-42839925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f0b42031bdf8_93154711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f0b42031bdf8_93154711')) {function content_50f0b42031bdf8_93154711($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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