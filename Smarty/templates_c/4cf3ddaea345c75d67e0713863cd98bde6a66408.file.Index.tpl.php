<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 00:37:39
         compiled from "C:\wamp\www\Smarty\templates\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3248650f01611e37382-64755226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cf3ddaea345c75d67e0713863cd98bde6a66408' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Index.tpl',
      1 => 1357951012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3248650f01611e37382-64755226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f01611f32c21_31965106',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f01611f32c21_31965106')) {function content_50f01611f32c21_31965106($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
<link rel="stylesheet" type="text/css" href="Css/css.css" />
<link rel="stylesheet" type="text/css" href="Css/lrtk.css" />
<script type="text/javascript" src="Js/jquery.js"></script>
<script type="text/javascript" src="Js/slide.js"></script>
<script type="text/javascript">
function showSmallMenu(menu)
{
	document.getElementById(menu).style.display='block';
}

function hiddenSmallMenu(menu)
{
	document.getElementById(menu).style.display='none';
}

function diss(menu,menutext){
	if(document.getElementById(menu).style.display=="block")
	{
		document.getElementById(menu).style.display='none';
		document.getElementById(menutext).className='menuText';
	}
	else if(document.getElementById(menu).style.display=="none")
	{
		document.getElementById(menu).style.display='block';
		document.getElementById(menutext).className='menuText2';
	}
}
</script>

<style type="text/css">
<!--
#demo {
background: #FFF;
overflow:hidden;
width: 790px;
height:60px;
}
#demo img {
border: 1px solid #F2F2F2;
}
#indemo {
float: left;
width: 400%;
}
#demo1 {
float: left;
}
#demo2 {
float: left;
}
-->
</style>
</head>

<body onload="opener.location.reload()"> 
<div class="main1015 f_n">	
	<div class="main984 f_n">
		<div class="left">
			<div class="menuIndex">
				<?php echo $_smarty_tpl->getSubTemplate ("Common/Logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Logo"), 0);?>
	
				<?php echo $_smarty_tpl->getSubTemplate ("Common/LeftMenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"LeftMenu"), 0);?>
	
			</div>
			<div class="menuRightIndex"></div>	
		</div>
		
		<div class="rightTop">
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Menu"), 0);?>
		
		</div>
		
		<div class="right">
			<div class="topmenuIndex">
				<?php echo $_smarty_tpl->getSubTemplate ("Common/Flash.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Flash"), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Bottom"), 0);?>

				<div style="float:left; width:800px; height:39px; background-color:#FFFFFF"></div>
			</div>				
		</div>		
	</div>
	
</div>
</body>
</html>
<?php }} ?>