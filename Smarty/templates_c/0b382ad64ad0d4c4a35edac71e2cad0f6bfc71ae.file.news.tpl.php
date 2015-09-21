<?php /* Smarty version Smarty-3.1.9, created on 2013-03-29 14:51:21
         compiled from "C:\wamp\www\chuhan\Smarty\templates\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3269851443bd1f00147-18401379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b382ad64ad0d4c4a35edac71e2cad0f6bfc71ae' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\news.tpl',
      1 => 1364568673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3269851443bd1f00147-18401379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_51443bd206aec8_87206289',
  'variables' => 
  array (
    'newsLeft' => 0,
    'newsList' => 0,
    'totalPage' => 0,
    'currentPage' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51443bd206aec8_87206289')) {function content_51443bd206aec8_87206289($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\chuhan\\Smarty\\plugins\\modifier.truncate.php';
?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

<div class="main980 f_n"><img src="images/005.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>

<div class="main980 f_n">
	<div class="indexCenter">
		
		<div class="commonLeft">
			<div class="recomNews">
				<div class="recomNewsTitle">热点新闻</div>
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['name'] = 'leftNews';
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newsLeft']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['leftNews']['total']);
?>
					<li><a href="shownews.php?newsID=<?php echo $_smarty_tpl->tpl_vars['newsLeft']->value[$_smarty_tpl->getVariable('smarty')->value['section']['leftNews']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['newsLeft']->value[$_smarty_tpl->getVariable('smarty')->value['section']['leftNews']['index']]['title'],"22","...");?>
</a></li>
					<?php endfor; endif; ?>
				</ul>
			</div>
			<div class="recomContact">
				<div class="recomContactTitle">联系我们</div>
				<div class="recomContactMemo">
					地址:上海市肇嘉浜路1065号飞雕国际大厦1109室<br/>
					电话:+86-21-31254360<br/>
					传真:+86-21-64230683<br/>
					E-mail:liubin123cn@126.com
				</div>
			</div>
		</div>
		
		<div class="commonRight">
			<div class="about">
				<div class="aboutTitle">
					<div class="aboutLeftTitle">新闻中心</div>
					<div class="aboutRightTitle">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="news.php">新闻中心</a></div>
				</div>
				<div class="newsList">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newsList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
					<ul>
						<li><img src="images/icon.gif" width="10" height="12" border="0" align="absmiddle"/>[<a href="news.php?classID=<?php echo $_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['newsClass'];?>
"><font style="color:#009966"><?php echo $_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['className'];?>
</font></a>]<a href="shownews.php?newsID=<?php echo $_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['title'];?>
</a></li>
						<li><?php echo $_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['addTime'];?>
</li>
					</ul>
					<?php endfor; endif; ?>
				</div>
				
				<?php if ($_smarty_tpl->tpl_vars['totalPage']->value>0){?>
					<div class="page"><span><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"bottom"), 0);?>

</body>
</html>
<?php }} ?>