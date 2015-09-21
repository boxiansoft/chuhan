<?php /* Smarty version Smarty-3.1.9, created on 2013-01-11 13:39:30
         compiled from "Common\LeftMenu.html" */ ?>
<?php /*%%SmartyHeaderCode:1949550f0161205ff62-83436619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6261f35a3c300d5e7935617bb86f4cb4524c9676' => 
    array (
      0 => 'Common\\LeftMenu.html',
      1 => 1357742859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1949550f0161205ff62-83436619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NewsMenu' => 0,
    'AboutMenu' => 0,
    'adv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f0161217d776_62356075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f0161217d776_62356075')) {function content_50f0161217d776_62356075($_smarty_tpl) {?>
<div class="menuList">
	<div class="menuText" id="menutext1"><a href="#" onClick="diss('muss1')">新闻</a></div>
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
	<div class="menuText" id="menutext2"><a href="#" onClick="diss('muss2')">企业简介</a></div>
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
			<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']<$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['total']-1){?>
				<div class="one"><a href="About.php?id=<?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['cnTitle'];?>
</a></div>
			<?php }else{ ?>
				<div class="two"><a href="About.php?id=<?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['AboutMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['aboutMenu']['index']]['cnTitle'];?>
</a></div>
			<?php }?>
		<?php endfor; endif; ?>
	</div>
</div>

<div class="menuList">
	<div class="menuText3" id="menutext3"><a href="About.php?id=4">联系我们</a></div>
</div>

<div class="login">					
	<div class="index_logo_text3">
	<?php echo $_smarty_tpl->tpl_vars['adv']->value;?>

	</div>
</div>		<?php }} ?>