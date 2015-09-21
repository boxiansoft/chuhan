<?php /* Smarty version Smarty-3.1.9, created on 2013-03-17 01:13:05
         compiled from "Common\Left.html" */ ?>
<?php /*%%SmartyHeaderCode:3027451425d53021a91-53705689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808c94d12a07dea420bc779bb741032622da10cb' => 
    array (
      0 => 'Common\\Left.html',
      1 => 1363482783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3027451425d53021a91-53705689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_51425d530281e0_40590307',
  'variables' => 
  array (
    'newsLeft' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51425d530281e0_40590307')) {function content_51425d530281e0_40590307($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\chuhan\\Smarty\\plugins\\modifier.truncate.php';
?><div class="commonLeft">
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
			<li><a href="shownews.php?id=<?php echo $_smarty_tpl->tpl_vars['newsLeft']->value[$_smarty_tpl->getVariable('smarty')->value['section']['leftNews']['index']]['id'];?>
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
</div><?php }} ?>