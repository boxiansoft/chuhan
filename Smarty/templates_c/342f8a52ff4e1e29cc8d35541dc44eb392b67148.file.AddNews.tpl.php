<?php /* Smarty version Smarty-3.1.9, created on 2013-03-17 00:31:51
         compiled from "C:\wamp\www\chuhan\Smarty\templates\Admin\AddNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197425144644c2732f2-60468875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342f8a52ff4e1e29cc8d35541dc44eb392b67148' => 
    array (
      0 => 'C:\\wamp\\www\\chuhan\\Smarty\\templates\\Admin\\AddNews.tpl',
      1 => 1363480286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197425144644c2732f2-60468875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_5144644c3ca933_31429654',
  'variables' => 
  array (
    'newsID' => 0,
    'newsTitle' => 0,
    'classList' => 0,
    'item' => 0,
    'newsClass' => 0,
    'newsOrder' => 0,
    'newsKeyWords' => 0,
    'newsDescription' => 0,
    'editor' => 0,
    'FCKediterValue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5144644c3ca933_31429654')) {function content_5144644c3ca933_31429654($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("Admin.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
    <td height="30" style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">新闻编辑</div></td>
  </tr>
  <tr>
    <td><form name="addFriend" id="addFriend" action="UpdateNews.php?action=editerNews&newsID=<?php echo $_smarty_tpl->tpl_vars['newsID']->value;?>
" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0"  align="center" style="border:1px solid #CCCCCC">
	  <tr><td height="5" colspan="2"></td></tr>
      <tr>
        <td height="25" width="15%" align="right">新闻名称：</td>
        <td><input name="newsTitle" type="text" size="80" value="<?php echo $_smarty_tpl->tpl_vars['newsTitle']->value;?>
"/></td>
      </tr>
	  <tr>
        <td height="25"  align="right">新闻类别：</td>
        <td>
			<select name="newsClass" style="width:150px;">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['classList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['newsClass']->value){?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['item']->value['className'];?>
</option>
			<?php }else{ ?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['className'];?>
</option>
			<?php }?>
			<?php } ?>
			</select>
		</td>
      </tr>
	  <tr>
        <td height="25"  align="right">新闻排序：</td>
        <td><input name="newsOrder" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['newsOrder']->value;?>
"/><font style="color:#FF0000; font-size:12px;">注：默认状态是“1”；</font></td>
      </tr>
	  <!--<tr>
        <td height="25"  align="right">新闻关键字：</td>
        <td><input name="newsKeyWords" type="text" size="100" value="<?php echo $_smarty_tpl->tpl_vars['newsKeyWords']->value;?>
"/></td>
      </tr>
	  <tr>
        <td height="25"  align="right">新闻描述：</td>
        <td><textarea name="newsDescription" cols="100" rows="6"><?php echo $_smarty_tpl->tpl_vars['newsDescription']->value;?>
</textarea></td>
      </tr>-->
	  <tr>
        <td height="25" align="right">新闻详情：</td>
        <td><?php echo $_smarty_tpl->tpl_vars['editor']->value;?>
</td><input type="hidden" name="FCKediter" value="<?php echo $_smarty_tpl->tpl_vars['FCKediterValue']->value;?>
" />
      </tr>
	  <tr><td height="5" colspan="2"></td></tr>
	  <tr><td height="25"></td><td align="center"><input name="submit" type="submit" value="立即保存"/>&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="reset" value="重新填写"/></td></tr>
    </table></form></td>
  </tr>
</table>
</body>
</html>
<?php }} ?>