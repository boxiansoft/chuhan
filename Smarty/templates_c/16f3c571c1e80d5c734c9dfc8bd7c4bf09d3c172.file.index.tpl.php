<?php /* Smarty version Smarty-3.1.9, created on 2013-01-20 08:47:08
         compiled from "C:\wamp\www\Smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2667950fba7ff8818d2-45245887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f3c571c1e80d5c734c9dfc8bd7c4bf09d3c172' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty\\templates\\index.tpl',
      1 => 1358671596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2667950fba7ff8818d2-45245887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_50fba7ff977411_47996442',
  'variables' => 
  array (
    'arr1' => 0,
    'arr2' => 0,
    'arr3' => 0,
    'arr4' => 0,
    'arr5' => 0,
    'arr6' => 0,
    'dog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fba7ff977411_47996442')) {function content_50fba7ff977411_47996442($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Smarty测试版本</title>
</head>

<body>
</br>******取一维数组******</br>
<?php echo $_smarty_tpl->tpl_vars['arr1']->value[0];?>
||<?php echo $_smarty_tpl->tpl_vars['arr1']->value[1];?>
||<?php echo $_smarty_tpl->tpl_vars['arr1']->value[2];?>

<hr/>
</br>******取一维关联数组******</br>
<?php echo $_smarty_tpl->tpl_vars['arr2']->value['city1'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr2']->value['city2'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr2']->value['city3'];?>

<hr/>
</br>******取二维索引数组******</br>
<?php echo $_smarty_tpl->tpl_vars['arr3']->value[0][0];?>
||<?php echo $_smarty_tpl->tpl_vars['arr3']->value[0][1];?>
||<?php echo $_smarty_tpl->tpl_vars['arr3']->value[0][2];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['arr3']->value[1][0];?>
||<?php echo $_smarty_tpl->tpl_vars['arr3']->value[1][1];?>
||<?php echo $_smarty_tpl->tpl_vars['arr3']->value[1][2];?>

<hr/>
</br>******取二维关联数组******</br>
<?php echo $_smarty_tpl->tpl_vars['arr4']->value[0]['id'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr4']->value[0]['email'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr4']->value[0]['age'];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['arr4']->value[1]['id'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr4']->value[1]['email'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr4']->value[1]['age'];?>

<hr/>
</br>******取二维关联数组******</br>
<?php echo $_smarty_tpl->tpl_vars['arr5']->value['emp1']['id'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr5']->value['emp1']['email'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr5']->value['emp1']['age'];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['arr5']->value['emp2']['id'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr5']->value['emp2']['email'];?>
||<?php echo $_smarty_tpl->tpl_vars['arr5']->value['emp2']['age'];?>

<hr/>
</br>******取二维关联数组******</br>
<?php echo $_smarty_tpl->tpl_vars['arr6']->value['emp1'][0];?>
||<?php echo $_smarty_tpl->tpl_vars['arr6']->value['emp1'][1];?>
||<?php echo $_smarty_tpl->tpl_vars['arr6']->value['emp1'][2];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['arr6']->value['emp2'][0];?>
||<?php echo $_smarty_tpl->tpl_vars['arr6']->value['emp2'][1];?>
||<?php echo $_smarty_tpl->tpl_vars['arr6']->value['emp2'][2];?>

<hr/>
</br>******取对象的值******</br>
<?php echo $_smarty_tpl->tpl_vars['dog']->value->name;?>

</body>
</html>
<?php }} ?>