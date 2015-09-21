<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 08:48:47
         compiled from "C:\wamp\www\Smarty\templates\News.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1405350f018e51e5488-86356885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45995d82b4ea9866a15a6b20c75a8e0df412cede' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\News.tpl',
      1 => 1357980520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405350f018e51e5488-86356885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f018e5333751_20089456',
  'variables' => 
  array (
    'newsClassName' => 0,
    'newsList' => 0,
    'item' => 0,
    'newsPic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f018e5333751_20089456')) {function content_50f018e5333751_20089456($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
			<div class="topmenu2">
				<div class="daohang"><a href="Index.php">首页</a> > 新闻 > <?php echo $_smarty_tpl->tpl_vars['newsClassName']->value;?>
</div>
                <div class="downLoad">
					<div class="downLoadTitle"><span>新闻</span></div>
					<div class="downLoadContent">
						<div class="downLoadTitle2"><span> <?php echo $_smarty_tpl->tpl_vars['newsClassName']->value;?>
</span></div>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<div class="downLoadList"><img src="image/downLoadPic.gif" width="9" height="9" border="0" />&nbsp;&nbsp;<a href="ShowNews.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&classID=<?php echo $_smarty_tpl->tpl_vars['item']->value['newsclass'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['cnTitle'];?>
</a></div>
						<?php } ?>
						<div class="downLoadLine"><span></span></div>
						<!--<div class="newsBottom"><?php echo $_smarty_tpl->tpl_vars['newsPic']->value;?>
</div>-->
					</div>
				</div>
				
				<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Bottom"), 0);?>

			</div>
		</div>
		
	</div>
	
</div>
</body>
</html>
<?php }} ?>