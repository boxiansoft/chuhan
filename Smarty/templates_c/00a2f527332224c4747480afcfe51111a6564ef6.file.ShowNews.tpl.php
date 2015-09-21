<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 08:52:35
         compiled from "C:\wamp\www\Smarty\templates\ShowNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1736150f01973e883c4-96508905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00a2f527332224c4747480afcfe51111a6564ef6' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\ShowNews.tpl',
      1 => 1357980753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1736150f01973e883c4-96508905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f019741f4525_87428948',
  'variables' => 
  array (
    'firstClassName' => 0,
    'smallClass' => 0,
    'newsClassName' => 0,
    'NewsMenu' => 0,
    'AboutMenu' => 0,
    'adv' => 0,
    'cnTitle' => 0,
    'addTime' => 0,
    'cnNewsContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f019741f4525_87428948')) {function content_50f019741f4525_87428948($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
	if(document.getElementById(menu).style.display=="block"){
	document.getElementById(menu).style.display='none';
	document.getElementById(menutext).className='menuText';
	}
	else if(document.getElementById(menu).style.display=="none"){
	document.getElementById(menu).style.display='block';
	document.getElementById(menutext).className='menuText2';
	}
}
</script>

</head>

<body>
<div class="main1015 f_n">
	<div class="main984 f_n">
		<div class="leftNews">
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Logo"), 0);?>
	
		</div>	
		<div class="rightNewsTop">
			<div class="rightTop3" style="padding-top:13px;">
				<div class="topMenu1"><a href="New.php">新品展示区</a></div>
				<div class="topMenu" onmouseover="javascript:showSmallMenu('smallMenuOne')" onmouseout="javascript:hiddenSmallMenu('smallMenuOne')"><a href="Product.php?className=<?php echo $_smarty_tpl->tpl_vars['firstClassName']->value;?>
">分类展示区</a></div>
				<div class="topWelcome">欢迎光临【枫时代】</div>
				<div class="top">
					<div class="searchLeft"><!--<a href="../Index.php"><font style="font-family:Verdana, Arial, Helvetica, sans-serif">English</font></a> | 中文--></div>
					<div class="searchRight">
						<form method="post">
						<span class="search_input"><input name="title" type="text" value="搜索" onclick="this.value='';" onblur="if this.value='' this.value='搜索'" class="searchInput"/>
						<input name="submit" type="submit" value="" class="searchButton"/></span>
						</form>
					</div>
				</div>		
				<!--<div class="topSmallMenuShowNews"  id="smallMenuOne" style="display:none;" onmousemove="javascript:showSmallMenu('smallMenuOne')" onmouseout="javascript:hiddenSmallMenu('smallMenuOne')">
				<div class="topSmallMenuBg" onmousemove="javascript:showSmallMenu('smallMenuOne')" onmouseout="javascript:hiddenSmallMenu('smallMenuOne')">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sml'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sml']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['name'] = 'sml';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['smallClass']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sml']['total']);
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['sml']['index']<$_smarty_tpl->getVariable('smarty')->value['section']['sml']['total']-1){?>
							<li class="smallMenuList"><a href="Product.php?className=<?php echo $_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sml']['index']]['cnClassName'];?>
"><?php echo $_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sml']['index']]['cnClassName'];?>
</a></li>
						<?php }else{ ?>
							<li class="smallMenuList2"><a href="Product.php?className=<?php echo $_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sml']['index']]['cnClassName'];?>
"><?php echo $_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sml']['index']]['cnClassName'];?>
</a></li>
						<?php }?>
					<?php endfor; endif; ?>
				</div>
			</div>		-->
			 </div>
					
		</div>
		
		<div class="showNewsDaoHang1">
			<div class="showNewsDaoHang">
			<div class="daohangnews"><a href="Index.php">首页</a> > 新闻 > <?php echo $_smarty_tpl->tpl_vars['newsClassName']->value;?>
</div>
			</div>
		</div>
		<div style="float:left; width:981px; padding-left:3px;">
			<div style="float:left; width:981px; background-image:url(image/showNewsBG.gif);">
				<div class="menuShow">		
					<div class="menuList">
						<div class="menuText" id="menutext1"><a href="#" onClick="diss('muss1','menutext1')">新闻</a></div>
						<div id="muss1" class="menuTd" style="display:block">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['name'] = 'newsMenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NewsMenu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['newsMenu']['total']);
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['newsMenu']['index']<$_smarty_tpl->getVariable('smarty')->value['section']['newsMenu']['total']-1){?>
									<div class="one"><a href="News.php?classID=<?php echo $_smarty_tpl->tpl_vars['NewsMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsMenu']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['NewsMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsMenu']['index']]['cnClassName'];?>
</a></div>
								<?php }else{ ?>
									<div class="two"><a href="News.php?classID=<?php echo $_smarty_tpl->tpl_vars['NewsMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsMenu']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['NewsMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['newsMenu']['index']]['cnClassName'];?>
</a></div>
								<?php }?>			
							<?php endfor; endif; ?>
						</div>
					</div>
					
					<div class="menuList">
						<div class="menuText" id="menutext2"><a href="#" onClick="diss('muss2','menutext2')">企业简介</a></div>
						<div id="muss2" class="menuTd" style="display:block">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['name'] = 'aboutMenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['AboutMenu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aboutMenu']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['id']<4){?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']<$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['total']-1){?>
										<div class="one"><a href="About.php?id=<?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['cnTitle'];?>
</a></div>
									<?php }else{ ?>
										<div class="two"><a href="About.php?id=<?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['cnTitle'];?>
</a></div>
									<?php }?>
								<?php }?>
							<?php endfor; endif; ?>
						</div>
					</div>
					
					<div class="menuList">
						<div class="menuText3" id="menutext3"><a href="About.php?id=4">联系我们</a></div>
					</div>
					
					<!--<div class="menuList">
						<div class="menuText3" id="menutext5"><a href="Question.php" >在线咨询</a></div>
					</div>-->
					
					<div class="login">					
						<div class="index_logo_text3">
						<?php echo $_smarty_tpl->tpl_vars['adv']->value;?>

						</div>
					</div>		
				</div>
				
				<div class="rightShow">				
				<div class="topmenuShow" style="padding-left:15px;">
					
					<div class="downLoad">
						<div class="downLoadTitle"><span>新闻</span></div>
						<div class="downLoadTitle2"><span><?php echo $_smarty_tpl->tpl_vars['newsClassName']->value;?>
</span></div>
						<div class="showNewsBigTitle"><div class="leftTitle"><?php echo $_smarty_tpl->tpl_vars['cnTitle']->value;?>
</div><div class="addTime"><?php echo $_smarty_tpl->tpl_vars['addTime']->value;?>
</div></div>
						<div class="showNewsContent">
						<?php echo $_smarty_tpl->tpl_vars['cnNewsContent']->value;?>

						</div>
					</div>
					
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Bottom"), 0);?>

			</div>	
			</div>
		</div>
		
	</div>
</div>


</body>
</html>
<?php }} ?>