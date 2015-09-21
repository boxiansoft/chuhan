<?php /* Smarty version Smarty-3.1.9, created on 2014-06-25 13:23:16
         compiled from "D:\wamp\www\chuhan\Smarty\templates\example.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671653aacd447f0807-33965671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aaa6668534d2750c5bd340d144432980b484666' => 
    array (
      0 => 'D:\\wamp\\www\\chuhan\\Smarty\\templates\\example.tpl',
      1 => 1364568534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671653aacd447f0807-33965671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productList' => 0,
    'totalPage' => 0,
    'currentPage' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_53aacd449962e2_48192686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53aacd449962e2_48192686')) {function content_53aacd449962e2_48192686($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
<script type="text/javascript" language="javascript">

function showSmallMenu(menu)
{
	document.getElementById(menu).style.display='block';
}

function hiddenSmallMenu(menu)
{
	document.getElementById(menu).style.display='none';
}

</script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("Common/Menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"menu"), 0);?>

<div class="main980 f_n"><img src="images/002.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>

<div class="main980 f_n">
	<div class="indexCenter">
		<div class="productTitle">
			<div class="productTitleLeft">案例展示</div>
			<div class="productTitleRight">您现在的位置：<a href="/">首页</a>&nbsp;>&nbsp;案例展示</div>
		</div>
		
		<div style="float:left; width:980px;height:480px; overflow-Y: auto; overflow-x:hidden;">
			<div style="position:absolute; z-index:10;width:980px; overflow-Y: auto; overflow-x:hidden; padding-top:20px; padding-bottom:35px;">
				<div class="productProduct" id="product">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['name'] = 'p1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['productList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['total']);
?>
					<div class="bigBox" onmousemove="javascript:showSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p1']['index'];?>
')"  onmouseout="javascript:hiddenSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p1']['index'];?>
')" >	
						<div class="smallBox"><img src="upload/<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['detailPic'];?>
" width="280" height="117" border="0" /></div>									
						<div style="position:relative;" onmousemove="javascript:showSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p1']['index'];?>
')" onmouseout="javascript:hiddenSmallMenu('li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p1']['index'];?>
')" >
							<div class="bigBorder" style="position:absolute; display:none;z-index:1000; left:-40px; top:-15px;" id="li<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p1']['index'];?>
">
								<a href="showexample.php?id=<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['id'];?>
"><img src="upload/<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['detailPic'];?>
" width="360" height="150" border="0"/></a>
							</div>										
						</div>								
					</div>
				<?php endfor; endif; ?>
						
				</div>
			</div>
		</div>	
		
		<?php if ($_smarty_tpl->tpl_vars['totalPage']->value>0){?>
			<div class="page"><span><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
		<?php }?>
		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"bottom"), 0);?>

</body>
</html>
<?php }} ?>