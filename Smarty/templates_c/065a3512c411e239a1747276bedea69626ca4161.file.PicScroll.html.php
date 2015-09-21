<?php /* Smarty version Smarty-3.1.9, created on 2013-03-25 12:43:19
         compiled from "Common\PicScroll.html" */ ?>
<?php /*%%SmartyHeaderCode:24274514115791910b4-36391767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '065a3512c411e239a1747276bedea69626ca4161' => 
    array (
      0 => 'Common\\PicScroll.html',
      1 => 1364215392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24274514115791910b4-36391767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_5141157919cba9_59744147',
  'variables' => 
  array (
    'productList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141157919cba9_59744147')) {function content_5141157919cba9_59744147($_smarty_tpl) {?><div class="main980 f_n" style="background-image:url(images/bg.png)">
	<div class="indexBottomPic">
		<div id="productshow" style="overflow:hidden;height:160px;width:980px;">
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
" width="176" height="132" border="0" /></li><li><?php echo $_smarty_tpl->tpl_vars['productList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p1']['index']]['title'];?>
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
</div><?php }} ?>