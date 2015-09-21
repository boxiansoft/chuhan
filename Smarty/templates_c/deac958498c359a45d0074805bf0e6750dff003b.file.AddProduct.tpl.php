<?php /* Smarty version Smarty-3.1.9, created on 2013-01-12 03:37:39
         compiled from "C:\wamp\www\Smarty\templates\Admin\AddProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3164250f0169f9c4ef7-61562616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deac958498c359a45d0074805bf0e6750dff003b' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\Admin\\AddProduct.tpl',
      1 => 1357961856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3164250f0169f9c4ef7-61562616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50f0169fc66213_01907135',
  'variables' => 
  array (
    'productID' => 0,
    'productUrl' => 0,
    'productOrder' => 0,
    'newProduct' => 0,
    'npID' => 0,
    'tuijian' => 0,
    'tjID' => 0,
    'classList' => 0,
    'item' => 0,
    'classID' => 0,
    'productPic' => 0,
    'productDetailPic' => 0,
    'editor' => 0,
    'FCKediterValue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f0169fc66213_01907135')) {function content_50f0169fc66213_01907135($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'C:\\wamp\\www\\Smarty\\plugins\\function.html_radios.php';
?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">产品编辑</div></td>
  </tr>
  <tr>
    <td><form name="addFriend" id="addFriend" action="UpdateProduct.php?action=editProduct&productID=<?php echo $_smarty_tpl->tpl_vars['productID']->value;?>
" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr>
        <td height="25"  align="right">产品网址：</td>
        <td><input name="productUrl" type="text" size="60" value="<?php echo $_smarty_tpl->tpl_vars['productUrl']->value;?>
"/></td>
      </tr>
	  <tr>
        <td height="25"  align="right">产品排序：</td>
        <td><input name="productOrder" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['productOrder']->value;?>
"/><font style="color:#FF0000; font-size:12px;">注：默认状态是“1”；</font></td>
      </tr>
	  <tr>
        <td height="25"  align="right">是否新品：</td>
        <td><?php echo smarty_function_html_radios(array('name'=>"npID",'options'=>$_smarty_tpl->tpl_vars['newProduct']->value,'checked'=>$_smarty_tpl->tpl_vars['npID']->value),$_smarty_tpl);?>
</td>
      </tr>
	  <tr>
        <td height="25"  align="right">是否推荐：</td>
        <td><?php echo smarty_function_html_radios(array('name'=>"tuijianID",'options'=>$_smarty_tpl->tpl_vars['tuijian']->value,'checked'=>$_smarty_tpl->tpl_vars['tjID']->value),$_smarty_tpl);?>
</td>
      </tr>
	  <tr>
        <td height="25"  align="right">产品类别：</td>
        <td>
			<select name="classID" style="width:150px;">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['classList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['classID']->value){?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['item']->value['cnClassName'];?>
</option>
			<?php }else{ ?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['cnClassName'];?>
</option>
			<?php }?>
			<?php } ?>
			</select>
		</td>
      </tr>
	  <tr>
        <td height="25"  align="right">产品缩略图：</td>
        <td><input name="productPic" type="text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['productPic']->value;?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;<label style="cursor:hand" onClick="window.open('uploadadv/upimg.htm','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td>
      </tr>
	  <!--<tr>
        <td height="25"  align="right">产品细节图：</td>
        <td><input name="productDetailPic" type="text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['productDetailPic']->value;?>
"/>&nbsp;&nbsp;&nbsp;&nbsp;<label style="cursor:hand" onClick="window.open('upload/upimg.htm','上传图片','height=200,width=400,top=200,left=200')">上传图片</label></td>
      </tr>
	  <tr>
        <td height="25" align="right">产品详情：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['editor']->value;?>
</td><input type="hidden" name="FCKediter" value="<?php echo $_smarty_tpl->tpl_vars['FCKediterValue']->value;?>
" />
      </tr>-->
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td><input name="submit" type="submit" value="立即保存"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
<?php }} ?>