<?php /* Smarty version Smarty-3.1.9, created on 2013-03-29 14:49:50
         compiled from "C:\wamp\www\chuhan\Smarty\templates\quality.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26718514264a3c55ec2-45775286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93acaa098ab8a2b53f2cac67f117e53bc24e40ba' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\quality.tpl',
      1 => 1364568586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26718514264a3c55ec2-45775286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_514264a3cfaf91_75631907',
  'variables' => 
  array (
    'newsLeft' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514264a3cfaf91_75631907')) {function content_514264a3cfaf91_75631907($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\chuhan\\Smarty\\plugins\\modifier.truncate.php';
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

<div class="main980 f_n"><img src="images/003.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>

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
					<div class="aboutLeftTitle">企业资质</div>
					<div class="aboutRightTitle">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;企业资质</div>
				</div>
				<div class="quality_content">
					<ul>
						<li><img src="images/quality_001.gif" width="200" height="283" border="0" alt="上海楚瀚展览服务有限公司" /></li>
						<li><img src="images/quality_002.gif" width="200" height="283" border="0" alt="上海楚瀚展览服务有限公司" /></li>
						<li><img src="images/quality_003.gif" width="200" height="283" border="0" alt="上海楚瀚展览服务有限公司" /></li>
						<li><img src="images/quality_004.gif" width="200" height="283" border="0" alt="上海楚瀚展览服务有限公司" /></li>
						<li><img src="images/quality_005.gif" width="200" height="129" border="0" alt="上海楚瀚展览服务有限公司" /></li>
						<li><img src="images/quality_006.gif" width="200" height="138" border="0" alt="上海楚瀚展览服务有限公司" /></li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"bottom"), 0);?>

</body>
</html>
<?php }} ?>