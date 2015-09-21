<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 07:21:32
         compiled from "C:\wamp\www\Smarty\templates\New.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1110850f015c83552c8-57005779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f1efeff75db4b4fd9720a702dcbb3f678701234' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\New.tpl',
      1 => 1357975290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110850f015c83552c8-57005779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f015c84d23a5_61882857',
  'variables' => 
  array (
    'newProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f015c84d23a5_61882857')) {function content_50f015c84d23a5_61882857($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
//moved();
}

function hiddenSmallMenu(menu)
{
document.getElementById(menu).style.display='none';
//init(menu);
}

</script>
</head>

<body>
<div class="main1015 f_n">
	<div class="main984 f_n">
		<div class="leftProduct">
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Logo"), 0);?>
	
		</div>
		<div class="rightTop">
			<div class="rightTopProduct">
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Menu"), 0);?>
		
			</div>
		</div>
		
		<div class="productRight">
			<div class="topmenuProduct">
				<div class="daohang"><a href="Index.php">首页</a> > 新品展示区</div>
					<div style="float:left; width:980px;">
						<div style="position:absolute; z-index:10;width:975px; height:600px;overflow-Y: auto; overflow-X:hidden; padding-top:20px; padding-bottom:35px;">						
							<div class="productProduct">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['np'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['np']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['name'] = 'np';
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newProduct']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['np']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['np']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['np']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['np']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['np']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['np']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['np']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['np']['total']);
?>								
								<div class="bigBox" onmousemove="javascript:showSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['np']['index'];?>
')" >							
									<div class="smallBox2"><a href="<?php echo $_smarty_tpl->tpl_vars['newProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['np']['index']]['productUrl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['newProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['np']['index']]['productPic'];?>
" width="152" height="152" border="0" /></a></div>
									
									<div style="float:left; position:relative;" onmousemove="javascript:showSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['np']['index'];?>
')" onmouseout="javascript:hiddenSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['np']['index'];?>
')">
										<div class="bigBorder" style="position:absolute; display:none;z-index:1000; left:-200px; top:-20px;" id="li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['np']['index'];?>
">
											<a href="<?php echo $_smarty_tpl->tpl_vars['newProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['np']['index']]['productUrl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['newProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['np']['index']]['productPic'];?>
" width="240" height="240" border="0"/></a>
										</div>										
									</div>
								
								</div>
								<?php endfor; endif; ?>	
							</div>	
						</div>
					</div>			
				</div>
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Bottom"), 0);?>

		</div>
		
	</div>
	
</div>

</body>
</html>
<?php }} ?>