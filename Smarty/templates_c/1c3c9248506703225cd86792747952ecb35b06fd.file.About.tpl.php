<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 00:37:37
         compiled from "C:\wamp\www\Smarty\templates\About.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166950f01eac315031-39660853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c3c9248506703225cd86792747952ecb35b06fd' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\About.tpl',
      1 => 1357950987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166950f01eac315031-39660853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f01eac41c9a6_84817516',
  'variables' => 
  array (
    'cnTitle' => 0,
    'image' => 0,
    'cnContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f01eac41c9a6_84817516')) {function content_50f01eac41c9a6_84817516($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
<link rel="stylesheet" type="text/css" href="Css/css.css">
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
</head>

<body>
<div class="main1015 f_n">	
	<div class="main984 f_n">
		<div class="left">
			<div class="menu">
				<?php echo $_smarty_tpl->getSubTemplate ("Common/Logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Logo"), 0);?>
	
				<?php echo $_smarty_tpl->getSubTemplate ("Common/LeftMenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"LeftMenu"), 0);?>
	
			</div>
			<div class="menuRight"></div>	
		</div>
		
		<div class="rightTop">
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Menu"), 0);?>
		
		</div>
		
		<div class="right">
			<div class="topmenuCompany">
				<div class="daohang"><a href="Index.php">首页</a> ><?php if ($_GET['id']<4){?> 企业简介 ><?php }?> <?php echo $_smarty_tpl->tpl_vars['cnTitle']->value;?>
</div>
                <div class="profile">
					<?php if ($_GET['id']<4){?>
					<div class="profileLeft">
						<div class="profileTitle"><?php echo $_smarty_tpl->tpl_vars['cnTitle']->value;?>
</div>
						<div class="profileContent"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" border="0" style="float:right; padding-top:5px; padding-left:5px"/><span><?php echo $_smarty_tpl->tpl_vars['cnContent']->value;?>
</span></div>
					</div>
					<?php }else{ ?>
					<div class="profileLeft2">
						<div class="profileTitle2"><?php echo $_smarty_tpl->tpl_vars['cnTitle']->value;?>
</div>
						<div class="profileContent2"><?php echo $_smarty_tpl->tpl_vars['cnContent']->value;?>
</div>
					</div>
					<div class="profileRight"><img  src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" border="0" align="absmiddle"/></div>
					<?php }?>
				</div>
			</div>
				
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Bottom"), 0);?>

		</div>		
	</div>
</div>
</body>
</html>
<?php }} ?>