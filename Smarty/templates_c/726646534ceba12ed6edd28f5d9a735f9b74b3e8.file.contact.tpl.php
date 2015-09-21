<?php /* Smarty version Smarty-3.1.9, created on 2013-03-29 14:51:55
         compiled from "C:\wamp\www\chuhan\Smarty\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3880514451f1d1b546-42961682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726646534ceba12ed6edd28f5d9a735f9b74b3e8' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\contact.tpl',
      1 => 1364568713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3880514451f1d1b546-42961682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_514451f1dd0be0_99450555',
  'variables' => 
  array (
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514451f1dd0be0_99450555')) {function content_514451f1dd0be0_99450555($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

<div class="main980 f_n"><img src="images/006.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>

<div class="main980 f_n">
	<div class="indexCenter">
		<div class="productTitle">
			<div class="productTitleLeft">联系我们</div>
			<div class="productTitleRight">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;联系我们</div>
		</div>
		<div class="contactDetail">
			<div class="contactLeft">
				<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

			</div>
			<div class="contactRight">
				<iframe width="510" height="450" src="Common/Map.html" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"bottom"), 0);?>

</body>
</html>
<?php }} ?>