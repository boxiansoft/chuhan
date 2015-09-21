<?php /* Smarty version Smarty-3.1.9, created on 2013-03-20 04:06:53
         compiled from "C:\wamp\www\chuhan\Smarty\templates\showexample.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87465145296eaee4d0-96301006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db55e0fd6e07be1b4579cb054ef922c4d1687512' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\showexample.tpl',
      1 => 1363752353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87465145296eaee4d0-96301006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_5145296eba36e1_53325753',
  'variables' => 
  array (
    'exampleName' => 0,
    'productUrl' => 0,
    'productPic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5145296eba36e1_53325753')) {function content_5145296eba36e1_53325753($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content="<?php echo $_smarty_tpl->getConfigVariable('keywords');?>
" />
<meta http-equiv="description" content="<?php echo $_smarty_tpl->getConfigVariable('description');?>
" />
<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title>
<link media="screen" href="css/index.css" type="text/css" rel="stylesheet">
<script src="js/nav.js" type="text/javascript"></script>
<script src="js/Common.js" type="text/javascript"></script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("Common/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"menu"), 0);?>

<div class="main980 f_n"><img src="images/001.png" width="980" height="280" border="0" alt="上海楚瀚展览服务有限公司" /></div>

<div class="main980 f_n">
	<div class="indexCenter">
		<div class="productTitle">
			<div class="productTitleLeft">案例展示</div>
			<div class="productTitleRight">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="example.php">案例展示</a>&nbsp;>&nbsp;<?php echo $_smarty_tpl->tpl_vars['exampleName']->value;?>
</div>
		</div>
		
		<div class="example">
			<a href="<?php echo $_smarty_tpl->tpl_vars['productUrl']->value;?>
"><img src="upload/<?php echo $_smarty_tpl->tpl_vars['productPic']->value;?>
" width="800" height="585" border="0" alt="上海楚瀚——<?php echo $_smarty_tpl->tpl_vars['exampleName']->value;?>
" /></a>
		</div>
		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"bottom"), 0);?>

</body>
</html>
<?php }} ?>