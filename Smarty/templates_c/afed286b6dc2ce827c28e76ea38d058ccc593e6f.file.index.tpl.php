<?php /* Smarty version Smarty-3.1.9, created on 2014-06-13 10:37:15
         compiled from "D:\wamp\www\chuhan\Smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31118539ad45b0f7480-85708658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afed286b6dc2ce827c28e76ea38d058ccc593e6f' => 
    array (
      0 => 'D:\\wamp\\www\\chuhan\\Smarty\\templates\\index.tpl',
      1 => 1364568389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31118539ad45b0f7480-85708658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about' => 0,
    'newsList' => 0,
    'productList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_539ad45b33fa64_11279549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539ad45b33fa64_11279549')) {function content_539ad45b33fa64_11279549($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\chuhan\\Smarty\\plugins\\modifier.truncate.php';
?><?php  $_config = new Smarty_Internal_Config("Web.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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

<div class="main980 f_n"><img src="images/index.jpg" width="980" height="300" border="0" alt="上海楚瀚展览服务有限公司" /></div>
<div class="main980 f_n">
	<div class="indexCenter">
		<div class="indexLeft">
			<div class="indexAbout ">
				<div class="indexAboutTitle"><span>公司简介</span></div>
				<div class="index_about_content"><img src="images/about.jpg" width="200" height="148" border="0" align="left" alt=""/>
					<?php echo $_smarty_tpl->tpl_vars['about']->value;?>

				</div>
			</div>
		</div>			
		<div class="indexRight">
			<div class="indexRightTitle">新闻资讯</div>
			<ul>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['name'] = 'p1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newsList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class="indexNewsTitle"><a href="shownews.php?id=<?php echo $_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['title'],23,"...");?>
</a></li><li class="indexNewsTime"><?php echo $_smarty_tpl->tpl_vars['newsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['addTime'];?>
</li>
			<?php endfor; endif; ?>
			</ul>
		</div>
	</div>
</div>
<div class="main980 f_n">
	<div class="indexBottomPic">
		<div id="productshow" style="overflow:hidden;height:130px;width:980px;">
			 <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" cellspace="0">
				<tr>
				  <td valign="top" id="productshow1">
				  	<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" cellspace="0">
                  		<tbody>
                    		<tr>
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
					            <td valign="bottom"><ul><li><a href="showexample.php?id=<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['id'];?>
"><img src="upload/<?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['detailPic'];?>
" width="280" height="117" border="0" /></li><li><?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['title'];?>
</li></ul></td>
							<?php endfor; endif; ?>
							</tr>
						</tbody>
					</table>				  	
				 </td>
				 <td id="productshow2" valign="top"></td>
			    </tr>
			</table>
		</div>
		<script type="text/javascript" language="javascript">
			var speedProduct=15;
			scrollltr=true;
			productshow2.innerHTML=productshow1.innerHTML;
			
			function scrollDirection(ltr)
			{
			 scrollltr = ltr;
			}
			
			function MarqueeProduct(){ 
			if(scrollltr)
			 {
				if(productshow2.offsetWidth-productshow.scrollLeft<=0) 
				productshow.scrollLeft-=productshow1.offsetWidth 
				else{ 
					productshow.scrollLeft++ 
				}
			 }
			 else
			 {
				if(productshow.scrollLeft<=0) 
					productshow.scrollLeft+=productshow2.offsetWidth 
				else{ 
					productshow.scrollLeft-- 
				}
			 } 
			
			} 
			var MyMarProduct=setInterval(MarqueeProduct,speedProduct) 
			productshow.onmouseover=function() {clearInterval(MyMarProduct)} 
			productshow.onmouseout=function() {MyMarProduct=setInterval(MarqueeProduct,speedProduct)} 
		</script>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Common/Bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('name'=>"bottom"), 0);?>

</body>
</html>
<?php }} ?>