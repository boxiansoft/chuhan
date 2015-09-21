<?php /* Smarty version Smarty-3.1.9, created on 2013-01-11 13:39:50
         compiled from "C:\wamp\www\Smarty\templates\Admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1419550f016266ebe18-78820529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68cdca535101c553af78e1be664eb770c996bd71' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Admin\\index.tpl',
      1 => 1357824805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1419550f016266ebe18-78820529',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f016267a6924_50871058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f016267a6924_50871058')) {function content_50f016267a6924_50871058($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title>
</head>

<frameset rows="80,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="top.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset rows="*" cols="200,*" framespacing="0" frameborder="no" border="0">
    <frame src="Left.php" name="leftmenu" id="mainFrame" title="mainFrame" scrolling="yes" />
    <frameset rows="50,*" cols="*" framespacing="0" frameborder="no" border="0">
    <frame src="menu.php" name="topmenu" id="mainFrame" title="mainFrame" />
    <frame src="right.php" name="right" scrolling="yes" noresize="noresize" id="right" title="right" />
  </frameset>
  </frameset>
</frameset><noframes></noframes>
<noframes>
</html>
<?php }} ?>