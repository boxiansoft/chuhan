<{config_load file = "Admin.conf"}>
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
    <td height="30"  style="background-image:url(images/bg_list.gif)"><div style="margin-left:10px; font-weight:bold; color:#ffffff; font-size:16px">留言管理</td>
  </tr>
  <tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="5" height="5"></td>
      </tr>
      <tr>
        <td width="2%"></td><td width="15%">留言人</td><td width="15%">留言电话</td><td width="20%">电子邮件</td><td width="15%">添加时间</td><td width="15%">操作</td>
      </tr>
	   <tr><td colspan="6"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
	   	  <{foreach key = key item = item from = $messageList}>
		  <tr onmousemove="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor='#ffffff'">
		  <td align="left"><input name="selectid[]" type="checkbox" id="selectid" value="<{$item.messageID}>"></td>
		  	
			<td><a href="ShowMessage.php?messageID=<{$item.messageID}>"><{$item.messageUserName}></a></td>
			<td><{$item.messageTel}></td>
			<td><{$item.messageEmail}></td>
			<td><{$item.addTime}></td>
			<td><a href="Message.php?action=deleteMessage&messageID=<{$item.messageID}>">删除</a></td>
		 </tr>
		 <{/foreach}>
		 <tr><td colspan="6"><hr width="100%" size="1" color="#CCCCCC"></td></tr>
		
		    <tr><td colspan="6" align="left"><input type="checkbox" name="checkbox2" value="Check All" onClick="allss()">全选 &nbsp;&nbsp;<input type="submit" name="Submit" value="删除选中内容" onClick="return scheck();"></td>
			 <tr>
			 <tr>
				<td colspan="6" bgcolor="#1D74CB" height="30" align="center"><div class="page"><{$page}></div></td>
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
   }>
</script>
</body>
</html>
