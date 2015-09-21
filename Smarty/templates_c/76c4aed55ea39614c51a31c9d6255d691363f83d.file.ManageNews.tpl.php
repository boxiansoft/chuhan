<?php /* Smarty version Smarty-3.1.9, created on 2013-03-17 00:29:47
         compiled from "C:\wamp\www\chuhan\Smarty\templates\Admin\ManageNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27450513f1bbca79499-20970760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76c4aed55ea39614c51a31c9d6255d691363f83d' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\Admin\\ManageNews.tpl',
      1 => 1363480183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27450513f1bbca79499-20970760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_513f1bbcb56337_95965948',
  'variables' => 
  array (
    'newsArr' => 0,
    'item' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f1bbcb56337_95965948')) {function content_513f1bbcb56337_95965948($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
    <td height="30"  style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">新闻管理中心</td>
  </tr>
  <tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="5" height="5"></td>
      </tr>
      <tr>
        <td width="2%"></td><td width="60%">新闻标题</td><td width="10%">新闻类别</td><td width="15%">添加时间</td><td width="15%">操作</td>
      </tr>
	   <tr><td colspan="5"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
	   	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newsArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
		  <td align="left"><input name="selectid[]" type="checkbox" id="selectid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></td>
		  	
			<td height="30"><a href="../shownews.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&classID=<?php echo $_smarty_tpl->tpl_vars['item']->value['newsClass'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['className'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['addTime'];?>
</td>
			<td><a href="AddNews.php?newsID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">修改</a>&nbsp;|&nbsp;<a href="UpdateNews.php?action=deleteNews&newsID=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</a></td>
		 </tr>
		 <?php } ?>
		 <tr><td colspan="5"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
		
		    <tr><td colspan="4" align="left"><input type="checkbox" name="checkbox2" value="Check All" onClick="allss()">全选 &nbsp;&nbsp;<input type="submit" name="Submit" value="删除选中内容" onClick="return scheck();"></td>
			 <tr>
			 <tr>
				<td colspan="5" bgcolor="#1D74CB" height="30" align="center"><div class="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
   }
}
</script>
</body>
</html>
<?php }} ?>