<?php /* Smarty version Smarty-3.1.9, created on 2013-03-12 12:05:19
         compiled from "C:\wamp\www\chuhan\Smarty\templates\Admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28997513f19ffec8533-91577397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '038a601ba7ca9efe58db51bc95c66e2d21e28936' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\Admin\\index.tpl',
      1 => 1363089841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28997513f19ffec8533-91577397',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_513f1a00008371_36340305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f1a00008371_36340305')) {function content_513f1a00008371_36340305($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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