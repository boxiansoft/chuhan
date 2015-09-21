<?php /* Smarty version Smarty-3.1.9, created on 2013-03-16 13:41:55
         compiled from "C:\wamp\www\chuhan\Smarty\templates\Admin\ManageProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21342513f1b12d9e573-06400037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29112fb3d6056192eeeeec7257ac519214be06b' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\Admin\\ManageProducts.tpl',
      1 => 1363441241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21342513f1b12d9e573-06400037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_513f1b12eac441_07273097',
  'variables' => 
  array (
    'classList' => 0,
    'item' => 0,
    'productList' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f1b12eac441_07273097')) {function content_513f1b12eac441_07273097($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<form id="form" name="form" action="?action=allDel" method="post">
<table width="95%" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="30"  style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">案例管理中心</div></td>
	<!--<td style="background-image:url(images/bg_list.gif)"> 	
		<span style="float:left; padding-left:10px; "><a href="?hdp=1"><font style="color:#FFFFFF">已推荐</font></a></span>
	</td>
	<td style="background-image:url(images/bg_list.gif)"> 
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['classList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<span style="float:left; padding-left:10px;color:#FFFFFF;font-size:14px; "><a href="?classID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><font style="color:#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['item']->value['cnClassName'];?>
</font></a>|</span>	
	<?php } ?>
	</td>-->
	
  </tr>
  <tr>
    <td align="center" colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="8" height="5"></td>
      </tr>
      <tr>
        <td width="2%"></td><td width="10%">缩略图</td><!--<td width="10%">产品类别</td>--><td width="10%">案例排序</td><!--<td width="10%">是否新品</td><td width="10%">是否推荐</td>--><td width="15%">添加时间</td><td width="15%">操作</td>
      </tr>
	   <tr><td colspan="8"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
	   	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
		  <td align="left"><input name="selectid[]" type="checkbox" id="selectid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>		  	
			<td height="50"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['productUrl'];?>
" target="_blank"><img src="../upload/<?php echo $_smarty_tpl->tpl_vars['item']->value['detailPic'];?>
" width="100" height="73" border="0" /></a></td>
			<!--<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cnClassName'];?>
</td>-->
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['paixu'];?>
</td>
			<!--<td><?php echo $_smarty_tpl->tpl_vars['item']->value['new'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['tuijian'];?>
</td>-->
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['addTime'];?>
</td>
			<td><a href="AddProduct.php?productID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">修改</a>&nbsp;|&nbsp;<a href="UpdateProduct.php?action=deleteProduct&productID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</a></td>
		 </tr>
		 <?php } ?>
		 <tr><td colspan="8"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
		
		    <tr><td colspan="8" align="left"><input type="checkbox" name="checkbox2" value="Check All" onClick="allss()">全选 &nbsp;&nbsp;<input type="submit" name="Submit" value="删除选中内容" onClick="return scheck();"></td>
			 <tr>
			 <tr>
				<td colspan="8" bgcolor="#1D74CB" height="30" align="center"><div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></td>
			  </tr>
    </table></td>
  </tr>
</table>
</form>
<script language="javascript">
function scheck()
{
  if(!confirm('确认进行该操作吗？')) return false;
}

function allss()
{
   var abc = document.form.getElementsByTagName("input");
   if(abc[1].checked == true){
   for (var i=0; i<abc.length; i++)
      if (abc[i].type == "checkbox") abc[i].checked = false;
   }
   else
   {
   for (var i=0; i<abc.length; i++)
      if (abc[i].type == "checkbox") abc[i].checked = true;
   }}
</script>
</body>
</html>
<?php }} ?>