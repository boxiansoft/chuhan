<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 10:29:49
         compiled from "C:\wamp\www\Smarty\templates\Product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2849750f015c562ed38-36992883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae0c92aa0a6382644fba5db246f7b869b21d012' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Product.tpl',
      1 => 1357986561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2849750f015c562ed38-36992883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f015c58f4048_51335489',
  'variables' => 
  array (
    'smallClass' => 0,
    'arrClass' => 0,
    'productList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f015c58f4048_51335489')) {function content_50f015c58f4048_51335489($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

<script type="text/javascript" language="javascript">

function showSmallMenu(menu)
{
document.getElementById(menu).style.display='block';

//moved()'
}

function trance(url)
{
	window.location.href=url;
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
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Menu2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Menu2"), 0);?>

		</div>
		
		<div class="productRight">
			<div class="topmenuProduct">
				<div class="daohang"><a href="Index.php">首页</a> > 分类展示区</div>
				
					<div class="productClassProduct" id="productClassProduct" >
					    <?php $_smarty_tpl->tpl_vars['arrClass'] = new Smarty_variable('', null, 0);?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['name'] = 'sc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['smallClass']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total']);
?>
							<!--<?php echo ($_smarty_tpl->tpl_vars['arrClass']->value).($_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['cnClassName']);?>
-->
							<?php if ($_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['cnClassName']==$_GET['className']){?>
							<div class="productCurrent" style="width:<?php echo 950/$_smarty_tpl->getVariable('smarty')->value['section']['sc']['total'];?>
px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['cnClassName'];?>
</div>
							<?php }else{ ?>
							<div class="productClass2" style="width:<?php echo 950/$_smarty_tpl->getVariable('smarty')->value['section']['sc']['total'];?>
px; text-align:center"><a href="Product.php?className=<?php echo $_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['cnClassName'];?>
"><?php echo $_smarty_tpl->tpl_vars['smallClass']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['cnClassName'];?>
</a></div>
							<?php }?>
						<?php endfor; endif; ?>
					</div>


					<div style="float:left; width:972px; height:600px;overflow-Y: auto; overflow-X:hidden;">
						<div style="position:absolute; z-index:10;width:972px; height:600px;overflow-Y: auto; overflow-X:hidden; padding-top:20px; padding-bottom:35px;">
							<div class="productProduct" id="product">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['name'] = 'pl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['productList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total']);
?>
								<div class="bigBox" onmousemove="javascript:showSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pl']['index'];?>
')">	
									<div class="smallBox2"><img src="<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['productPic'];?>
" width="152" height="152" border="0" /></div>									
									<div style="position:absolute;" onmousemove="javascript:showSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pl']['index'];?>
')" onmouseout="javascript:hiddenSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pl']['index'];?>
')" >
										<div class="bigBorder" style="position:absolute; display:none;z-index:1000; left:-200px; top:-20px;" id="li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pl']['index'];?>
">
											<a href="<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['productUrl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['productPic'];?>
" width="240" height="240" border="0"/></a>
										</div>										
									</div>								
								</div>
							<?php endfor; endif; ?>						
							</div>
						</div>
					</div>				    
				<div class="productBottomLine"><div class="productClass1"></div></div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"Bottom"), 0);?>

		</div>
	</div>
	
</div>
</body>
</html><?php }} ?>